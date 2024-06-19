<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Evara - eCommerce HTML Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/imgs/theme/favicon.svg') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/maind134.css') }}" />
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>

<body>
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-2.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-1.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-3.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-4.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-5.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-6.jpg') }}"
                                            alt="product image">
                                    </figure>
                                    <figure class="border-radius-10">
                                        <img src="{{ asset('frontend/imgs/shop/product-16-7.jpg') }}"
                                            alt="product image">
                                    </figure>
                                </div>
                                <div class="slider-nav-thumbnails pl-15 pr-15">
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-4.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-5.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-6.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-7.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-8.jpg') }}"
                                            alt="product image"></div>
                                    <div><img src="{{ asset('frontend/imgs/shop/thumbnail-9.jpg') }}"
                                            alt="product image"></div>
                                </div>
                            </div>
                            <div class="social-icons single-share">
                                <ul class="text-grey-5 d-inline-block">
                                    <li><strong class="mr-10">Share this:</strong></li>
                                    <li class="social-facebook"><a href="#"><img
                                                src="{{ asset('frontend/imgs/theme/icons/icon-facebook.svg') }}"
                                                alt=""></a></li>
                                    <li class="social-twitter"> <a href="#"><img
                                                src="{{ asset('frontend/imgs/theme/icons/icon-twitter.svg') }}"
                                                alt=""></a></li>
                                    <li class="social-instagram"><a href="#"><img
                                                src="{{ asset('frontend/imgs/theme/icons/icon-instagram.svg') }}"
                                                alt=""></a></li>
                                    <li class="social-linkedin"><a href="#"><img
                                                src="{{ asset('frontend/imgs/theme/icons/icon-pinterest.svg') }}"
                                                alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Brands: <a href="shop-grid-right.html">Bootstrap</a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand">$120.00</span></ins>
                                        <ins><span class="old-price font-md ml-15">$200.00</span></ins>
                                        <span class="save-price  font-md color3 ml-15">25% Off</span>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="short-desc mb-30">
                                    <p class="font-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Aliquam rem officia, corrupti reiciendis minima nisi modi,!</p>
                                </div>

                                <div class="attr-detail attr-color mb-15">
                                    <strong class="mr-10">Color</strong>
                                    <ul class="list-filter color-filter">
                                        <li><a href="#" data-color="Red"><span
                                                    class="product-color-red"></span></a></li>
                                        <li><a href="#" data-color="Yellow"><span
                                                    class="product-color-yellow"></span></a></li>
                                        <li class="active"><a href="#" data-color="White"><span
                                                    class="product-color-white"></span></a></li>
                                        <li><a href="#" data-color="Orange"><span
                                                    class="product-color-orange"></span></a></li>
                                        <li><a href="#" data-color="Cyan"><span
                                                    class="product-color-cyan"></span></a></li>
                                        <li><a href="#" data-color="Green"><span
                                                    class="product-color-green"></span></a></li>
                                        <li><a href="#" data-color="Purple"><span
                                                    class="product-color-purple"></span></a></li>
                                    </ul>
                                </div>
                                <div class="attr-detail attr-size">
                                    <strong class="mr-10">Size</strong>
                                    <ul class="list-filter size-filter font-small">
                                        <li><a href="#">S</a></li>
                                        <li class="active"><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                            href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn hover-up"
                                            href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-50">
                                    <li class="mb-5">SKU: <a href="#">FWM15VKT</a></li>
                                    <li class="mb-5">Tags: <a href="#" rel="tag">Cloth</a>, <a
                                            href="#" rel="tag">Women</a>, <a href="#"
                                            rel="tag">Dress</a> </li>
                                    <li>Availability:<span class="in-stock text-success ml-5">8 Items In Stock</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li>
                                    <i class="fi-rs-smartphone"></i>
                                    <a href="tel: +92 314 7128128">(+92) - 314 7128128</a>
                                </li>
                                <li>
                                    <i class="fi-rs-marker"></i><a href="{{ url('/contact-us') }}">Our location</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>
                                        Get great devices up to 50% off
                                        <a href="{{ url('/shop-left') }}">View details</a>
                                    </li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>
                                        Trendy 25silver jewelry, save up 35% off today
                                        <a href="{{ url('/shop-left') }}">Shop now</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#">
                                        <i class="fi-rs-world"></i> English
                                        <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('frontend/imgs/theme/flag-fr.png') }}"
                                                    alt="" />Français</a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('frontend/imgs/theme/flag-dt.png') }}"
                                                    alt="" />Deutsch</a>
                                        </li>
                                        <li>
                                            <a href="#"><img
                                                    src="{{ asset('frontend/imgs/theme/flag-ru.png') }}"
                                                    alt="" />Pусский</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/imgs/theme/logo.svg') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <input type="text" placeholder="Search for items..." />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/imgs/theme/logo.svg') }}"
                                alt="logo" /></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li>
                                        <a href="{{ url('/shop-full') }}"><i class="evara-font-dress"></i>Women's
                                            Clothing</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-full') }}"><i class="evara-font-tshirt"></i>Men's
                                            Clothing</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-full') }}"><i class="evara-font-diamond"></i>Jewelry &
                                            Accessories</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-full') }}"><i
                                                class="evara-font-high-heels"></i>Shoes</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/shop-full') }}"><i class="evara-font-kite"></i>Outdoor
                                            fun</a>
                                    </li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none">
                                            <li>
                                                <a href="{{ url('/shop-full') }}"><i
                                                        class="evara-font-desktop"></i>Beauty, Health</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/shop-full') }}"><i
                                                        class="evara-font-cpu"></i>Bags</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="{{ Request::is('/') ? 'active' : '' }}"
                                            href="{{ url('/') }}">Home</i></a>
                                    </li>

                                    <li>
                                        <a class="{{ Request::is('shop-left') ? 'active' : '' }}"
                                            href="{{ url('/shop-left') }}">Shop Now</a>
                                    </li>
                                    <li>
                                        <a class="{{ Request::is('about') ? 'active' : '' }}"
                                            href="{{ url('/about') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a class="{{ Request::is('contact-us') ? 'active' : '' }}"
                                            href="{{ url('/contact-us') }}">Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="{{ Request::is('purchase-guide') ? 'active' : '' }}"
                                            href="{{ url('/purchase-guide') }}">Purchase Guide</i></a>
                                    </li>
                                    <li>
                                        <a class="{{ Request::is('blogs') ? 'active' : '' }}"
                                            href="{{ url('/blogs') }}">Our Blog</i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p>
                            <i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888
                        </p>
                    </div>
                    <p class="mobile-promotion">
                        Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to
                        40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="{{ url('/wishlist') }}">
                                    <img alt="Evara"
                                        src="{{ asset('frontend/imgs/theme/icons/icon-heart.svg') }}" />
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="{{ url('/cart') }}">
                                    <img alt="Evara"
                                        src="{{ asset('frontend/imgs/theme/icons/icon-cart.svg') }}" />
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="{{ url('/shop-left') }}"><img alt="Evara"
                                                        src="{{ asset('frontend/imgs/shop/thumbnail-3.jpg') }}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="{{ url('/shop-left') }}">Plain Striola Shirts</a>
                                                </h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="{{ url('/shop-left') }}"><img alt="Evara"
                                                        src="{{ asset('frontend/imgs/shop/thumbnail-4.jpg') }}" /></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4>
                                                    <a href="{{ url('/shop-left') }}">Macbook Pro 2022</a>
                                                </h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="{{ url('/cart') }}">View cart</a>
                                            <a href="{{ url('/checkout') }}">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('frontend/imgs/theme/logo.svg') }}"
                            alt="logo" /></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…" />
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-dress"></i>Women's
                                        Clothing</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-tshirt"></i>Men's
                                        Clothing</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-smartphone"></i>
                                        Cellphones</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-desktop"></i>Computer &
                                        Office</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-cpu"></i>Consumer
                                        Electronics</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-home"></i>Home &
                                        Garden</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-high-heels"></i>Shoes</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-teddy-bear"></i>Mother &
                                        Kids</a>
                                </li>
                                <li>
                                    <a href="{{ url('/shop-left') }}"><i class="evara-font-kite"></i>Outdoor fun</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><a href="{{ url('/') }}">Home</a>

                            </li>
                            <li class="menu-item-has-children"></span><a href="{{ url('/shop-left') }}">shop</a>

                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/shop-full') }}">Dresses</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Blouses & Shirts</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Hoodies & Sweatshirts</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/shop-full') }}">Jackets</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Casual Faux Leather</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ url('/shop-full') }}">Gaming Laptops</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Ultraslim Laptops</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Tablets</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Laptop Accessories</a></li>
                                            <li><a href="{{ url('/shop-full') }}">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="{{ url('/blogs') }}">Blog</a>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">More</a>
                                <ul class="dropdown">
                                    <li><a href="{{ url('/about') }}">About Us</a></li>
                                    <li><a href="{{ url('/account') }}">My Account</a></li>
                                    <li>
                                        <a href="{{ url('/register') }}">login/register</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/purchase') }}">Purchase Guide</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="{{ url('/contact-us') }}"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="{{ url('/register') }}">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('frontend/imgs/theme/icons/icon-facebook.svg') }}"
                            alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/imgs/theme/icons/icon-twitter.svg') }}"
                            alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/imgs/theme/icons/icon-instagram.svg') }}"
                            alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/imgs/theme/icons/icon-pinterest.svg') }}"
                            alt="" /></a>
                    <a href="#"><img src="{{ asset('frontend/imgs/theme/icons/icon-youtube.svg') }}"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </div>
