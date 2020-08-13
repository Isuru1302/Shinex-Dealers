<?php
	session_start();
	// server should keep session data for AT LEAST 30min
	ini_set('session.gc_maxlifetime', 1800);

// each client should remember their session id for EXACTLY 30min
	session_set_cookie_params(1800);
 
	// Check if the user is logged in, if not then redirect to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
	}
	
	if(isset($_GET["update"])){
		switch ($_GET["update"]) {
			case 'success':
				echo '<script language="javascript">';
				echo 'alert("Updated successfully!!")';
				echo '</script>';
				break;
			case 'fail':
				echo '<script language="javascript">';
				echo 'alert("Updated Fail!!")';
				echo '</script>';
				break;
			case 'exists':
				echo '<script language="javascript">';
				echo 'alert("Updated Fail!! Already exists")';
				echo '</script>';	
				break;
		}
	}

	?>

	
	