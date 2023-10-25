<!doctype html>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $title }}</title>
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="robots" content=""/>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="{{asset('images/favicon/apple-icon-57x57.png')}}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{asset('images/favicon/apple-icon-60x60.png')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/favicon/apple-icon-72x72.png')}}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/favicon/apple-icon-76x76.png')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/favicon/apple-icon-114x114.png')}}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{asset('images/favicon/apple-icon-120x120.png')}}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{asset('images/favicon/apple-icon-144x144.png')}}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{asset('images/favicon/apple-icon-152x152.png')}}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{asset('images/favicon/apple-icon-180x180.png')}}">
	<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('images/favicon/android-icon-192x192.png')}}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favicon/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('images/favicon/favicon-96x96.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/favicon/favicon-16x16.png')}}">
	<link rel="manifest" href="{{asset('images/favicon/manifest.json')}}">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="{{asset('images/favicon/ms-icon-144x144.png')}}">
	<meta name="theme-color" content="#ffffff">
	<link rel="shortcut icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/x-icon">
	<link rel="icon" href="{{asset('images/favicon/favicon.ico')}}" type="image/x-icon">
	
	<!-- Stylesheet -->
	@include('front.includes.header-css')

	@vite([
		   'resources/css/app.css',
	       'resources/css/custom.css', 
		   'resources/css/style.css',
		   'resources/css/app.scss',
		   'resources/js/app.js',
           'resources/js/main.js',
		])
	
</head>
<body id="body">
    @include('front.includes.header')
	<main>
        @yield('content')
    </main>
    @include('front.includes.footer')
	<!-- Back to Top -->
    <div class="" title="Back to Top" id="scrollUp" onclick="topFunction()">
        <svg xmlns="http://www.w3.org/2000/svg" height=".8em" viewBox="0 0 448 512"><path fill="currentColor" d="M240.971 130.524l194.343 194.343c9.373 9.373 9.373 24.569 0 33.941l-22.667 22.667c-9.357 9.357-24.522 9.375-33.901.04L224 227.495 69.255 381.516c-9.379 9.335-24.544 9.317-33.901-.04l-22.667-22.667c-9.373-9.373-9.373-24.569 0-33.941L207.03 130.525c9.372-9.373 24.568-9.373 33.941-.001z"/></svg>
    </div>
    @include('front.includes.footer-js')
</body>
</html>
