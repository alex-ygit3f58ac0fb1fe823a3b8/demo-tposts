@extends('layouts.layout')

@section('content')
    <div class="container">
    	<div class="row">
    		<!-- Begin Post -->
    		<div class="col-md-8 col-md-offset-2 col-xs-12">
    			<div class="mainheading">
                    <h1 class="posttitle">{{ $post->title }}</h1>
                </div>
    			<!-- Begin Featured Image -->
    			{{--<img class="featured-image img-fluid" src="assets/img/demopic/10.jpg" alt="">--}}
    			<!-- End Featured Image -->
    			<!-- Begin Post Content -->
    			<div class="article-post">
    				{{ $post->content }}
    			</div>
    			<!-- End Post Content -->
    		</div>
    		<!-- End Post -->
            <!-- Begin Top Meta -->
            <div class="col-md-10">
                <br>
                <br>
                <a class="link-dark" href="{{ route('user.posts', $post->user) }}">{{ $post->user->full_name }}</a>
                <span class="post-date">{{ $post->created_at->format('d.m.Y') }}</span>
            </div>
            <!-- End Top Menta -->
    	</div>
    </div>
@endsection
