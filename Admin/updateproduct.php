
<?php

include("../partials/connect.php");
//include("../index.php");

if(isset($_POST['update']))
	{



//	printf("it's not working", $mysqli->error);

$newid=$_POST['id'];
$newname = $_POST['name'];
$newprice = $_POST['price'];
$newdesc = $_POST['description'];

echo $newid;
echo $newname;
echo $newprice;
echo $newdesc;


$target ="uploads/";

$file_path=$target.basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];

$file_store="../uploads/".$file_name;

echo $file_store;
echo $file_tmp;

move_uploaded_file($file_tmp,$file_store);

$set = "UPDATE products SET name='$newname', price='$newprice', description='$newdesc', picture='$file_path' WHERE ID ='$newid'";

    mysqli_query($connect, $set);
    
        header("Location: index.php");
    
        
    
    

 
    }
?>
