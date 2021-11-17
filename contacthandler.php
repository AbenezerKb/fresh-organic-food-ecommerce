<?php
include("partials/connect.php");
$email=$_POST['email'];
$name=$_POST['name'];
$content=$_POST['content'];

echo $content;

$set="INSERT INTO contact(email,name,msg) VALUES('$email','$name','$content')";


mysqli_query($connect, $set);
   
  header("location: page-contact.php");




?>
