<!DOCTYPE html>
<html>
<head>
	<title>Shinex Facility</title>
	<meta charset="UTF-8">
<link rel="shortcut icon" type="image/png" href="fav/favicon.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include('includes/headerIncludes.php'); 
		
	?>

	<style>

		.navabout{
			display: none!important;
		}
		
		.sp-slide img{
			height: 300px!important;
		}

	</style>
	

		<script type="text/javascript">
			$( document ).ready(function( $ ) {
				var x =$(document).width();
				$( '#mainSlider' ).sliderPro({
						
					width:"fullScreen",
					height: 400,
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
		include('includes/topimage.php');
	?>

	

	<?php
		include('includes/navigationBar.php');
	?>

	<?php 
		include('includes/mainslider.php');
	?>

	<div class="products_Header">
		<div class="container">
			<div class="row">

				<div class="page_Navigation p-3 mb-2 bg-light text-dark" style="width:100%;">

					<ul id="navigation">
						<li><a href="index.php"><i class="fas fa-home"></i></a></li>
						<li><i class="fas fa-arrow-right"></i></li>

						<li><a href="about_us.php">About Us</a></li>
					</ul>

				</div>
				
			</div>
		</div>
	</div>

	<div class="aboutuspage">
		<div class="container">
			<div class="row">

				<div class="col-12 col-sm-4">
					<img src="<?php echo $aboutusIMG; ?>" class="img-fluid" alt="storeImage" style="height: 250px;">
				</div>

				<div class="col-12 col-sm-8">
					<p><?php echo $storeaboutUs;?></p>	
				</div>
			</div>
		</div>
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

</body>
</html>