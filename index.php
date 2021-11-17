<!DOCTYPE html>
<html lang="zxx">
	
<?php

include("session.php");

?>
<head>

		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reponsive.css">
	</head>
	
	<body class="home home-1">
		<div id="all">
			<!-- Header -->
		<?php
		
		include("partials/header.php");
		
		?>
			
			
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Slideshow -->		
				<div class="section slideshow">
					<div class="tiva-slideshow-wrapper">
						<div id="tiva-slideshow" class="nivoSlider">
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home1-slideshow-1.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home1-slideshow-2.jpg" alt="Slideshow Image">
							</a>
							<a href="#">
								<img class="img-responsive" src="img/slideshow/home1-slideshow-3.jpg" alt="Slideshow Image">
							</a>
						</div>
					</div>
				</div>
				
				
				<!-- Intro -->
				<div class="section intro">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="intro-header">
									<h3>Welcome To FreshMart</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="intro-left">
									<div class="intro-item">
										<p><img src="img/intro-icon-1.png" alt="Intro Image"></p>
										<h4>Always Fresh</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									
									<div class="intro-item">
										<p><img src="img/intro-icon-3.png" alt="Intro Image"></p>
										<h4>Super Healthy</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="effect">
									<a href="#">
										<img class="img-responsive" src="img/intro-1.png" alt="Intro Image">
									</a>
								</div>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="intro-right">
									<div class="intro-item">
										<p><img src="img/intro-icon-2.png" alt="Intro Image"></p>
										<h4>100% Natural</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									
									<div class="intro-item">
										<p><img src="img/intro-icon-4.png" alt="Intro Image"></p>
										<h4>Premium Quality</h4>
										<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
				<?php
				
				include("partials/products-deal.php");

				?>
				
				

			
			<!-- Footer -->
			<?php
			
			include("partials/footer.php");

			?>			
			
			
			<!-- Go Up button -->
			<div class="go-up">
				<a href="#">
					<i class="fa fa-long-arrow-up"></i>
				</a>
			</div>
			
			<!-- Page Loader -->
			
		</div>
			
		<!-- Vendor JS -->
		<script src="libs/jquery/jquery.js"></script>
		<script src="libs/bootstrap/js/bootstrap.js"></script>
		<script src="libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="libs/slider-range/js/tmpl.js"></script>
		<script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="libs/slider-range/js/draggable-0.1.js"></script>
		<script src="libs/slider-range/js/jquery.slider.js"></script>
		<script src="libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="js/main.js"></script>
	</body>


</html>