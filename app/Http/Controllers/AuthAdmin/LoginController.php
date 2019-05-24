<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'admin';

    public function __construct()
    {
       $this->middleware('guest:admin')->except(['logout']);
    }
    public function redirectTo()
    {
        return 'admin';
    }
    protected function guard()
    {
        return \Auth::guard('admin');
    }
    public function showLoginForm()
    {
        return view('auth_admin.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('admin');
    }

    protected function credentials(Request $request)
    {
      if(is_numeric($request->get('email'))){
        return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
      }
      elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
        return ['email' => $request->get('email'), 'password'=>$request->get('password')];
      }
      return ['username' => $request->get('email'), 'password'=>$request->get('password')];
    }    
}
