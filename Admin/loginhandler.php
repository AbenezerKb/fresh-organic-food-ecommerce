<?php  

session_start();

if(isset($_POST['login']))
{


include("../partials/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

echo $email;
echo $password;

$set="SELECT * FROM admins WHERE username='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

echo $final['username'];
echo $final['password'];

if(empty($email AND $password))
{
   
    header("location:index.php");

}
else{
    header("location:logout.php");
}
}
?>
