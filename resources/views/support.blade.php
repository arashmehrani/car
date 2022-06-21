@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Contact Form -->
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="mb-3">تماس با پشتیبانی</h5>
                <div class="contact-form">
                    <form method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <input class="form-control" name="name" type="text" placeholder="نام و نام خانوادگی"
                                   value="{{old('name',auth()->user()->name)}}" readonly>
                        </div>
                        @if ($errors->has('name'))
                            <p>
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </p>
                        @endif
                        <div class="form-group mb-3">
                            <input class="form-control" name="phone" type="text" placeholder="شماره تماس"
                                   value="{{old('phone',auth()->user()->phone)}}" readonly>
                        </div>
                        @if ($errors->has('phone'))
                            <p>
                                <small class="text-danger">{{ $errors->first('phone') }}</small>
                            </p>
                        @endif
                        <div class="form-group mb-3">
                            <select class="form-select" name="subject">
                                <option value="درخواست همکاری">درخواست همکاری</option>
                                <option value="گزارش مشکل">گزارش مشکل</option>
                            </select>
                        </div>
                        @if ($errors->has('subject'))
                            <p>
                                <small class="text-danger">{{ $errors->first('subject') }}</small>
                            </p>
                        @endif
                        <div class="form-group mb-3">
                            <textarea class="form-control" name="message" cols="30" rows="10"
                                      placeholder="متن پیام">{{old('message')}}</textarea>
                        </div>
                        @if ($errors->has('message'))
                            <p>
                                <small class="text-danger">{{ $errors->first('message') }}</small>
                            </p>
                        @endif
                        <button class="btn btn-success w-100" type="submit">ارسال پیام</button>
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
    </div>
@endsection
