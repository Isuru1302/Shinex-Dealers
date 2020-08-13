<?php
	$a="abc";

	$recentPSQL = "SELECT * FROM store_product p,store_categories c WHERE p.product_Category_ID = c.categort_ID AND  p.product_Availability = 'Available' ORDER BY p.product_ID DESC LIMIT 8 ";

	$resultRecent = $con->query($recentPSQL);

	$categorydata = array();
	$categoryIddata = array();
	$categorytag = array();

	while($Recentrow= $resultRecent->fetch_assoc()) {
		$categoryIddata[] = $Recentrow["categort_ID"];
		$categorydata[] = $Recentrow["category_Name"];
		$categorytag[] = $Recentrow["cat_tag"];
	}

	$idvalues = array_count_values($categoryIddata);
	arsort($idvalues);
	$categortID = array_slice(array_keys($idvalues), 0, 3, true);

	$catvalues = array_count_values($categorydata);
	arsort($catvalues);
	$categortCat = array_slice(array_keys($catvalues), 0, 3, true);

	$cattag = array_count_values($categorytag);
	arsort($cattag);
	$categoryt = array_slice(array_keys($cattag), 0, 3, true);

	$rCateid1 = $categortID[0];
	$rCateid2 = $categortID[1];
	$rCateid3 = $categortID[2];

	$rCateCat1 = $categortCat[0];
	$rCateCat2 = $categortCat[1];
	$rCateCat3 = $categortCat[2];

	$rcattag1 = $categoryt[0];
	$rcattag2 = $categoryt[1];
	$rcattag3 = $categoryt[2];
?>


