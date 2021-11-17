<?php
include("partials/connect.php");

include("session.php");

$city=$_POST['city'];
$address=$_POST['address'];
$box=$_POST['box'];
$id=$_SESSION['username'];
$sql="SELECT * FROM cart WHERE U_ID='$id' ";
$items="";
$results=$connect->query($sql);		
while($final=$results->fetch_assoc()){

$items.=$final['Item_ID']." ";

}
$set="INSERT INTO orders(city,address,box,U_ID,Items) VALUES('$city','$address','$box','$id','$items')";


mysqli_query($connect, $set);     



?>



<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="l6gb9s4uvo@privacy-mail.top">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
