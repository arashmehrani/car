@extends('layouts.app-layout')

@section('content')
    <div class="top-products-area">
        <div class="container">
            <div class="row g-3">
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p1.jpg" alt="">
                                <!-- Badge --><span class="badge bg-warning">Sale</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Wooden Tool</a>
                            <!-- Product Price -->
                            <p class="sale-price">$9.89<span>$13.42</span></p><a class="btn btn-outline-info btn-sm" href="#">
                                <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg>Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p2.jpg" alt="">
                                <!-- Badge --><span class="badge bg-primary">-10%</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Atoms Musk</a>
                            <!-- Product Price -->
                            <p class="sale-price">$3.36<span>$5.99</span></p><a class="btn btn-outline-info btn-sm" href="#">
                                <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg>Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card-->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p3.jpg" alt="">
                                <!-- Badge --><span class="badge bg-info">-15%</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Black T-shirt</a>
                            <!-- Product Price -->
                            <p class="sale-price">$10.99<span>$12</span></p><a class="btn btn-outline-info btn-sm" href="#">
                                <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg>Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card-->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p4.jpg" alt="">
                                <!-- Badge --><span class="badge bg-primary">Sale</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Headphone</a>
                            <!-- Product Price -->
                            <p class="sale-price">$2.99<span>$4</span></p><a class="btn btn-outline-danger btn-sm disabled" href="#">
                                <svg class="bi bi-cart-x me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>Out of Stock</a>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p5.jpg" alt="">
                                <!-- Badge --><span class="badge bg-danger">Sale</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Crispy Biscuit</a>
                            <!-- Product Price -->
                            <p class="sale-price">$0.78<span>$1.12</span></p><a class="btn btn-outline-info btn-sm" href="#">
                                <svg class="bi bi-cart me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path>
                                </svg>Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Single Top Product Card -->
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card single-product-card">
                        <div class="card-body p-3">
                            <!-- Product Thumbnail --><a class="product-thumbnail d-block" href="page-shop-details.html"><img src="img/bg-img/p6.jpg" alt="">
                                <!-- Badge --><span class="badge bg-primary">Hot</span></a>
                            <!-- Product Title --><a class="product-title d-block text-truncate" href="page-shop-details.html">Sports Shoes</a>
                            <!-- Product Price -->
                            <p class="sale-price">$110<span>$128</span></p><a class="btn btn-outline-danger btn-sm disabled" href="#">
                                <svg class="bi bi-cart-x me-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"></path>
                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                                </svg>Out of Stock</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
