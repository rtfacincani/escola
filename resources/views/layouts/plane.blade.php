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
	    <script src="{{ asset("js/jquery.min.js") }}" type="text/javascript"></script>
	    <script src="{{ asset("js/jquery.filer.min.js") }}" type="text/javascript"></script>
	    <script src="{{ asset("assets/scripts/jquery.filer.min.js") }}"></script>
	    
	    <!--<script src="{{ asset("assets/scripts/jquery.mask.min.js") }}"></script> -->

		<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>

		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
		<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> -->
		<link href="{{asset("css/bootstrap-datepicker.css")}}" rel="stylesheet">
		<script src="{{ asset("js/bootstrap-datepicker.min.js") }}"></script>
		<script src="{{ asset("js/bootstrap-datepicker.pt-BR.min.js") }}"></script>
		<!-- <script src="{{ asset("js/jquery-3.1.1.min.js") }}"></script> -->
		<!-- <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> -->


		<meta name="_token" content="{!! csrf_token() !!}"/>
	</head>
	<body>
		@yield('body')

	</body>
</html>


