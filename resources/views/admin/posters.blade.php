@extends('layouts.admin')

@section('content')

<div class="db-breadcrumb">
	<h4 class="breadcrumb-title"></h4>
	<ul class="db-breadcrumb-list">
		<li><a href="#"><i class="fa fa-home"></i>Admin</a>
		<li>Posters</li>
	</ul>
</div>
<div class="content-block">

<a href="/admin/poster/add" class="btn btn-success">New Poster</a>
            <!-- Blog Grid ==== -->
            <div class="section-area section-sp1">
                <div class="container">
                    <div class="ttr-blog-grid-3 row" id="masonry">
                        
                        @foreach($posters as $p)
                        <div class="post action-card col-lg-4 col-md-6 col-sm-12 col-xs-12 m-b40">
                            <div class="recent-news">
                                <div class="action-box">
                                <a href="/storage/{{ $p->p_image }}" class="magnific-anchor"><img src="/storage/{{ $p->p_image }}" alt=""></a>
                                </div>
                                <div class="info-bx">
                                    <p>{{$p->p_title}} - {{$p->p_desc}}</p>
                                    <ul class="media-post">
                                        <li><a class="btn btn-danger" href="/admin/delete/poster/{{$p->id}}"><i class="fa fa-delete">Delete</i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach


                </div>
            </div>
            <!-- Blog Grid END ==== -->
        </div>
</div>



@endsection