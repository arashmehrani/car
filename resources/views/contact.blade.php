@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="mb-3">تماس با پشتیبانی</h5>
                <div class="contact-form">
                    <form action="#">
                        <div class="form-group mb-3">
                            <input class="form-control" name="name" type="text" placeholder="نام و نام خانوادگی"
                                   value="{{old('name',auth()->user()->name)}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <input class="form-control" name="phone" type="text" placeholder="شماره تماس"
                                   value="{{old('phone',auth()->user()->phone)}}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-select" name="topic">
                                <option value="">درخواست همکاری</option>
                                <option value="">گزارش مشکل</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="message" cols="30" rows="10"
                                      placeholder="متن پیام">{{old('message')}}</textarea>
                        </div>
                        <button class="btn btn-primary w-100">ارسال پیام</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
