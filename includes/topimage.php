<?php


	if($topImgage==""){
		$Imgage="1300x120.jpg";
	}

	else{ 
		$Imgage=$topImgage;
	}

?>

	<img src="<?php echo $Imgage;?>"  class="topImage">

<style>
	
	.topImage{
		width: 100%;
		height: 120px;
	}

	@media only screen and (max-width: 768px) {

	    .topImage{
	        display: none!important;
	    }

	}

</style>