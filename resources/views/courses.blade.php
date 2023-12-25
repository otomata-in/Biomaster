@extends('layouts.app')

@section('content')

<!-- Content -->
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url({{asset('assets/images/banner/banner3.jpg')}});">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Our Courses</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="#">Home</a></li>
                <li>Courses</li>
            </ul>
        </div>
    </div>


    <div class="container">


        <div class="row">
            <div class="col-md-12 heading-bx left mt-5">
                <h2 class="title-head">NEET<span> Repeater Course</span></h2>
                <p>"2 of 3 NEET qualifiers are repeaters"</p>
                <li>2 Days Revision</li>
                <li>3 Days Mocks</li>
                <li>8 Hours per Day</li>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 heading-bx left mt-5">
                <h2 class="title-head">+1 , +2<span> Programs</span></h2>
                <p>Residential School Programme</p>
                <p>Contact us for hostel accommodation guidance</p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-12 heading-bx left mt-5">
                <a href="/message" class="btn btn-primary">Message Us</a>
            </div>
        </div>


    </div>


</div>
<!-- Content END-->

@endsection