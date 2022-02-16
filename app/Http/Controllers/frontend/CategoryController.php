<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ImageModel;
use App\Models\ProductsModel;
use App\Models\CartModel;
use Illuminate\Http\Request;
use Auth;
use DB;
class CategoryController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        
        $aProducts = DB::select('   SELECT p.*, MIN(i.image) image
        FROM products p
        LEFT JOIN images i ON p.id = i.product_id
        where i.deleted_at is null
        and i.main_image = 1
        and p.deleted_at is  null
        and p.visible = 1
        and p.category_id = "'.$id.'"
 
        GROUP BY p.id
        ');
        // $aProducts = ProductsModel::select('images.*,products.*')
        // ->leftjoin('products','products.id','=','images.product_id')
        // ->where('images.main_image','=','1')
        // ->whereNull('images.deleted_at')
        // ->get();
        $aImages = ImageModel::select('images.*')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('main_image','=','1')
        ->get();    
        return view('frontend/category.index',compact('aProducts','aImages'));
    }
    public function changeProductQuantity(Request $request)
    {
            $user=Auth::user()->id;
            $aReturn = array();
            $oCart = CartModel::where('user_id','=',$user)->where('product_id','=',$request['product_id'])->first();

            if($oCart->quantity != $request['quantity'])
            {
                    $aReturn['price'] = $request['price'];
                    $aReturn['change'] = (intval($request['quantity']) - intval($oCart->quantity) );
                    $aReturn['product_id'] =  $request['product_id'];
                    $oCart->quantity = $request['quantity'];
                    $oCart->save();
            }
            else{
                    $aReturn['change'] = 0;
            }

            echo json_encode($aReturn);
    }

    public function carritoAction(Request $request,$id){

        $user=Auth::user()->id;
        $quantity = $request['quantity'];
        $CartRecord = CartModel::where('user_id','=',$user)
        ->where('product_id','=',$id)
        ->first();
        
        
        if(empty($CartRecord))
        {
                
                DB::insert('insert into carrito (product_id, user_id,status,quantity) values ("'.$id.'", "'.$user.'",1,"'.$quantity.'")');
                
        }
        else{
                
                CartModel::where('user_id','=',$user)->where('product_id','=',$id)->forceDelete();
        }
        

        return back()->withInput();
}


}
