<?php
	session_start();
	$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

	if(isset($_POST["loginsubmit"])){
		$uname = $_POST["user"];
		$password = $_POST["pass"];

		

		$failurl = 'index.php?lg=fail';
		$okurl = "dashboard.php";

		$sqllogin = "SELECT * FROM admins WHERE username = '$uname' AND password = '$password'";
		
		$result=mysqli_query($con,$sqllogin);
	
		$count=mysqli_num_rows($result);

		

		if($count > 0){
			$_SESSION["loggedin"] = true;
			header( "Location: $okurl" );
		}

		else{
			
			header( "Location: $failurl" );
		}
	}

?>