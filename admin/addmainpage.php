<?php
	echo "ab";
	if(isset($_POST["mainpagesub"])){
		$con = mysqli_connect("localhost","storeadmin" ,"12345","store");
		$target_dir = "../images/";
		$topImgTargert = "../IMG/";

		$successurl = 'mainpage.php?update=success';
		$failurl = 'mainpage.php?update=fail';

		$abtUs = $_POST["abtUs"];
		$title1 = $_POST["title1"];
		$title2 = $_POST["title2"];
		$title3 = $_POST["title3"];
		$title4 = $_POST["title4"];
		$des1 = $_POST["des1"];
		$des2 = $_POST["des2"];
		$des3 = $_POST["des3"];
		$des4 = $_POST["des4"];


	
		$tmpimage2 =  basename($_FILES["mbimg1"]["name"]);
		$tmpimage3 =  basename($_FILES["mbimg2"]["name"]);
		$tmpimage4 =  basename($_FILES["mbimg3"]["name"]);
		$tmpimage5 =  basename($_FILES["mbimg4"]["name"]);
		$tmpimage6 =  basename($_FILES["mbimg5"]["name"]);

		$topImage =  basename($_FILES["topimg"]["name"]);

		$tmpimage1 =  basename($_FILES["abtimg"]["name"]);

		
		$img2 = $_POST["oldimg1"];
		$img3 = $_POST["oldimg2"];
		$img4 = $_POST["oldimg3"];
		$img5 = $_POST["oldimg4"];
		$img6 = $_POST["oldimg5"];

		$oldtopImg = $_POST["oldtop"];

		$img1 = $_POST["oldabtimg"];

		if($topImage!=""){
			$tImage = "IMG/".$topImage;
			$target_file110 = $topImgTargert . $topImage;
			move_uploaded_file($_FILES["topimg"]["tmp_name"], $target_file110);
		}

		else{
			$tImage = $oldtopImg;
		}


		if($tmpimage1!=""){
			$image1 = "images/".$tmpimage1;
			$target_file1 = $target_dir . $tmpimage1;
			move_uploaded_file($_FILES["abtimg"]["tmp_name"], $target_file1);
		}

		else{
			$image1 = $img1;
		}

		if($tmpimage2!=""){
			$image2 = "images/".$tmpimage2;
			$target_file2 = $target_dir . $tmpimage2;
			move_uploaded_file($_FILES["mbimg1"]["tmp_name"], $target_file2);
		}

		else{
			$image2 = $img2;
		}

		if($tmpimage3!=""){
			$image3 = "images/".$tmpimage3;
			$target_file3 = $target_dir . $tmpimage3;
			move_uploaded_file($_FILES["mbimg2"]["tmp_name"], $target_file3);
		}

		else{
			$image3 = $img3;
		}

		if($tmpimage4!=""){
			$image4 = "images/".$tmpimage4;
			$target_file4 = $target_dir . $tmpimage4;
			move_uploaded_file($_FILES["mbimg3"]["tmp_name"], $target_file4);
			
		}

		else{
			$image4 = $img4;
		}

		if($tmpimage5!=""){
			$image5 = "images/".$tmpimage5;
			$target_file5 = $target_dir .$tmpimage5;
			move_uploaded_file($_FILES["mbimg4"]["tmp_name"], $target_file5);
			
		}

		else{
			$image5 = $img5;
		}

		if($tmpimage6!=""){
			$image6 = "images/".$tmpimage6;
			$target_file6 = $target_dir .$tmpimage6;
			move_uploaded_file($_FILES["mbimg6"]["tmp_name"], $target_file6);
			
		}

		else{
			$image6 = $img6;
		}


		$inputSQL = "UPDATE store_mainpage SET aboutUs = '$abtUs',con1_top1 = '$title1',con1_top2 = '$title2',con1_top3 = '$title3',con1_top4 = '$title4',con1_top1_des = '$des1',con1_top2_des = '$des2',con1_top3_des = '$des3',con1_top4_des = '$des4',mb_Image1 = '$image2',mb_Image2 = '$image3',mb_Image3 = '$image4',mb_Image4 = '$image5',mb_Image5 = '$image6',aboutusIMG = '$image1',topimage ='$tImage' WHERE ID = '1'";

		$reqult = mysqli_query($con,$inputSQL) or die (mysqli_error($con));

		if ($reqult){
			header( "Location: $successurl");
		}

		else{
			header( "Location: $failurl");
		}
		
		mysqli_close($con);
	}

?>