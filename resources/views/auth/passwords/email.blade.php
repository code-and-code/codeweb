<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeWeb - Resetar Senha </title>

    <link rel="stylesheet" href="{!! asset('inspinia/css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('inspinia/css/app.css') !!}" />

</head>
<body class="gray-bg">

<div class="passwordBox animated fadeInDown">
    <div class="row">

        <div class="col-md-12">
            <div class="ibox-content">

                <h2 class="font-bold">Esqueceu a senha</h2>
                <p>
                    Digite seu endereço de e-mail e sua senha será redefinida e enviada para você.
                </p>

                <div class="row">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-lg-12">
                        <form class="m-t" role="form" method="POST" action="{{ route('password.email') }}">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control" placeholder="Email address" required="" name="email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary block full-width m-b">Resetar senha</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright Code&Code
        </div>
        <div class="col-md-6 text-right">
            <small>© 2015-2017</small>
        </div>
    </div>
</div>

<script src="{!! asset('inspinia/js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>



