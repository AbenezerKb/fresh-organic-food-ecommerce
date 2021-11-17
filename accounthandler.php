<?php

include("partials/connect.php");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$set="INSERT INTO customer(username,email,password) VALUES('$username','$email','$password')";

//$results = $connect->query($set);

if( mysqli_query($connect, $set))
    {
        header("Location: index.php");
    }

 else{

    header("Location: customer.php");

 }   


?>