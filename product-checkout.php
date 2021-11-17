<!DOCTYPE html>
<html lang="zxx">
	
<?php

include("session.php");

?>
<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>
		
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
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Shopping Cart</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><span>Shopping Cart</span></li>
						</ul>
					</div>
				</div>
			
				<div class="container">
					<div class="page-checkout">
						<div class="row">
							<div class="checkout-left col-lg-9 col-md-9 col-sm-9 col-xs-12">
								
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a class="accordion-toggle "  data-parent="#accordion" href="#collapseOne">
													Address
												</a>
											</h4>
										</div>
										<div  class="accordion-body " style="height: 0px;">
											<div class="panel-body">

											<?php 
											
			//								$pizza  = $_GET['pro_id'];
			//								$pieces = explode(" ", $pizza);
			//								echo $pieces[0]; // piece1
			//								echo $pieces[1];
											
											$pros=$_GET['pro_id'];
											$p=$pros;
											// $pros;
										//	$array[]= explode(" ", $p);
									//		print(explode(",", $pros));
											//echo $array[1];
											?>
												<form action="payment.php" id="formaddress" method="POST" >
																										
													<div class="form-group">
														<div class="col-md-12">
															<label>City </label>
															<input type="text"  name="city" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Address </label>
															<input type="text"  name="address" class="form-control">
														</div>
													</div>													
													<div class="form-group">
														<div class="col-md-12">
															<label>P.O Box </label>
															<input type="text"  name="box" class="form-control">
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" value="Place Order" class="btn pull-right">
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									
									
									
									
								</div>

							
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			
			
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