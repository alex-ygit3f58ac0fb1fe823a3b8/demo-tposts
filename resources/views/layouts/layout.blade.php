<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">
<title>Mediumish - A Medium style template by WowThemes.net</title>
<!-- Bootstrap core CSS -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Fonts -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{ asset('assets/css/mediumish.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
</head>
<body>

<!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="container">
	<!-- Begin Logo -->
	<a class="navbar-brand" href="{{ route('index') }}">
		<img src="{{ asset('assets/img/logo.png') }}" alt="logo">
	</a>
	<!-- End Logo -->
	<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			@auth
				<li class="nav-item">
					<a class="nav-link" href="{{ route('post.create_form') }}">Новый пост</a>{{-- <span class="sr-only">(current)</span> --}}
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('home') }}">Настройки</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">Выход</a>
							 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								 {{ csrf_field() }}
							 </form>
				</li>
			@endauth

			@guest
				<li class="nav-item">
					<a href="{{ route('login') }}" class="nav-link">Вход</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('register') }}" class="btn btn-outline-success">Регистрация</a>
				</li>
			@endguest
		</ul>
		<!-- End Menu -->
	</div>
</div>
</nav>
<!-- End Nav
================================================== -->

<div class="container">
@hasSection('header-title')
<!-- Begin Site Title
================================================== -->
	<div class="mainheading">
		<h1 class="sitetitle">@yield('header-title')</h1>
		<p class="lead">
			@yield('header-title-description')
		</p>
	</div>
<!-- End Site Title
================================================== -->
@endif

@yield('content')

	<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			 {{ config('app.name') }}
		</p>
		<p class="pull-right">
			 Mediumish Theme by <a target="_blank" href="https://www.wowthemes.net">WowThemes.net</a>
		</p>
		<div class="clearfix">
		</div>
	</div>
	<!-- End Footer
	================================================== -->

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
