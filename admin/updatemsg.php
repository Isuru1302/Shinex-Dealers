<?php

	if(isset($_POST["upmsg"])){
		$url = $_POST["crnturl"];

		$mgid = $_POST["msgid"];

		$redicturl = "messages.php";
		header( "Location: $redicturl" );
		//$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

		// $upsql = "UPDATE usermessages SET ischecked=1  WHERE messageID=$mgid ";

		// if ($con->query($upsql) === TRUE) {
		// 	header( "Location: $redicturl" );
		// }

	}


?>