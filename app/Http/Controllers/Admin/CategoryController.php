<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index(Request $request)
  {
    $keyword = $request->get('search');
    $perPage = 15;
    if (!empty($keyword)) {
        $category = Category::where('category_name', 'LIKE', "%$keyword%")
            ->orWhere('category_level', 'LIKE', "%$keyword%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('image', 'LIKE', "%$keyword%")
            ->orWhere('is_active', 'LIKE', "%$keyword%")
            ->latest()->paginate($perPage);
    } else {
      $category = Category::latest()->paginate($perPage);
    }
    return view('admins.categories.index', compact('category'));
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
    return view('admins.categories.create',compact('category_dropdown'));
  }

  public function store(Request $request)
  {      
    $requestData = $request->all();
      if ($request->hasFile('image')) {
        $requestData['image'] = $request->file('image')
            ->store('uploads', 'public');
    }
    Category::create($requestData);
    return redirect('admin/category')->with('flash_message', 'Category added!');
  }

  public function show($id)
  {
    $category = Category::findOrFail($id);
    return view('admins.categories.show', compact('category'));
  }

  public function edit($id)
  {
    $category = Category::findOrFail($id);
    return view('admins.category.edit', compact('category'));
  }

  public function update(Request $request, $id)
  {      
    $requestData = $request->all();
      if ($request->hasFile('image')) {
        $requestData['image'] = $request->file('image')
            ->store('uploads', 'public');
    }
    $category = Category::findOrFail($id);
    $category->update($requestData);
    return redirect('admin/category')->with('flash_message', 'Category updated!');
  }

  public function destroy($id)
  {
    Category::destroy($id);
    return redirect('admin/category')->with('flash_message', 'Category deleted!');
  }
}
