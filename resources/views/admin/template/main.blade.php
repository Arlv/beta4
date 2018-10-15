<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'FARMADRUCK') | ADMIN</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
</head>
<body>
@include('admin.template.partials.nav')

<section>
	@yield('content')
</section>

<footer>
	
</footer>

<script src="{{asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>