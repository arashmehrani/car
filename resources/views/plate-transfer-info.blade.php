@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading">
            <h6>انتقال در انتظار تایید</h6>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="alert custom-alert-1 alert-info alert-dismissible fade show text-justify" role="alert">
                    توجه: شما قبلا درخواستی جهت انتقال تاریخچه سرویس های این خودرو به مالک جدید به
                    شماره {{$new_user->phone}} ثبت کرده
                    اید. در صورت انصراف از انتقال لطفا روی دکمه انصراف از انتقال کلیک کنید.
                </div>

                <div class="d-flex align-items-center justify-content-center mt-3">

                    <div class="plate-div registration-ui">
                        <div class="plate-1">
                            <span>{{$plate->p3}}</span>
                            <span>{{$plate->p2}}</span>
                            <span>{{$plate->p1}}</span>
                        </div>
                        <span class="plate-2">{{$plate->p4}}</span>
                    </div>
                </div>
                <di class="d-flex align-items-center justify-content-center mt-2">
                    <p>VIN: <span>{{$plate->vin}}</span></p>
                </di>

                <form method="post" action="{{route('plate.transfer.post')}}">
                    @csrf
                    <input type="hidden" value="{{$plate->id}}" name="plate_id">
                    <input type="hidden" value="{{$transfer->id}}" name="transfer_id">
                    <button class="btn btn-danger w-100 d-flex align-items-center justify-content-center"
                            type="submit">
                        انصراف از انتقال
                    </button>
                    <a href="{{route('plate.transfer.hide',$plate->id)}}"
                       class="mt-2 btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center">
                        عدم نمایش این پلاک
                    </a>

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
