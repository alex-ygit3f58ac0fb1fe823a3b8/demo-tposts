@extends('layouts.layout')

@section('header-title', 'Все записи')
@section('header-title-description', '')

@section('content')
<!-- Begin Author Posts
	================================================== -->
	<div class="graybg authorpage">
		<div class="container">
			<div class="listrecent listrelated">
	            @foreach ($posts as $post)
					@include('post.preview')
				@endforeach
			</div>
		</div>
	</div>
	<!-- End Author Posts
================================================== -->
<br>
{{ $posts->links() }}
@endsection
