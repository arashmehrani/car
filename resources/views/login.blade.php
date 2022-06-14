@extends('layouts.auth-layout')

@section('content')
    {{--    <!-- Back Button -->
        <div class="login-back-button"><a href="page-register.html">
                <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                </svg></a></div>--}}
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center"><img class="mx-auto mb-4 d-block" src="{{asset('img/banners/login.png')}}" alt="">
                <h3>ورود با شماره موبایل</h3>
                <p>یک کد 4 رقمی برای احراز هویت، به شما پیامک خواهد شد.</p>
            </div>
            <!-- OTP Send Form -->
            <div class="otp-form mt-4">
                <form>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" placeholder="شماره موبایل خود را وارد کنید">
                    </div>
                    <a class="btn btn-warning w-100" href="{{url('verify-number')}}">ارسال</a>
                </form>
            </div>
        </div>
    </div>
@endsection
