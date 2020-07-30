@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        




        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/select2/select2.min.css')}}">
        <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/util.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<body> 


<div class="limiter">
        <div class="container-login100" >
          <div class="wrap-login100">
            <form  action="{{ route('login') }}"  method="POST" class="login100-form validate-form" >
              @csrf
              
              
              <span class="login100-form-title p-b-34 p-t-27">
              {{__('Welcome Back!')}}
              </span>

    
              <div class="wrap-input100 validate-input" data-validate = "Enter email">
                <input id="email" value="{{ old('email') }}" class="input100 @error('email') is-invalid @enderror" name="email" placeholder="Enter Email" type="email"   required autocomplete="email"  autofocus>
                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                         </span>
                @enderror



              </div>


    
              <div class="wrap-input100 validate-input" data-validate="Enter password">
                <input id="password" value="{{ old('password') }}"  class="input100 @error('password') is-invalid @enderror" name="password" type="password"  placeholder="Password" required autocomplete="current-password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>

                @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                @enderror


              </div>


    
              <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="label-checkbox100" for="remember">
                  {{__ ('Remember Me')}}
                </label>
              </div>
    
              <div class="container-login100-form-btn">
                <button type="submit"  class="login100-form-btn" >
                  {{__('Login') }}
                </button>
              </div>
    

            @if (Route::has('password.request'))
              <div class="text-center p-t-90">
                <a class="txt1" href="{{ route('password.request') }}">
                  {{__ ('Forgot Your Password') }}
                </a>
            @endif
              </div>



            </form>
          </div>
        </div>
      </div>
      
    
      <div id="dropDownSelect1"></div>

    <!-- Copyright -->
    <div style="color:#818c35" class="footer-copyright text-center py-3">© 2020 Copyright:
      BudgetBetter
    </div>
    <!-- Copyright -->


      <!-- important -->
      <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/animsition/js/animsition.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/bootstrap/js/popper.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/select2/select2.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/daterangepicker/moment.min.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/countdowntime/countdowntime.js')}}" type="text/javascript" ></script>
      <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}" type="text/javascript" ></script>
      <script src="{{asset('js/main.js')}}" type="text/javascript" ></script>




</body>
</html>

@endsection