<?php

namespace App\Http\Controllers\Auth;

use App\Model\Subadmin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class SubadminRegisterController extends Controller
{
  use RegistersUsers;

  protected $redirectTo = 'admin/home';
  // protected $redirectTo = '/dashboard';

  public function __construct()
  {
    $this->middleware('guest:admin,admin/home');
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
    return Subadmin::create([
      'username' => $data['username'],
      'firstname' => $data['firstname'],
      'lastname' => $data['lastname'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
    ]);
  } 
    
}
