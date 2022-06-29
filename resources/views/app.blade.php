@extends('layouts.app-layout')

@section('content')
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
        <!-- Element Heading -->
{{--        <div class="element-heading">
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

        </div>--}}
    </div>
    <div class="container">
        <div id="plates-testimonials" class="owl-carousel owl-theme">

            @foreach($plates as $plate)
                <!-- plate slider -->

                <div class="item" id="{{$plate->id}}">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="btn-plate-card">
                                <div class="dropdown rtl">
                                    <a style="font-size: 22px;" data-toggle="dropdown" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-plus-circle"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">حذف پلاک</a></li>
                                        <li><a class="dropdown-item" href="#">انتقال پلاک</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="mb-2"><span>{{$plate->title}}</span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">

                                <div class="plate-div registration-ui">
                                    <div class="plate-1">
                                        <span>{{$plate->p3}}</span>
                                        <span>{{$plate->p2}}</span>
                                        <span>{{$plate->p1}}</span>
                                    </div>
                                    <span class="plate-2">{{$plate->p4}}</span>
                                </div>
                            </div>

                            <div class="single-testimonial-slide">

                                <div class="text-content">
                                    <p class="fw-bold mt-2 mb-1">
                                        سرویس های پیش رو:
                                    </p>
                                    <p>
                                        <small>تعویض بعدی روغن موتور در
                                            <span> <strong>ثبت نشده</strong> </span>
                                        </small>
                                        <br/>
                                        <small>تعویض بعدی تسمه تایم
                                            <span> <strong>ثبت نشده</strong> </span>
                                        </small>
                                        <br/>
                                        <small>تعویض بعدی روغن گیربکس
                                            <span> <strong>ثبت نشده</strong> </span>
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="add-services">
                        <a class="text-white" href="{{route('service.select', $plate->id)}}">
                            <div class="add-service"><small>افزودن سرویس جدید</small></div>
                        </a>
                    </div>

                </div>

            @endforeach
                <div class="item">
                    <div class="card" style="height: 236.6px">
                        <div class="card-body">
                            <div class="mt-5">
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="mb-2"><span> خودرو جدید</span></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-center">

                                    <div class="plate-div registration-ui">
                                        <div class="plate-1">
                                            <span>- -</span>
                                            <span>- - -</span>
                                            <span>- -</span>
                                        </div>
                                        <span class="plate-2">- -</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-services">
                        <a class="text-white" href="{{route('plate.new')}}">
                            <div class="add-service"><small>ثبت خودرو جدید</small></div>
                        </a>
                    </div>

                </div>
        </div>

    </div>

    <div class="container mt-3">
        <div class="card bg-warning shadow-sm">
            <div class="card-body text-center">
                <h3 class="mb-3">ویژه صاحبان تعمیرگاه ها</h3>
                <p class="text-black">آیا مشتریان شما نیاز به مدیریت و یادآوری جهت سرویس های دوره ای دارند؟ اپلیکیشن
                    ماشین راه حل شماست. </p>
                <a class="btn btn-outline-dark" href="#">اطلاعات بیشتر</a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card shadow-sm">
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
            <div class="card-body text-center p-5 shadow-sm"><img class="mb-4" src="{{asset('img/banners/banner-02.png')}}"
                                                        alt="">
                <h6 class="mb-4 lh-base">معرفی کسب و کار خودرویی شما در اپلیکیشن ماشین</h6><a
                    class="btn btn-creative btn-danger btn-lg" href="{{route('support')}}">شروع همکاری</a>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            stagePadding: 30,
            autoplay: false,
            autoHeight: false,
            items: 1,
            loop: false,
            touchDrag: true,
            margin: 7,
            nav: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
            var id = $(".owl-item.active :first-child").attr('id');
            console.log('Image current is ' + id);

    </script>

@endsection

@if(auth()->user()->name == 'کاربر جدید' or empty(auth()->user()->city) or empty(auth()->user()->state))
    @section('javascript')
        <script>
            var profileModal = new bootstrap.Modal(document.getElementById('profile'), {})
            profileModal.toggle()
        </script>
    @endsection
@endif
