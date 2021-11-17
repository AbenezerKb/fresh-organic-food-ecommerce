<?php 

session_start();

if(empty($_SESSION['username'] AND $_SESSION['password']))
{
header("Location:login.php");

 
}
?>