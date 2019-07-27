<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Learning Laravel 5.8')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
</head>
<body>

  @include('nav')

  @if(session()->has('message'))
	<div class="container">
  	<div class="alert alert-success" role="alert">
		<strong>Success.</strong> {{ session()->get('message') }}
  	</div>
  </div>
  @endif

  @yield('content')

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</body>
</html>