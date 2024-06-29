﻿@extends('frontend.layouts.main')
@section('title', $product->name )
@section('main-container')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="{{ url('/') }}" rel="nofollow">Home</a>
                    <span></span> Fashion
                    <span></span> {{ $product->name }}
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 m-auto col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <div class="product-image-slider">
                                            @foreach ($product->images as $image)
                                                <figure class="border-radius-10">
                                                    <img src="{{ asset('storage/' . $image) }}"
                                                        style="height:743px; width: 636px" class="canvas-img"
                                                        alt="product image">
                                                </figure>
                                            @endforeach
                                        </div>
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            @foreach ($product->images as $image)
                                                <div><img src="{{ asset('storage/' . $image) }}" class="thumbnail-img"
                                                        alt="product image"></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 m-auto col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{ $product->name }}</h2>

                                        <div class="clearfix product-price-cover" style="border-bottom:0">
                                            <div class="product-price primary-color float-left">
                                                @php
                                                    $price = $product->price;
                                                    $discount = $product->discount;
                                                    $discountedPrice = ($price * $discount) / 100;
                                                    $discountedPrice = $price - $discountedPrice;
                                                @endphp
                                                <ins><span class="text-brand">{{ "$" . $discountedPrice }}</span></ins>
                                                <ins><span class="old-price font-md ml-15">{{ '$' . $price }}</span></ins>
                                                <span
                                                    class="save-price  font-md color3 ml-15">{{ intval($discount) . '% Off' }}</span>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{ $product->short_description }}</p>
                                        </div>
                                        <div class="product_sort_info font-xs mb-30">
                                            <ul>
                                                <li class="mb-10"><i class="fi-rs-crown mr-5"></i> 1 Year AL Jazeera Brand
                                                    Warranty</li>
                                                <li class="mb-10"><i class="fi-rs-refresh mr-5"></i> 30 Day Return Policy
                                                </li>
                                                <li><i class="fi-rs-credit-card mr-5"></i> Cash on Delivery available</li>
                                                <li>Availability:<span
                                                        class="in-stock text-{{ $product->availability == 1 ? 'success' : 'danger' }} ml-5">
                                                        {{ $product->availability == 1 ? 'In Stock' : 'Out of Stock' }}
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="attr-detail attr-size">
                                            <strong class="mr-10">Size</strong>
                                            @php
                                                $val = $product->size;
                                                $sizes = ['S', 'M', 'L', 'XL', 'XXL'];
                                            @endphp
                                            <ul class="list-filter size-filter font-small">
                                                @for ($i = 0; $i < strlen($val); $i++)
                                                    @if ($val[$i] == '1')
                                                        <li class="{{ $i == 1 ? 'active' : '' }}"><a
                                                                href="#">{{ $sizes[$i] }}</a></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                        <div class="detail-extralink">
                                            @php
                                                    $message = 'Hi%20there,%0A%0AI %20did%20like%20to%20place%20an%20order%20for%20the%20' . $product->name.'.%20Could%20you%20please%20confirm%20the%20availability%20and%20provide%20any%20additional%20details%20regarding%20payment%20and%20shipping?%0A%0AThank%20you!';
                                                    $wlink = 'https://wa.me/923206511065?text=' . $message;
                                                @endphp
                                            <div class="product-extra-link2">
                                                <a href="{{ $wlink }}" target="_blank" class="button button-add-to-cart" rel="noopener noreferrer"> Wan'na buy send
                                                    message</a>
                                                {{-- <button type="submit" class="button button-add-to-cart"> Wan'na buy send
                                                    message</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 m-auto entry-main-content">
                                    <hr>
                                    <h2 class="section-title style-1 mb-30">Description</h2>
                                    <div class="description mb-50">
                                        {!! $product->long_description !!}
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
                                    <!-- <h3 class="section-title style-1 mb-30 mt-30">Reviews (3)</h3>
                                                                                                                                                                                                                                                                        <div class="comments-area style-2">
                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                <div class="col-lg-8">
                                                                                                                                                                                                                                                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                                                                                                                                                                                                                                                    <div class="comment-list">
                                                                                                                                                                                                                                                                                        <div class="single-comment justify-content-between d-flex">
                                                                                                                                                                                                                                                                                            <div class="user justify-content-between d-flex">
                                                                                                                                                                                                                                                                                                <div class="thumb text-center">
                                                                                                                                                                                                                                                                                                    <img src="frontend/imgs/page/avatar-6.jpg" alt="">
                                                                                                                                                                                                                                                                                                    <h6><a href="#">Jacky Chan</a></h6>
                                                                                                                                                                                                                                                                                                    <p class="font-xxs">Since 2012</p>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="desc">
                                                                                                                                                                                                                                                                                                    <div class="product-rate d-inline-block">
                                                                                                                                                                                                                                                                                                        <div class="product-rating" style="width:90%">
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                    <p>Thank you very fast shipping from Poland only 3days.</p>
                                                                                                                                                                                                                                                                                                    <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                                                                                                                                                                                            <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                                                                                                                                                                                                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="single-comment justify-content-between d-flex">
                                                                                                                                                                                                                                                                                            <div class="user justify-content-between d-flex">
                                                                                                                                                                                                                                                                                                <div class="thumb text-center">
                                                                                                                                                                                                                                                                                                    <img src="frontend/imgs/page/avatar-7.jpg" alt="">
                                                                                                                                                                                                                                                                                                    <h6><a href="#">Ana Rosie</a></h6>
                                                                                                                                                                                                                                                                                                    <p class="font-xxs">Since 2008</p>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="desc">
                                                                                                                                                                                                                                                                                                    <div class="product-rate d-inline-block">
                                                                                                                                                                                                                                                                                                        <div class="product-rating" style="width:90%">
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                    <p>Great low price and works well.</p>
                                                                                                                                                                                                                                                                                                    <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                                                                                                                                                                                            <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                                                                                                                                                                                                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="single-comment justify-content-between d-flex">
                                                                                                                                                                                                                                                                                            <div class="user justify-content-between d-flex">
                                                                                                                                                                                                                                                                                                <div class="thumb text-center">
                                                                                                                                                                                                                                                                                                    <img src="frontend/imgs/page/avatar-8.jpg" alt="">
                                                                                                                                                                                                                                                                                                    <h6><a href="#">Steven Keny</a></h6>
                                                                                                                                                                                                                                                                                                    <p class="font-xxs">Since 2010</p>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                <div class="desc">
                                                                                                                                                                                                                                                                                                    <div class="product-rate d-inline-block">
                                                                                                                                                                                                                                                                                                        <div class="product-rating" style="width:90%">
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                    <p>Authentic and Beautiful, Love these way more than ever expected They are Great earphones</p>
                                                                                                                                                                                                                                                                                                    <div class="d-flex justify-content-between">
                                                                                                                                                                                                                                                                                                        <div class="d-flex align-items-center">
                                                                                                                                                                                                                                                                                                            <p class="font-xs mr-30">December 4, 2020 at 3:12 pm </p>
                                                                                                                                                                                                                                                                                                            <a href="#" class="text-brand btn-reply">Reply <i class="fi-rs-arrow-right"></i> </a>
                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                <div class="col-lg-4">
                                                                                                                                                                                                                                                                                    <h4 class="mb-30">Customer reviews</h4>
                                                                                                                                                                                                                                                                                    <div class="d-flex mb-30">
                                                                                                                                                                                                                                                                                        <div class="product-rate d-inline-block mr-15">
                                                                                                                                                                                                                                                                                            <div class="product-rating" style="width:90%">
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <h6>4.8 out of 5</h6>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                                                                                                        <span>5 star</span>
                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                                                                                                        <span>4 star</span>
                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                                                                                                        <span>3 star</span>
                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <div class="progress">
                                                                                                                                                                                                                                                                                        <span>2 star</span>
                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <div class="progress mb-30">
                                                                                                                                                                                                                                                                                        <span>1 star</span>
                                                                                                                                                                                                                                                                                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                    <a href="#" class="font-xs text-muted">How are ratings calculated?</a>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                        <div class="comment-form">
                                                                                                                                                                                                                                                                            <h4 class="mb-15">Add a review</h4>
                                                                                                                                                                                                                                                                            <div class="product-rate d-inline-block mb-30">
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                            <div class="row">
                                                                                                                                                                                                                                                                                <div class="col-lg-8 col-md-12">
                                                                                                                                                                                                                                                                                    <form class="form-contact comment_form" action="#" id="commentForm">
                                                                                                                                                                                                                                                                                        <div class="row">
                                                                                                                                                                                                                                                                                            <div class="col-12">
                                                                                                                                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                                                                                                                                                                                                                                                        placeholder="Write Comment"></textarea>
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="col-sm-6">
                                                                                                                                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                                                                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="col-sm-6">
                                                                                                                                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                                                                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                            <div class="col-12">
                                                                                                                                                                                                                                                                                                <div class="form-group">
                                                                                                                                                                                                                                                                                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                        <div class="form-group">
                                                                                                                                                                                                                                                                                            <button type="submit" class="button button-contactForm">Submit
                                                                                                                                                                                                                                                                                                Review</button>
                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                    </form>
                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                        </div> -->
                                </div>
                            </div>
                            <div class="row mt-60">
                                <div class="col-12">
                                    <h3 class="section-title style-1 mb-30">Related products</h3>
                                </div>
                                <div class="col-12">
                                    <div class="row related-products">
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ url('/product') }}" tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('frontend/imgs/shop/product-2-1.jpg') }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('frontend/imgs/shop/product-2-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal
"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                            href="{{ url('/wishlist') }}" tabindex="0"><i
                                                                class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="shop-compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{ url('/product') }}" tabindex="0">Ulstra Bass
                                                            Headphone</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$238.85 </span>
                                                        <span class="old-price">$245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ url('/product') }}" tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('frontend/imgs/shop/product-3-1.jpg') }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('frontend/imgs/shop/product-4-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal
