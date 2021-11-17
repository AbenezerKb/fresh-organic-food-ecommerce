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
								
								<div class="page-cart">
						<div class="table-responsive">
							
							<table class="cart-summary table table-bordered">
								<thead>
									<tr>
										<th class="width-20">&nbsp;</th>
										<th class="width-80 text-center">Image</th>
										<th>Name</th>
										<th class="width-100 text-center">Unit price</th>
										<th class="width-100 text-center">Qty</th>
										<th class="width-100 text-center">Total</th>
									</tr>
								</thead>
													<?php

														include("partials/connect.php");
														

														$id= $_SESSION['username'];
														
														 $set="SELECT * FROM cart WHERE U_ID='$id' ";

														$results=$connect->query($set);													
														$total=0;
														$pros="";
														while($final=$results->fetch_assoc()){
															$idd=$final['Item_ID'];															
															$newset="SELECT * FROM products WHERE ID='$idd' ";															
															$newresults=$connect->query($newset);													
															while($i=$newresults->fetch_assoc()){
																$pros.=$i['ID']." ";
														?>
								<tbody>
									<tr>
										
										
										<td class="product-remove">
											<a title="Remove this item" href="deletecart.php?del_id=<?php echo $i['ID'] ?>"  class="remove" href="#">
												<i class="fa fa-times"></i>
											</a>
										</td>
										<td>
										<img width="80" alt="Product Image" class="img-responsive" src="<?php echo $i['picture']  ?>">
										</td>
										<td>
										<?php echo $i['name'] ?>
										</td>
										<td class="text-center">
										
										<?php echo $i['price']."$" ?>

										</td>
										<td>
										<?php  
										
											
											$m="SELECT qty FROM cart WHERE Item_ID='$idd' AND U_ID='$id' ";																						 

											 $r=$connect->query($m);													

											 $f=$r->fetch_assoc();

											 echo $f['qty'];
											 ?>
										</td>
										<td class="text-center">
										<?php  																						

											 echo "$".($f['qty']*$i['price']);

												$total=$total + $f['qty']*$i['price'];			
																									
											?>
										</td>
										<?php 
															}
															
														}
														?>
									</tr>
												
								</tbody>
								
								<tfoot>
									<tr class="cart-total">
										<td rowspan="3" colspan="3"></td>
										<td colspan="2" class="text-right">Total products</td>
										<td colspan="1" class="text-center">$<?php echo $total ?></td>
									</tr>
									<tr class="cart-total">
										<td colspan="2" class="text-right">Total shipping</td>
										<td colspan="1" class="text-center">$10</td>
									</tr>
									<tr class="cart-total">
										<td colspan="2" class="total text-right">Total</td>
										<td colspan="1" class="total text-center">$<?php echo ($total+10) ?></td>
									</tr>
								</tfoot>
							</table>
						</div>
						
						<div class="checkout-btn">
							<a href="product-checkout.php?pro_id=<?php echo $pros ?>" class="btn btn-primary pull-right" title="Proceed to checkout">
								<span>Proceed to checkout</span>
								<i class="fa fa-angle-right ml-xs"></i>
							</a> 
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