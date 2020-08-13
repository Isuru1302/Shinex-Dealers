<!DOCTYPE html>
<html>
<head>
	<title>Shinex Facility</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('includes/headerIncludes.php'); ?>
	<?php include('includes/dbConnect.php'); ?>

	<script type="text/javascript">
		$( document ).ready(function( $ ) {
			var x =$(document).width();
			$( '#mainSlider2' ).sliderPro({
				height:'380',
				imageScaleMode:'contain',
				fade: true,
				arrows: true,
				buttons: false,
				waitForLayers: true,
				thumbnailWidth: 200,
				thumbnailHeight: 100,
				thumbnailPointer: true,
				autoplay: true,
				autoplayDelay : 3000,
				autoScaleLayers: true,
				breakpoints: {
					500: {
						thumbnailWidth: 120,
						thumbnailHeight: 50
					}
				}
			});
		});


	</script>

	<style>
		.navabout{
			display: none!important;
		}
	</style>


	<?php
		$urlproduct_ID = $_GET['productid'];
		$currenturl = $domain."/item.php?productid=".$urlproduct_ID;

		$sqlProducts = "SELECT * FROM store_product p,store_categories c WHERE p.product_Category_ID = c.categort_ID AND product_ID= '" .$urlproduct_ID. "'";
		$resultProducts = $con->query($sqlProducts);
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

			$category = $row["category_Name"];
		}


		$shareURL = "https://www.facebook.com/plugins/share_button.php?href=".$domain."%2Fitem.php%3Fproductid%3D".$urlproduct_ID."&layout=button_count&size=large&width=85&height=28&appId";

		$dis = strip_tags(substr($productDescription,0,100));
	?>


	<meta property="og:url"           content="<?php echo $currenturl; ?>" />
	<meta property="og:type"          content="Shinex Facility" />
	<meta property="og:title"         content="<?php echo $productName; ?>" />
	<meta property="og:description"   content="<?php echo  $dis?>" />
  	<meta property="og:image"         content="<?php echo $productIMG1; ?>" />


  	<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
	
