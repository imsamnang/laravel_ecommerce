<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Subadmin extends Authenticatable
{
  use Notifiable;

  protected $guard = 'subadmin';

  protected $fillable = [
      'username','firstname','lastname', 'email', 'password',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];

  protected $casts = [
      'email_verified_at' => 'datetime',
  ];
}
