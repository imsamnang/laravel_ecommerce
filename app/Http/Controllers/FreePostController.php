<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Commune;
use App\Model\District;
use App\Model\PropertyGallery;
use App\Model\Province;
use Illuminate\Http\Request;

class FreePostController extends Controller
{
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

  public function savePost(Request $request)
  {
    return $request->all();
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

  // public function getIndex(){
  //   $images = Image::orderBy('id','desc')->get();
  //   return view('admin.upload.khmer24',['images' => $images]);
  // }

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
