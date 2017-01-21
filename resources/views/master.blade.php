<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/jumbotron-narrow.css') }}" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Início</a></li>
                <li role="presentation"><a href="{{ url('/login') }}">Entrar</a></li>
                <li role="presentation"><a href="{{ url('/register') }}">Registrar</a></li>
                <li role="presentation"><a href="#">Contato</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Projeto Escola</h3>
    </div>

    <div class="jumbotron">
        @yield('header')
    </div>

    @yield('content')

    <div class="row marketing">

        <div class="col-lg-6">
            @yield('left-sidebar')
        </div>

        <div class="col-lg-6">
            @yield('right-sidebar')
        </div>
    </div>

    <footer class="footer">
        @yield('footer')
    </footer>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>


