<?php

	if(isset($_POST["cpsubmit"])){
		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

		$newpw1 = $_POST["newpassword1"];
		$newpw2 = $_POST["newpassword2"];

		$successurl = 'dashboard.php?update=success';
		$failurl = 'dashboard.php?update=fail';

		if($newpw1 == $newpw2){

			$cpwSQL = "UPDATE admins SET password ='$newpw1' WHERE admin_ID = '1'";

			if (mysqli_query($con,$cpwSQL)) {
				header( "Location: $successurl" );
			}

			else{
				header( "Location: $failurl" );
			}
		}

		else{
			header( "Location: $failurl" );
		}

	}

?>