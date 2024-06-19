@extends("frontend.layouts.main-two")
@section("title", "Privacy Policy")
@section("main-container")
<main class="main single-page">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{ url('/') }}" rel="nofollow">Home</a>
                <span></span> About us
                <span></span> All Members
            </div>
        </div>
    </div>
    <section id="team" class="pt-25 wow fadeIn animated">
        <div class="container">
            <div class="row mb-50 align-items-center">
                <div class="col-md-6">
                    <h6 class="mt-0 mb-15 text-uppercase font-sm text-brand wow fadeIn animated">Our Team</h6>
                    <h2 class="mb-15 wow fadeIn animated">Top team of experts</h2>
                    <p class="text-grey-3 wow fadeIn animated">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione optio perferendis sequi mollitia quis autem ea cupiditate possimus!</p>
                </div>
            </div>
            <div class="position-relative">
                <div class="row wow fadeIn animated">
                    @foreach($members as $value)
                    <div class="col-lg-3 col-md-6 mb-50">
                        <div class="blog-card border-radius-10 overflow-hidden text-center">
                            <img src="{{'storage/'.$value->image }}" alt="Image not found" class="border-radius-10 mb-30 hover-up">
                            <h4 class="fw-500 mb-0">{{ $value->name }}</h4>
                            <p class="fw-400 text-brand mb-10">{{ $value->designation }}</p>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0 animated">
                                <a href="{{ $value->facebook }}"><img src="frontend/imgs/theme/icons/icon-facebook.svg" alt="Icon not fount"></a>
                                <a href="{{ $value->twitter }}"><img src="frontend/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                                <a href="{{ $value->insta }}"><img src="frontend/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection