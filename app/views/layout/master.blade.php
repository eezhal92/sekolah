<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Sekolah</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<style>
		body {
			padding-top: 50px;
		}
	</style>
</head>
<body>
	@include('layout.navigation')

	<section id="main-content">
		<div class="container">
			@yield('content')
		</div>
	</section>
</body>
</html>