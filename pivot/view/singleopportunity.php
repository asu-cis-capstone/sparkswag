<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div id="contents" class="container pull-down">
	
	<h1 id="rheader">Research Opportunity</h1>
	<p id="rtitle">Title: <?php echo $listingRow['title']; ?></p>
	<p>Description: <?php echo $listingRow['detailedDescription']; ?></p>
	<p>Positions Available: <?php echo $listingRow['positionAvailable']; ?></p>
	<div class="row">
	<div class="col-md-3">
	<p>Start Date: <?php echo $listingRow['startDate']; ?></p>
	</div>
	<div class="col-md-3">
	<p>End Date : <?php echo $listingRow['endDate']; ?></p>
	</div>
	<div class="col-md-4">
	<p>Application Deadline: <?php echo $listingRow['deadline']; ?></p>
	</div>
	</div>
	<p>Institution: <?php echo $listingRow['institution']; ?></p>
	<p>Institution Type: <?php echo $listingRow['institutionType']; ?></p>
	<p>Homepage: <a href="<?php echo $listingRow['url'];?>"><?php echo $listingRow['url']; ?></a></p>
	<div class="row">
	<div class="col-md-3">
	<p>City: <?php echo $listingRow['locationCity']; ?></p>
	</div>
	<div class="col-md-3">
	<p>State: <?php echo $listingRow['locationState']; ?></p>
	</div>
	</div>
	<p>Grade level Required: <?php 
	switch ($listingRow['gradeRequire']){
		case "0":
		echo "Undefined";
		break;
		case "HS9":
		echo "High School Grade 9";
		break;
		case "HS10":
		echo "High School Grade 10";
		break;
		case "HS11":
		echo "High School Grade 11";
		break;
		case "HS12":
		echo "High School Grade 12";
		break;
		case "Freshman":
		echo "Undergraduate Freshman";
		break;
		case "Sophomore":
		echo "Undergraduate Sophomore";
		break;
		case "Junior":
		echo "Undergraduate Junior";
		break;
		case "Senior":
		echo "Undergraduate Senior";
		break;
	} ?></p>
	<p>GPA Required: <?php echo $listingRow['gpaRequire']; ?></p>
	<p>Paid Position: <?php if ($listingRow['paid'] === 1){echo 'Yes';} else{echo 'No';} ?></p>
		
	
	<form action="<?php echo $thisSite;?>apply" method="post" role="form">
		<button type="submit" class="btn btn-default">Apply!</button>
	</form>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

