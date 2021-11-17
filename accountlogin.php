<?php  

session_start();

if(isset($_POST['login']))
{


include("../partials/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

echo $email;
echo $password;

$set="SELECT * FROM custmers WHERE username='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

echo $final['username'];
echo $final['password'];

if($email==$final['username'] AND $password==$final['password'])
{
   
    header("location:product-cart.php");

}
else{
    header("location:index.php");
}
}
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
                  </div>
                  <form class="user" action="loginhandler.php" method="POST"> 
                    <div class="form-group">
                      <input type="text" name="email"class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Enter Email Address">
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
                    <a class="font-weight-bold small" href="customer.php">Create an Account!</a>
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