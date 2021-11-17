<!DOCTYPE html>
<html lang="zxx">
	

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
					
				</div>
			
			
				<div class="container">
					<div class="row">
						<!-- Sidebar -->
						
						
						<!-- Page Content -->
						<div id="center-column" class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="product-category-page">
								<!-- Nav Bar -->
								
								
								<?php

								include("partials/connect.php");

								$set="SELECT * FROM products";

								$results=$connect->query($set);

									while($final=$results->fetch_assoc()){ ?>																																																															
									


								<div class="tab-content">
									<!-- Products Grid -->
									<div class="tab-pane active" id="products-grid">
										<div class="products-block">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
													<div class="product-item">
														<div class="product-image">
															<a href="product-detail-left-sidebar.html">
																<img class="img-responsive" src="<?php echo $final["picture"] ?>" style="min-height:100px; max-height:100px; min-width:100px; max-width:100px;" alt="Product Image">
															</a>
														</div>
														
														<div class="product-title">

														<a href="proshow.php ? pro_id=<?php echo $final ["ID"] ?> "  <?php $j=$final ['ID'] ;?>  id=<?php echo $final ["ID"]; ?> >
														<label> <?php echo $final['name'] ?>  </label> 
														</a>

														</div>																										
														
														<div class="product-price">
															<span>$ <?php echo $final['price'] ?>  </span> 
														</div>
														

																	

														<div class="product-buttons" >	
																	
																		<a class="add-to-cart" href="product-detail.php?pro_id=<?php echo $final ['ID'] ?>" >
																		<button id="submit"   class="btn btn-primary">																	
																		View Detail
																	</button>																	
														
													<?php	//"document.location.href='product-cart.php?cart_id=<?php echo $final['ID'] '"
													//onclick="submitText( <?php   echo $final ['ID']   ) "
													?>
														
																			</a>
														</div>
													</div>

													<script>

															//const person = [];
															//var i=0;
															function submitText(q){

																//	person[i]=q;	
																				
																//	i=i+1;																							

																//	console.log(i);
																//	console.log(q);
															
															var name=document.getElementById('')


																			}

																	</script>

												</div>
												<?php   }
												

												
												?>

												
												
												
												</div>
											</div>
										</div>
									</div>
									
									<!-- Products List -->
									
								</div>
								
								<!-- Pagination Bar -->
								
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