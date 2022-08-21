<!DOCTYPE html>
<html dir="ltr" lang="en-us">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
    
        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,500;0,600;0,800;1,700&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" />
    
        <link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />
    
        <!-- Bootstrap Switch CSS -->
        <link rel="stylesheet" href="{{asset('css/components/bs-switches.css')}}" type="text/css" />
    
        <link rel="stylesheet" href="{{asset('css/custom.css')}}" type="text/css" />
        <meta name='viewport' content='initial-scale=1, viewport-fit=cover'>
    
        <!-- Seo Demo Specific Stylesheet -->
        {{-- <link rel="stylesheet" href="css/colors.php?color=FE9603" type="text/css" demos/seo/css/fonts.css /> <!-- Theme Color --> --}}
        <link rel="stylesheet" href="{{asset('css/theme/seo/css/fonts.css')}}" type="text/css" />
        <!-- <link rel="stylesheet" href="demos/seo/seo.css" type="text/css" /> -->
        <!-- / -->
        @livewireStyles
        <!-- Document Title
        ============================================= -->
        <title>Essayroo Clone</title>
    
    
        <style>
    
        </style>
    </head>
<body class="stretched">

    <div id="wrapper" class="clearfix">
        @include('web.layout.header')
        @yield('content')
    
    </div>

    	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('js/jquery.js')}}"></script>
	 <script src="{{asset('js/plugins.min.js')}}"></script>
	<script src="{{asset('js/quoteBuilder.js')}}"></script>
	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('js/functions.js')}}"></script>
    @livewireScripts
    
</body>
</html>