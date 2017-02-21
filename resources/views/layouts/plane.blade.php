<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
		<meta charset="utf-8"/>
		<title>Nova Escola</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
		<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>


		<meta name="_token" content="{!! csrf_token() !!}"/>
	</head>
	<body>
		@yield('body')

	</body>
</html>


