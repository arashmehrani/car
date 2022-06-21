@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="user-profile me-3"><img src="{{asset('img/profiles')}}/{{auth()->user()->pic}}" alt=""><i
                        class="bi bi-pencil"></i>
                    <form action="#" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control" type="file" name="pic">
                    </form>
                </div>
                <div class="user-info">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-1">{{auth()->user()->name}}</h5>
                    </div>
                    <p class="mb-0">
                        @if(empty(auth()->user()->state))
                            استان ، شهر
                        @else
                            {{auth()->user()->state}} ، {{auth()->user()->city}}
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="card-body">
                <form method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="name">نام و نام خانوادگی</label>
                        <input class="form-control" name="name" id="name" type="text" placeholder="نام"
                               value="{{old('name', auth()->user()->name)}}">
                    </div>
                    @if ($errors->has('name'))
                        <p>
                            <small class="text-danger">{{ $errors->first('name') }}</small>
                        </p>
                    @endif
                    <div class="form-group mb-3">
                        <label class="form-label" for="phone">شماره موبایل</label>
                        <input class="form-control" id="phone" type="text" value="{{auth()->user()->phone}}"
                               placeholder="شماره موبایل" readonly>
                    </div>
                    @if ($errors->has('phone'))
                        <p>
                            <small class="text-danger">{{ $errors->first('phone') }}</small>
                        </p>
                    @endif
                    <div class="form-group mb-3">
                        <label class="form-label" for="state">استان محل سکونت</label>
                        <select class="form-select form-control-clicked" name="state"
                                onChange="irancitylist(this.value);">
                            @if(auth()->user()->state)
                                <option value="{{auth()->user()->state}}" selected>{{auth()->user()->state}}</option>
                            @endif
                            <option value="0">لطفا استان را انتخاب نمایید</option>
                            <option value="تهران">تهران</option>
                            <option value="گیلان">گیلان</option>
                            <option value="آذربایجان شرقی">آذربایجان شرقی</option>
                            <option value="خوزستان">خوزستان</option>
                            <option value="فارس">فارس</option>
                            <option value="اصفهان">اصفهان</option>
                            <option value="خراسان رضوی">خراسان رضوی</option>
                            <option value="قزوین">قزوین</option>
                            <option value="سمنان">سمنان</option>
                            <option value="قم">قم</option>
                            <option value="مرکزی">مرکزی</option>
                            <option value="زنجان">زنجان</option>
                            <option value="مازندران">مازندران</option>
                            <option value="گلستان">گلستان</option>
                            <option value="اردبیل">اردبیل</option>
                            <option value="آذربایجان غربی">آذربایجان غربی</option>
                            <option value="همدان">همدان</option>
                            <option value="کردستان">کردستان</option>
                            <option value="کرمانشاه">کرمانشاه</option>
                            <option value="لرستان">لرستان</option>
                            <option value="بوشهر">بوشهر</option>
                            <option value="کرمان">کرمان</option>
                            <option value="هرمزگان">هرمزگان</option>
                            <option value="چهارمحال و بختیاری">چهارمحال و بختیاری</option>
                            <option value="یزد">یزد</option>
                            <option value="سیستان و بلوچستان">سیستان و بلوچستان</option>
                            <option value="ایلام">ایلام</option>
                            <option value="کهگلویه و بویراحمد">کهگلویه و بویراحمد</option>
                            <option value="خراسان شمالی">خراسان شمالی</option>
                            <option value="خراسان جنوبی">خراسان جنوبی</option>
                            <option value="البرز">البرز</option>
                        </select>
                    </div>
                    @if ($errors->has('state'))
                        <p>
                            <small class="text-danger">{{ $errors->first('state') }}</small>
                        </p>
                    @endif
                    <div class="form-group mb-3">
                        <label class="form-label" for="city">شهر محل سکونت</label>
                        <select class="form-select form-control-clicked" name="city" id="city">
                            @if(auth()->user()->city)
                                <option value="{{auth()->user()->city}}" selected>{{auth()->user()->city}}</option>
                            @endif
                        </select>
                    </div>
                    @if ($errors->has('city'))
                        <p>
                            <small class="text-danger">{{ $errors->first('city') }}</small>
                        </p>
                    @endif
                    <button class="btn btn-success w-100" type="submit">ذخیره</button>
                </form>
            @if(Session::has('msg'))
                <!-- Success Toast-->
                    <div class="mt-3 toast toast-autohide custom-toast-1 toast-success" role="alert"
                         aria-live="assertive" aria-atomic="true" data-bs-delay="1500" data-bs-autohide="true">
                        <div class="toast-body">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                 class="bi bi-bell" viewBox="0 0 16 16">
                                <path
                                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                            </svg>
                            <div class="toast-text ms-3 me-2">
                                <p class="mb-0 text-white"><small>{{session('msg')}}</small></p>
                            </div>
                        </div>
                        <button class="btn btn-close btn-close-white position-absolute p-1" type="button"
                                data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
