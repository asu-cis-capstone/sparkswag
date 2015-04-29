<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");

?>


<div id="contents" class="container pull-down">
	<form method="post" action="<?php echo $thisSite;?>opportunities" class="form-horizontal" id="searchform" accept-charset="UTF-8" role="form">
		<div id="mainsearch" class="form-group">
			<label for="text">Keywords</label>
			<input type="text" id="text"  class="form-control" name="searchText">
			<a id="addsearchbtn" href="javascript:addsearchjs();">(+) Advanced search</a>
		</div>
		<div id="addsearch" class="form-group hidden">
			<label for="state">State</label>
			<select id="state"  class="form-control" name="state">
				<option value="">Select One</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District Of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>

			<label for="city">City</label>
			<input type="text" id="city"  class="form-control" name="city">

			<label for="gradeLevel">Grade Level</label>
			<select id="gradeLevel"  class="form-control" name="gradeLevel">
				<option value="">Select Grade Level</option>
				<option value="High School">High School</option>
				<option value="College">College</option>
				<option value="Graduate">Graduate</option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="btn btn-default padding">Search</button>
		</div>
	</form>
	
	<?php


	echo '<div>Opportunities Available: '.count($Listings).'<br /><br /></div>';
	foreach($Listings as $key => $listing){
		echo '<div class="row opplisting">
		<div class="row">
			<div class="col-md-10" style="font-size:150%;">
			<a href="'.$thisSite.'opportunities/'.$listing['ListingNum'].'">
				<b>Project Title</b>: '.$listing['title'].'
			</a>
			</div>
			<div class="col-md-2" style="color: #f28b54; text-align:center;"><b>Application Deadline</b>: '.$listing['deadline'].'</div>
		</div>
		<div class="row">
			<div class="col-md-12"><b>Start Date</b>: '.$listing['startDate'].'&nbsp;&nbsp;&nbsp;&nbsp; <b>End Date</b>: '.$listing['endDate'].'</div>
		</div>
		<!--<div class="col-md-2" style="margin-bottom: 10px; border: 2px solid #555555; text-align: center; border-radius: 10px;">STAR BUTTON
		</div>-->
		<div class="col-md-10 hidden-xs hidden-s padding"><b>Description</b>: '.$listing['detailedDescription'].'</div>
		';
		if($listing['howToApply'] === '2') {
			
			echo'<button class="col-md-2 btn btn-default" onClick="applyEmail('.$listing["StaffNum"].')">Apply</button>';
		}
		else {
			echo'<a href="'.$listing['url'].'"><button class="col-md-2 btn btn-default">Apply</button></a>';
		}
		
		echo '</div>';
	}?>
	
	
	
	
</div>
<script type="text/javascript">
	function addsearchjs()
	{
		if ($('#addsearchbtn').text() == '(+) Advanced search')
		{
			$('#addsearchbtn').text('(-) Advanced search');
			$("#addsearch").removeClass("hidden");
		}
		else
		{
			$('#addsearchbtn').text('(+) Advanced search');
			$("#addsearch").addClass("hidden");
		}
	}
	function applyEmail(StaffNum) {
		window.location.href = "<?php echo $thisSite .'applyemailform/';?>"+StaffNum;
	}
</script>

<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

