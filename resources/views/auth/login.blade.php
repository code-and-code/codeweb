<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWeb - Login </title>

    <link rel="stylesheet" href="{!! asset('inspinia/css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('inspinia/css/app.css') !!}" />

</head>
<body class="gray-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div>
            <h1 class="logo-name">AD+</h1>
        </div>
        <h3>Bem Vindo</h3>
        <p>
        </p>
        <p>Entrar</p>
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Username" required="">
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" required="">
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="{{ route('password.request') }}"><small>Esqueceu senha?</small></a>
        </form>
        <p class="m-t"> <small>Code&Code &copy; 2016</small> </p>
    </div>
</div>

<script src="{!! asset('inspinia/js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>

