<!DOCTYPE html>
<html {{ str_replace('_', '-', app()->getLocale()) }}>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />
		<script src="https://kit.fontawesome.com/14940b9e28.js"></script>
		<title>NESG Essay Competition</title>
	</head>
	<body>
		<!-- Simulate a smartphone / tablet -->
		@include('layouts.header')
		@yield('content')
		<!-- main-content -->
		@include('layouts.footer')
	</body>
</html>
