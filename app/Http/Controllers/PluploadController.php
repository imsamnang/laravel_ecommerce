<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PluploadController extends Controller
{
	public function upload()
	{
		return view('plupload.index');
	}

	public function store()
	{
		//
	}


}
