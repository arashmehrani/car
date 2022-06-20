<!DOCTYPE html>
<html lang="en" view-mode="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ماشین - اپلیکیشن مدیریت تعمیرات خودرو">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    @yield('meta')
    <!-- Title -->
    <title>ماشین - اپلیکیشن مدیریت تعمیرات خودرو</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('img/core-img/favicon.svg')}}">
    <link rel="apple-touch-icon" href="{{asset('img/icons/icon-96x96.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/icons/icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('img/icons/icon-167x167.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/icons/icon-180x180.png')}}">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('css/vanilla-dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/apexcharts.css')}}">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/plate.css')}}">

    @yield('css')
    <!-- Web App Manifest -->
    <link rel="manifest" href="{{asset('manifest.json')}}">
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">بارگذاری ...</span></div>
</div>
<!-- Internet Connection Status -->
<!-- # This code for showing internet connection status -->
<div class="internet-connection-status" id="internetStatus"></div>

    @yield('content')

<!-- All JavaScript Files -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/slideToggle.min.js')}}"></script>
<script src="{{asset('js/internet-status.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/baguetteBox.min.js')}}"></script>
<script src="{{asset('js/countdown.js')}}"></script>
<script src="{{asset('js/rangeslider.min.js')}}"></script>
<script src="{{asset('js/vanilla-dataTables.min.js')}}"></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/dark-rtl.js')}}"></script>
<script src="{{asset('js/active.js')}}"></script>
<!-- PWA -->
<script src="{{asset('js/pwa.js')}}"></script>
@yield('javascript')
</body>
</html>
