@extends('UserViews/Layout.layout')
@section('title','Login')
@section('style')
<link rel="stylesheet" href="{{asset('css/registration/login.css')}}">
@endsection

@section('content')
<div class="account-login section">
    <div class="container">
    <div class="row ">
    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
    <form class="card login-form mt-5 mb-5 needs-validation" novalidate>
    <div class="card-body">
    <div class="title text-center">
    <h3>Login Into Your Account</h3>
    </div>
    <div class="social-login">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i>Facebook
        </a></div>
    <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href="javascript:void(0)"><i class="fa-brands fa-twitter"></i> Twitter
    </a></div>
    <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href="javascript:void(0)"><i class="fa-brands fa-google"></i> Google </a>
    </div>
    </div>
    </div>
    <div class="alt-option">
    <span>Or</span>
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="email" id="email" required="">
    <div class="invalid-feedback">
        Email is required.
      </div> 
</div>
    <div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" id="password" required="">
    <div class="invalid-feedback">
        Password is required.
      </div>    
</div>
    <div class="d-flex flex-wrap justify-content-between bottom-content">
    <div class="form-check">
    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
    <label class="form-check-label">Remember me</label>
    </div>
    <a class="lost-pass" href="{{url('forgot-password')}}">Forgot password?</a>
    </div>
    <div class="button">
    <button class="btn btn-khas-primary" type="submit">Login</button>
    </div>
    <p class="outer-link">Don't have an account? <a href="{{url('signup')}}">Create here </a>
    </p>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>

@endsection

@section('script')
<script>
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endsection


