@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>افزودن ماشین جدید</h6>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="#" method="GET">
                    <div class="form-group mb-0">
                        <label class="form-label" for="exampleInputemail">شماره پلاک</label>
                    </div>
                    <div class="input-group mb-3 otp-input-group">
                        <input class="form-control" type="text" value="" placeholder="1" maxlength="2" tabindex="0">
                        <input class="form-control" type="text" value="" placeholder="2" maxlength="3" tabindex="1">
                        <select class="form-select form-control-clicked" id="defaultSelect" name="defaultSelect" aria-label="Default select example">
                            <option value="1" selected="">الف</option>
                            <option value="2">ب</option>
                            <option value="3">پ</option>
                            <option value="3">پ</option>
                            <option value="3">پ</option>
                            <option value="3">پ</option>
                            <option value="3">پ</option>
                        </select>
                        <input class="form-control" type="text" value="" placeholder="4" maxlength="2" tabindex="3">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="exampleInputemail">نام خودرو</label>
                        <input class="form-control" id="exampleInputemail" type="text" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputemail">کیلومتر فعلی</label>
                        <input class="form-control" id="exampleInputemail" type="text" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputemail">میانگین مسافت طی شده در روز</label>
                        <input class="form-control" id="exampleInputemail" type="text" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="exampleInputemail">بارکد ماشین VIN <small> (اختیاری) </small></label>
                        <input class="form-control" id="exampleInputemail" type="text" placeholder="">
                    </div>

                    <button class="btn btn-warning w-100 d-flex align-items-center justify-content-center" type="button">
                        ثبت خودرو جدید
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
