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
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">     

            
      <li class="nav-item">
        <a class="nav-link" href="products.php">
          
          Add Product
        </a>
      </li>
      <hr class="sidebar-divider">      
      <li class="nav-item">
        <a class="nav-link" href="contacts.php">
          
          Contact
        </a>
      </li>
      <hr class="sidebar-divider">      
      <li class="nav-item">
        <a class="nav-link" href="users.php">
          
          Users
        </a>
      </li>
      <hr class="sidebar-divider">    
      <li class="nav-item">
        <a class="nav-link" href="orders.php">
          
          Orders
        </a>
      </li>
      <hr class="sidebar-divider">   
      <li class="nav-item">
        <a class="nav-link" href="logout.php">
          Log out
        </a>
      </li>
      <hr class="sidebar-divider">
      
     
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>          


        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          


        <div class="row">
   

   <div class="col-sm-9" >
   
          
    
<?php 

include("../partials/connect.php");

$set="SELECT * FROM products";

$results=$connect->query($set);

while($final=$results->fetch_assoc()){ ?>

<style>

.button4 {
  background-color: white;
  color: black;
  border: 1px solid #e7e7e7;
}


</style>
<a href="proshow.php ? pro_id=<?php echo $final ["ID"] ?> " style="  font-size:10px;">
<label style="  font-size:15px;"><?php echo $final['ID']  ?>: <?php echo $final['name'] ?>  </label> 
</a>


<a href="proupdate.php ? up_id=<?php echo $final ["ID"] ?> "   class="btn btn-primary">
Update
</a>


<a href="deleteproduct.php ? del_id=<?php echo $final ["ID"] ?> "  class="btn btn-primary">
Delete

</a>

<hr><br>

<?php   } ?>

   </div> 
   <div class="col-sm-3">       

   </div> 
            </div>















    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>  
</body>

</html>