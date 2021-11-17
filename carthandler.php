<?php  

include("partials/connect.php");

session_start();

$U_ID=$_SESSION['username'];
$id=$_POST['ID'];
$qty=$_POST['qty'];

//echo $id;
//echo $qty;


           $set="SELECT * FROM cart WHERE ID='$id'  AND U_ID='$U_ID' ";
		   $results=$connect->query($set);
            $t=TRUE;
		    while($final=$results->fetch_assoc()){
                        if($final['ID']==$id)
                        {
                            $t=FALSE;
                            $set="UPDATE cart SET qty='$qty' WHERE ID='$id'  AND U_ID='$U_ID' " ;
                        
                             mysqli_query($connect, $set);
                             header("location: product-cart.php"); 
                        
                        
                        
                        }
                            }

                            if($t){

                            {
                                
                                $set="INSERT INTO cart(qty,U_ID,Item_ID) VALUES( '$qty','$U_ID','$id')";
                        

                             
                             
                                mysqli_query($connect, $set);

                              
                                header("location: product-cart.php"); 
                              

                            }
                            
                         } 


//$results = $connect->query($set);


    


/*
$_SESSION['email']=$final['username'];
$_SESSION['password']=$final['password'];

if($email==$final['username'] AND $password==$final['password'])
{
   
    header("location:../index.php");

}
else{
    header("location:Adminlogin.php");
}
}

*/

?>
