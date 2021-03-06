@extends('layouts.auth-layout')

@section('content')
    <!-- Back Button -->
    <div class="login-back-button"><a href="{{route('login')}}">
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
                <p class="mb-4">کد تایید به شماره <strong class="ms-1">{{session('phone')}}</strong> پیامک شد</p>
            </div>
            <!-- OTP Verify Form -->
            <div class="otp-verify-form mt-4">
                <form method="post">
                    @csrf
                    <div class="input-group mb-3 otp-input-group my-placeholder">

                        <input class="form-control" type="number" id='code' name="code" required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]"
                               autocomplete="one-time-code"
                               maxlength="4" max="9999" min="0" placeholder="- - - -">
                    </div>
                    @if ($errors->any())
                        <p>
                            <small class="text-danger">{{$errors->first()}}</small>
                        </p>
                    @endif
                    <button class="btn btn-warning w-100" type="submit">تایید و ورود</button>
                </form>
            </div>
            <!-- Term & Privacy Info -->
            <div class="login-meta-data text-center mt-3">
                <a class=" mb-0" href="#"><small>کد تایید دریافت نکرده اید؟</small></a>
            </div>
        </div>
    </div>
@endsection
