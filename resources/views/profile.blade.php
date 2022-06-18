@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- User Information-->
        <div class="card user-info-card mb-3">
            <div class="card-body d-flex align-items-center">
                <div class="user-profile me-3"><img src="img/bg-img/2.jpg" alt=""><i class="bi bi-pencil"></i>
                    <form action="#">
                        <input class="form-control" type="file">
                    </form>
                </div>
                <div class="user-info">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-1">آرش مهرانی</h5><span class="badge bg-warning ms-2 rounded-pill">پشتیبان</span>
                    </div>
                    <p class="mb-0">البرز ، کرج</p>
                </div>
            </div>
        </div>
        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="card-body">
                <form action="#">
                    <div class="form-group mb-3">
                        <label class="form-label" for="Username">نام</label>
                        <input class="form-control" id="Username" type="text" placeholder="نام">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="fullname">نام خانوادگی</label>
                        <input class="form-control" id="fullname" type="text" placeholder="نام خانوادگی">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">شماره موبایل</label>
                        <input class="form-control" id="email" type="text" value="09130010415" placeholder="شماره موبایل" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">استان محل سکونت</label>
                        <select class="form-select form-control-clicked" name="state" onChange="irancitylist(this.value);" >
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
                        </select>
                    </div>


                    <button class="btn btn-warning w-100" type="submit">بروزرسانی</button>
                </form>
            </div>
        </div>
    </div>
@endsection
