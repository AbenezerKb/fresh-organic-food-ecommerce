
			<?php
            
            $id=$_GET['q'];
			$sql="SELECT * FROM cart WHERE ID='$id' ";
			$results=mysqli_query($connect, $sql);
			$final=$results->fetch_assoc();
			$idd=$final['qty'];				
			$idd=$idd+1;	
			$set="INSERT INTO cart(ID,qty) VALUES('$id','$idd')  ";
			mysqli_query($connect, $set);

															 ?>