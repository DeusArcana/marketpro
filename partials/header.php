<?php 
	$activePage = str_replace('/', '', dirname($_SERVER['SCRIPT_NAME']));
	?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $pageTitle ?> - MarketPro</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/main.css">
		<link rel="icon" type="image/x-icon" href="../img/marketpro.ico">
		<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
				<div class="container">
					<a class="navbar-brand" href="#">MARKETPRO</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" aria-current="page" href="/index.html">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($activePage == 'offers') ? 'active':''; ?>" href="/offers">Offers</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($activePage == 'about_us') ? 'active':''; ?>" href="/about_us">About us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?= ($activePage == 'contact') ? 'active':''; ?>" href="/contact">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>