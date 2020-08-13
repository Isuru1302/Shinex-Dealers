<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>


<link rel="stylesheet" type="text/css" href="css/slider-pro.min.css" media="screen"/>

<script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>




 <link rel="stylesheet" href="css/fontawesome/css/all.css" >


<link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" type="text/css" href="css/wow.css">

<link rel="stylesheet" type="text/css" href="css/sidenav.css">

<script type="text/javascript" src="js/sidenav.js"></script>

<script type="text/javascript" src="js/wow.min.js"></script>




<?php
		$domain = "http://www.shinexdealer.com";
		include('includes/dbConnect.php'); 
		$sql1 = "SELECT * FROM store_details";
		$sql2 = "SELECT * FROM store_mainpage";
		

		$result1 = $con->query($sql1);
		$result2 = $con->query($sql2);
		
		while($row1 = $result1->fetch_assoc()) {
			$storename = $row1["store_Name"];
			$storelogo = $row1["store_Logo"];
			$storeaddress = $row1["store_Address"];
			$storemainTP = $row1["store_MainTP"];
			$storeFAX = $row1["store_FAX"];
			$storeemail = $row1["store_Email"];
			$storewdOpen = $row1["store_weekDaysOpen"];
			$storeendOpen = $row1["store_weekEndOpen"];
			$storefblink = $row1["store_FbLink"];
			$storeytlink = $row1["store_YtbLink"];
			$storeinstalink = $row1["store_InstaLink"];
		}

		while($row2 = $result2->fetch_assoc()) {
			$storeaboutUs = $row2["aboutUs"];
			$storecon1_top1 = $row2["con1_top1"];
			$storecon1_top2 = $row2["con1_top2"];
			$storecon1_top3 = $row2["con1_top3"];
			$storecon1_top4 = $row2["con1_top4"];
			$storecon1_top1_des = $row2["con1_top1_des"];
			$storecon1_top2_des = $row2["con1_top2_des"];
			$storecon1_top3_des = $row2["con1_top3_des"];
			$storecon1_top4_des = $row2["con1_top4_des"];
			$mb_img1 = $row2["mb_Image1"];
			$mb_img2 = $row2["mb_Image2"];
			$mb_img3 = $row2["mb_Image3"];
			$mb_img4 = $row2["mb_Image4"];
			$mb_img5 = $row2["mb_Image5"];
			$aboutusIMG = $row2["aboutusIMG"];
			$topImgage = $row2["topimage"];
		}

	?>

