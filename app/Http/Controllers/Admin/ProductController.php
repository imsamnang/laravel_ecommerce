<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(Request $request)
  {
    $keyword = $request->get('search');
    $perPage = 15;
    if (!empty($keyword)) {
        $products = Product::where('category_name', 'LIKE', "%$keyword%")
            ->orWhere('category_level', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('image', 'LIKE', "%$keyword%")
            ->orWhere('is_active', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
    } else {
      // $category = Category::latest()->paginate($perPage);
      $products = Product::with(['category'])->orderBy('id','desc')->paginate($perPage);
    }

    return view('admins.products.index',compact('products'));
  }

  public function create()
  {
    $categories = Category::where(['parent_id'=>0])->get();
    $category_dropdown = "<option selected disabled>Main Category</option>";
    foreach ($categories as $cat) {
      $category_dropdown.="<option value='".$cat->id."'>".$cat->category_name."</option>";
      $sub_categories=Category::where(['parent_id'=>$cat->id])->get();
      foreach ($sub_categories as $sub_cat) {
        $category_dropdown.="<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->category_name."</option>";
      }
    }    
    // $categories = Category::pluck('category_name','id');
    return view('admins.products.create',compact('category_dropdown'));
  }

  public function store(Request $request)
  {
    $product = new Product();
    $product->category_id = $request->category_id;
    $product->product_name = $request->product_name;
    $product->qty = $request->qty;
    $product->price = $request->price;
    $product->is_active = $request->is_active;
    $product->description = $request->description;
    $product->imageUpload('image',$product,'product');
    if($product->save()){
      return redirect()->route('product.index');
    }
  }

  public function show(Product $product)
  {
      //
  }

  public function edit(Product $product)
  {
    $categories = Category::where(['parent_id'=>0])->get();
    $category_dropdown = "<option selected disabled>Main Category</option>";
    foreach ($categories as $cat) {
      $category_dropdown.="<option value='".$cat->id."'>".$cat->category_name."</option>";
      $sub_categories=Category::where(['parent_id'=>$cat->id])->get();
      foreach ($sub_categories as $sub_cat) {
        $category_dropdown.="<option value='".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->category_name."</option>";
      }
    }
     return view('admins.products.edit',compact('category_dropdown','product'));
  }

  public function update(Request $request, Product $product)
  {
    $product->category_id = $request->category_id;
    $product->product_name = $request->product_name;
    $product->qty = $request->qty;
    $product->price = $request->price;
    $product->is_active = $request->is_active;
    $product->description = $request->description;
    $product->imageUpload('image',$product,'product');
    if($product->save()){
      return redirect()->route('product.index');
    }
  }

  public function destroy(Product $product)
  {
      //
  }
}
