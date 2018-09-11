
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Probando Laravel - @yield('title')</title>
	</head>
	<body>
		
		@section('header')
			MASTER HEADER
		@show

		<div class="container">
			@yield('content')
		</div>

		@section('footer')
			MASTER FOOTER
		@show

	</body>
</html>