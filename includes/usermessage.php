<?php
	
	include('dbConnect.php'); 
	if(isset($_POST["send"])){
		date_default_timezone_set("Asia/Colombo");
		$time = date("h:i:sa");
		$date = date("Y/m/d");

		$firstname = $_POST['username'];
		$uemail = $_POST['email'];
		$umessage = $_POST['message'];

		$successurl = '../?update=success';
		$failurl = '../?update=fail';

		$msgSQL = "INSERT INTO usermessages(uname,uemail,umesssage,messageDate,messageTime,ischecked)
					values('$firstname','$uemail','$umessage','$date','$time','0')";

		if (mysqli_query($con, $msgSQL)) {
			header( "Location: $successurl" );
		}

		else {
		    header( "Location: $failurl" );
		}
		mysqli_close($con);
	}






?>