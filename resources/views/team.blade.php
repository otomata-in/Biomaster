@extends('layouts.app')

@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Page Heading Box ==== -->
        <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner1.jpg);">
            <div class="container">
                <div class="page-banner-entry">
                    <h1 class="text-white">Our Team</h1>
                </div>
            </div>
        </div>
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Our Team</li>
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
                                    <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-user"></i> William</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">This Story Behind Education Will Haunt You Forever.</a></h5>
                                    <p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> John</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">What Will Education Be Like In The Next 50 Years?</a></h5>
                                    <p>As desperate as you are right now, you have done everything you can on your.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> George</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> Thomas</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h5>
                                    <p>When I needed to start from scratch and figure out how things work. Getting people.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> James</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> Arthur</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>
                                    <p>You may have seen our tool that's been featured   many world-class SEO marketers.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> Thomas</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">Eliminate Your Fears And Doubts About Education.</a></h5>
                                    <p>When I needed to start from scratch and figure out how things work. Getting people.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>28 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> James</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">Seven Reasons You Should Fall In Love With Education.</a></h5>
                                    <p>Honestly, I made ZERO money in the first year and I definitely do not want you to go.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>26 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">

                                        <li><a href="#"><i class="fa fa-user"></i> Arthur</a></li>
                                    </ul>
                                    <!-- <h5 class="post-title"><a href="blog-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>
                                    <p>You may have seen our tool that's been featured   many world-class SEO marketers.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>15 Comment</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination ==== -->
                    <div class="pagination-bx rounded-sm gray clearfix">
                        <ul class="pagination">
                            <li class="previous"><a href="#"><i class="ti-arrow-left"></i> Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li class="next"><a href="#">Next <i class="ti-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <!-- Pagination END ==== -->













                </div>
            </div>
            <!-- Blog Grid END ==== -->
        </div>
        <!-- Page Content Box END ==== -->





        <!-- Breadcrumb row END -->
        <div class="content-block">
            <div class="section-area section-sp1">
                <div class="container">
                    <ul class="list-inline">

                        <li>
                            <h3>ADMIN TEAM</h3>
                        </li>
                    </ul>
                    <div class="row">
                        <!-- Left part start -->
                        <div class="col-lg-8 col-xl-8">
                            <!-- blog start -->
                            <div class="recent-news blog-lg">
                                <div class="action-box blog-lg">
                                    <img src="assets/images/blog/default/thum1.jpg" alt="">
                                    <br>
                                </div>

                            </div>

                            <!-- blog END -->
                        </div>
                        <!-- Left part END -->
                        <!-- Side bar start -->
                        <!-- sucess
                            sucess
                            sucess -->
                        <div class="col-lg-4 col-xl-4">
                            <aside class="side-bar sticky-top">

                                <div class="comments-area" id="comments">
                                    <!-- <h2 class="comments-title">Core team</h2> -->
                                    <div class="clearfix m-b20">
                                        <!-- comment list END -->
                                        <ol class="comment-list">

                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"> <img class="avatar photo"
                                                            src="assets/images/testimonials/pic1.jpg" alt="">
                                                        <cite class="fn">MR. SAMSON SUNNY </cite> <span
                                                            class="says">says:</span> </div>
                                                    <div class="comment-meta"> <a>Zoology 12 years experience</a> </div>


                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"> <img class="avatar photo"
                                                            src="assets/images/testimonials/pic2.jpg" alt="">
                                                        <cite class="fn">MR. VISHNU MURALI </cite> <span
                                                            class="says">says:</span> </div>
                                                    <div class="comment-meta"> <a>Physics 12 years experience</a> </div>


                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"> <img class="avatar photo"
                                                            src="assets/images/testimonials/pic3.jpg" alt="">
                                                        <cite class="fn">MR. SHAJI MOHAN </cite> <span
                                                            class="says">says:</span> </div>
                                                    <div class="comment-meta"> <a>Botany 30 years experience</a> </div>


                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"> <img class="avatar photo"
                                                            src="assets/images/testimonials/pic3.jpg" alt="">
                                                        <cite class="fn">MS. SINIY </cite> <span
                                                            class="says">says:</span> </div>
                                                    <div class="comment-meta"> <a>Chemistry 10 years experience</a> </div>


                                                </div>
                                            </li>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author vcard"> <img class="avatar photo"
                                                            src="assets/images/testimonials/pic3.jpg" alt="">
                                                        <cite class="fn">MR. SANJO SUNNY </cite> <span
                                                            class="says">says:</span> </div>
                                                    <div class="comment-meta"> <a>Chemistry 10 years experience</a> </div>


                                                </div>
                                            </li>
                                        </ol>
                                        <!-- comment list END -->
                                        <!-- Form -->

                                        <!-- Form -->
                                    </div>
                                </div>




                            </aside>
                        </div>
                        <!-- Side bar END -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Content END-->
@endsection
