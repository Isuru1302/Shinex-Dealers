<?php

	$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

	if(isset($_POST['formsub'])){
		$storename = $_POST['storename'];
		$storeaddress = $_POST['storeaddress'];
		$storetp = $_POST['storetp'];
		$storeemail = $_POST['storeemail'];
		$storewdo = $_POST['storewdo'];
		$storeweo = $_POST['storeweo'];
		$storefb = $_POST['storefb'];
		$storeyt = $_POST['storeyt'];
		$storeinsta = $_POST['storeinsta'];

		$successurl = 'store.php?update=success';
		$failurl = 'store.php?update=fail';

		$updatedetsql = "UPDATE store_details SET store_Name = '$storename', store_Address = '$storeaddress' ,store_MainTP = 
						'$storetp', store_Email = '$storeemail', store_weekDaysOpen='$storewdo',store_weekEndOpen='$storeweo',store_FbLink='$storefb',store_YtbLink='$storeyt',store_InstaLink='$storeinsta' WHERE store_ID='1'";

		if (mysqli_query($con, $updatedetsql)) {
			header( "Location: $successurl" );
		}

		else {
		    header( "Location: $failurl" );
		}
		mysqli_close($con);
	}





?>