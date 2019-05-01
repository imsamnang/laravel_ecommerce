<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminLoginController extends Controller
{
  use AuthenticatesUsers;

  protected $redirectTo = 'admin/home';

  public function __construct()
  {
      $this->middleware('guest:admin,admin/home')->except('logout');
  }

  public function redirectTo()
  {
    return 'admin/home';
  }

  protected function guard()
  {
    return \Auth::guard('admin');
  }

  public function showLoginForm()
  {
    return view('auth.adminlogin');
  }

  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/admin/home');
  }    

}
