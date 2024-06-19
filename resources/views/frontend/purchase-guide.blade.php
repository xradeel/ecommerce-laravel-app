﻿@extends("frontend.layouts.main-two")
@section("title", "Purchase Guide")
@section("main-container")
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">Home</a>
                <span></span> Pages
                <span></span> Purchase Guide
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-page pr-30 mb-lg-0 mb-sm-5">
                        <div class="single-header  style-2">
                            <h2>Purchase Guide</h2>
                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                <span class="post-by">By <a href="#">Jonh</a></span>
                                <span class="post-on has-dot">9 April 2020</span>
                                <span class="time-reading has-dot">8 mins read</span>
                                <span class="hit-count  has-dot">29k Views</span>
                            </div>
                        </div>
                        <figure class="single-thumbnail">
                            <img src="frontend/imgs/page/img-1.jpg" alt="">
                        </figure>
                        <div class="single-content">
                            <h4>1. Account Registering</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla modi dolores neque omnis ipsa? Quia, nam voluptas! Aut, magnam molestias:</p>
                            <ul class="mb-30">
                                <li>Name (required)</li>
                                <li>Age (required)</li>
                                <li>Date of birth (required)</li>
                                <li>Passport/ ID no. (required)</li>
                                <li>Current career (required)</li>
                                <li>Mobile phone numbers (required)</li>
                                <li>Email address (required)</li>
                                <li>Hobbies &amp; interests (optional)</li>
                                <li>Social profiles (optional)</li>
                            </ul>
                            <h4>2. Select Product</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit officia necessitatibus repellat placeat aut enim recusandae assumenda adipisci quisquam, deserunt iure veritatis cupiditate modi aspernatur accusantium, mollitia doloribus. Velit, iste.</p>
                            <h4>3. Confirm Order Content</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero ut autem sed! Assumenda, nostrum non doloribus tenetur, pariatur veritatis harum natus ipsam maiores dolorem repudiandae laboriosam, cupiditate odio earum eum?</p>
                            <h4>4.Transaction Completed</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nesciunt nam aut magnam libero aspernatur eaque praesentium? Tempore labore quis neque? Magni.</p>
                            <h4>5. Accepted Credit Cards</h4>
                            <ul>
                                <li>Visa</li>
                                <li>Mastercards</li>
                                <li>American Express</li>
                                <li>Discover</li>
                            </ul>
                            <span>*Taxes are calculated by your local bank and location.</span>
                            <h4 class="mt-30">6. Download and Setup</h4>
                            <ul>
                                <li>Updated content on a regular basis</li>
                                <li>Secure &amp; hassle-free payment</li>
                                <li>1-click checkout</li>
                                <li>Easy access &amp; smart user dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget_search mb-50">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search…">
                                    <button type="submit"> <i class="fi-rs-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_categories mb-40">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Categories</h5>
                            </div>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul>
                                    <li class="cat-item cat-item-2"><a href="{{ url('/blogs') }}">Beauty</a> (3)</li>
                                    <li class="cat-item cat-item-3"><a href="{{ url('/blogs') }}">Book</a> (6)</li>
                                    <li class="cat-item cat-item-4"><a href="{{ url('/blogs') }}">Design</a> (4)</li>
                                    <li class="cat-item cat-item-5"><a href="{{ url('/blogs') }}">Fashion</a> (3)</li>
                                    <li class="cat-item cat-item-6"><a href="{{ url('/blogs') }}">Lifestyle</a> (6)</li>
                                    <li class="cat-item cat-item-7"><a href="{{ url('/blogs') }}">Travel</a> (2)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Trending Now</h5>
                            </div>
                            <div class="row">
                                <div class="col-12 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="{{ url('/blog-post') }}">
                                            <img src="frontend/imgs/blog/blog-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h4 class="post-title mb-10 text-limit-2-row">The litigants on the screen are not actors </h4>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="{{ url('/blog-post') }}">
                                            <img src="frontend/imgs/blog/blog-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">Water Partners With Rag &amp; Bone To Consume</h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="{{ url('/blog-post') }}">
                                            <img src="frontend/imgs/blog/blog-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">The loss is not all that surprising</h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="{{ url('/blog-post') }}">
                                            <img src="frontend/imgs/blog/blog-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">We got a right to pick a little fight, Bonanza </h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="{{ url('/blog-post') }}">
                                            <img src="frontend/imgs/blog/blog-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">My entrance exam was on a book of matches </h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                            <img src="frontend/imgs/banner/banner-11.jpg" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="{{ url('/shop-left') }}">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_tags mb-50">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Popular tags </h5>
                            </div>
                            <div class="tagcloud">
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">beautiful</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">New York</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">droll</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">intimate</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">loving</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">travel</a>
                                <a class="tag-cloud-link" href="{{ url('/blogs') }}">fighting </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection