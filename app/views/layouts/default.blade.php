<!DOCTYPE html>
<html lang="en">
<head>
	<title>Miejsca do odwiedzenia</title>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootswatch/3.1.1/amelia/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
	@include('elements.navbar')
	<div>
		<div class="container col-md-9">

			@yield('table')
			
		</div>
		
		<div class="container col-md-3">

			@yield('right-panel')

		</div>
	</div>
	@yield('footer')
</body>
</html>