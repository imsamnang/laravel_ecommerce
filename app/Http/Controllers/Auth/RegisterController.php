<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Model\Admin;
use App\Model\Writer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
  use RegistersUsers;

  protected $redirectTo = '/home';  
  // protected $redirectTo = '/dashboard';

  public function __construct()
  {
    $this->middleware('guest');
    $this->middleware('guest:admin');
    $this->middleware('guest:writer');
  }

  public function showAdminRegisterForm()
  {
      return view('auth.register', ['url' => 'admin']);
  }

  public function showWriterRegisterForm()
  {
      return view('auth.register', ['url' => 'writer']);
  }

  protected function validator(array $data)
  {
    return Validator::make($data, [
      'username' => ['required', 'string', 'max:255'],
      // 'firstname' => ['required', 'string', 'max:255'],
      // 'lastname' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
      'password' => ['required', 'string', 'min:6', 'confirmed'],
    ]);
  }

  protected function create(array $data)
  {
    return User::create([
      'username' => $data['username'],
      'firstname' => $data['firstname'],
      'lastname' => $data['lastname'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
    ]);
  }

  protected function createAdmin(Request $request)
  {
      $this->validator($request->all())->validate();
      $admin = Admin::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
      ]);
      return redirect()->intended('login/admin');
  }

  protected function createWriter(Request $request)
  {
      $this->validator($request->all())->validate();
      $writer = Writer::create([
          'name' => $request['name'],
          'email' => $request['email'],
          'password' => Hash::make($request['password']),
      ]);
      return redirect()->intended('login/writer');
  }
    
}
