<?php

namespace App\Http\Controllers\frontend;
use App\Models\ProductsModel;
use App\Models\ContactModel;

use App\Models\ImageModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
class ProductsController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend/home.index');
    }
    public function individual($id)
    {
        // $aProduct = ProductsModel::where('id', '=', $id)->get();
        $aProduct = DB::select('   SELECT p.*, MIN(i.image) image,u.name user_name, u.last_name last_name
        FROM products p
        LEFT JOIN images i ON p.id = i.product_id
        LEFT JOIN users u ON p.user_id = u.id
        where i.deleted_at is null
        and i.main_image = 1
        and p.deleted_at is  null
        and p.visible = 1
        and p.id = "'.$id.'"
 
        GROUP BY p.id
        ');
        $aImages = ImageModel::select('images.*')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('product_id','=',$id)
        ->whereNull('images.deleted_at')
        ->get();
        return view('frontend/product.index',compact('aProduct','aImages'));
    }
    public function contact($id)
    {
        $client = Auth::user()->id;

        $data=array('interested_id' => $client,'product_id' => $id);
        ContactModel::insert($data);

            
        
        return redirect()->back();
    }
}