</head>
<body>

	<!-- Header -->
	<?php
		include('includes/navigationBar.php');
	?>

	<div class="products_Header">
		<div class="container">
			<div class="row">

				<div class="page_Navigation p-3 mb-2 bg-light text-dark" style="width:100%;">

					<ul id="navigation">
						<li><a href="index.php"><i class="fas fa-home"></i></a></li>
						<li><i class="fas fa-arrow-right"></i></li>
						<li><a href="product.php?category=<?php echo $productCategoryID;?>"><?php echo $category;?></a></li>
						<li><i class="fas fa-arrow-right"></i></li>
						<li><a href="item.php?productid=<?php echo $proID;?>"><?php echo substr($productName,0,20);?></a></li>
					</ul>

				</div>
				
			</div>
		</div>
	</div>

	<div class="products_Details">
		<div class="container">
			<div class="row">

				<div class="col-12 col-sm-8 col-md-8">

					<div class="product_slider" style="margin-bottom: 5em;">

							<div id="mainSlider2" class="slider-pro" >
								<div class="sp-slides">

									<?php 

										$imageProductSQL = "SELECT * FROM store_product 
															WHERE product_ID = $urlproduct_ID";

												$resultimg = $con->query($imageProductSQL) or die($con->error);

											while($rowimg = $resultimg->fetch_assoc()) {


									?>

									<div class="sp-slide">
										<img  class="sp-image" src="images/blank.gif" 
											data-src="<?php echo $rowimg["product_IMG1"];?>"
											data-retina="<?php echo $rowimg["product_IMG1"];?>" />

											
										
										<!-- <p class="sp-layer sp-white sp-padding"
											data-horizontal="50" data-vertical="50"
											data-show-transition="left" data-hide-transition="up" data-show-delay="400" data-hide-delay="200">
											Lorem ipsum
										</p>

										<p class="sp-layer sp-black sp-padding hide-small-screen"
											data-horizontal="170" data-vertical="50"
											data-show-transition="left" data-hide-transition="up" data-show-delay="600" data-hide-delay="100">
											dolor sit amet
										</p>

										<p class="sp-layer sp-white sp-padding hide-medium-screen"
											data-horizontal="315" data-vertical="50"
											data-show-transition="left" data-hide-transition="up" data-show-delay="800">
											consectetur adipisicing elit.
										</p> -->
									</div>
									<div class="sp-slide">
										<img class="sp-image" src="images/blank.gif"
											data-src="<?php echo $rowimg["product_IMG2"];?>"
											data-retina="<?php echo $rowimg["product_IMG2"];?>"/>

									</div>

									<div class="sp-slide">
										<img class="sp-image" src="images/blank.gif"
											data-src="<?php echo $rowimg["product_IMG3"];?>"
											data-retina="<?php echo $rowimg["product_IMG3"];?>"/>
									</div>

									<div class="sp-slide">
										<img class="sp-image" src="images/blank.gif"
											data-src="<?php echo $rowimg["product_IMG4"];?>"
											data-retina="<?php echo $rowimg["product_IMG4"];?>"/>
									</div>

									<div class="sp-slide">
										<img class="sp-image" src="images/blank.gif"
											data-src="<?php echo $rowimg["product_IMG5"];?>"
											data-retina="<?php echo $rowimg["product_IMG5"];?>"/>
									</div>

								<?php } ?>
						    </div>

					</div>

					<div class="about_product about_product2">
						<h1><?php echo $productName;?></h1>
						<h6>Category : <a href="product.php?category=<?php echo $productCategoryID;?>"><?php echo $category;?></a></h6>
						<h6>Availability : <span style="color: #777;"><?php echo $productAvailability;?></span></h6>
						
						<h5 class="productPrice" style="display: none;">Rs: <?php echo $productPrice;?>/=</h5>

						<iframe src="<?php echo $shareURL; ?>" width="85" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>


					<div class="product_content" style="margin-top: 5em;">

						<h6>Description</h6>
						<hr style="margin-left: 6.95em;">
						<?php echo $productDescription;?>
					</div>
				</div>
			</div>

				<div class="col-12 col-sm-4 col-md-4 ">
					<div class="about_product about_product1">
						<h1><?php echo $productName;?></h1>
						<h6>Category : <a href="product.php?category=<?php echo $productCategoryID;?>"><?php echo $category;?></a></h6>
						<h6>Availability : <span style="color: #777;"><?php echo $productAvailability;?></span></h6>
					
						<h5 class="productPrice" style="display:none;" >Rs: <?php echo $productPrice;?>/=</h5>
						<iframe src="<?php echo $shareURL; ?>" width="85" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
					</div>
				</div>


			<div class="container">
				<div class="RelatedProducts">
					<h5>Related Products</h5>

								<div class="row">
									
									<?php

										$relatedSQL = "SELECT * FROM store_product p,store_categories c WHERE p.product_Category_ID = c.categort_ID AND c.categort_ID = $productCategoryID AND p.product_ID != $urlproduct_ID ORDER BY p.product_ID DESC LIMIT 3";

										$relatedProducts = $con->query($relatedSQL);

										while($relatedrow = $relatedProducts->fetch_assoc()) {
											$prvVal = $relatedrow["product_oldPrice"];

									?>

									<div class="col-12 col-sm-6 col-md-3 d-flex justify-content-center  rpro" style="display: inline-block; border:1px solid;">
									
										<a href="item.php?productid=<?php echo $relatedrow["product_ID"];?>">
											<div class="product_item justify-content-center">
												<img src="<?php echo $relatedrow["product_IMG1"]; ?>" width="200" height="170" style="margin-top: 0.5em;">
												<h6 style="text-align: center; color: black;"><?php echo $relatedrow["product_Name"]; ?></h6>
												<p>

												<?php

												 if($prvVal!=0){ ?>

												    <span class="prv_value">Rs <?php echo $prvVal; ?>/=</span>&nbsp;&nbsp;&nbsp;&nbsp;

												<?php } ?>

												    <span class="newv_value" style="display: none;">Rs <?php echo $relatedrow["product_Price"]; ?>/=</span>
												</p>
											</div>
										</a>
									
									</div>

									<?php } ?>
									

								
							</div>
						</div>

				</div>
			</div>

			<hr>
		</div>
	</div>


	



	<?php include('includes/siteDetails.php'); ?>

	<?php include('includes/footer.php'); ?>

	<?php include('includes/jsIncludes.php'); ?>

</body>
</html>