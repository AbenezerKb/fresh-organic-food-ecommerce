<?php

include("partials/connect.php");
//include("../index.php");

$newid=$_GET['del_id'];

$set="DELETE FROM cart WHERE ID='$newid'";

mysqli_query($connect, $set);

header("location: product-cart.php") 

?>