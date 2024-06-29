@extends('frontend.layouts.main')
@section('title', 'Search Results')
@section('main-container')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">Home</a>
                    <span></span> Search Results
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    @if ($totalProducts > 0)
                        <div class="col-lg-12">
                            <div class="shop-product-fillter">
                                <div class="totall-product">
                                    <p> Search Results for <strong class="text-brand">{{ $query }}</strong> are...
                                    </p>
                                </div>
                            </div>
                            <div class="row product-grid-3">
                                @foreach ($products as $product)
                                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom h-280">
                                                    <a href="{{ url('/product/' . $product->accesstoken) }}">
                                                        <img class="default-img"
                                                            src="{{ asset('storage/' . $product->thumbnail1) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('storage/' . $product->thumbnail2) }}"
                                                            alt="">
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
                                                    class="fi-rs-angle-double-small-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    @else
                        <div class="col-lg-12">
                            <div class="totall-product center">
                                <p>Currently, there are no products available against your search.<a
                                        href="{{ url('/shop-left') }}"><strong class="text-brand"> Go to Shop</strong></a>
                                    .</p>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
