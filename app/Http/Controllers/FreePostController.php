<?php

namespace App\Http\Controllers;

use App\Model\Category;
use Illuminate\Http\Request;

class FreePostController extends Controller
{
  public function index()
  {
  	$categories = Category::where(['parent_id'=>0])->get();
    // $subategories = Category::where(['parent_id'=>$categories->id])->get();
    // return $categories;
  	return view('freeads.index',compact('categories'));
  }

  public function create($id)
  {
    $subcategory = Category::where(['id'=>$id])->first();
		$category = Category::where('id',$subcategory->parent_id)->first();
  	return view('freeads.create',compact('subcategory','category'));
  }
}
