@extends('layouts.backend.login_signup')

@section('pagetitle','Registration Page')

@section('content')

  <div class="register-form">
    <form method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      <h2 class="text-center">User Registration Form</h2>
      <div class="row">
        <div class="col-md-6">
          {{-- firstname --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-female" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="firstname" placeholder="First Name">
              </div>
          </div>
          {{-- username --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="username" placeholder="Username" required="required">
              </div>
          </div>
          {{-- confirm password --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password" required="required">
              </div>
          </div>            
        </div>
        <div class="col-md-6">
          {{-- lastname --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="lastname" placeholder="Last Name">
              </div>
          </div>     
          {{-- email --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
              </div>
          </div>
          {{-- password --}}
          <div class="form-group">
              <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
              </div>
          </div> 
        </div>
      </div>     
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block login-btn">Register</button>
      </div>
      <div class="or-seperator"><i>Or Signup with</i></div>  
      <div class="text-center social-btn">
          <a href="#" class="btn btn-primary btn-block" style="text-align: center;"><i class="fa fa-facebook"></i> Sign up with <b>Facebook</b>
          </a>
          <a href="#" class="btn btn-info btn-block" style="text-align: center;"><i class="fa fa-twitter"></i> Sign up with <b>Twitter</b></a>
          <a href="#" class="btn btn-danger btn-block" style="text-align: center;"><i class="fa fa-google"></i> Sign up with <b>Google</b>
          </a>
      </div>   
    </form>
      <div class="hint-text small">Have an account? <a href="{{ route('login') }}" class="text-success">Login Now!</a></div>
  </div>

@endsection