{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



    {{-- Custom login page --}}
    <!DOCTYPE html>
    <html lang="en" class="body-full-height">
        <head>
            <!-- META SECTION -->
            <title>Stored URL</title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />

            <link rel="icon" href="favicon.ico" type="image/x-icon" />
            <!-- END META SECTION -->

            <!-- CSS INCLUDE -->
            <link rel="stylesheet" type="text/css" id="theme" href="{!! asset('admin/css/theme-default.css') !!}"/>
            <!-- EOF CSS INCLUDE -->
        </head>
        <body>

            <div class="login-container">

                <div class="login-box animated fadeInDown">
                    {{-- <div class="login-logo"></div> --}}
                    <div class="login-header text-center"><h1 style="color: white;">Stored URL</h1> </div>
                    <div class="login-body">
                        <div class="login-title"><strong>Log In</strong> to your account</div>
                        <form action="{{ route('login') }}" class="form-horizontal" method="post">
                            @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="email" placeholder="E-mail"/>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <h6 style="color: #FF4500"><strong>{{ $errors->first('email') }}</strong></h6>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" placeholder="Password"/>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <a href="{{ url('/') }}" class="btn btn-info btn-block">Back to home</a>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info btn-block">Log In</button>
                            </div>
                        </div>
                        <div class="login-subtitle">
                            Don't have an account yet? <a href="{{ route('register') }}">Create an account</a>
                        </div>
                        </form>
                    </div>
                    <div class="login-footer">
                        <div class="pull-left">
                            &copy; 2018 Stored URL
                        </div>
                        {{-- <div class="pull-right">
                            <a href="#">About</a> |
                            <a href="#">Privacy</a> |
                            <a href="#">Contact Us</a>
                        </div> --}}
                    </div>
                </div>

            </div>

        </body>
    </html>
