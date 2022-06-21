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
                        <label class="form-label" for="p1">شماره پلاک</label>
                    </div>
                    <div class="input-group mb-3 otp-input-group my-placeholder">
                        <input class="form-control text-center" type="number" name="p4" id="p4" value="{{old('p4')}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="2" max="99" min="10" placeholder="--">
                        <input class="form-control text-center" type="number" name="p3" id="p3" value="{{old('p3')}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="3" max="999" min="100" placeholder="---">
                        <select class="form-select form-control-clicked text-center" id="p2"
                                name="p2" aria-label="Default select example">
                            <option value="الف">الف</option>
                            <option value="ب">ب</option>
                            <option value="پ">پ</option>
                            <option value="ت">ت</option>
                            <option value="ث">ث</option>
                            <option value="ج">ج</option>
                            <option value="چ">چ</option>
                            <option value="ح">ح</option>
                            <option value="خ">خ</option>
                            <option value="د">د</option>
                            <option value="ذ">ذ</option>
                            <option value="ر">ر</option>
                            <option value="ز">ز</option>
                            <option value="ژ">ژ</option>
                            <option value="س">س</option>
                            <option value="ش">ش</option>
                            <option value="ص">ص</option>
                            <option value="ض">ض</option>
                            <option value="ط">ط</option>
                            <option value="ظ">ظ</option>
                            <option value="ع">ع</option>
                            <option value="غ">غ</option>
                            <option value="ف">ف</option>
                            <option value="ق">ق</option>
                            <option value="ک">ک</option>
                            <option value="گ">گ</option>
                            <option value="ل">ل</option>
                            <option value="م">م</option>
                            <option value="ن">ن</option>
                            <option value="و">و</option>
                            <option value="ه">ه</option>
                            <option value="ی">ی</option>
                        </select>
                        <input class="form-control text-center" type="number" id="p1" name="p1" value="{{old('p1')}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="2" max="99" min="10" placeholder="--">
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="title">نام خودرو</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="مثال: پراید سفید"
                               value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="km_current">کیلومتر فعلی</label>
                        <input class="form-control" id="km_current" name="km_current" type="number" value="{{old('km_current')}}"
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="km_average">میانگین مسافت طی شده در روز</label>
                        <input class="form-control" id="km_average" name="km_average" type="number" value="{{old('km_average')}}"
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="vin">بارکد ماشین VIN <small>
                                (اختیاری) </small></label>
                        <input class="form-control" id="vin" name="vin" type="text" value="{{old('vin')}}">
                    </div>

                    <button class="btn btn-success w-100 d-flex align-items-center justify-content-center"
                            type="submit">
                        ذخیره
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
