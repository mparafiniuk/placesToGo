<!DOCTYPE html>
<html lang="en">
<head>
	<title>Miejsca do odwiedzenia</title>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	{{ HTML::script('js/restfulizer.js') }}
	{{ HTML::script('js/helpers.js') }}

	<link rel="stylesheet" type="text/css" href="///maxcdn.bootstrapcdn.com/bootswatch/3.1.1/amelia/bootstrap.min.css">
	{{ HTML::style('css/default.css') }}
	@yield('head')
</head>
<body>
	@include('elements.navbar')
	<div>
		<div class="container col-md-9">
			@yield('body')
			@if(isset($place))
				@include('elements.modalEdit')
				@include('elements.modalDelete')
			@endif
		</div>
		
		<div class="container col-md-3">

			@yield('right-panel')

		</div>
	</div>
	@yield('footer')
</body>
</html>