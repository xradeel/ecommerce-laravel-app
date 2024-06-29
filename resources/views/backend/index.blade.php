@extends('backend.layouts.main')
@section('title', 'Home')
@section('main-container')
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Dashboard </h2>
                <p>Whole data about your business here</p>
            </div>
            <div>
                <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create
                    report</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-primary-light"><i
                                class="text-primary material-icons md-person"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Admins</h6>
                            <span>{{ $adminNo }}</span>
                        </div>
                    </article>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-qr_code"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Products</h6> <span>{{ $productNo }}</span>
                            <span class="text-sm">
                                In {{ $categoryNo }} Categories
                            </span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-success-light"><i
                                class="text-success material-icons md-local_library"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Blogs</h6> <span>{{ $blogNo }}</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-category"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Categories</h6> <span> {{ $categoryNo }}</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-warning-light"><i
                                class="text-warning material-icons md-groups"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Team members</h6> <span>{{ $memberNo }}</span>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card card-body mb-4">
                    <article class="icontext">
                        <span class="icon icon-sm rounded-circle bg-info-light"><i
                                class="text-info material-icons md-notes"></i></span>
                        <div class="text">
                            <h6 class="mb-1 card-title">Personas</h6> <span>{{ $personaNo }}</span>
                            {{-- <span class="text-sm">
                                Based in your local time.
                            </span> --}}
                        </div>
                    </article>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">New Members</h5>
                            @foreach ($members as $member)
                                <div class="new-member-list">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('storage/' . $member->image) }}" alt=""
                                                class="avatar">
                                            <div>
                                                <h6>{{ $member->name }}</h6>
                                                <p class="text-muted font-xs">
                                                    {{ $member->designation }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                    </div>
                    </article>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card mb-4">
                    <article class="card-body">
                        <h5 class="card-title">Recent activities</h5>
                        <ul class="verti-timeline list-unstyled font-sm">
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="material-icons md-play_circle_outline font-xxl"></i>
                                </div>
                                <div class="media">
                                    <div class="me-3">
                                        <h6><span>Today</span> <i
                                                class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i>
                                        </h6>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Lorem ipsum dolor sit amet consectetur
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list active">
                                <div class="event-timeline-dot">
                                    <i class="material-icons md-play_circle_outline font-xxl animation-fade-right"></i>
                                </div>
                                <div class="media">
                                    <div class="me-3">
                                        <h6><span>17 May</span> <i
                                                class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i>
                                        </h6>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Debitis nesciunt voluptatum dicta reprehenderit
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="material-icons md-play_circle_outline font-xxl"></i>
                                </div>
                                <div class="media">
                                    <div class="me-3">
                                        <h6><span>13 May</span> <i
                                                class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i>
                                        </h6>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Accusamus voluptatibus voluptas.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="material-icons md-play_circle_outline font-xxl"></i>
                                </div>
                                <div class="media">
                                    <div class="me-3">
                                        <h6><span>05 April</span> <i
                                                class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i>
                                        </h6>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            At vero eos et accusamus et iusto odio dignissi
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="event-list">
                                <div class="event-timeline-dot">
                                    <i class="material-icons md-play_circle_outline font-xxl"></i>
                                </div>
                                <div class="media">
                                    <div class="me-3">
                                        <h6><span>26 Mar</span> <i
                                                class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i>
                                        </h6>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            Responded to need “Volunteer Activities
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-4 col-lg-12">

            <div class="card mb-4">
                <article class="card-body">
                    <h5 class="card-title">Marketing Chanel</h5>
                    <span class="text-muted font-xs">Facebook</span>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 15%">15%</div>
                    </div>
                    <span class="text-muted font-xs">Instagram</span>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 65%">65% </div>
                    </div>
                    <span class="text-muted font-xs">Google</span>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 51%"> 51% </div>
                    </div>
                    <span class="text-muted font-xs">Twitter</span>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
                    </div>
                    <span class="text-muted font-xs">Other</span>
                    <div class="progress mb-3">
                        <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
                    </div>
                </article>
            </div>
        </div>
        </div>
    </section>
@endsection
