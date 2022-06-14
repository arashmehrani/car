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
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    @yield('meta')
    <!-- Title -->
    <title>ماشین - اپلیکیشن مدیریت تعمیرات خودرو</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('')}}img/core-img/favicon.svg">
    <link rel="apple-touch-icon" href="{{asset('')}}img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('')}}img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="{{asset('')}}img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('')}}css/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('')}}css/tiny-slider.css">
    <link rel="stylesheet" href="{{asset('')}}css/baguetteBox.min.css">
    <link rel="stylesheet" href="{{asset('')}}css/rangeslider.css">
    <link rel="stylesheet" href="{{asset('')}}css/vanilla-dataTables.min.css">
    <link rel="stylesheet" href="{{asset('')}}css/apexcharts.css">
    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{asset('')}}style.css">
    <link rel="stylesheet" href="{{asset('css/plate.css')}}">
    <link rel="stylesheet" href="{{asset('fontiran.css')}}">

    @yield('css')
    <!-- Web App Manifest -->
    <link rel="manifest" href="{{asset('')}}manifest.json">
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">بارگذاری ...</span></div>
</div>
<!-- Internet Connection Status -->
<!-- # This code for showing internet connection status -->
<div class="internet-connection-status" id="internetStatus"></div>
<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="bg-warning shadow-sm">
        <div class="container">
            <!-- # Header Two Layout -->
            <!-- # Copy the code from here ... -->
            <!-- Header Content -->
            <div
                class="header-content header-style-two position-relative d-flex align-items-center justify-content-between">
                <!-- Logo Wrapper -->
                <div class="logo-wrapper"><a href="{{url('/')}}"><span class="text-white">اپلیکیشن </span></a>
                </div>
                <div class="navbar-content-wrapper d-flex align-items-center">
                    <!-- Navbar Toggler -->
                    <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas"
                         data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                        <div class="span-wrap"><span class="d-block"></span><span class="d-block"></span><span
                                class="d-block"></span></div>
                    </div>
                </div>
            </div>
            <!-- # Header Two Layout End -->
        </div>
    </div>
</div>
<!-- # Sidenav  -->
<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1"
     aria-labelledby="affanOffcanvsLabel">
    <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    <div class="offcanvas-body p-0">
        <!-- Side Nav Wrapper -->
        <div class="sidenav-wrapper">
            <!-- Sidenav Profile -->
            <div class="sidenav-profile bg-gradient">
                <div class="sidenav-style1"></div>
                <!-- User Thumbnail -->
                <div class="user-profile"><img src="{{asset('')}}img/bg-img/2.jpg" alt=""></div>
                <!-- User Info -->
                <div class="user-info">
                    <h6 class="user-name mb-0">کاربر جدید</h6><span>البرز ، کرج</span>
                </div>
            </div>
            <!-- Sidenav Nav -->
            <ul class="sidenav-nav ps-0">
                <li><a href="{{url('/')}}"><i class="bi bi-house-door"></i>خانه</a></li>
                <li><a href="{{url('/')}}"><i class="bi bi-tools"></i>ثبت سرویس</a></li>
                <li><a href="{{url('/')}}"><i class="bi bi-clock-history"></i>یاد آوری<span
                            class="badge bg-danger rounded-pill ms-2">5</span></a></li>
                <li><a href="{{url('/')}}"><i class="bi bi-life-preserver"></i>پشتیبانی</a></li>
                <li><a href="{{url('/')}}"><i class="bi bi-gear"></i>تنظیمات</a></li>
                <li>
                    <div class="night-mode-nav"><i class="bi bi-moon"></i>حالت تاریک
                        <div class="form-check form-switch">
                            <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                        </div>
                    </div>
                </li>
                <li><a href="{{url('/')}}"><i class="bi bi-box-arrow-right"></i>خروج</a></li>
            </ul>
            <!-- Social Info -->
            <div class="social-info-wrap"><a href="#"><i class="bi bi-globe"></i></a><a href="#"><i
                        class="bi bi-twitter"></i></a></div>
            <!-- Copyright Info -->
            <div class="copyright-info">
                <p> &copy; کلیه حقوق برای مهرانی محفوظ است </p>
            </div>
        </div>
    </div>
</div>

<div class="page-content-wrapper py-3">

    @yield('content')

</div>

<!-- Footer Nav -->
<div class="footer-nav-area" id="footerNav">
    <div class="container px-0">
        <!-- =================================== -->
        <!-- Paste your Footer Content from here -->
        <!-- =================================== -->
        <!-- Footer Content -->
        <div class="footer-nav position-relative shadow-sm footer-style-two">
            <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                <li><a href="{{url('/home')}}">
                        <svg class="bi bi-house" width="24" height="24" viewBox="0 0 16 16" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>
                            <path fill-rule="evenodd"
                                  d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                        </svg>
                    </a></li>
                <li><a href="pages.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             class="bi bi-clock-history" viewBox="0 0 16 16">
                            <path
                                d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                            <path
                                d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </a></li>
                <li class="active"><a href="elements.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                             class="bi bi-tools" viewBox="0 0 16 16">
                            <path
                                d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0Zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708ZM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11Z"/>
                        </svg>
                    </a></li>
                <li><a href="page-chat-users.html">
                        <svg class="bi bi-chat-dots" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                             fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                            <path
                                d="M2.165 15.803l.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"></path>
                        </svg>
                    </a></li>
                <li><a href="settings.html">
                        <svg class="bi bi-gear" width="24" height="24" viewBox="0 0 16 16" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"></path>
                            <path fill-rule="evenodd"
                                  d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"></path>
                        </svg>
                    </a></li>
            </ul>
            <!-- # Footer Two Layout End -->
        </div>
    </div>
</div>


<!-- All JavaScript Files -->
<script src="{{asset('')}}js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}js/slideToggle.min.js"></script>
<script src="{{asset('js/internet-status.js')}}"></script>
<script src="{{asset('')}}js/tiny-slider.js"></script>
<script src="{{asset('')}}js/baguetteBox.min.js"></script>
<script src="{{asset('')}}js/countdown.js"></script>
<script src="{{asset('')}}js/rangeslider.min.js"></script>
<script src="{{asset('')}}js/vanilla-dataTables.min.js"></script>
<script src="{{asset('')}}js/index.js"></script>
<script src="{{asset('')}}js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('')}}js/isotope.pkgd.min.js"></script>
<script src="{{asset('')}}js/dark-rtl.js"></script>
<script src="{{asset('')}}js/active.js"></script>
<!-- PWA -->
<script src="{{asset('')}}js/pwa.js"></script>
@yield('javascript')
</body>
</html>
