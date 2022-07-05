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

    </div>

    @if(isset($transfer))
        <div class="container">
            <div class="alert custom-alert-3 alert-success alert-dismissible fade show" role="alert"><i
                    class="bi bi-check-all"></i>
                <div class="alert-text">
                    <h6>انتقال تاریخچه خودرو</h6><span>درخواست جدیدی جهت انتقال تاریخچه خودرو با بارکد {{$vin}} به پروفایل شما وجود دارد.</span>
                    <a class="btn btn-sm btn-success mt-2" href="{{route('plate.transfer.accept',$transfer->id)}}">دریافت
                        تاریخچه</a>
                    <a class="btn btn-sm btn-outline-danger mt-2" href="{{route('plate.transfer.deny',$transfer->id)}}">رد
                        تاریخچه</a>
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div id="plates-testimonials" class="owl-carousel owl-theme">

        @foreach($plates as $plate)
            <!-- plate slider -->

                <div class="item" id="{{$plate->id}}">

                    <div class="card">
                        <div class="card-body">
                            <div class="btn-plate-card">
                                <div class="dropdown rtl">
                                    <a style="font-size: 20px;" data-toggle="dropdown" href="#" role="button"
                                       id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="{{route('plate.edit',$plate->id)}}">ویرایش
                                                پلاک</a></li>
                                        @if(empty($plate->vin))
                                            <li><a class="dropdown-item" data-bs-toggle="offcanvas"
                                                   data-bs-target="#transfer_{{$plate->id}}"
                                                   aria-controls="transfer_{{$plate->id}}">انتقال پلاک</a></li>
                                        @else
                                            <li><a class="dropdown-item" @if($plate->pending == true)
                                                href="{{route('plate.transfer.info',$plate->id)}}"
                                                   @else
                                                   href="{{route('plate.transfer',$plate->id)}}"
                                                    @endif
                                                >انتقال پلاک</a></li>
                                        @endif
                                        <li><a class="dropdown-item" data-bs-toggle="offcanvas"
                                               data-bs-target="#delete_{{$plate->id}}"
                                               aria-controls="delete_{{$plate->id}}">حذف
                                                پلاک</a></li>
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
                            @if($plate->pending == true)
                                <div class="d-flex align-items-center justify-content-center">
                                    <a href="{{route('plate.transfer.info',$plate->id)}}"><span
                                            class="m-1 badge bg-danger">در انتظار تایید انتقال</span></a>
                                </div>
                            @endif

                            <div class="single-testimonial-slide">

                                <div class="text-content">
                                    <p class="fw-bold mt-2 mb-1">
                                        سرویس های پیش رو:
                                    </p>
                                    @php
                                    $romo = \App\Models\Service::where('user_id',\Illuminate\Support\Facades\Auth::id())
                                    ->where('plate_id', $plate->id)->where('type','روغن موتور')->latest()->first();

                                    $tas = \App\Models\Service::where('user_id',\Illuminate\Support\Facades\Auth::id())
                                    ->where('plate_id', $plate->id)->where('type','تسمه')->latest()->first();

                                    $lent = \App\Models\Service::where('user_id',\Illuminate\Support\Facades\Auth::id())
                                    ->where('plate_id', $plate->id)->where('type','لنت')->latest()->first();
                                    @endphp
                                    <p>
                                        <small>تعویض بعدی روغن موتور تا:
                                            <span>
                                            @if(!empty($romo))
                                                <strong>{{\Carbon\Carbon::parse($romo->time_next)->diffForHumans()}}</strong>
                                            @else
                                                    <strong>ثبت نشده</strong>
                                            @endif
                                            </span>
                                        </small>
                                        <br/>
                                        <small>تعویض بعدی تسمه تایم تا:
                                            <span>
                                            @if(!empty($tas))
                                                    <strong>{{\Carbon\Carbon::parse($tas->time_next)->diffForHumans()}}</strong>
                                                @else
                                                    <strong>ثبت نشده</strong>
                                                @endif
                                            </span>
                                        </small>
                                        <br/>
                                        <small>تعویض بعدی لنت ها تا:
                                            <span>
                                            @if(!empty($lent))
                                                    <strong>{{\Carbon\Carbon::parse($lent->time_next)->diffForHumans()}}</strong>
                                                @else
                                                    <strong>ثبت نشده</strong>
                                                @endif
                                            </span>
                                        </small>
                                    </p>

                                </div>

                            </div>
                            <div class="offcanvas offcanvas-bottom" id="delete_{{$plate->id}}" tabindex="-1"
                                 aria-labelledby="offcanvasBottomLabel" style="height: 59%!important;">
                                <!-- Offcanvas Body -->
                                <div class="offcanvas-body p-4">
                                    <h6>حذف پلاک {{$plate->title}} ؟ </h6>
                                    <p>آیا از حذف این پلاک و تمام اطلاعات آن مطمئن هستید؟</p>
                                    <a href="{{route('plate.delete',$plate->id)}}" class="btn btn-danger">حذف</a>
                                    <a class="btn btn-outline-secondary" data-bs-dismiss="offcanvas"
                                       aria-label="Close">انصراف</a>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-bottom" id="transfer_{{$plate->id}}" tabindex="-1"
                                 aria-labelledby="offcanvasBottomLabel">
                                <!-- Offcanvas Body -->
                                <div class="offcanvas-body p-4">
                                    <p>برای انتقال این پلاک و تاریخچه سرویس های آن به شخص دیگر باید ابتدا بارکد VIN این
                                        خودرو را ثبت نمایید سپس اقدام به انتقال کنید.</p>
                                    <a href="{{route('plate.edit',$plate->id)}}" class="btn btn-primary">ویرایش</a>
                                    <a class="btn btn-outline-secondary" data-bs-dismiss="offcanvas"
                                       aria-label="Close">انصراف</a>
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
                <div class="card" style="height: 252.6px">
                    <div class="card-body mt-4">
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
            <div class="card-body text-center p-5 shadow-sm"><img class="mb-4"
                                                                  src="{{asset('img/banners/banner-02.png')}}"
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
