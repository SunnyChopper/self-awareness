<!doctype html>
<html lang="en">
	<head>
		<title>{{ $page_title }}</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">

		<link rel="stylesheet" href="{{ URL::asset('fonts/ionicons/css/ionicons.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('fonts/fontawesome/css/font-awesome.min.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('fonts/flaticon/font/flaticon.css') }}">

		<!-- Theme Style -->
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
	</head>
	<body>
		<!-- Header -->
		@include('layouts.navbar')
		<!-- End Header -->

		@yield('content')

		<!-- Footer -->
		@include('layouts.footer')
		<!-- End Footer -->
	
		<!-- Loader -->
		<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>
		<!-- End Loader -->

		<!-- Javascript -->
		@include('layouts.js')
		<!-- End Javascript -->
	</body>
</html>