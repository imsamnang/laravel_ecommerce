<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Response;

class ProcessController extends Controller
{
	public function getGenerator()
  {
    return view('admins.generator');
  }

  public function postGenerator(Request $request)
  {
    $commandArg = [];
    $commandArg['name'] = $request->crud_name;
    if ($request->has('fields')) {
        $fieldsArray = [];
        $validationsArray = [];
        $x = 0;
        foreach ($request->fields as $field) {
            if ($request->fields_required[$x] == 1) {
                $validationsArray[] = $field;
            }
            $fieldsArray[] = $field . '#' . $request->fields_type[$x];
            $x++;
        }
        $commandArg['--fields'] = implode(";", $fieldsArray);
    }
    if (!empty($validationsArray)) {
        $commandArg['--validations'] = implode("#required;", $validationsArray) . "#required";
    }
    if ($request->has('route')) {
        $commandArg['--route'] = $request->route;
    }
    if ($request->has('view_path')) {
        $commandArg['--view-path'] = $request->view_path;
    }
    if ($request->has('controller_namespace')) {
        $commandArg['--controller-namespace'] = $request->controller_namespace;
    }
    if ($request->has('model_namespace')) {
        $commandArg['--model-namespace'] = $request->model_namespace;
    }
    if ($request->has('route_group')) {
        $commandArg['--route-group'] = $request->route_group;
    }
    if ($request->has('relationships')) {
        $commandArg['--relationships'] = $request->relationships;
    }
    if ($request->has('form_helper')) {
        $commandArg['--form-helper'] = $request->form_helper;
    }
    if ($request->has('soft_deletes')) {
        $commandArg['--soft-deletes'] = $request->soft_deletes;
    }
    try {
        Artisan::call('crud:generate', $commandArg);
        // $menus = json_decode(File::get(base_path('resources/laravel-admin/menus.json')));
        $name = $commandArg['name'];
        $routeName = ($commandArg['--route-group']) ? $commandArg['--route-group'] . '/' . snake_case($name, '-') : snake_case($name, '-');
        // $menus->menus = array_map(function ($menu) use ($name, $routeName) {
          //     if ($menu->section == 'Resources') {
          //         array_push($menu->items, (object) [
          //             'title' => $name,
          //             'url' => '/' . $routeName,
          //         ]);
          //     }
          //     return $menu;
          // }, $menus->menus);
          // File::put(base_path('resources/laravel-admin/menus.json'), json_encode($menus));
        Artisan::call('migrate');
    } catch (\Exception $e) {
        return Response::make($e->getMessage(), 500);
    }
    return redirect('admin/generator')->with('flash_message', 'Your CRUD has been generated. See on the menu.');
}
}
