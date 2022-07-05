@extends('layouts.app-layout')

@section('content')
    <div class="top-products-area">
        <div class="container">
            <div class="row g-3">
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="d-flex align-items-center justify-content-center">
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

                <!-- Single romo Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <div>
                                <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.romo',$id)}}">
                                    <img src="{{asset('img/core-img/icon-rm.png')}}" alt="">
                                    <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                                <!-- Service Title -->
                                <h6 class="mt-2 d-block text-truncate text-center">
                                    روغن موتور و فیلترها</h6>
                                <!-- Service info -->

                            </div>
                            @if(!empty($romo))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$romo->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$romo->km_next}}</span></p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($romo->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.romo',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                        </div>
                    </div>
                    <div class="add-services">
                        <a class="text-white" href="{{route('service.romo',$id)}}">
                            <div class="add-service">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                    <path
                                        d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                    <path
                                        d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                </svg>
                                <small> سرویس جدید</small>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single rogi Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.rogi',$id)}}">
                                <img src="{{asset('img/core-img/icon-rg.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                روغن گیربکس (واسکازین)</h6>
                            <!-- Service info -->
                            @if(!empty($rogi))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$rogi->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$rogi->km_next}}</span></p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($rogi->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.rogi',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.rogi',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single tas Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.tas',$id)}}">
                                <img src="{{asset('img/core-img/icon-tt.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                تسمه ها (تایم و...)</h6>
                            <!-- Service info -->
                            @if(!empty($tas))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$tas->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$tas->km_next}}</span></p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($tas->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.tas',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.tas',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single sham Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.sham',$id)}}">
                                <img src="{{asset('img/core-img/icon-sh.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                شمع و وایر ها</h6>
                            <!-- Service info -->
                            @if(!empty($sham))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$sham->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$sham->km_next}}</span></p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($sham->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.sham',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.sham',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single lent Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.lent',$id)}}">
                                <img src="{{asset('img/core-img/icon-ln.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                لنت های ترمز</h6>
                            <!-- Service info -->
                            @if(!empty($lent))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$lent->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$lent->km_next}}</span></p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($lent->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.lent',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.lent',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single battery Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.battery',$id)}}">
                                <img src="{{asset('img/core-img/icon-bt.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                باتری</h6>
                            <!-- Service info -->
                            @if(!empty($battery))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$battery->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$battery->km_next}}</span>
                                                </p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($battery->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.battery',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.battery',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single clutch Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.clutch',$id)}}">
                                <img src="{{asset('img/core-img/icon-sk.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                دیسک و صفحه کلاچ</h6>
                            <!-- Service info -->
                            @if(!empty($clutch))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$clutch->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$clutch->km_next}}</span>
                                                </p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($clutch->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.clutch',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.clutch',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single vasher Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.vasher',$id)}}">
                                <img src="{{asset('img/core-img/icon-vs.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                واشر سر سیلندر</h6>
                            <!-- Service info -->
                            @if(!empty($vasher))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$vasher->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$vasher->km_next}}</span>
                                                </p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($vasher->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.vasher',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.vasher',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single lastik Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.lastik',$id)}}">
                                <img src="{{asset('img/core-img/icon-ls.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                لاستیک ها</h6>
                            <!-- Service info -->
                            @if(!empty($lastik))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$lastik->created_at->diffForHumans()}}</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <span>{{$lastik->km_next}}</span>
                                                </p>
                                                <p>زمان بعدی تعویض:
                                                    <span>{{\Carbon\Carbon::parse($lastik->time_next)->diffForHumans()}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.lastik',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p class="mb-1">کیلومتر بعدی تعویض: <strong>ثبت نشده</strong></p>
                                                <p>زمان بعدی تعویض: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.lastik',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single bime Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="{{route('service.bime',$id)}}">
                                <img src="{{asset('img/core-img/icon-bm.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center" style="font-size: 0.9rem;">
                                یاد آوری بیمه ماشین</h6>
                            <!-- Service info -->


                            @if(!empty($bime))
                                <div class="card timeline-card bg-light mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">{{$bime->created_at->diffForHumans()}}</span>
                                                @if(!empty($bime->time_next))
                                                    <p>زمان بعدی یادآوری:
                                                        <span>{{$bime->time_next->diffForHumans()}}</span>
                                                        دیگر </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <a class="btn m-1 btn-light shadow-sm"
                                               href="{{route('timeline.bime',$id)}}">
                                                <svg class="bi bi-eye me-2" width="16" height="16" viewBox="0 0 16 16"
                                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                          d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"></path>
                                                    <path fill-rule="evenodd"
                                                          d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                                                </svg>
                                                نمایش جزئیات</a>
                                        </div>

                                    </div>
                                </div>
                            @else
                                <div class="card timeline-card bg-secondary mt-3 shadow-sm">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="timeline-text mb-0"><span
                                                    class="badge bg-secondary mb-2 rounded-pill">آخرین ثبت: هرگز</span>
                                                <p>زمان بعدی یادآوری: <strong>ثبت نشده</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="{{route('service.bime',$id)}}">
                                <div class="add-service">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-wrench-adjustable" viewBox="0 0 16 16">
                                        <path
                                            d="M16 4.5a4.492 4.492 0 0 1-1.703 3.526L13 5l2.959-1.11c.027.2.041.403.041.61Z"></path>
                                        <path
                                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.49 4.49 0 0 0 11.5 9Zm-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376ZM3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"></path>
                                    </svg>
                                    <small> سرویس جدید</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
