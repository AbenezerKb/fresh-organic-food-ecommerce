<?php  

include("../partials/connect.php");

$email=$_POST['email'];
$password=$_POST['password'];

$set="INSERT INTO admins(username,password) VALUES('$email','$password')";

//$results = $connect->query($set);

if( mysqli_query($connect, $set))
    {
        header("Location: products.php");
    }

 else{

    header("Location: register.php");

 }   
    


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
