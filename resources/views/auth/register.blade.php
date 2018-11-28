<!DOCTYPE html>
<html>
<head>
    <title>Stored URL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {{-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> --}}
    <!-- Custom Theme files -->
    <link href="{!! asset('css/style.css') !!}" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>
<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Stored URL</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">


                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                    <input placeholder="Name" id="name" type="text" class="text{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif


                    <input id="email" type="email" placeholder="Email" class="text email{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                    <input id="password" type="password" placeholder="Password" class="text{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="text w3lpass" name="password_confirmation" required>

                    <input type="submit" value="SIGNUP">
                </form>
                <p>Don't have an Account? <a href="{{ route('login') }}"> Login Now!</a></p>
            </div>

        </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
        <p>© 2018 Stored URL. All rights reserved | Design by <a href="https://www.google.com/" target="_blank">Kawsar Mobin</a></p>
    </div>

</body>
</html>
