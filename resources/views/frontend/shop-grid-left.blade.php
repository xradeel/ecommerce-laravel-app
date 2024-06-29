@extends('frontend.layouts.main')
@section('title', 'Shop')
@section('main-container')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">Home</a>
                    <span></span> Shop
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="row product-grid-3">
                            @foreach ($products as $product)
                                <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom h-280">
                                                <a href="{{ url('/product/' . $product->accesstoken) }}">
                                                    <img class="default-img"
                                                        src="{{ asset('storage/' . $product->thumbnail1) }}" alt="">
                                                    <img class="hover-img"
                                                        src="{{ asset('storage/' . $product->thumbnail2) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                    <i class="fi-rs-search"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $product->tag }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="{{ url('/shop-left') }}">{{ $product->category }}</a>
                                            </div>
                                            <h2><a href="{{ url('/product') }}">{{ $product->name }}</a></h2>
                                            <div class="rating-result" title="90%">
                                                <span>
                                                    <span>90%</span>
                                                </span>
                                            </div>
                                            <div class="product-price">
                                                @php
                                                    $price = $product->price;
                                                    $discount = $product->discount;
                                                    $discountedPrice = ($price * $discount) / 100;
                                                    $discountedPrice = $price - $discountedPrice;
                                                @endphp
                                                <span>${{ $discountedPrice }} </span>
                                                <span class="old-price">${{ $price }}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                @php
                                                    $message = 'Hi%20there,%0A%0AI %20did%20like%20to%20place%20an%20order%20for%20the%20' . $product->name.'.%20Could%20you%20please%20confirm%20the%20availability%20and%20provide%20any%20additional%20details%20regarding%20payment%20and%20shipping?%0A%0AThank%20you!';
                                                    $wlink = 'https://wa.me/923206511065?text=' . $message;
                                                @endphp
                                                <a aria-label="WhatsApp me" class="action-btn hover-up" target="_blank"
                                                    href="{{ $wlink }}"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fi-rs-angle-double-small-left"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-3 primary-sidebar sticky-sidebar">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('filter.category', $category->id) }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget product-sidebar  mb-30 p-30 bg-grey border-radius-10">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title mb-10">New products</h5>
                                <div class="bt-1 border-color-1"></div>
                            </div>
                            @foreach ($latestThree as $latestOne)
                                <div class="single-post clearfix">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $product->thumbnail1) }}" alt="#">
                                    </div>
                                    <div class="content pt-10">
                                        <h5><a
                                                href="{{ url('/product/' . $latestOne->accesstoken) }}">{{ $latestOne->name }}</a>
                                        </h5>
                                        @php
                                            $price = $product->price;
                                            $discount = $product->discount;
                                            $discountedPrice = ($price * $discount) / 100;
                                            $discountedPrice = $price - $discountedPrice;
                                        @endphp
                                        <p class="price mb-0 mt-5">${{ $discountedPrice }}</p>
                                        <div class="product-rate">
                                            <div class="product-rating" style="width:90%"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none">
                            <img src="frontend/imgs/banner/banner-11.jpg" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="{{ url('/shop-full') }}">Shop Now <i class="fi-rs-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
