
<?php

include("../partials/connect.php");
//include("../index.php");


	printf("it's working");



//	printf("it's not working", $mysqli->error);



$id = $_GET['del_id'];

echo $id;


$set="DELETE FROM products WHERE ID='$id'";

mysqli_query($connect, $set);

       header("Location: index.php");

 
?>
