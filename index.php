<!DOCTYPE html>
<html>
<head>
	<title>Shinex Facility</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/slick.css">
  	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">

	<?php include('includes/headerIncludes.php'); 
		include('includes/recentProducts.php'); 
	?>
	

		<script type="text/javascript">
			$( document ).ready(function( $ ) {
				var x =$(document).width();
				$( '#mainSlider' ).sliderPro({
						

					width:"fullScreen",
					imageScaleMode:'exact',
					height: 480,
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

		<style>
			.sp-slide img{
				height: 480px!important;
			}
		</style>



</head>
<body>

		<?php 
			$curl = $_SERVER['HTTP_HOST'];
			if(strpos($curl,'privatescrim')!== false){
				header("Location: Scrim/"); 
				exit();
			}

			include('includes/topimage.php');
		?>

		<!-- Header -->
		<?php
			include('includes/navigationBar.php');
		?>

		<?php 
			include('includes/mainslider.php');
		?>

		


		<div class="Main_cate4">
			<div class="container">
				<div class="row">

					<?php 
						$maincatSQL = "SELECT * FROM store_categories LIMIT 4";

						$maincatresult = $con->query($maincatSQL);

						while($catRow= $maincatresult->fetch_assoc()){
							$maincateID = $catRow["categort_ID"];
					?>

					<div class="col-12 col-sm-6 col-md-3">
						<div class="categorymain wow fadeIn" data-wow-duration="1s" onclick="location.href='product.php?category=<?php echo $maincateID;?>';">

							<img class="img-fluid" src="<?php echo $catRow["catImg"];?>" >
							<h5><?php echo $catRow["category_Name"];?></h5>

						</div>
					</div>

					<?php } ?>
				</div>
			</div>
		</div>

		<div class="recent_products">
				<div class="container">


					<h3 class="wow fadeIn" data-wow-duration="1s">Latest Arivals</h3>
					<h2 class="wow bounceIn" data-wow-duration="2s">New Products</h2>

					<div class="" data-js="hero-demo">


					  	<div class="ui-group justify-content-center d-flex filter1">
					    
						    <div class="filters button-group js-radio-button-group">

						      <button class="button is-checked" data-filter="*">show all</button><!--
						       --><button class="button" data-filter=".<?php echo $rcattag1; ?>"><?php echo $rCateCat1; ?></button><!--
						      --><button class="button" data-filter=".<?php echo $rcattag2; ?>"><?php echo $rCateCat2; ?></button><!--
						      --><button class="button" data-filter=".<?php echo $rcattag3; ?>"><?php echo $rCateCat3; ?></button><!--
						      -->
						      <!-- <a href="product.php?category=all"><button class="button">All Products</button></a> -->
						    </div>


					  	</div>

					  	<div class="ui-group justify-content-center d-flex filter2">
					    
						    <div class="filters button-group js-radio-button-group">
						      	<button onclick="showFilters()" class="button filterdownbutton  is-checked" data-filter="*">Filter</button>

						      	<div class="filterdowns" id="filterdowns" style="display: none;z-index: 99!important;">
						       		<button class="button" data-filter=".<?php echo $rcattag1; ?>"><?php echo $rCateCat1; ?></button>	
						       		<button class="button" data-filter=".<?php echo $rcattag2; ?>"><?php echo $rCateCat2; ?></button>
						      		<button class="button" data-filter=".<?php echo $rcattag3; ?>"><?php echo $rCateCat3; ?></button>
						      		<a href="product.php?category=all"><button class="button">More</button></a>
						      	</div>

						    	</div>
					  		</div>


					  	


					  	<div class="grid" style="margin-top:2em">
					  		<div class="row">


					  		<?php 

					  			$product = "SELECT * FROM store_product p,store_categories c WHERE p.product_Category_ID = c.categort_ID AND p.product_Availability = 'Available' ORDER BY p.product_ID DESC LIMIT 8 ";

					  			

								$resultproduct = $con->query($product);

								while($productrow= $resultproduct->fetch_assoc()){
									$pname = $productrow["product_Name"];
									$pprice = $productrow["product_Price"];
									$pimg = $productrow["product_IMG1"];
									$pcat_tag = $productrow["cat_tag"];
									$pid = $productrow["product_ID"];
									$prvVal = $productrow["product_oldPrice"];
					  		?>

							    <div class="element-item <?php echo $pcat_tag; ?> col-12 col-sm-6 col-md-4 col-lg-3" >
							    	<div class="product_item wow fadeInRight">
								        <img src="<?php echo $pimg; ?>" width="200" height="170" >
								        <p style="font-style: normal;font-size: 15px;"><b><?php echo $pname;?></b></p>
								        <p>
								        	
								        	<?php

											if($prvVal!=0){ ?>

												<span class="prv_value">Rs <?php echo $prvVal; ?>/=</span>&nbsp;&nbsp;&nbsp;&nbsp;

											<?php } ?>
								        	<span class="newv_value" style="display: none;">Rs <?php echo $pprice;?>/=</span>
								        </p>

								        <div class="gotoproductIcon">
								        	<a href="item.php?productid=<?php echo $pid;?>"><i class="far fa-hand-pointer"></i></a>
								        </div>

								    </div>
							    </div>

							   <?php }?> 

							</div>
					  	</div>

					</div>
				</div>

			</div>

			<hr>

		<div class="About_Us_main" id="About_Us_main" style="padding-top: 1em;background: #eee;">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-6 col-12 d-flex justify-content-center wow fadeInLeft">
						<img src="<?php echo $aboutusIMG; ?>" class="img-fluid" alt="storeImage">
					</div>

					<div class="col-sm-12 col-md-6 col-12 d-flex justify-content-center wow fadeInRight">
						<div class="about_us_content" style="background: transparent;">
							<h2 class="wow fadeIn">A few words about our store</h2>

							<h1 class="wow bounceIn " data-wow-delay="0.8s">ABOUT US</h1>

							<p class="wow zoomIn" data-wow-delay="1s"><?php echo substr($storeaboutUs,0,150); ?>...</p>

							<button class="readmorebtn" onclick="window.location.href='about_us.php'">Read More</button>

						</div>
					</div>

				</div>
			</div>
		</div>

		<hr>

		<div class="feature_products">
			<div class="container">

				<h3 class="wow fadeIn" data-wow-duration="1s">Featured Products</h3>

				<div class="regular slider" style="text-align: center;margin-top: 1em;">

					<?php 

					$fadSql = "SELECT * FROM featureAd f,store_product p WHERE f.adId != 0 AND f.adID = p.product_ID";

					$fadresult = $con->query($fadSql);

					while($fadrow= $fadresult->fetch_assoc()){

					?>

				    <div class="itemss" style="min-height: 17em;" onclick="location.href='item.php?productid=<?php echo $fadrow["product_ID"]; ?>';">
				      	<img src="<?php echo $fadrow["product_IMG1"]; ?>" class="img-fluid">
				      	<p><b><?php echo implode(' ', array_slice(explode(' ', $fadrow["product_Name"]), 0, 8)); ?></b></p>

				    </div>
				   

					<?php } ?>

			  	</div>

			</div>
		</div>
		
		<hr>

		<div class="fixed-bg container1">
			<div class="container">
				<div class="row">
					
					<div class="col-12 col-sm-6 col-md-3 justify-content-center">
						<span class="container1_icon fas fa-shopping-cart wow fadeIn" ></span> <br>
						<h4 class="wow bounceIn jello" data-wow-duration="2s"><?php echo $storecon1_top1; ?></h4>
						<p class="wow zoomIn" data-wow-duration="2s"><?php echo $storecon1_top1_des; ?></p>
					</div>

					<div class="col-12 col-sm-6 col-md-3 justify-content-center wow fadeIn">
						<span class="container1_icon far fa-money-bill-alt"></span>
						<h4 class="wow bounceIn jello" data-wow-duration="2s"><?php echo $storecon1_top2; ?></h4>
						<p class="wow zoomIn" data-wow-duration="2s"><?php echo $storecon1_top2_des; ?></p>
					</div>

					<div class="col-12 col-sm-6 col-md-3 justify-content-center wow fadeIn">
						<span class="container1_icon fas fa-truck"></span>
						<h4 class="wow bounceIn jello" data-wow-duration="2s"><?php echo $storecon1_top3; ?></h4>
						<p class="wow zoomIn" data-wow-duration="2s"><?php echo $storecon1_top3_des; ?></p>
					</div>

					<div class="col-12 col-sm-6 col-md-3 justify-content-center wow fadeIn">
						<span class="container1_icon far fa-clock"></span>
						<h4 class="wow bounceIn jello" data-wow-duration="2s"><?php echo $storecon1_top4; ?></h4>
						<p class="wow zoomIn" data-wow-duration="2s"><?php echo $storecon1_top4_des; ?></p>
					</div>

				</div>
			</div>
		</div>

	

	<div class="store_location">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15841.562270291797!2d79.9286639!3d6.9631687!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf2a61579a54dbd2c!2sShinex+Facility+Management!5e0!3m2!1sen!2slk!4v1562866932580!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" ></iframe>
	</div>

	<?php include('includes/siteDetails.php'); ?>

	<?php include('includes/footer.php'); ?>


	<script>
		function showFilters() {
		   document.getElementById('filterdowns').style.display = "block";
		   $('.filterdowns').slideToggle(200);

		   if( this.id!= 'filterdowns') {
		    	document.getElementById('filterdowns').style.display = "none";
		  	}
		}
	</script>

	<?php include('includes/jsIncludes.php'); ?>

	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	    $(document).on('ready', function() {
	      $(".regular").slick({
	        dots: true,
	        infinite: true,
	        autoplay:true,
	        arrows:false,
	        autoplaySpeed: 3000,
	        slidesToShow: 4,
	        slidesToScroll: 4,
	        responsive: [{
	        breakpoint: 1024,
	        settings: {
	          slidesToShow: 3,
	          slidesToScroll: 3,
	          infinite: true,
	          dots: true
	        }
	      },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	   
	  ]
	      });
	     
	    });
	</script>

</body>
</html>