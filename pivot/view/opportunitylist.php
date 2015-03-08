<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
//d($allListings);
?>


<div id="contents" class="container pull-down">
	
	<?php
	d($allListings);
	foreach($allListings as $key => $listing){
		echo '<div class="row">
		
		<div class="col-md-4">
			<img src="'.$thisSite.$listing['logo'].'" alt="'.$listing['name'].'">
		</div>
		<div class="col-md-4">
			<a href="'.$thisSite.'opportunitylist/'.$listing['ListingNum'].'">
				Project Title: '.$listing['name'].'
			</a>
		</div>
		<div class="col-md-4">Description: '.$listing['detailedDescription'].'</div>
		<div class="col-md-4">Start Date: '.$listing['startDate'].'</div>
		<div class="col-md-4">End Date: '.$listing['endDate'].'</div>
		<div class="col-md-4">Researcher: '.$listing['StaffNum'].'</div>
		
		</div>';
	}?>
	
	
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

