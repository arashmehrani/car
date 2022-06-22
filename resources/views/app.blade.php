@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <div class="row gx-2 align-items-end">
                <div class="col-4 text-end"><a class="btn btn-warning btn-sm mb-4 text-white"
                                               href="{{route('plate.new')}}">ماشین جدید </a>
                </div>
                <div class="col-8">
                    <div class="image-gallery-text mb-4">
                        <h6 class="mb-0">ماشین های من</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">

        <div class="modal fade" id="profile" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
             aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="staticBackdropLabel">تکمیل پروفایل</h6>
                    </div>
                    <div class="modal-body">
                        <p class="mb-0">لطفا در راستای ارائه سرویس با کیفیت تر، اطلاعات پروفایل خود را تکمیل نمایید.</p>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-sm btn-success" href="{{route('profile')}}">تکمیل پروفایل</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="testimonial-slide-one-wrapper">
            <div class="testimonial-slide testimonial-style1">
                <!-- plate slider -->
                <div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mb-2"><span>پراید</span> <span>سفید</span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                                <div class="plate-div registration-ui">
                                    <div class="plate-1">
                                        <span>۲۱۴</span>
                                        <span>ل</span>
                                        <span>۳۸</span>
                                    </div>
                                    <span class="plate-2">۱۵</span>
                                </div>
                            </div>

                            <div class="single-testimonial-slide">

                                <div class="text-content">
                                    <p class="fw-bold mt-2 mb-1">
                                        سرویس های پیش رو:
                                    </p>
                                    <p>
                                        <small>تعویض بعدی روغن موتور در کیلومتر 240000</small>
                                        <br/>
                                        <small>تعویض بعدی تسمه تایم در کیلومتر 243000</small>
                                        <br/>
                                        <small>تعویض بعدی روغن گیربکس در کیلومتر 223150</small>
                                    </p>
                                </div>

                            </div>
                            <div class="d-flex align-items-start justify-content-start">
                                <p class="mb-2"><a href="{{route('service.select')}}" class="btn btn-primary btn-sm">افزودن
                                        سرویس جدید</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- plate slider -->
                <div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mb-2"><span>پژو</span> <span>نقره ای</span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                                <div class="plate-div registration-ui">
                                    <div class="plate-1">
                                        <span>۳۱۴</span>
                                        <span>ب</span>
                                        <span>۱۳</span>
                                    </div>
                                    <span class="plate-2">۴۴</span>
                                </div>
                            </div>

                            <div class="single-testimonial-slide">

                                <div class="text-content">
                                    <p class="fw-bold mt-2 mb-1">
                                        سرویس های پیش رو:
                                    </p>
                                    <p>
                                        <small>تعویض بعدی روغن موتور در 15 روز دیگر</small>
                                        <br/>
                                        <small>تعویض بعدی تسمه تایم در 93 روز دیگر</small>
                                        <br/>
                                        <small>تعویض بعدی روغن گیربکس در 36 روز دیگر</small>
                                    </p>
                                </div>

                            </div>
                            <div class="d-flex align-items-start justify-content-start">
                                <p class="mb-2"><a href="{{route('service.select')}}" class="btn btn-primary btn-sm">افزودن
                                        سرویس جدید</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card bg-warning">
            <div class="card-body text-center">
                <h3 class="mb-3">ویژه صاحبان تعمیرگاه ها</h3>
                <p class="text-black">آیا مشتریان شما نیاز به مدیریت و یادآوری جهت سرویس های دوره ای دارند؟ اپلیکیشن
                    ماشین راه حل شماست. </p>
                <a class="btn btn-outline-dark" href="#">اطلاعات بیشتر</a>
            </div>
        </div>
    </div>


    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
                <h2>پیشنهاد ویژه در شهر شما</h2>
                <div class="testimonial-slide-three-wrapper">
                    <div class="testimonial-slide3 testimonial-style3">
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content">

                                <span class="d-inline-block badge bg-danger mb-2">کد تخفیف: mehrani</span>

                                <h6 class="mb-2 pt-2">خرید لاستیک با 30% تخفیف</h6><span class="d-block"><small>- کرج ، خیابان سهروردی</small></span>
                                <div class="d-flex align-items-start justify-content-start mt-3">
                                    <p class="mb-2"><a href="#" class="btn btn-outline-primary btn-sm">جزئیات بیشتر</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content">

                                <span class="d-inline-block badge bg-danger mb-2">کد تخفیف: mehrani</span>

                                <h6 class="mb-2 pt-2">تعویض روغن با 15% تخفیف</h6><span class="d-block"><small>- کرج ، خیابان درختی</small></span>
                                <div class="d-flex align-items-start justify-content-start mt-3">
                                    <p class="mb-2"><a href="#" class="btn btn-outline-primary btn-sm">جزئیات بیشتر</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <div class="text-content">

                                <span class="d-inline-block badge bg-danger mb-2">کد تخفیف: mehrani</span>

                                <h6 class="mb-2 pt-2">بیمه ماشین با 30% تخفیف</h6><span class="d-block"><small>- کرج ، خیابان هفت تیر</small></span>
                                <div class="d-flex align-items-start justify-content-start mt-3">
                                    <p class="mb-2"><a href="#" class="btn btn-outline-primary btn-sm">جزئیات بیشتر</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card mt-3">
            <div class="card-body text-center p-5"><img class="mb-4" src="{{asset('img/banners/banner-02.png')}}"
                                                        alt="">
                <h6 class="mb-4 lh-base">معرفی کسب و کار خودرویی شما در اپلیکیشن ماشین</h6><a
                    class="btn btn-creative btn-danger btn-lg" href="{{route('support')}}">شروع همکاری</a>
            </div>
        </div>
    </div>

@endsection

@if(auth()->user()->name == 'کاربر جدید' or empty(auth()->user()->city) or empty(auth()->user()->state))
    @section('javascript')
        <script>
            var profileModal = new bootstrap.Modal(document.getElementById('profile'), {})
            profileModal.toggle()
        </script>
    @endsection
@endif

