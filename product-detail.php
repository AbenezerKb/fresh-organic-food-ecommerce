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
					<div class="container">
						<h2 class="title" id="respon">Fruit</h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Home</a></li>
							<li><a href="#" title="Fruit">Fruit</a></li>
							<li><span>Tomato</span></li>
						</ul>
					</div>
				</div>
			<?php
            
            include("partials/connect.php");

            $id=$_GET['pro_id'] ;

            $set="SELECT * FROM products WHERE ID='$id' ";

            $results=$connect->query($set);

            $final=$results->fetch_assoc();

            $s="SELECT qty FROM cart WHERE ID='$id' ";

            $r=$connect->query($s);

            $f=$r->fetch_assoc();
            ?>
			
				<div class="container">
					<div class="row">
						<!-- Sidebar -->
						
						
						<!-- Page Content -->
                        <div class="col-sm-3">       
                        <img src="<?php echo $final['picture']   ?>   "  style="min-height:200px; max-height:200px; min-width:200px; max-width:200px;" >
                        </div> 

                        <div class="col-sm-6">
                            <h3> <?php  echo $final['name']  ?> </h3>
                            <br>
                            <hr>
                            <h3> <?php  echo $final['price']."$"  ?> </h3>
                            <br>
                            <hr>
                            <p>  <?php  echo $final['description']  ?>  </p>
                        </div>
                        <div class="col-sm-3">
            <form action="carthandler.php" method="POST">

                <?php
                 $v=0;
                 if($f=$r->fetch_assoc() )
                 {
                     $v=$f['qty'];
                     echo $v;
                
                }
                 
                 
                 ?>

                <input type="number" id="num" name="qty" value="<?php echo $v ?>" >
                <input type="hidden" id="num" name="ID" value="<?php echo $final['ID'] ?>">
                <br>
                <br>
                <input type="submit" class="btn btn-primary" value="Add To Cart">
                
            </form>
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