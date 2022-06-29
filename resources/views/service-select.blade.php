@extends('layouts.app-layout')

@section('content')
    <div class="top-products-area">
        <div class="container">
            <div class="row g-3">

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-rm.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                روغن موتور و فیلترها</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>

                        </div>
                    </div>
                    <div class="add-services">
                        <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-rg.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                روغن گیربکس (واسکازین)</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-tt.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                تسمه ها (تایم و...)</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-sh.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                شمع و وایر ها</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-bn.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                فیلتر و کنیستر بنزین</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-ln.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                لنت های ترمز</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-bt.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                باتری</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-sk.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                دیسک و صفحه کلاچ</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-ab.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                آب و ضدیخ رادیاتور</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-vs.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                واشر سر سیلندر</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-st.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                استپر موتور</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-ls.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center">
                                لاستیک ها</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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

                <!-- Single Top Service Card -->
                <div class="col-12 col-sm-12 col-lg-6">
                    <div class="card single-product-card shadow-sm">
                        <div class="card-body p-3">
                            <!-- Service Thumbnail --><a class="product-thumbnail d-block text-center" href="#">
                                <img src="{{asset('img/core-img/icon-bm.png')}}" alt="">
                                <!-- Badge -->{{--<span class="badge bg-warning">جدید</span>--}}</a>
                            <!-- Service Title -->
                            <h6 class="mt-2 d-block text-truncate text-center" style="font-size: 0.9rem;">
                                یاد آوری بیمه ماشین</h6>
                            <!-- Service info -->
                            <p class=""><small>آخرین ثبت: <span>23 روز پیش</span></small></p>
                        </div>
                        <div class="add-services">
                            <a class="text-white" href="#">
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
