@extends('layouts.backend.login_signup')

@section('pagetitle','Login Page')

@section('content')

  <div class="login-form">
    @isset($url)
    <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}">
    @else
    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @endisset    
      {{ csrf_field() }}
      <h2 class="text-center">User Login</h2>        
      {{-- username --}}
      <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
              <input type="email" class="form-control" name="email" placeholder="Email or Username" required="required">
          </div>
      </div>
      {{-- password --}}
      <div class="form-group">
          <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Password" required="required">
          </div>
      </div>        
      <div class="form-group">
          <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>
      </div>
      <div class="text-center social-btn">
          <a href="#" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> Sign in with <b>Facebook</b>
          </a>
          <a href="#" class="btn btn-info btn-block"><i class="fa fa-twitter"></i> Sign in with <b>Twitter</b></a>
          <a href="#" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b>
          </a>
      </div>
      <div class="or-seperator"><i>Or Login with</i></div>      
      <div class="clearfix">
          <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
          <a href="#" class="pull-right text-success">Forgot Password?</a>
      </div>        
    </form>
      <div class="hint-text small">Don't have an account? <a href="{{ route('register') }}" class="text-success">Register Now!</a></div>
  </div>

@endsection