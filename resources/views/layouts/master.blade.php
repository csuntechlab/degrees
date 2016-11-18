<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>Degrees Web Service</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="icon" type="image/x-icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="https://use.typekit.net/gfb2mjm.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
	<link rel="stylesheet" href="{!! url('/css/metaphor.css') !!}">
</head>
<body>
	<div class="section section--sm">
		<div class="container type--center">
			<h1 class="giga type--thin">Degrees Web Service</h1>
			<h3 class="h1 type--thin type--gray">Delivering Degree information about CSUN Faculty</h3>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					@include('layouts.partials.side-nav')
				</div>
				<div class="col-sm-9">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	@include('layouts.partials.csun-footer')
	@include('layouts.partials.metalab-footer')
	<script type="text/javascript" src="{!! url('/js/metaphor.js') !!}"></script>
</body>
