<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\PropertyGallery;
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
    $subcategory = Category::where(['id'=>$id])->first();
		$category = Category::where('id',$subcategory->parent_id)->first();
  	return view('freeads.create',compact('subcategory','category'));
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
}
