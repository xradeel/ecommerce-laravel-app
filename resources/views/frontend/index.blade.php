@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
    <main class="main">
        <section class="home-slider position-relative pt-50">
            <div class="hero-slider-1 dot-style-1 dot-style-1-position-1">
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Trade-in offer</h4>
                                    <h2 class="animated fw-900">Supper value deals</h2>
                                    <h1 class="animated fw-900 text-brand">On all products</h1>
                                    <p class="animated">
                                        Save more with coupons & up to 70% off
                                    </p>
                                    <a class="animated btn btn-brush btn-brush-3" href="{{ url('/product') }}">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-1" src="frontend/imgs/slider/slider-1.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Hot promotions</h4>
                                    <h2 class="animated fw-900">Fashion Trending</h2>
                                    <h1 class="animated fw-900 text-7">Great Collection</h1>
                                    <p class="animated">
                                        Save more with coupons & up to 20% off
                                    </p>
                                    <a class="animated btn btn-brush btn-brush-2" href="{{ url('/product') }}">
                                        Discover Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-2" src="frontend/imgs/slider/slider-2.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-hero-slider single-animation-wrap">
                    <div class="container">
                        <div class="row align-items-center slider-animated-1">
                            <div class="col-lg-5 col-md-6">
                                <div class="hero-slider-content-2">
                                    <h4 class="animated">Upcoming Offer</h4>
                                    <h2 class="animated fw-900">Big Deals From</h2>
                                    <h1 class="animated fw-900 text-8">Manufacturer</h1>
                                    <p class="animated">Clothing, Shoes, Bags, Wallets...</p>
                                    <a class="animated btn btn-brush btn-brush-1" href="{{ url('/product') }}">
                                        Shop Now
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="single-slider-img single-slider-img-1">
                                    <img class="animated slider-1-3" src="frontend/imgs/slider/slider-3.png"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-arrow hero-slider-1-arrow"></div>
        </section>
        <section class="featured section-padding position-relative">
            <div class="container">
                <div class="row">
                    @foreach ($features->take(6) as $value)
                        <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                            <div class="banner-features wow fadeIn animated hover-up">
                                <img src="{{ url('' . $value->iconpath) }}" alt="" />
                                <h4 class="bg-1">{{ $value->title }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section class=" product-tabs section-padding position-relative wow fadeIn animated">
            <div class="bg-square"></div>
            <div class="container">
                <div class="tab-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one"
                                type="button" role="tab" aria-controls="tab-one" aria-selected="true">
                                Featured
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two"
                                type="button" role="tab" aria-controls="tab-two" aria-selected="false">
                                Popular
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three"
                                type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                                New added
                            </button>
                        </li>
                    </ul>
                    <a href="#" class="view-more d-none d-md-flex">View More<i
                            class="fi-rs-angle-double-small-right"></i></a>
                </div>
                <div class="tab-content wow fadeIn animated" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                        <div class="row product-grid-4">
                            @foreach ($products as $product)
                                <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                    <div class="product-cart-wrap mb-30">
                                        <div class="product-img-action-wrap">
                                            <div class="product-img product-img-zoom h-280">
                                                <a href="{{ url('/product/' . $product->accesstoken) }}">
                                                    <img class="default-img"
                                                        src="{{ url('storage/' . $product->thumbnail1) }}"
                                                        alt="Image not found" />
                                                    <img class="hover-img"
                                                        src="{{ url('storage/' . $product->thumbnail2) }}"
                                                        alt="Image not found" />
                                                </a>
                                            </div>
                                            <div class="product-action-1">
                                                <a aria-label="Quick view" class="action-btn hover-up"
                                                    data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                        class="fi-rs-eye"></i></a>
                                                <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                    href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            </div>
                                            <div class="product-badges product-badges-position product-badges-mrg">
                                                <span class="hot">{{ $product->tag }}</span>
                                            </div>
                                        </div>
                                        <div class="product-content-wrap">
                                            <div class="product-category">
                                                <a href="{{ url('/shop-left') }}">{{ $product->category_name }}</a>
                                            </div>
                                            <h2>
                                                <a href="{{ url('/product/' . $product->accesstoken) }}">{{ $product->name }}</a>
                                            </h2>
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
                                                <span>${{ $discountedPrice }}</span>
                                                <span class="old-price">${{ $price }}</span>
                                            </div>
                                            <div class="product-action-1 show">
                                                <a aria-label="Add To Cart" class="action-btn hover-up"
                                                    href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-2-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-2-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Clothing</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Plain Color Pocket Shirts</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-3-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-3-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Shirts</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Vintage Floral Oil Shirts</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-4-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-4-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Clothing</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Colorful Hawaiian Shirts</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-5-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-5-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Shirt</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Flowers Sleeve Lapel Shirt</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-6-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-6-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Shirts</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Ethnic Floral Casual Shirts</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-xs-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-7-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-7-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Shoes</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Stitching Hole Sandals</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-8-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-8-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Shirt</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Mens Porcelain Shirt</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-9-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-9-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Donec </a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Lorem ipsum dolor</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-10-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-10-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Music</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Sed tincidunt interdum</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-11-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-11-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Watch</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Fusce metus orci</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-12-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-12-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Music</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Integer venenatis libero</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-13-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-13-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Speaker</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Cras tempor orci id</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-14-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-14-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Camera</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Nullam cursus mi qui</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-15-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-15-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Phone</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Fusce fringilla ultrices</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-1-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-1-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Accessories </a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Sed sollicitudin est</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                        <div class="row product-grid-4">
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="default-img" src="frontend/imgs/shop/product-2-1.jpg"
                                                    alt="" />
                                                <img class="hover-img" src="frontend/imgs/shop/product-2-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">Hot</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Music</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Donec ut nisl rutrum</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>90%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-3-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-3-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Music</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Nullam dapibus pharetra</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>50%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$138.85 </span>
                                            <span class="old-price">$255.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-4-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-4-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="best">Best Sell</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Watch</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Morbi dictum finibus</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>95%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$338.85 </span>
                                            <span class="old-price">$445.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-5-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-5-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="sale">Sale</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Music</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Nunc volutpat massa</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$123.85 </span>
                                            <span class="old-price">$235.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-6-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-6-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-30%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Speaker</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Nullam ultricies luctus</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$28.85 </span>
                                            <span class="old-price">$45.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-7-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-7-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up" data-bs-toggle="modal"
                                                data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="hot">-22%</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Camera</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Nullam mattis enim</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-8-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-8-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                        <div class="product-badges product-badges-position product-badges-mrg">
                                            <span class="new">New</span>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Phone</a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">Vivamus sollicitudin</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>98%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$1275.85 </span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                <div class="product-cart-wrap mb-30">
                                    <div class="product-img-action-wrap">
                                        <div class="product-img product-img-zoom">
                                            <a href="{{ url('/product') }}">
                                                <img class="hover-img" src="frontend/imgs/shop/product-9-1.jpg"
                                                    alt="" />
                                                <img class="default-img" src="frontend/imgs/shop/product-9-2.jpg"
                                                    alt="" />
                                            </a>
                                        </div>
                                        <div class="product-action-1">
                                            <a aria-label="Quick view" class="action-btn hover-up"
                                                data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                    class="fi-rs-eye"></i></a>
                                            <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                            <a aria-label="Compare" class="action-btn hover-up"
                                                href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content-wrap">
                                        <div class="product-category">
                                            <a href="{{ url('/shop-left') }}">Accessories </a>
                                        </div>
                                        <h2>
                                            <a href="{{ url('/product') }}">
                                                Donec ut nisl rutrum</a>
                                        </h2>
                                        <div class="rating-result" title="90%">
                                            <span>
                                                <span>70%</span>
                                            </span>
                                        </div>
                                        <div class="product-price">
                                            <span>$238.85 </span>
                                            <span class="old-price">$245.8</span>
                                        </div>
                                        <div class="product-action-1 show">
                                            <a aria-label="Add To Cart" class="action-btn hover-up"
                                                href="{{ url('/cart') }}"><i class="fi-rs-shopping-bag-add"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="frontend/imgs/banner/banner-4.png" alt="" />
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">
                            We're an Apple <br />Authorised Service Provider
                        </h1>
                        <a href="{{ url('/shop-left') }}" class="btn">Learn More <i
                                class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15 mb-25">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows">
                    </div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <!-- <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-1.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">T-Shirt</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}">
                                                                  <img src="frontend/imgs/shop/category-thumb-2.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Bags</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-3.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Sandan</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-4.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Scarf Cap</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-5.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Shoes</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-6.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Pillowcase</a></h5>
                                                            </div>
                                                            <div class="card-1">
                                                              <figure class="img-hover-scale overflow-hidden">
                                                                <a href="{{ url('/shop-left') }}"><img src="frontend/imgs/shop/category-thumb-7.jpg" alt="" /></a>
                                                              </figure>
                                                              <h5><a href="{{ url('/shop-left') }}">Jumpsuits</a></h5>
                                                            </div> -->
                        @foreach ($popularCategories as $value)
                            <div class="card-1">
                                <figure class="img-hover-scale overflow-hidden">
                                    <a href="{{ '/' . $value->url }}"><img src="{{ $value->image }}"
                                            alt="" /></a>
                                </figure>
                                <h5><a href="{{ $value->url }}">{{ $value->title }}</a></h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="banners mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="frontend/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br />Woman Bag</h4>
                                <a href="{{ url('/shop-left') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="frontend/imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br />Collection</h4>
                                <a href="{{ url('/shop-left') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated mb-sm-0">
                            <img src="frontend/imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br />Deals & Offers</h4>
                                <a href="{{ url('/shop-left') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-2-arrows">
                    </div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-2-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-2-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2>
                                    <a href="{{ url('/product') }}">Lorem ipsum dolor</a>
                                </h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-4-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-4-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{ url('/product') }}">Aliquam posuere</a></h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$173.85 </span>
                                    <span class="old-price">$185.8</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-15-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-15-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2>
                                    <a href="{{ url('/product') }}">Sed dapibus orci</a>
                                </h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$215.85 </span>
                                    <span class="old-price">$235.8</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-3-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-3-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">.33%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{ url('/product') }}">Donec congue</a></h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$83.8 </span>
                                    <span class="old-price">$125.2</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-9-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-9-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-25%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{ url('/product') }}">Curabitur porta</a></h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$1238.85 </span>
                                    <span class="old-price">$1245.8</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-7-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-7-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2>
                                    <a href="{{ url('/product') }}">Praesent maximus</a>
                                </h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$123 </span>
                                    <span class="old-price">$156</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="{{ url('/product') }}">
                                        <img class="default-img" src="frontend/imgs/shop/product-1-1.jpg"
                                            alt="" />
                                        <img class="hover-img" src="frontend/imgs/shop/product-1-2.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="{{ url('/wishlist') }}" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up" href="shop-compare.php"
                                        tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="{{ url('/product') }}">Vestibulum ante</a></h2>
                                <div class="rating-result" title="90%">
                                    <span> </span>
                                </div>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="deals section-padding">
                                                      <div class="container">
                                                        <div class="row">
                                                          <div class="col-lg-6 deal-co">
                                                            <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0" style="
                  background-image: url('frontend/imgs/banner/menu-banner-7.jpg');
                ">
                                                              <div class="deal-top">
                                                                <h2 class="text-brand">Deal of the Day</h2>
                                                                <h5>Limited quantities.</h5>
                                                              </div>
                                                              <div class="deal-content">
                                                                <h6 class="product-title">
                                                                  <a href="{{ url('/product') }}">Summer Collection New Morden Design</a>
                                                                </h6>
                                                                <div class="product-price">
                                                                  <span class="new-price">$139.00</span><span class="old-price">$160.99</span>
                                                                </div>
                                                              </div>
                                                              <div class="deal-bottom">
                                                                <p>Hurry Up! Offer End In:</p>
                                                                <div class="deals-countdown" data-countdown="2025/03/25 12:10:00"></div>
                                                                <a href="{{ url('/shop-left') }}" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="col-lg-6 deal-co">
                                                            <div class="deal wow fadeIn animated" style="
                  background-image: url('frontend/imgs/banner/menu-banner-8.jpg');
                ">
                                                              <div class="deal-top">
                                                                <h2 class="text-brand">Men Clothing</h2>
                                                                <h5>Shirt & Bag</h5>
                                                              </div>
                                                              <div class="deal-content">
                                                                <h6 class="product-title">
                                                                  <a href="{{ url('/product') }}">Try something new on vacation</a>
                                                                </h6>
                                                                <div class="product-price">
                                                                  <span class="new-price">$178.00</span><span class="old-price">$256.99</span>
                                                                </div>
                                                              </div>
                                                              <div class="deal-bottom">
                                                                <p>Hurry Up! Offer End In:</p>
                                                                <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                                                                <a href="{{ url('/shop-left') }}" class="btn hover-up">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </section> -->
        <section class="section-padding">
            <div class="container">
                <h3 class="section-title mb-20 wow fadeIn animated">
                    <span>Featured</span> Brands
                </h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-3-arrows">
                    </div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-1.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-2.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-3.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-4.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-5.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-6.png" alt="" />
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="frontend/imgs/banner/brand-3.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-grey-9 section-padding">
            <div class="container pt-25 pb-25">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="section-title mb-20">
                            <span>Monthly</span> Best Sell
                        </h3>
                    </div>
                    <div class="heading-tab-right wow fadeIn animated">
                        <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-one-1" type="button" role="tab"
                                    aria-controls="tab-one" aria-selected="true">
                                    Featured
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-two-1" type="button" role="tab"
                                    aria-controls="tab-two" aria-selected="false">
                                    Popular
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-three-1" type="button" role="tab"
                                    aria-controls="tab-three" aria-selected="false">
                                    New added
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-flex">
                        <div class="banner-img style-2 wow fadeIn animated">
                            <img src="frontend/imgs/banner/banner-9.jpg" alt="" />
                            <div class="banner-text">
                                <span>Woman Area</span>
                                <h4 class="mt-5">Save 17% on <br />Clothing</h4>
                                <a href="{{ url('/shop-left') }}" class="text-white">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel"
                                aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-1-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-1-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Nulla</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Maecenas eget</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-2-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-2-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Duis </a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Luctus suscipit</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-3-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Fusce </a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Aliquam ac</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-4-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Nunc </a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Fusce et ligula</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-11-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-11-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Aliquam</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Morbi lacinia</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel" aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-6-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Cotton Leaf Printed 2</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-7-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Smart Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-5-1.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Hugy Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-10-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Smart Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-12-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-12-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Cotton Leaf Printed</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel"
                                aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-8-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Cotton Leaf Printed</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-13-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-13-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Smart Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-14-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-14-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Hugy Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-15-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-15-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Smart Speaker</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="{{ url('/product') }}">
                                                        <img class="default-img"
                                                            src="frontend/imgs/shop/product-11-1.jpg" alt="" />
                                                        <img class="hover-img" src="frontend/imgs/shop/product-11-2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                        href="{{ url('/wishlist') }}"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.php"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="{{ url('/shop-left') }}">Watch</a>
                                                </div>
                                                <h2>
                                                    <a href="{{ url('/product') }}">Cotton Leaf Printed</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="{{ url('/cart') }}"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-50 mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-bg wow fadeIn animated"
                            style="background-image: url('frontend/imgs/banner/banner-8.jpg')">
                            <div class="banner-content">
                                <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                                <h2 class="fw-600">
                                    Happy <span class="text-brand">Mother's Day</span>. Big Sale
                                    Up to 40%
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="mb-45">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                                                                    <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                                                                        <img src="frontend/imgs/banner/banner-10.jpg" alt="" />
                                                                        <div class="banner-text">
                                                                            <span>Shoes Zone</span>
                                                                            <h4>Save 17% on <br />All Items</h4>
                                                                            <a href="{{ url('/shop-left') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                                                                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">
                                                                        Deals & Outlet
                                                                    </h4>
                                                                    <div class="product-list-small wow fadeIn animated">
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-3.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Fish Print Patched T-shirt</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-4.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Vintage Floral Print Dress</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-5.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Multi-color Stripe Circle Print T-Shirt</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                                                                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">
                                                                        Top Selling
                                                                    </h4>
                                                                    <div class="product-list-small wow fadeIn animated">
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-6.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Geometric Printed Long Sleeve Blosue</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-7.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Print Patchwork Maxi Dress</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-8.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Daisy Floral Print Straps Jumpsuit</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3 col-md-6">
                                                                    <h4 class="section-title style-1 mb-30 wow fadeIn animated">
                                                                        Hot Releases
                                                                    </h4>
                                                                    <div class="product-list-small wow fadeIn animated">
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-9.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Floral Print Casual Cotton Dress</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-1.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Ruffled Solid Long Sleeve Blouse</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                        <article class="row align-items-center">
                                                                            <figure class="col-md-4 mb-0">
                                                                                <a href="{{ url('/product') }}"><img src="frontend/imgs/shop/thumbnail-2.jpg" alt="" /></a>
                                                                            </figure>
                                                                            <div class="col-md-8 mb-0">
                                                                                <h4 class="title-small">
                                                                                    <a href="{{ url('/product') }}">Multi-color Print V-neck T-Shirt</a>
                                                                                </h4>
                                                                                <div class="product-price">
                                                                                    <span>$238.85 </span>
                                                                                    <span class="old-price">$245.8</span>
                                                                                </div>
                                                                            </div>
                                                                        </article>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section> -->
    </main>
@endsection
