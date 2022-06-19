@extends('layouts.auth-layout')

@section('content')
    <!-- Back Button -->
    <div class="login-back-button"><a href="{{url('/')}}">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                 xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg>
        </a></div>
    <!-- Login Wrapper Area -->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center"><img class="mx-auto mb-4 d-block" src="{{asset('img/banners/login.png')}}" alt="">
                <h3>تایید شماره تلفن</h3>
                <p class="mb-4">کد تایید به شماره <strong class="ms-1">{{session('phone')}}</strong> ارسال شد</p>
            </div>
            <!-- OTP Verify Form -->
            <script>
                function clickEvent(first, last) {
                    if (first.value.length) {
                        document.getElementById(last).focus();
                    }
                }
            </script>
            <div class="otp-verify-form mt-4">
                <form method="post">
                    @csrf
                    <div class="input-group mb-3 otp-input-group">
                        <input class="form-control" type="number" id="fourth"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               maxlength="1" max="9" min="0" placeholder="-"
                               onkeyup="clickEvent(this,'fifth')">
                        <input class="form-control" type="number" id="third"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               maxlength="1" max="9" min="0" placeholder="-"
                               onkeyup="clickEvent(this,'fourth')">
                        <input class="form-control" type="number" id="sec"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               maxlength="1" max="9" min="0" placeholder="-"
                               onkeyup="clickEvent(this,'third')">
                        <input class="form-control" type="number" id='ist'
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                               maxlength="1" max="9" min="0" placeholder="-"
                               onkeyup="clickEvent(this,'sec')">
                    </div>
                    <button class="btn btn-warning w-100" type="submit">تایید و ورود</button>
                </form>

            </div>
            <!-- Term & Privacy Info -->
            <div class="login-meta-data text-center">
                <p class="mt-3 mb-0">کد تایید دریافت نکرده اید؟<span class="otp-sec ms-1" id="resendOTP"></span></p>
            </div>
        </div>
    </div>
@endsection
