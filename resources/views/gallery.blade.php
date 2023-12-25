@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url({{ asset('assets/images/banner/banner1.jpg') }});">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Gallery</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
        <!-- Page Heading Box END ==== -->
        <!-- Page Content Box ==== -->
        <div class="content-block">
            <!-- Blog Grid ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="ttr-blog-grid-3 row" id="masonry">
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic1.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic1.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic2.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic2.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic3.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic3.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic4.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic4.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic5.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic5.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic6.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic6.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic7.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic7.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic8.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic8.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic13.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic13.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic14.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic14.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic11.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic11.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic10.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic10.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic9.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic9.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="{{ asset('assets/images/gallery/pic12.jpg') }}" class="magnific-anchor"><img src="{{ asset('assets/images/gallery/pic12.jpg') }}" alt=""></a>
                                </div>
                                <!-- <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>

                    </div>

                    <!-- Pagination ==== -->
                    <!-- <div class="pagination-bx rounded-sm gray clearfix">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div> -->
                    <!-- Pagination END ==== -->













                </div>
            </div>
            <!-- Blog Grid END ==== -->
        </div>
        <!-- Page Content Box END ==== -->

    </div>
    <!-- Content END-->
@endsection
