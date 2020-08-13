<?php

	if(isset($_POST["addpr"])){
		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");
		$target_dir = "../images/";
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y/m/d");

		$successurl = 'products.php?update=success';
		$failurl = 'products.php?update=fail';

		$proname = $_POST["pname"];
		$proprice = $_POST["prprice"];
		$prooldprice = $_POST["proldprice"];

		if($prooldprice!=""){
			$oldp = $prooldprice;
		}
		else{
			$oldp = "0";
		}

		$procategory = $_POST["pcategory"];
		$proavialable = $_POST["pavialable"];
		$prodescription = $_POST["pdescription"];

		$target_file1 = $target_dir. basename($_FILES["pimg1"]["name"]);
		$tmpimage1 =  basename($_FILES["pimg1"]["name"]);
		$tmpimage2 =  basename($_FILES["pimg2"]["name"]);
		$tmpimage3 =  basename($_FILES["pimg3"]["name"]);
		$tmpimage4 =  basename($_FILES["pimg4"]["name"]);
		$tmpimage5 =  basename($_FILES["pimg5"]["name"]);	


		move_uploaded_file($_FILES["pimg1"]["tmp_name"], $target_file1);

		$image1 = "images/".$tmpimage1;

		if($tmpimage2!=""){
			$image2 = "images/".$tmpimage2;
			$target_file2 = $target_dir . $tmpimage2;
			move_uploaded_file($_FILES["pimg2"]["tmp_name"], $target_file2);
		}

		else{
			$image2 = "images/blank.gif";
		}

		if($tmpimage3!=""){
			$image3 = "images/".$tmpimage3;
			$target_file3 = $target_dir . $tmpimage3;
			move_uploaded_file($_FILES["pimg3"]["tmp_name"], $target_file3);
		}

		else{
			$image3 = "images/blank.gif";
		}

		if($tmpimage4!=""){
			$image4 = "images/".$tmpimage4;
			$target_file4 = $target_dir . $tmpimage4;
			move_uploaded_file($_FILES["pimg4"]["tmp_name"], $target_file4);
			
		}

		else{
			$image4 = "images/blank.gif";
		}

		if($tmpimage5!=""){
			$image5 = "images/".$tmpimage5;
			$target_file5 = $target_dir .$tmpimage5;
			move_uploaded_file($_FILES["pimg5"]["tmp_name"], $target_file5);
			
		}

		else{
			$image5 = "images/blank.gif";
		}


		$inputSQL = "INSERT INTO store_product (product_Name,product_Added_date,product_Price,product_oldPrice,product_Category_ID,product_Availability,product_Description,product_IMG1,product_IMG2,product_IMG3,product_IMG4,product_IMG5) VALUES ('$proname','$date','$proprice','$oldp','$procategory','$proavialable','$prodescription','$image1','$image2','$image3','$image4','$image5') ";

		if (mysqli_query($con,$inputSQL)) {
			header( "Location: $successurl");
		}

		else{
			header( "Location: $failurl");
		}
		
		mysqli_close($con);
	}

?>