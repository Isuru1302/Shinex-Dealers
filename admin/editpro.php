<?php

	if(isset($_POST["addpr"])){
		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");
		$target_dir = "../images/";
		date_default_timezone_set("Asia/Colombo");
		$date = date("Y/m/d");

		$successurl = 'products.php?update=success';
		$failurl = 'products.php?update=fail';

		$proid = $_POST["prodid"];
		$proname = $_POST["pname"];
		$proprice = $_POST["prprice"];
		$prooldprice = $_POST["proldprice"];
		$procategory = $_POST["pcategory"];
		$proavialable = $_POST["pavialable"];
		$prodescription = $_POST["pdescription"];

		$oldfad = $_POST["oldfad"];
		$fad = $_POST["fad"];


		$tmpimage1 =  basename($_FILES["pimg1"]["name"]);
		$tmpimage2 =  basename($_FILES["pimg2"]["name"]);
		$tmpimage3 =  basename($_FILES["pimg3"]["name"]);
		$tmpimage4 =  basename($_FILES["pimg4"]["name"]);
		$tmpimage5 =  basename($_FILES["pimg5"]["name"]);	

		$img1 = $_POST["oldimg1"];
		$img2 = $_POST["oldimg2"];
		$img3 = $_POST["oldimg3"];
		$img4 = $_POST["oldimg4"];
		$img5 = $_POST["oldimg5"];


		if($tmpimage1!=""){
			$image1 = "images/".$tmpimage1;
			$target_file1 = $target_dir . $tmpimage1;
			move_uploaded_file($_FILES["pimg1"]["tmp_name"], $target_file1);
		}

		else{
			$image1 = $img1;
		}

		if($tmpimage2!=""){
			$image2 = "images/".$tmpimage2;
			$target_file2 = $target_dir . $tmpimage2;
			move_uploaded_file($_FILES["pimg2"]["tmp_name"], $target_file2);
		}

		else{
			$image2 = $img2;
		}

		if($tmpimage3!=""){
			$image3 = "images/".$tmpimage3;
			$target_file3 = $target_dir . $tmpimage3;
			move_uploaded_file($_FILES["pimg3"]["tmp_name"], $target_file3);
		}

		else{
			$image3 = $img3;
		}

		if($tmpimage4!=""){
			$image4 = "images/".$tmpimage4;
			$target_file4 = $target_dir . $tmpimage4;
			move_uploaded_file($_FILES["pimg4"]["tmp_name"], $target_file4);
			
		}

		else{
			$image4 = $img4;
		}

		if($tmpimage5!=""){
			$image5 = "images/".$tmpimage5;
			$target_file5 = $target_dir .$tmpimage5;
			move_uploaded_file($_FILES["pimg5"]["tmp_name"], $target_file5);
			
		}

		else{
			$image5 = $img5;
		}

		echo $fad;
		if($fad==0){
			$updateSQL2 = "UPDATE featureAd SET adId =0 WHERE adId = '$proid'";
				if (mysqli_query($con,$updateSQL2)) {
			}
		}

		if($fad!=0){
			$updateSQL = "UPDATE featureAd SET adId ='$proid' WHERE fadID = '$fad'";
				if (mysqli_query($con,$updateSQL)) {
			}
		}

		



		$inputSQL = "UPDATE store_product SET product_Name = '$proname',product_Added_date = '$date',product_Price = '$proprice',product_oldPrice = '$prooldprice',product_Category_ID = '$procategory',product_Availability = '$proavialable',product_Description = '$prodescription',product_IMG1 = '$image1',product_IMG2 = '$image2',product_IMG3 = '$image3',product_IMG4 = '$image4',product_IMG5 = '$image5' WHERE product_ID = '$proid'";


		

		if (mysqli_query($con,$inputSQL)) {
			header( "Location: $successurl");
		}

		else{
			header( "Location: $failurl");
		}
		
		mysqli_close($con);
	}

?>