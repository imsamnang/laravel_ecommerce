<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SubadminLoginController extends Controller
{

  use AuthenticatesUsers;

  protected $redirectTo = 'subadmin/home';

  public function __construct()
  {
    $this->middleware('guest:subadmin,subadmin/home')->except('logout');
  }

  public function redirectTo()
  {
    return 'subadmin/home';
  }

  protected function guard()
  {
    return \Auth::guard('subadmin');
  }

  public function showLoginForm()
  {
    return view('auth.subadminlogin');
  }

  public function logout()
  {
    Auth::guard('subadmin')->logout();
    return redirect('/subadmin');
  }  

}
