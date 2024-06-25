@extends('frontend.layouts.main-two')
@section('title', 'Blog Post')
@section('main-container')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Blog <span></span> Technology
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="single-page pl-30">
                            <div class="single-header style-2">
                                <h1 class="mb-30">
                                    Best smartwatch 2022: the top wearables you can buy today
                                </h1>
                                <div class="single-header-meta">
                                    <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                        <span class="post-by">By <a href="">{{ $blog->author }}</a></span>
                                        <span class="post-on has-dot">{{ $blog->updated_at->diffForHumans() }}</span>
                                        <span class="time-reading has-dot">{{ $blog->read_time }} mins read</span>
                                        <span class="hit-count has-dot">2k Views</span>
                                    </div>
                                    <div class="social-icons single-share">
                                        <ul class="text-grey-5 d-inline-block">
                                            <li><strong class="mr-10">Share this:</strong></li>
                                            <li class="social-facebook">
                                                <a href="#"><img src="frontend/imgs/theme/icons/icon-facebook.svg"
                                                        alt="" /></a>
                                            </li>
                                            <li class="social-twitter">
                                                <a href="#"><img src="frontend/imgs/theme/icons/icon-twitter.svg"
                                                        alt="" /></a>
                                            </li>
                                            <li class="social-instagram">
                                                <a href="#"><img src="frontend/imgs/theme/icons/icon-instagram.svg"
                                                        alt="" /></a>
                                            </li>
                                            <li class="social-linkedin">
                                                <a href="#"><img src="frontend/imgs/theme/icons/icon-pinterest.svg"
                                                        alt="" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <figure class="single-thumbnail">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="" />
                            </figure>
                            <div class="single-content">
                                {!! $blog->content !!}
                            </div>
                            <div class="entry-bottom mt-50 mb-30 wow fadeIn animated"
                                style="visibility: visible; animation-name: fadeIn">
                                <div class="tags w-50 w-sm-100">
                                    @php
                                        $tags = explode(', ', $blog->tags);
                                    @endphp
                                    @foreach ($tags as $tag)
                                        <a href="{{ url('/blogs') }}" rel="tag"
                                            class="hover-up btn btn-sm btn-rounded mr-10">{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
