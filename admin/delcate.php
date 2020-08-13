<?php

	if(isset($_POST["delcate"])){

		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

	
		$cid = $_POST["cid"];
		
		$successurl = 'categories.php?update=success';
		$failurl = 'categories.php?update=fail';
					


		$delsql1 = " DELETE FROM store_categories WHERE categort_ID = $cid ";
		$delsql2 = " DELETE FROM store_product WHERE product_Category_ID = $cid ";

		if (mysqli_query($con, $delsql1)) {
			if(mysqli_query($con, $delsql2)) {
				header( "Location: $successurl" );
			}
			else{
				header( "Location: $failurl" );
			}
		}

		else {
		    header( "Location: $failurl" );
		}
		mysqli_close($con);
	}


?>