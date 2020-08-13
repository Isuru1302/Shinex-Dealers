<!DOCTYPE html>
<html>
<head>
	<title>Shinex Facility</title>
	<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('includes/headerIncludes.php'); ?>
	<?php include('includes/dbConnect.php'); ?>


	<style>
		.navabout{
			display: none!important;
		}
	</style>

	<script type="text/javascript">
			$( document ).ready(function( $ ) {
				var x =$(document).width();
				$( '#mainSlider' ).sliderPro({
						
					width:"fullScreen",
					imageScaleMode:'exact',
					height: 300,
					arrows: true,
					buttons: true,
					waitForLayers: true,
					thumbnailWidth: 200,
					thumbnailHeight: 100,
					thumbnailPointer: true,
					autoplay: true,
					autoScaleLayers: true,
					fade:true,
					autoplayOnHover:"none",
					breakpoints: {
						500: {
							thumbnailWidth: 120,
							thumbnailHeight: 50
						}
					}
				});
			});


		</script>
</head>
<body>

	<!-- Header -->
	<?php
		include('includes/navigationBar.php');

		include('includes/mainslider.php');

		if(isset($_GET['category'])){
			$pcid = $_GET['category'];
		}

		else{
			$pcid="all";
		}

		if(isset($_GET['searchword'])){
			$sword = $_GET['searchword'];
		}

		else{
			$sword = "";
		}

		if(isset($_GET['sortby'])){
			$urlsrtby = $_GET['sortby'];
		}

		else{
			$urlsrtby = "0";
		}

		

		switch ($urlsrtby) {
			case '1':
				$srtby = "1";
					$sqlProducts = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%' ORDER BY p.product_ID DESC";
				
				break;

			case '2':
				$srtby = "2";
				
					$sqlProducts = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%' ORDER BY p.product_ID ASC";
				
				break;

			case '3':
				$srtby = "3";
					$sqlProducts = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%' ORDER BY p.product_Price ASC";
				
				break;

			case '4':
				$srtby = "4";
				$sqlProducts = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%' ORDER BY p.product_Price DESC";
				
				break;	
			
			default:
				$srtby = "0";

				$sqlProducts = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%' ORDER BY p.product_ID DESC";
				

				break;
		}
	
		$slqcategories1 = "SELECT * FROM store_categories ";
		$slqcategories2 = "SELECT * FROM store_product p, store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_Name LIKE '%$sword%'" ;

		

		$resultCAT1 = $con->query($slqcategories2);

		while($rowcat = $resultCAT1->fetch_assoc()) {
			$category = $rowcat["category_Name"];
		}

		$resultCAT = $con->query($slqcategories1);
		$resultCAT2 = $con->query($slqcategories1);

		

		$resultProducts = $con->query($sqlProducts);

		

	?>



	<div class="products_Header">
		<div class="container">
			<div class="row">

				<div class="page_Navigation p-3 mb-2 bg-light text-dark" style="width:100%;">

					<ul id="navigation">
						<li><a href="index"><i class="fas fa-home"></i></a></li>
						<li><i class="fas fa-arrow-right"></i></li>

						<li><a href="product.php?category=<?php echo $productCategoryID;?>"><?php echo $category;?></a></li>

					</ul>

				</div>
				
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-12 col-sm-12 col-md-3">
				<div class="store_categories cate1" >
					<h6 class="storecate">Categories</h6>
					<ul>
						<li><a href="product.php?category=all">All Categories</a></li>
						<?php
						while($rowCAT = $resultCAT->fetch_assoc()) { ?>

							<li><a href="product.php?category=<?php echo $rowCAT["categort_ID"]; ?>"><?php echo $rowCAT["category_Name"]; ?></a></li>

						<?php } ?>
						
					</ul>
				</div>

				<div class="store_categories cate2">
					<h6 class="storecate">Categories</h6>
						<select id="sortbycate" class="selcateg">
							<option value="product.php?category=all"
							<?php if($pcid=="all"){
								echo "selected";
							} ?>


							>All Categories</option>
						<?php
						while($rowCAT2 = $resultCAT2->fetch_assoc()) { ?>

							<option
							<?php if($pcid==$rowCAT2["categort_ID"] ){
								echo "selected"; } ?>
								value="product.php?category=<?php echo $rowCAT2["categort_ID"]; ?>"
							>
							<?php echo $rowCAT2["category_Name"]; ?></option>

						<?php } ?>
						</select>
						
				</div>

				<div class="sort_by">
					<h6 class="sortbyname">Sort by</h6>
					<select class="sortbyitems" id="sortbyitems">

						<option value="sresults?searchword=<?php echo $sword ;?>&sortby=0"
							<?php if($srtby==0){
								echo "selected";
							} ?>
							>--Select--</option>

						<option value="sresults?searchword=<?php echo $sword ;?>&sortby=1"
							<?php if($srtby==1){
								echo "selected";
							} ?>
							>Date(New to Oldest)</option>
						<option value="sresults?searchword=<?php echo $sword ;?>&sortby=2"
							<?php if($srtby==2){
								echo "selected";
							} ?>
							>Date(Oldest to New)</option>
						<option value="sresults?searchword=<?php echo $sword ;?>&sortby=3"
							<?php if($srtby==3){
								echo "selected";
							} ?>
							>Price(Low to High)</option>
						<option value="sresults?searchword=<?php echo $sword ;?>&sortby=4"
							<?php if($srtby==4){
								echo "selected";
							} ?>
							>Price(High to Low)</option>
					</select>
				</div>

			</div>

			<div class="col-12 col-sm-12 col-md-9">
				<div class="container">
						<div class="row">

			<?php
				while($row = $resultProducts->fetch_assoc()) {
					$proID = $row["product_ID"];
					$productName = $row["product_Name"];
					$productAddeddate = $row["product_Added_date"];
					$productPrice = $row["product_Price"];
					$productCategoryID = $row["product_Category_ID"];
					$productAvailability = $row["product_Availability"];
					$productDescription  = $row["product_Description"];
					$productIMG1 = $row["product_IMG1"];
					$productIMG2 = $row["product_IMG2"];
					$productIMG3 = $row["product_IMG3"];
					$productIMG4 = $row["product_IMG4"];
					$productIMG5 = $row["product_IMG5"];
					
				?>

						<div class="col-12 col-sm-6 col-md-4">
								<div class="store_products" style="padding-bottom: 0.5em; margin-bottom: 0.5em; cursor: pointer;" onclick="window.location = 'item.php?productid=<?php echo $proID;?>'">

									<?php if($productAvailability!="Available"){?>
											<div class="notavialable" id="burst-8" >
												<h6></h6>
											</div>
									<?php } ?>


									<div class="product_Image">
										
											<img src="<?php echo $productIMG1; ?>"  alt="Apple Cinema 30&quot;" title="Apple Cinema 30&quot;" class="img-fluid" >
										
									</div>

									<div class="product_des">

										<h6 style="text-align: center;"><?php echo $productName; ?></h6>
									</div>
								</div>

										<!-- <form action="item.php?productid=<?php  $proID;?>"> -->
										
										<!-- <a href="item.php?productid=<?php  $proID;?>" style="display: block; margin-bottom: 0.7em;width: 90%;height: 2.4em;line-height: 2.4em;background:  #4287f5;text-align: center;text-decoration: none;
											border-radius: 5px;border:1px solid blue;font-weight: bold;color: #fff;">

											</a> -->
							</div>

						<?php } ?>

						</div>

					</div>

				</div>

			</div>

		</div>
	</div>


		<hr style="margin-left: 9%;margin-right: 9%;">

	<?php include('includes/siteDetails.php'); ?>

	<?php include('includes/footer.php'); ?>

	<?php include('includes/jsIncludes.php'); ?>

	<script>
		$(function(){
		      // bind change event to select
		      $('#sortbyitems').on('change', function () {
		          var url = $(this).val(); // get selected value
		          if (url) { // require a URL
		              window.location = url; // redirect
		          }
		          return false;
		      });
		    });


		$(function(){
		      // bind change event to select
		      $('#sortbycate').on('change', function () {
		          var url = $(this).val(); // get selected value
		          if (url) { // require a URL
		              window.location = url; // redirect
		          }
		          return false;
		      });
		    });
		</script>

</body>
</html>