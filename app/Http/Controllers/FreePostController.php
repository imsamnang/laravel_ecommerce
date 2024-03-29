<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Commune;
use App\Model\District;
use App\Model\Property;
use App\Model\PropertyGallery;
use App\Model\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FreePostController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
  	$categories = Category::where(['parent_id'=>0])->get();
  	return view('freeads.index',compact('categories'));
  }

  public function create($id)
  {
    $provinces = Province::pluck('name_en','id');
    $subcategory = Category::where(['id'=>$id])->first();
		$category = Category::where('id',$subcategory->parent_id)->first();
  	return view('freeads.create',compact('subcategory','category','provinces'));
  }

  public function saveProperties(Request $request)
  {
    $property = new Property();
    $property->user_id = auth()->user()->id;
    $property->category_id = $request->category_id;
    $property->parent_id = $request->parent_id;
    $property->title = $request->title;
    $property->size = $request->size;
    $property->price = $request->price;
    $property->description = $request->description;
    $property->name = $request->name;
    $property->phone1 = $request->phone_1;
    $property->phone2 = $request->phone_2;
    $property->phone3 = $request->phone_3;
    $property->email = $request->email;
    $property->province_id = $request->province_id;
    $property->district_id = $request->district_id;
    $property->commune_id = $request->commune_id;
    $property->location = $request->location;
    if($property->save()){
      $property->imageGalleryUpload('imageGalleries',new PropertyGallery(),'property/galleries/',$property->id,'property_id');
    }
      return redirect()->back();
  }
  
  public function editProperties($id)
  {
    $property = Property::findOrFail($id);
    $images = PropertyGallery::where('property_id',$property->id)->get();
    $provinces = Province::pluck('name_en','id');
    $subcategory = Category::where(['id'=>$property->parent_id])->first();
    $category = Category::where('id',$property->category_id)->first();    
    // return $category;
    return view('freeads.edit',compact('property','subcategory','category','provinces','images'));
  }

  public function updateProperties(Request $request, $id)
  {
    $property = Property::findOrFail($id);
    $imageGalleries = PropertyGallery::where('property_id',$property->id)->get();
    foreach ($imageGalleries as $key => $image) {
      $old_images[] = $image->gallery_image;
    }
    $property->user_id = auth()->user()->id;
    $property->category_id = $request->category_id;
    $property->parent_id = $request->parent_id;
    $property->title = $request->title;
    $property->size = $request->size;
    $property->price = $request->price;
    $property->description = $request->description;
    $property->name = $request->name;
    $property->phone1 = $request->phone_1;
    $property->phone2 = $request->phone_2;
    $property->phone3 = $request->phone_3;
    $property->email = $request->email;
    $property->province_id = $request->province_id;
    $property->district_id = $request->district_id;
    $property->commune_id = $request->commune_id;
    $property->location = $request->location;
    if($property->save()){
      if($request->hasFile('imageGalleries')){
        $dir = 'uploads/property/galleries/';
        foreach ($imageGalleries as $key => $image) {
          $image->delete();
          File::delete($dir.$image->gallery_image);
        }
        $property->imageGalleryUpload('imageGalleries',new PropertyGallery(),'property/galleries/',$property->id,'property_id');
      }
    }
      return redirect()->back();  
  }

  public function deleteProperties($id)
  {
    $property = Property::findOrFail($id);
    $imageGalleries = PropertyGallery::where('property_id',$property->id)->get();
    if($property->delete()){
      $dir = 'uploads/property/galleries/';
      foreach ($imageGalleries as $key => $image) {
        $image->delete();
        File::delete($dir.$image->gallery_image);
      }
    }
  }

  public function showProperties($id)
  {
    $property = Property::findOrFail($id);
    return view('freeads.show',compact('property'));
  }

  public function listProperties()
  {
    $properties = Property::where('user_id',auth()->user()->id)
                           ->orderBy('created_at','desc')
                           ->get();
    return view('freeads.showAllProperties',compact('properties'));
  }

  public function allProperties()
  {
    return view('freeads.all_properties');
  }






  public function imageView()
  {
    return view('plupload.create');
  }

  public function imageSubmit(Request $request)
  {
    $imageName = $request->file->getClientOriginalName();
    $request->file->move(public_path('uploads/freepost/'),$imageName);
    return response()->json(['uploaded'=>'/uploads/freepost/'.$imageName]);
  }
  
  public function getPreview(){
    $images = PropertyGallery::orderBy('id','desc')->get();
    return view('freeads.preview',['images' => $images]);
  }

  public function postAction(Request $request){
   if($request->exists('btn-multiupload')){
      $file = $request->file('file');
      $path = 'uploads/properties/';
      $filename = $file->getClientOriginalName();
      $file->move($path,$file->getClientOriginalName());
      $image = new PropertyGallery();
      $image->image_name = $filename;
      $image->save();
      echo 'Uploaded';
    }
  }

  public function getTestpackage(){
    $img = PropertyGallery::make('images/uploads/Koala.jpg')->resize(300, 200);
    return $img->response('jpg');
  }

  public function getDistrictList(Request $request)
  {
    $districts = District::where("province_id",$request->province_id)
    ->pluck("name_en","id");
    return response()->json($districts);
  }

  public function getCommuneList(Request $request)
  {
    $communes = Commune::where("district_id",$request->district_id)
    ->pluck("name_en","id");
    return response()->json($communes);
  }



}
