<?php


include("partials/connect.php");


$first=$_POST['first'];
$email=$_POST['email'];
$password=$_POST['password'];


$password1="password";
$enc_first=openssl_encrypt($first,"AES-128-ECB",$password1);
$enc_email=openssl_encrypt($email,"AES-128-ECB",$password1);
$enc_password=openssl_encrypt($password,"AES-128-ECB",$password1);
//$enc_first=openssl_decrypt($encrypted_string,"AES-128-ECB",$password);

$set="INSERT INTO customer(username, email,password) VALUES('$first','$email','$password')";

if( mysqli_query($connect, $set))
    {
       // echo $encrypted_string;
        header("Location: index.php");
    }

 else{

  //  echo $encrypted_string;

    header("Location: user-register.php");

 }   

?>