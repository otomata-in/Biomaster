@extends('layouts.app')

@section('content')
    <!-- Inner Content Box ==== -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner3.jpg')}});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">About Us</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
        <div class="content-block">

            <!-- About Us ==== -->
            <div class="section-area bg-gray section-sp1 our-story">
                <div class="container">
                    <div class="row align-items-justify d-flex">
                        <div class="col-lg-5 col-md-12 heading-bx">
                            <h2 class="m-b10">Bio Master</h2>
                            <p>We are a young, dynamic, and versatile group with a tenacious work ethic. Our objective is to
                                create a competitive coaching centre for NEET aspirants with four primary programmes
                                including a residential school program. In the near future, we intend to extend our vision
                                across Kerala and nearby South Indian states to make this the number one South Indian
                                coaching brand for all competitive exams.

                                <br>
                                Bio Master is a joint-venture with BSM Classes. BSM is a collective of passionate teachers
                                and educators who have been producing extraordinary results in NEET competitive exams for
                                the last two decades. The team is founded by leading faculties from established centres
                                mainly from Brilliant study centre, Pala. BSM brings a unique mentoring approach to the
                                world of coaching to guarantee excellent results for students and teachers
                            </p>

                        </div>
                        <div class="col-lg-7 col-md-12 heading-bx p-lr">
                            <div class="video-bx">
                                <img src="{{ asset('assets/images/gallery/pic3.jpg') }}" alt="" />
                                <a href="{{ asset('assets/videos/intro.mp4')}}" class="popup-youtube video"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-area section-sp1">
                <div class="container">
                    <h2 class="title-head">Our Philosophy</h2>
                    <p class="justified-text">
                        At our NEET exam coaching centre, our philosophy is centered around the belief that every student
                        has the potential to succeed, regardless of their background or previous academic performance. We
                        are committed to providing our students with the tools, resources, and support they need to reach
                        their full potential and achieve their goals. Our coaching centre is built on a foundation of hard
                        work, dedication, and excellence, and we strive to instill these values in our students as they
                        prepare for the NEET exam and beyond. We also believe in fostering a supportive and inclusive
                        learning environment that encourages collaboration and mutual respect among students and faculty
                        members alike. Through our philosophy of empowerment and inclusivity, we aim to help our students
                        build the confidence, skills, and knowledge they need to succeed not only on the NEET exam but in
                        all aspects of their lives.
                    </p>
                </div>

            </div>
            <!-- About Us END ==== -->
            <!-- Why Choose ==== -->

            <!-- Why Choose END ==== -->
            <!-- Company Status ==== -->
            {{-- <div class="section-area content-inner section-sp1">
                <div class="container">
                    <div class="section-content">
                         <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
                                    <div class="text-primary">
										<span class="counter">30000</span><span>+</span>
									</div>
									<span class="counter-text">students</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-black">
										<span class="counter">1200</span><span>+</span>
									</div>
									<span class="counter-text">rank holders</span>
								</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">1500</span><span>+</span>
									</div>
									<span class="counter-text">Questions Answered</span>
								</div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
                                <div class="counter-style-1">
									<div class="text-black">
										<span class="counter">1000</span><span>+</span>
									</div>
									<span class="counter-text">Ordered Coffee's</span>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- Company Stats END ==== -->
            <!-- Our Story ==== -->

            <!-- Our Story END ==== -->
            <!-- Testimonials ==== -->

            <!-- Testimonials END ==== -->
        </div>
        <!-- Page Content Box END ==== -->
    </div>
    <!-- Page Content Box END ==== -->
@endsection
