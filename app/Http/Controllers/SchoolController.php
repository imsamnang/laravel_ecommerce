<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SchoolController extends Controller
{
	public function index()
  {
    $teachers = DB::table('teacher')->pluck("name","id");
    return view('dynamic_selectbox',compact('teachers'));
  }
  public function getStudents($id) {
    $students = DB::table("student")->where("teacher_id",$id)->pluck("name","id");
    return json_encode($students);
  }
}
