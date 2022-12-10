<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AGENDA ADAM</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bulma.min.css') }}">
	<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
</head>
<body>

	<div class="">
		<section class="">
			@yield('content')
		</section>
	</div>

	<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>
