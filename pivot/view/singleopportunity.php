<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div id="contents" class="container">
	<?php echo d($listingRow); ?>
	<h1>Research Opportunity</h1>
	<p>Title: <?php echo $listingRow['title']; ?></p>
	<p>Description: <?php echo $listingRow['detailedDescription']; ?></p>
	<p>Positions Available: <?php echo $listingRow['positionAvailable']; ?></p>
	<p>Start Date: <?php echo $listingRow['startDate']; ?></p>
	<p>End Date : <?php echo $listingRow['endDate']; ?></p>
	<p>Application Deadline: <?php echo $listingRow['deadline']; ?></p>
	<p>Institution: <?php echo $listingRow['institution']; ?></p>
	<p>Institution Type: <?php echo $listingRow['institutionType']; ?></p>
	<p>Homepage: <?php echo $listingRow['url']; ?></p>
	<p>City: <?php echo $listingRow['locationCity']; ?></p>
	<p>State: <?php echo $listingRow['locationState']; ?></p>
	<p>Grade level Required: <?php echo $listingRow['gpaRequire']; ?></p>
	<p>GPA Required: <?php echo $listingRow['gradeRequire']; ?></p>
	<p>Paid Position: <?php echo $listingRow['paid']; ?></p>
	
	
	<form action="<?php echo $thisSite;?>apply" method="post" role="form">
		<button type="submit" class="btn btn-default">Apply!</button>
	</form>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

