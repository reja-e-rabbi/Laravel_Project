@extends('layouts.app')

@section('content')
    
    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3"> {{ $userinfo->name }} </h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none"> {{ $userinfo->total_project_sammary }} </div>
                    <div class="d-flex align-items-center pt-5">
                        <a href=" {{ url($uploadcv->upload_link.$uploadcv->name) }} " target="_blank" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="{{ url($basic->link) }}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ $cvImages->link }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-xxl py-6" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0"> {{ $userinfo->total_project }} </h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0">of working experience</h3>
                    </div>
                    <p class="mb-4"> {{ $basic->comments }} </p>
                    <!--<p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>Afordable Prices</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>High Quality Product</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>On Time Project Delivery</p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>-->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src=" {{ url('img/about-1.jpg') }} " alt="">
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src=" {{ url('img/about-2.jpg') }} " alt="">
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Happy Clients</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up"> {{ $basic->happy_clint }} </h2>
                    </div>
                    <p class="mb-4"> {{ $basic->happy_clint_sammary }} </p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Projects Completed</h5>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">{{ $basic->total_project }}</h2>
                    </div>
                    <p class="mb-0"> {{ $basic->total_project_sammary }}</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4"> {{ $basic->comments }} </p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            
                            @foreach ($skill as $item)
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold"> {{ $item->name }} </h6>
                                    <h6 class="font-weight-bold"> {{ $item->percent }} %</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="{{ $item->percent }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <!--<div class="col-md-6">
                           
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                @foreach ($experience as $item)
                                <div class="col-sm-6">
                                    <h5> {{ $item->name }} </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1"> {{ $item->session_start }} - {{ $item->session_complete }} </p>
                                    <h6 class="mb-0"> {{ $item->institute }} </h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                @foreach ($education as $item)
                                <div class="col-sm-6">
                                    <h5> {{ $item->name }} </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1"> {{ $item->session_start }} - {{ $item->session_complete }} </p>
                                    <h6 class="mb-0"> {{ $item->institute }} </h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($servises as $item)
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3"> {{ $item->name }} </h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$ {{ $item->price }}</span></h6>
                            <span> {{ $item->comments }} </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Projects Start -->

    <!-- Projects End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-5 my-5" id="testimonial">
        <div class="container-fluid py-5">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Testimonial</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src=" {{ url('img/testimonial-1.jpg') }} " alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src=" {{ url('img/testimonial-2.jpg') }} " alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src=" {{ url('img/testimonial-3.jpg') }} " alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        @foreach ($testimonil as $item)
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle border border-secondary p-2 mx-auto" src="{{ $item->user_img_link }}" alt="">
                                <div class="testimonial-icon">
                                    <i class="fa fa-quote-left text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-5 fst-italic"> {{ $item->dilog }} </p>
                            <hr class="w-25 mx-auto">
                            <h5> {{ $item->name }} </h5>
                            <span> {{ $item->profession }} </span>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src=" {{ url('img/testimonial-1.jpg') }}" alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src=" {{ url('img/testimonial-2.jpg') }} " alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src=" {{ url('img/testimonial-2.jpg') }} " alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold"> {{ $address->address }} </h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">{{ $address->contact }}</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">{{ $address->email }}</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href=" {{ $socilelink->twitter }} "><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=" {{ $socilelink->facebook }} "><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=" {{ $socilelink->youtube }} "><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=" {{ $socilelink->linkedin }} "><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="POST" action="{{url('/message')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            @error('name')
                                <p> {{ $message }} </p>
                            @enderror
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            @error('email')
                                <p class="mb-6"> {{ $message }} </p>
                            @enderror
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            @error('subject')
                                <p class="mb-6"> {{ $message }} </p>
                            @enderror
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            @error('message')
                                <p class="mb-6"> {{ $message }} </p>
                            @enderror
                            <div class="col-12">
                                <input class="btn btn-primary py-3 px-5" type="submit" value="send">
                            </div>
                            @error('errorAll')
                                <p class="mb-6"> {{ $message }} </p>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href=" {{ url('/') }} "> {{ $basic->name }} </a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom text-secondary" href="{{ url('https://htmlcodex.com') }}" target="_blank">HTML Codex</a>
                        <br>Develop By: <a class="border-bottom" href="{{ url('https://www.youtube.com/channel/UCd--yn_XU9jNqZPxGO1pVpA') }}">Script Spark</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
