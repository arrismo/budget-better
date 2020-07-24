@extends('layouts.app')

@section('content')
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

<div class="limiter-register">
    <div class="rcontainer-register100">
        <div class="wrap-register100">
            
            <div class="register100-form-title p-b-34 p-t-27">{{ __('Register') }}</div>

                <div class="register100-form validate-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="wrap-input100 validate-input" data-validate = "Name">
                        <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-left">{{ __('Name') }}</label>
                            <input id="name" type="name" class="input100 @error('name') is-invalid @enderror" name="name" autocomplete="name" autofocus>
                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Email">
                        <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-left">{{ __('Email') }}</label>
                            <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Userrname">
                        <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-left">{{ __('Username') }}</label>
                            <input id="username" type="username" class="input100 @error('username') is-invalid @enderror" name="username" autocomplete="username">
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="wrap-input100 validate-input" data-validate = "Password">
                            <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Password-Confirm">
                        <label style="color:white;" for="password" class="col-md-4 col-form-label text-md-left">{{ __('Confirm') }}</label>
                            <input id="password-confirm" type="password" class="input100 @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit"  class="login100-form-btn" >
                                {{__('Register') }}
                            </button>
                        </div>
                     </div>
                 </form>
            </div>
        </div>
    </div>
</div>
@endsection
