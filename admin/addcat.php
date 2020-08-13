<?php

	if(isset($_POST["addcat"])){

		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");

	
		$catname = $_POST["catname"];
		$cattag = $_POST["cattag"];
		$target_dir = "../images/";

		$target_file = $target_dir. basename($_FILES["categoryImg"]["name"]);
		$tmpimage =  basename($_FILES["categoryImg"]["name"]);

		
		
		$successurl = 'categories.php?update=success';
		$failurl = 'categories.php?update=fail';
		$exists = 'categories.php?update=exists';			

		$check="SELECT * FROM store_categories WHERE cat_tag = '$cattag' OR category_Name = '$catname'";
		
		$rs = mysqli_query($con,$check);

		$data = mysqli_fetch_array($rs, MYSQLI_NUM);
		if($data[0] > 1) {
		    header( "Location: $exists" );
		}

		else{

			move_uploaded_file($_FILES["categoryImg"]["tmp_name"], $target_file);
			$image = "images/".$tmpimage;

			$sql3 = " INSERT INTO store_categories (cat_tag,category_Name,catImg) VALUES ('$cattag','$catname','$image')";
			if (mysqli_query($con,$sql3)) {
				header( "Location: $successurl" );
			}

			else {
			    header( "Location: $failurl" );
			}
		}
		mysqli_close($con);
	}


?>