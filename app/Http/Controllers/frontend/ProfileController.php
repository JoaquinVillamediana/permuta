<?php

namespace App\Http\Controllers\frontend;
// use App\Models\ProductsModel;
use Auth;
use DB; 
use App\Models\ProductsModel;
use App\Models\ImageModel;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    
    {
        $products = DB::table('products')->count();
        // $ProductsAll = ProductsModel

        $aProducts = ProductsModel::select('products.*')
        ->whereNull('products.deleted_at')
        ->get();
        $aImages = ImageModel::select('images.*')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('main_image','=','1')
        ->get();
        return view('frontend/profile.index',compact('products','aProducts','aImages'));

    }
    public function user_profile($id)
    
    {
        // $aUsers = User::where('id',$id)->first(); 

        $aUsers = DB::select('   SELECT * from users
        where id = "'.$id.'"
 
        
        ');
        $products = DB::table('products')->count();
        // $ProductsAll = ProductsModel

        $aProducts = ProductsModel::select('products.*')
        ->whereNull('products.deleted_at')
        ->where('user_id','=',$id)
        ->get();
        $aImages = ImageModel::select('images.*')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('main_image','=','1')
        ->get();
        return view('frontend/profile.user_profile',compact('products','aProducts','aImages','aUsers'));

    }
    public function edit_profile()
    
    {
   
        return view('frontend/profile.edit');

    }
    public function store(Request $request) {
        
        $oUsersProfile = User::where('id', Auth::user()->id)->first();
        $aValidations = array();

        if ($request["name"] != Auth::user()->name) {
            $aValidations["name"] = 'required|max:60';
        }
        if ($request["last_name"] != Auth::user()->last_name) {
            $aValidations["last_name"] = 'required|max:60';
        }
        if ($request["email"] != Auth::user()->email) {
            $aValidations["email"] = 'required|max:60';
        }
        if ($request["phone"] != Auth::user()->name) {
            $aValidations["phone"] = 'required|string|min:8';
        }
       
        if ($request["dni"] != $oUsersProfile->dni && $request["dni"] != '') {
            $aValidations["dni"] = 'numeric';
        }
      
       
       


        $this->validate($request, $aValidations);


        if (($request['password_check'] != $request['password']) && $request['password'] != '') {

            $error = \Illuminate\Validation\ValidationException::withMessages([
                'passwords_not_equal' => ['PASSWORDS NOT EQUAL']
            ]);

            throw $error;
        }




        $oUser = Auth::user();



        if (!empty($request['name'])) {
            $request['name'] = ucwords($request['name']);
            $oUser->name = $request['name'];
        }
        if (!empty($request['phone'])) {
            $request['phone']  = ucwords($request['phone']);
            $oUser->phone = $request['phone'];
        }
        if (!empty($request['password'])) {
            $oUser->password = Hash::make($request['password']);
        }
      
      
        if ($request["dni"] != $oUsersProfile->dni) {
            $oUsersProfile->dni = $request['dni'];
        }
      
        
        $oUser->save();
        $oUsersProfile->save();
        return redirect()->route('profile');

    }
    
}
