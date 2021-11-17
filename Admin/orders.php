<!DOCTYPE html>
<html lang="en">

<head>
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
          
        <table class="cart-summary table table-bordered">
								<thead>
									<tr>
                    <th>
                    Order done
                    </th>
																													
										<th class="width-100 text-center">UserName</th>
										<th class="width-100 text-center">City</th>										
                                        <th class="width-100 text-center">Address</th>										
                                        <th class="width-100 text-center">P.O Box</th>										
                                        <th class="width-100 text-center">Items</th>										
                                        <th class="width-100 text-center">Done</th>										
									</tr>
								</thead>
													<?php

														include("../partials/connect.php");	
                            //$U_ID=$_GET['u_id'];												

														$set="SELECT * FROM orders ";

                            
														$results=$connect->query($set);													
														$num=0;
														while($final=$results->fetch_assoc()){
													
														?>
								<tbody>
									<tr>
										<td>

                    <form action="orderdone.php" method="POST">
                          <input type="hidden" name="ID" value="<?php echo $final['ID'] ?>"  >
                  <input type="submit" name="orderbtn" value="Order Sent">
                  </form>

                    </td>
									
										<td>
										<?php echo $final['U_ID'] ?>
										</td>
										<td class="text-center">
										
										<?php echo $final['city'] ?>

										</td>
										<td>
										<?php echo $final['address'] ?>
										</td>
										<td class="text-center">

										<?php
                    echo $final['box'];
                   
                    ?>
										</td>
                  
										<td>
                    <?php
                    echo $final['Items'];
                   
                    ?>
                    </td>

                    <td>
                    <?php
                    echo $final['done'];
                   
                    ?>
                    </td>

										<?php 
                            }
														
														?>
									</tr>
																		
								</tbody>
																
							</table>
       
                        
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