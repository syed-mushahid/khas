@extends('UserViews/Layout.layout')
@section('title','Create New Account')
@section('style')
<link rel="stylesheet" href="{{asset('css/registration/login.css')}}">
@endsection

@section('content')
<div class="account-login section">
    <div class="container">
    <div class="row d-flex justify-content-center">
    <div class="col-lg-8  col-md-10  col-12">
    <form class="card login-form mt-5 mb-5 needs-validation" novalidate >
    <div class="card-body ">
    <div class="title text-center">
    <h3>Create New Account</h3>
    </div>
    <div class="social-login">
    <div class="row">
    <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href="javascript:void(0)"><i class="fa-brands fa-facebook-f"></i> Facebook
    </a></div>
    <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href="javascript:void(0)"><i class="fa-brands fa-twitter"></i> Twitter
    </a></div>
    <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href="javascript:void(0)"><i class="fa-brands fa-google"></i> Google</a>
    </div>
    </div>
    </div>
    <div class="alt-option">
    <span>Or</span>
    </div>
    <div class="row">
    <div class="form-group col-md-6">
        <label for="f_name">First Name</label>
        <input class="form-control" type="text" id="f_name" placeholder="Enter First Name" required="">
        <div class="invalid-feedback">
            First Name is required.
          </div>  
    </div>
        
    <div class="form-group  col-md-6">
        <label for="l_name">Last Name</label>
        <input class="form-control" type="text" id="l_name" placeholder="Enter Last Name" required="">
        <div class="invalid-feedback">
            Last Name is required.
          </div>    
    </div>
    </div>
    <div class="row">
    <div class="form-group  col-md-6">
    <label for="email">Email</label>
    <input class="form-control" type="email" id="email" placeholder="Enter Email" required="">
    <div class="invalid-feedback">
        Email is required.
      </div>  
</div>
    <div class="form-group  col-md-6">
    <label for="number">Phone</label>
    <input class="form-control" type="number" id="number" placeholder="Enter Phone Number" required="">
    <div class="invalid-feedback">
        Phone Number is required.
      </div>    
</div>
    </div>
    <div class="row">
    <div class="form-group  col-md-6">
    <label for="password">Password</label>
    <input class="form-control" type="password" id="password1" placeholder="Enter Password" required="">
    <div class="invalid-feedback">
        Password is required.
      </div>    
</div>
    <div class="form-group  col-md-6">
    <label for="password">Confirm Password</label>
    <input class="form-control" type="password" id="password2" placeholder="Confirm Password" required >
    <div class="invalid-feedback">
        Confirm password not matched.
      </div>    
</div>
    </div>
    <div class="d-flex flex-wrap justify-content-between bottom-content">
    <div class="form-check">
    <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
    <label class="form-check-label">Accept Terms and Conditions</label>
    </div>
    <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
    </div>
    <div class="button">
    <button class="btn btn-khas-primary" type="submit">Create A New Account</button>
    </div>
    <p class="outer-link">Already have an account? <a href="{{url('login')}}">Login here </a>
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


