<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zeta tour | @yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
	<link rel="stylesheet" href="{{asset('css/mystyles.css')}}">
</head>
<body>
	@yield('content')
	<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
</body>
</html>