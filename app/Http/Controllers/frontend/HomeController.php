<?php

namespace App\Http\Controllers\frontend;
use App\Models\ProductsModel;
use App\Models\ImageModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aProducts = ProductsModel::select('products.*')
        ->whereNull('products.deleted_at')
        ->get();
        $aImages = ImageModel::select('images.*')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('main_image','=','1')
        ->get();    

        return view('frontend/home.index',compact('aProducts','aImages'));
    }
   
}
