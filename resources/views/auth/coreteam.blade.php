@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Out Team</h1>
                </div>
            </div>
        </div>
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Our Team</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-block">
            <!-- About Us -->
            <div class="section-area section-sp1 gallery-bx">
                <div class="container">
                    <div class="feature-filters clearfix center m-b40">
                        <ul class="filters" data-toggle="buttons">

                            <li data-filter="book" class="btn">
                                <input type="radio">
                                <a href="/team"><span>All</span></a>
                            </li>

                            <li data-filter="education" class="btn active">
                                <input type="radio">
                                <a href="/coreteam"><span>Core team</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="row d-flex flex-row-reverse">
                        <div class="">
                            <div class="courses-post">
                                <div class="ttr-post-media media-effect">
                                    <a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a>
                                </div>
                                <div class="ttr-post-info">
                                    <div class="ttr-post-title ">
                                        <h2 class="post-title">Nvidia and UE4 Technologies Practice</h2>
                                    </div>
                                    <div class="ttr-post-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type and scrambled it to make a type specimen
                                            book.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="" id="instructor">
                                <h4>team</h4>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="assets/images/testimonials/pic1.jpg" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>MR. SAMSON SUNNY </h6>
                                        <span>Zoology 12 years experience</span>


                                    </div>
                                </div>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>MR. VISHNU MURALI </h6>
                                        <span>Physics 12 years experience</span>

                                    </div>
                                </div>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>MR. SHAJI MOHAN </h6>
                                        <span>Botany 30 years experience</span>

                                    </div>
                                </div>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>MS. SINIY </h6>
                                        <span>Chemistry 10 years experience</span>

                                    </div>
                                </div>
                                <div class="instructor-bx">
                                    <div class="instructor-author">
                                        <img src="assets/images/testimonials/pic2.jpg" alt="">
                                    </div>
                                    <div class="instructor-info">
                                        <h6>MR. SANJO SUNNY </h6>
                                        <span>Chemistry 10 years experience</span>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>




                    <div class="feature-filters clearfix center m-b40">
                        <ul class="filters" data-toggle="buttons">

                            <li data-filter="book" class="btn active">
                                <input type="radio">
                                <a href="team"><span>All</span></a>
                            </li>

                            <li data-filter="education" class="btn">
                                <input type="radio">
                                <a href="coreteam"><span>Core team</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="clearfix">
                        <ul id="masonry" class="ttr-gallery-listing magnific-image row">
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_1.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_1.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 education book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_2.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_2.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_3.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_3.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_4.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_4.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_5.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_5.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_6.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_6.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_7.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_7.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_8.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_8.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_9.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_9.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_10.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_10.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_11.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_11.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 book">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_12.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_12.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_1.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_1.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_2.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_2.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_3.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_3.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="action-card col-lg-3 col-md-4 col-sm-6 education">
                                <div class="ttr-box portfolio-bx">
                                    <div class="ttr-media media-ov2 media-effect">
                                        <a href="javascript:void(0);">
                                            <img src="assets/images/portfolio/image_4.jpg" alt="">
                                        </a>
                                        <div class="ov-box">
                                            <div class="overlay-icon align-m">
                                                <a href="assets/images/portfolio/image_4.jpg" class="magnific-anchor"
                                                    title="Title Come Here">

                                                </a>
                                            </div>
                                            <div class="portfolio-info-bx bg-primary">
                                                <h4><a href="#">name</a></h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Portfolio  -->

            <div class="section-area section-sp1">
                <div class="container">

                </div>
            </div>

        </div>
        <!-- contact area END -->
    </div>
    <!-- Content END-->
@endsection
