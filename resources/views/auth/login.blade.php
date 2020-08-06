<!-- @extends('layouts.app') -->

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

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="{{ URL::asset('vendor/fontawesome-free/all.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ URL::asset('css/dboard.css') }}" rel="stylesheet" type="text/css" >

</head>
<body> 
<nav class="navbar navbar-expand-md  nav-color" style="background-color: #D9B334;">
        <div class="container">
            <a class="" href="{{ url('/') }}" style="font-size:30px; color: white; margin-left:-110px; ">
                {{ config('app.name', 'BudgetBetter') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
             

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto" >
                  <li class="nav-item">
                  <a class="nav-link" href="{{ route('welcome')}}" style="color:white;"> Home  </a>
                  </li>


                  <li class="nav-item"> 
                      <a class="nav-link" href="{{ route('welcome')}}#slide04" style="color:white;"> Contact us   </a>
                  </li>
                  <li class="nav-item"> 
                      <a class="nav-link" href="{{ route('register')}}#slide04" style="color:white;"> Register   </a>
                  </li>
               
                    


                      

                </ul>
            </div>
        </div>
    </nav>

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
    <div style="color:black;" class="footer-copyright text-center py-3">© 2020 Copyright:
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