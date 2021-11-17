<?php  

session_start();

if(isset($_POST['login']))
{


include("partials/connect.php");
$email=$_POST['username'];
$password=$_POST['password'];

$set="SELECT * FROM customer WHERE username='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['username']=$final['username'];
$_SESSION['password']=$final['password'];

if($email==$final['username'] AND $password==$final['password'])
{

   
    header("location:index.php");
  

}
else{
    header("location:login.php");
   
}
}
?>
