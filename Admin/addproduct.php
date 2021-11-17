
<?php

include("../partials/connect.php");
//include("../index.php");


	



//	printf("it's not working", $mysqli->error);



$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['description'];



$target ="uploads/";

$file_path=$target.basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];



$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);

$set = "INSERT INTO products(name,price,description,picture) VALUES('$name', '$price','$desc','$file_path')";


$set=mysqli_query($connect, $set);

header("location:index.php");

?>
