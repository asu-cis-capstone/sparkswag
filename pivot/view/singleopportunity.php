<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
//$canEdit = false;

?>



<div id="contents" class="container pull-down">
	
	<h1 id="rheader">Research Opportunity</h1>
	<p id="rtitle">Title: <?php echo $listingRow['title']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('title', this, 'text');"></i><?php }?></p>


	<p>Description: <?php echo $listingRow['detailedDescription']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('detailedDescription', this, 'text');"></i><?php }?></p>

	<p>Positions Available: <?php echo $listingRow['positionAvailable']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('positionAvailable', this, 'text');"></i><?php }?></p>

	<div class="row">
	<div class="col-md-3">
	<p>Start Date: <?php echo $listingRow['startDate']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('startDate', this, 'text');"></i><?php }?></p>

	</div>
	<div class="col-md-3">
	<p>End Date : <?php echo $listingRow['endDate']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('endDate', this, 'text');"></i><?php }?></p>

	</div>
	<div class="col-md-4">
	<p style="color: #f28b54;">Application Deadline: <?php echo $listingRow['deadline']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('deadline', this, 'text');"></i><?php }?></p>

	</div>
	</div>
	<p>Institution: <?php echo $listingRow['institution']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('institution', this, 'text');"></i><?php }?></p>

	<p>Institution Type: <?php echo $listingRow['institutionType']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('institutionType', this, 'text');"></i><?php }?></p>

	<p>Homepage: <a href="<?php echo $listingRow['url'];?>"><?php echo $listingRow['url']; ?></a>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('url', this, 'text');"></i><?php }?></p>
	<div class="row">
	<div class="col-md-3">
	<p>City: <?php echo $listingRow['locationCity']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('locationCity', this, 'text');"></i><?php }?></p>
	</div>
	<div class="col-md-3">
	<p>State: <?php echo $listingRow['locationState']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('locationState', this, 'text');"></i><?php }?></p>
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
	<p>GPA Required: <?php echo $listingRow['gpaRequire']; ?>
	<?php if($canEdit === true){ ?>
	<i class="fa fa-pencil-square-o" onClick="ShowEditForm('gpaRequire', this, 'text');"></i><?php }?></p>
	<p>Paid Position: <?php if ($listingRow['paid'] === 'Paid'){echo 'Yes';} else{echo 'No';} ?></p>
		
	<?php //d($listingRow); ?>
	<a class="btn btn-default" href="<?php echo $listingRow['url']?>">Apply</a>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

