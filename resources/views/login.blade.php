@extends('layouts.auth-layout')

@section('content')
    <div class="login-wrapper d-flex align-items-center justify-content-center">
        <div class="custom-container">
            <div class="text-center"><img class="mx-auto mb-4 d-block" src="{{asset('img/banners/login.png')}}" alt="">
                <h3>ورود با شماره موبایل</h3>
                <p>یک کد 4 رقمی برای احراز هویت، به شما پیامک خواهد شد.</p>
            </div>
            <!-- OTP Send Form -->
            <div class="otp-form mt-4">
                <form method="post" action="{{route('login.post')}}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="phone" name="phone" class="form-control" type="number" required
                               value="{{old('phone')}}"
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               placeholder="شماره موبایل خود را وارد کنید" maxlength="11">
                    </div>
                    @if ($errors->has('phone'))
                        <p>
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </p>
                    @endif
                    <button class="btn btn-warning w-100" type="submit">ارسال</button>
                </form>
            </div>
        </div>
    </div>
@endsection
