<?php

	if(isset($_POST["delpro"])){

		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

		$pid = $_POST["pid"];
		$pname = $_POST["pname"];
		
		$successurl = 'products.php?update=success';
		$failurl = 'products.php?update=fail';

		$del = "SELECT * FROM store_product WHERE product_ID='$pid' AND product_Name='$pname'";

		$delrs = $con->query($del)  or die($con->error);
        while($delrow= mysqli_fetch_array($delrs)){

        	$file1 = $delrow["product_IMG1"];
        	$file2 = $delrow["product_IMG2"];
        	$file3 = $delrow["product_IMG3"];
        	$file4 = $delrow["product_IMG4"];
        	$file5 = $delrow["product_IMG5"];

        }

        echo $file1;
        echo $file5;

        if($file1 != "images/blank.gif"){
        	unlink("../".$file1);
        }

        if($file2 != "images/blank.gif"){
        	unlink("../".$file2);
        }

        if($file3 != "images/blank.gif"){
        	unlink("../".$file3);
        }

        if($file4 != "images/blank.gif"){
        	unlink("../".$file4);
        }

        if($file5 != "images/blank.gif"){
        	unlink("../".$file5);
        }
		
		$delsql1 = "DELETE FROM store_product WHERE product_ID='$pid' AND product_Name='$pname'";

		if (mysqli_query($con, $delsql1)) {
			header( "Location: $successurl" );
		}

		else {
		    header( "Location: $failurl" );
		}
		mysqli_close($con);
	}







?>