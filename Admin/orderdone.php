
<?php

include("../partials/connect.php");
//include("../index.php");


if(isset($_POST['orderbtn']))
	{


//	printf("it's not working", $mysqli->error);

$ord=$_POST['ID'];




$set = "UPDATE orders SET done=True WHERE ID ='$ord'";

    mysqli_query($connect, $set);
    
      header("location: orders.php");
  

  
    
        
    
}
 
    
?>
