<?php
	$con = mysqli_connect("localhost","storeadmin" ,"12345","store");
	if(isset($_POST["editsubmit"])){

		$target_dir = "../images/";

		$target_file = $target_dir. basename($_FILES["cimage"]["name"]);
		$tmpimage =  basename($_FILES["cimage"]["name"]);

		$caid = $_POST["cid"];
		$catag = $_POST["ctag"];
		$caname = $_POST["cname"];
		$coldImg = $_POST["oldimg2"];

		if($tmpimage!=""){
			$image = "images/".$tmpimage;
			$target_file = $target_dir . $tmpimage;
			move_uploaded_file($_FILES["cimage"]["tmp_name"], $target_file);
		}

		else{
			$image = $coldImg;
		}

		$sql = "UPDATE store_categories SET category_Name = '$caname', catImg = '$image'  WHERE categort_ID='$caid' AND cat_tag ='$catag'";

		$successurl = 'categories.php?update=success';
		$failurl = 'categories.php?update=fail';
		
		if (mysqli_query($con,$sql)) {
			header( "Location: $successurl" );
		}

		else{
			header( "Location: $failurl" );
		}
	}

?>