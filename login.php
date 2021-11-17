<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();



?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo.png" rel="icon">
  <title>User Account - Login</title>
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="admin/css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">

<?php

include("partials/header.php");

?>

<!-- Login Content -->
<div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
											
											
          <?php// echo phpversion();  ?>
                  </div>
                  <form class="user" action="loginhandler.php" method="POST"> 
                    <div class="form-group">
                      <input type="text" name="username"class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
                    </div>
                    
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="font-weight-bold small" href="user-register.php">Create an Account!</a>
                  </div>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="admin/js/ruang-admin.min.js"></script>


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