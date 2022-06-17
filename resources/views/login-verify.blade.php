@extends('layouts.auth-layout')

@section('content')
    <!-- Back Button -->
    <div class="login-back-button"><a href="{{url('/')}}">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg></a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center"><img class="mx-auto mb-4 d-block" src="{{asset('img/banners/login.png')}}" alt="">
                <h3>تایید شماره تلفن</h3>
                <p class="mb-4">کد تایید به شماره <strong class="ms-1">9130010415</strong> ارسال شد</p>
            </div>
            <!-- OTP Verify Form -->
            <div class="otp-verify-form mt-4">
                <form>
                    <div class="input-group mb-3 otp-input-group">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1" tabindex="0">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1" tabindex="1">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1" tabindex="2">
                        <input class="form-control" type="text" value="" placeholder="-" maxlength="1" tabindex="3">
                    </div>
                    <a class="btn btn-warning w-100" href="{{url('/home')}}">تایید و ورود</a>
                </form>
            </div>
            <!-- Term & Privacy Info -->
            <div class="login-meta-data text-center">
                <p class="mt-3 mb-0">کد تایید دریافت نکرده اید؟<span class="otp-sec ms-1" id="resendOTP"></span></p>
            </div>
        </div>
    </div>
@endsection