"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                            href="{{ url('/wishlist') }}" tabindex="0"><i
                                                                class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="shop-compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="sale">-12%</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{ url('/product') }}" tabindex="0">Smart Bluetooth
                                                            Speaker</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$138.85 </span>
                                                        <span class="old-price">$145.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ url('/product') }}" tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('frontend/imgs/shop/product-4-1.jpg') }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('frontend/imgs/shop/product-4-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal
"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                            href="{{ url('/wishlist') }}" tabindex="0"><i
                                                                class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="shop-compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="new">New</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{ url('/product') }}" tabindex="0">HomeSpeak 12UEA
                                                            Goole</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$738.85 </span>
                                                        <span class="old-price">$1245.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                                            <div class="product-cart-wrap small hover-up mb-0">
                                                <div class="product-img-action-wrap">
                                                    <div class="product-img product-img-zoom">
                                                        <a href="{{ url('/product') }}" tabindex="0">
                                                            <img class="default-img"
                                                                src="{{ asset('frontend/imgs/shop/product-5-1.jpg') }}"
                                                                alt="">
                                                            <img class="hover-img"
                                                                src="{{ asset('frontend/imgs/shop/product-3-2.jpg') }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-action-1">
                                                        <a aria-label="Quick view" class="action-btn small hover-up"
                                                            data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                                class="fi-rs-search"></i></a>
                                                        <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                                            href="{{ url('/wishlist') }}" tabindex="0"><i
                                                                class="fi-rs-heart"></i></a>
                                                        <a aria-label="Compare" class="action-btn small hover-up"
                                                            href="shop-compare.php" tabindex="0"><i
                                                                class="fi-rs-shuffle"></i></a>
                                                    </div>
                                                    <div class="product-badges product-badges-position product-badges-mrg">
                                                        <span class="hot">Hot</span>
                                                    </div>
                                                </div>
                                                <div class="product-content-wrap">
                                                    <h2><a href="{{ url('/product') }}" tabindex="0">Dadua Camera 4K
                                                            2022EF</a></h2>
                                                    <div class="rating-result" title="90%">
                                                        <span>
                                                        </span>
                                                    </div>
                                                    <div class="product-price">
                                                        <span>$89.8 </span>
                                                        <span class="old-price">$98.8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-img banner-big wow fadeIn f-none animated mt-50">
                                <img class="border-radius-10" src="{{ asset('frontend/imgs/banner/banner-4.png') }}"
                                    alt="">
                                <div class="banner-text">
                                    <h4 class="mb-15 mt-40">Repair Services</h4>
                                    <h2 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
