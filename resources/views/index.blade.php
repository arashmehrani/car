@extends('layouts.index-layout')

@section('content')
    <div class="preview-iframe-wrapper">
        <!-- Video Popup -->
        <div class="video-popup-modal modal fade" id="videobtn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button class="btn-close" id="popupVideoBtnClose" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    <div class="modal-body p-0">
                        <div class="ratio ratio-16x9">
                            <iframe id="homePagePopupVideo"
                                    src="#"
                                    title="معرفی اپلیکیشن" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Area -->
        <div class="demo-header-wrapper">
            <div class="container demo-container">
                <!-- Header Content -->
                <div
                    class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
                    <!-- Logo Wrapper -->
                    <div class="logo-wrapper"><a href="{{route('index')}}"><img src="{{asset('')}}img/core-img/logo.png"
                                                                                alt=""></a></div>
                </div>
            </div>
            <!-- Preview Hero Area -->
            <div class="preview-hero-area"><span class="big-shadow-text">خودرو</span>
                <div class="container demo-container direction-rtl">
                    <div class="row g-2 align-items-center justify-content-between">
                        <div class="col-12 col-lg-3">
                            <h6 class="version-number d-inline-block px-3 py-2 rounded-pill mb-3 lh-1">نسخه نرم افزار -
                                0.0.1 </h6>
                            <h2 class="demo-title mb-3">مدیریت <span>هوشمند </span> خودرو</h2>
                            <ul class="demo-desc ps-0 mb-5">
                                <li><i class="bi bi-check2"></i>ثبت تمام مصرفی های خودرو</li>
                                <li><i class="bi bi-check2"></i>محاسبه خودکار زمان تعویض</li>
                                <li><i class="bi bi-check2"></i>اطلاع رسانی پیامکی</li>
                                <li><i class="bi bi-check2"></i>امکان افزودن بی نهایت خودرو</li>
                                <li><i class="bi bi-check2"></i>امکان انتقال تاریخچه خودرو به مالک جدید</li>
                                <li><i class="bi bi-check2"></i>رایگان</li>
                            </ul>
                            <a class="btn btn-outline-danger btn-lg" href="#features">سایر امکانات ...</a>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="text-center">
                                <iframe class="shadow-lg" src="{{route('start')}}"></iframe>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="text-lg-end">
                                <!-- Mobile Live Preview -->
                                <div class="live-preview-btn mb-3">
                                    <a class="btn btn-primary btn-lg d-lg-none mb-5" href="{{route('start')}}"
                                       target="_blank">ورود
                                        به اپلیکیشن</a>
                                </div>
                                <!-- QR Code -->
                                <div class="qr-code-wrapper"><img class="mb-3" src="{{asset('img/banners/qr.png')}}"
                                                                  alt="">
                                    <h6 class="mb-0">برای ورود به اپلیکیشن <br> کد QR بالا را گوشی خود اسکن کنید</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Features Area -->
            <div class="features-area">
                <div class="container demo-container direction-rtl">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-7 col-xl-6">
                            <div class="section-heading text-center" id="features">
                                <h2 class="display-5 mb-3">امکانات و قابلیت ها</h2>
                                <p class="mb-0">تاخیر در سرویس دوره ای خودرو می تواند عواقب جبران ناپذیر و پرهزینه ای
                                    داشته
                                    باشد<br>
                                    <span class="special-text">با کمک اپلیکیشن هوشمند خودرو دیگر نگرانی از بابت یادآوری سرویس های دوره ای خودرو خود نداشته باشید </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/sms.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">یادآوری پیامکی</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/cars.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">ثبت نامحدود خودرو</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/alarm.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">ثبت نامحدود یادآوری</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/illumination.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">محاسبه خودکار کیلومتر</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/history.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">انتقال تاریخچه سرویس ها</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/yadak.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">معرفی یدکی های تخفیف دار</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/worker.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">نسخه ویژه تعمیرکاران</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3">
                            <div class="card active">
                                <div class="card-body text-center py-5"><img class="mb-4"
                                                                             src="{{asset('img/banners/driver.png')}}"
                                                                             alt="">
                                    <h5 class="mb-0">نسخه ویژه رانندگان</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card active">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="mb-0">تعویض روغن موتور</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="mb-0">تعویض روغن گیربکس</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card active">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض تسمه تایم</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card active">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض شمع و وایر</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض تسمه دینام</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض تسمه هیدرولیک</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض فیلتر بنزین</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card active">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض لنت ها</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض باتری</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض صفحه کلاچ</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض آب رادیاتور</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض واشر سرسیلندر</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض استپر موتور</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">تعویض لاستیک ها</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="card active">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center">
                                        <svg class="bi bi-check text-success" width="32" height="32" viewBox="0 0 16 16"
                                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                  d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"></path>
                                        </svg>
                                        <h6 class="ms-1 mb-0">یادآوری بیمه ماشین</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer Area -->
            <div class="preview-footer-area py-5">
                <div
                    class="container demo-container direction-rtl h-100 d-flex align-items-center justify-content-between">
                    <p class="mb-0">2022 &copy; کلیه حقوق برای مهرانی محفوظ است </p><a class="btn btn-info"
                                                                                       href="{{route('start')}}"
                                                                                       target="_blank">دانلود
                        اپلیکیشن</a>
                </div>
            </div>

        </div>
    </div>
@endsection

