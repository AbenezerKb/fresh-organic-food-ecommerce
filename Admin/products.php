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
          

        <form role="form" action="addproduct.php" method="POST" enctype="Multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPrice">Price</label>
                  <input type="number" name="price" class="form-control" id="exampleInputPrice" placeholder="Enter price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                    <textarea rows="5"  name="description" class="form-control" id="exampleInputPassword1" placeholder="Description">
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile" >Picture input</Picture></label>
                  <input type="file" id="exampleInputFile" name="file" >

                
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>















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