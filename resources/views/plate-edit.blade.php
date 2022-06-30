@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>ویرایش مشخصات پلاک</h6>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{route('plate.edit.post')}}">
                    @csrf
                    <input type="hidden" value="{{$plate->id}}" name="plate_id">
                    <div class="form-group mb-0">
                        <label class="form-label" for="p1">شماره پلاک</label>
                    </div>
                    <div class="input-group mb-3 otp-input-group my-placeholder">
                        <input class="form-control text-center" type="number" name="p4" id="p4"
                               value="{{old('p4',$plate->p4)}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="2" max="99" min="10" placeholder="--">
                        <input class="form-control text-center" type="number" name="p3" id="p3"
                               value="{{old('p3',$plate->p3)}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="3" max="999" min="100" placeholder="---">
                        <select class="form-select form-control-clicked text-center" id="p2"
                                name="p2" aria-label="Default select example">
                            <option selected value="{{$plate->p2}}">{{$plate->p2}}</option>
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
                        <input class="form-control text-center" type="number" id="p1" name="p1"
                               value="{{old('p1',$plate->p1)}}"
                               required
                               oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);
                               this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]" maxlength="2" max="99" min="10" placeholder="--">

                    </div>
                    @if ($errors->has('plate'))
                        <p>
                            <small class="text-danger">{{ $errors->first('plate') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="company">کمپانی سازنده خودرو</label>
                        <select class="form-select form-control-clicked text-center" id="company"
                                name="company" aria-label="Default select example">
                            <option selected value="{{$plate->company}}">{{$plate->company}}</option>
                            @foreach($companies as $company)
                                <option value="{{$company->name}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @if ($errors->has('company'))
                        <p>
                            <small class="text-danger">{{ $errors->first('company') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="title">عنوان خودرو</label>
                        <input class="form-control" id="title" name="title" type="text" placeholder="مثال: پراید سفید"
                               value="{{old('title',$plate->title)}}">
                    </div>
                    @if ($errors->has('title'))
                        <p>
                            <small class="text-danger">{{ $errors->first('title') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="km_current">کیلومتر فعلی</label>
                        <input class="form-control" id="km_current" name="km_current" type="number"
                               value="{{old('km_current',$plate->km_current)}}"
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    @if ($errors->has('km_current'))
                        <p>
                            <small class="text-danger">{{ $errors->first('km_current') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="km_average">میانگین مسافت طی شده در روز</label>
                        <input class="form-control" id="km_average" name="km_average" type="number"
                               value="{{old('km_average',$plate->km_average)}}"
                               oninput="javascript: this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                               pattern="[0-9]">
                    </div>
                    @if ($errors->has('km_average'))
                        <p>
                            <small class="text-danger">{{ $errors->first('km_average') }}</small>
                        </p>
                    @endif
                    <div class="form-group">
                        <label class="form-label" for="vin">بارکد ماشین VIN <small>
                                (اختیاری) </small></label>
                        <input class="form-control" id="vin" name="vin" type="text" value="{{old('vin',$plate->vin)}}">
                    </div>
                    @if ($errors->has('vin'))
                        <p>
                            <small class="text-danger">{{ $errors->first('vin') }}</small>
                        </p>
                    @endif

                    <button class="btn btn-success w-100 d-flex align-items-center justify-content-center"
                            type="submit">
                        ویرایش
                    </button>

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
