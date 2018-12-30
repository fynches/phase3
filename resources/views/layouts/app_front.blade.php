<!DOCTYPE html>
<html>
<head>
	<title>Fynches- @yield('pagetitle')</title>
	<link rel="shortcut icon" type="image/png" href="{{asset('favicon.png')}}"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	@yield('head-section')	
	<link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/gift.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/aos.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/all.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/custom.css')}}">
	<link rel="stylesheet" href="{{asset('public/front/css/responsive.css')}}">
	
	
</head>

<body>
@include('site.header.header')
@yield('content')
@include('site.footer.footer')
<script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script src="{{ asset('public/front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/front/js/aos.js') }}"></script>
<script src="{{ asset('public/front/js/css3-animate-it.js') }}"></script>
<script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('public/front/js/custom.js') }}"></script>
<script src="{{ asset('public/js/logIn.js') }}"></script>
<script type="text/javascript">
	AOS.init({
	  duration: 1200,
	});
</script>

@yield('jsscript')
</body>
</html>