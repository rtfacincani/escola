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

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js">
		</script>

		<meta name="_token" content="{!! csrf_token() !!}"/>
	</head>
	<body>
		@yield('body')

	</body>
</html>


