<?php

namespace App\Http\Controllers\frontend;
use App\Models\ProductsModel;
use App\Models\ImageModel;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class PublishController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend/publish.index');
    }

    public function publish_product(Request $request) {

        $aValidations = array(
            'category_id' => 'required',
            'title' => 'required|max:60',
            'description' => 'required|max:60',            
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        );

        
        $id = Auth::user()->id;
        $this->validate($request, $aValidations);

        $request['user_id'] = $id;
   
        $request['title'] = ucwords($request['title']);
        $request['description'] = ucwords($request['description']);
   

        ProductsModel::create($request->all());
       
        $product_id = ProductsModel::max('id');

        return redirect()->route('publications_images', $product_id);

        // return redirect()->route('publications_images')->with('success', 'Registro actualizado satisfactoriamente');
    }
    public function images($product_id)
    {  
        $aImages = ImageModel::select('images.*','products.title as product_name')
        ->leftjoin('products','products.id','=','images.product_id')
        ->where('product_id','=',$product_id)
        ->get();
        // 

        return view('frontend/publish.publish_files',compact('aImages'))->with('product_id',$product_id);

        // return view('frontend/publish.publish_files');
    }
    public function setMainImage(Request $request ){
        $aReturn = array();
        $oImage = ImageModel::find($request['image_id']);
        $aImages = ImageModel::where('product_id','=',$oImage->product_id)
        ->get();

        foreach($aImages as $image)
        {
            if($image->id == $oImage->id)
            {
                $oImage->main_image = 1;
                $oImage->save();;
            }
            else{
                if($image->main_image == 1)
                {
                    $image->main_image = 0;
                    $image->save();
                }
            }
        }
        $aReturn['image_id'] = $request['image_id'];

        echo json_encode($aReturn);
    }


    public function deleteImage($id)
    {
        ImageModel::find($id)->delete();
        return redirect()->back();
    }

    public function store_files(Request $request)
    {

        if(!empty($request['image']))
        {
            $aValidations = array(
                'image' => 'required|max:10240|mimes:jpeg,png,jpg,gif'
            );               
        }
        else
        {
            $aValidations = array(
                'video' => 'required|max:10240|mimes:jpeg,png,jpg,gif'
            ); 
        }

        

        $this->validate($request , $aValidations);

        if (!empty($request['image'] || !empty($request['video']) )) {
            
            if(!empty($request['image']))
            {
            $image = $request['image'];   
            $type = 0;             
            }
            else
            {
                $image = $request['video'];  
                $type = 1;
            }
            
            $fileName = $image->getClientOriginalName();
            $storeImageName = uniqid(rand(0, 1000), true) . "-" . $fileName;
            $fileExtension = $image->getClientOriginalExtension();
            $realPath = $image->getRealPath();
            $fileSize = $image->getSize();
            $fileMimeType = $image->getMimeType();
            
            $product_id = $request['product_id'];
            $destinationPath = 'images/publish';
            $image->move($destinationPath, $storeImageName);

            $dataxd=array('image' => $storeImageName,'product_id' => $product_id,'type' => $type,'main_image' => 1);
            ImageModel::insert($dataxd);
             $image_id = ImageModel::max('id');
             $aImages = ImageModel::where('product_id','=',$request['product_id'])
            ->get();

             foreach($aImages as $image)
            {
                 if($image->id != $image_id)
                {
                   if($image->main_image == 1)
                    {
                         $image->main_image = 0;
                         $image->save();
                     }
                 }

            }

            
            
        return redirect()->route('publications_images',$product_id);
            
        }
     
    }

}
