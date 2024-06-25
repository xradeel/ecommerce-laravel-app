@extends('frontend.layouts.main-two')
@section('title', 'Blogs')
@section('main-container')
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Blog
                    <span></span> Technology
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container custom">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-header mb-50 text-center">
                            <h1 class="font-xxl text-brand">Our Blog</h1>
                            <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                                <span class="post-on has-dot">s Article</span>
                                <span class="time-reading has-dot">4 Authors</span>
                                <span class="hit-count  has-dot">29K Views</span>
                            </div>
                        </div>
                        <div class="loop-grid pr-30">
                            <div class="row">
                                @foreach ($blogs as $blog)
                                    @php
                                        $tags = explode(', ', $blog->tags);
                                    @endphp
                                    <div class="col-lg-4">
                                        <article class="wow fadeIn animated hover-up mb-30">
                                            <div class="post-thumb img-hover-scale">
                                                <a href="{{ route('blog', $blog->accesstoken) }}">
                                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                                                </a>
                                                <div class="entry-meta">
                                                    <a class="entry-meta meta-2"
                                                        href="{{ route('blog', $blog->accesstoken) }}">{{ $tags[0] }}</a>
                                                </div>
                                            </div>
                                            <div class="entry-content-2">
                                                <h3 class="post-title mb-15">
                                                    <a
                                                        href="{{ route('blog', $blog->accesstoken) }}">{{ $blog->title }}</a>
                                                </h3>
                                                <p class="post-exerpt mb-30">{{ $blog->summary }}</p>
                                                <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                                    <div>
                                                        <span class="post-on"> <i class="fi-rs-clock"></i> 25 April
                                                            2022</span>
                                                    </div>
                                                    <a href="{{ route('blog', $blog->accesstoken) }}"
                                                        class="text-brand">Read more <i class="fi-rs-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--post-grid-->
                        <div class="pagination-area mt-15 mb-lg-0">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i
                                                class="fi-rs-angle-double-small-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
