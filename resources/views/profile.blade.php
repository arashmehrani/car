@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="user-profile me-3"><img src="{{asset('img/profiles')}}/{{auth()->user()->pic}}" alt=""><i
                        class="bi bi-pencil"></i>
                    <form action="#">
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
                <form action="#" enctype="multipart/form-data">
                    <div class="form-group mb-3">
                        <label class="form-label" for="name">نام و نام خانوادگی</label>
                        <input class="form-control" name="name" id="name" type="text" placeholder="نام"
                               value="{{old('name', auth()->user()->name)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="phone">شماره موبایل</label>
                        <input class="form-control" id="phone" type="text" value="{{auth()->user()->phone}}"
                               placeholder="شماره موبایل" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">استان محل سکونت</label>
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
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">شهر محل سکونت</label>
                        <select class="form-select form-control-clicked" name="city" id="city">
                            @if(auth()->user()->city)
                                <option value="{{auth()->user()->city}}" selected>{{auth()->user()->city}}</option>
                            @endif
                        </select>
                    </div>
                    <button class="btn btn-warning w-100" type="submit">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
@endsection
