<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>
<div id="contents" class="container-fluid">
	
<form class="form-createopportunity pull-down" action="<?php echo $thisSite; ?>opportunity" method="post" id="researchopportunity" accept-charset="UTF-8" role="form" enctype="multipart/form-data">
<h1>Create a Research Opportunity</h1>
	
<div  class="form-group">

<label for="name">Name *</label>
<input class="form-control-justin" type="text" id="name" name="name" value="" size="30" maxlength="255" required title="Please enter a name for your opportunity!" placeholder="Name of the opportunity" />

</div>
<div  class="form-group">


<label for="description">Description *</label>
<textarea class="form-control-justin" id="description" name="description" cols="60" rows="5" maxlength="255" required title="Please enter a description for your opportunity!" placeholder="Description of the opportunity" ></textarea>

</div>
<div  class="form-group">

 
<label for="positions">Positions available *</label>
 <input class="form-control-justin" type="text" id="positions" name="positions" value="" size="10" maxlength="5" required pattern="[0-9]" title="Positions: must be numeric!" placeholder="Number of the opportunity available" />

</div>
<div  class="form-group form-inline">


 <label for="startdate">Start Date *</label>
 <input class="form-control" type="date" name="startdate" id="startdate" placeholder="MM/DD/YYYY" required>
 <label for="enddate">End Date *</label>
 <input class="form-control" type="date" name="enddate" id="enddate" placeholder="MM/DD/YYYY" required>
 <label for="deadline">Application Deadline *</label>
 <input class="form-control" type="date" name="deadline" id="deadline" placeholder="MM/DD/YYYY" required>

</div>
<div  class="form-group form-inline">



 <label for="locationcity">City *</label>
 <input class="form-control" type="text" id="locationcity" name="locationCity" value="" size="15" maxlength="100" placeholder="Enter the City" required/>
 <label for="locationstate">State *</label>
 <select class="form-control" id="locationstate" name="locationState" required><option value="">Select a State</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select>

</div>
<div  class="form-group">


 <label for="institution">Institution *</label>
 <input class="form-control-justin" type="text" id="institution" name="institution" value="" size="10" maxlength="50" placeholder="Name of the Institution" required />

</div>
<div  class="form-group">


 <label for="institutiontype">Institution Type </label>
 <input class="form-control-justin" type="text" id="institutiontype" name="institutiontype" value="" size="10" maxlength="50" placeholder="Type of Institution" />

</div>
<div  class="form-group">


 <label for="discipline">Discipline </label>
 <input class="form-control-justin" type="text" id="discipline" name="discipline" value="" size="10" maxlength="50" placeholder="Enter Discipline" />

</div>
<div  class="form-group">


 
 <label for="logo1">Logo </label>
 <input class="form-control-justin" type="file" id="logo1" name="logo1"  />

</div>

<div  class="form-group">


 
<label for="homepage">Opportunity Homepage </label>
 <input class="form-control-justin" type="text" id="homepage" name="homepage" value="" size="10" maxlength="50" placeholder="Enter Opportunity Homepage" />

</div>
<div  class="form-group">


 
 <label for="gpareq">GPA Requirement </label>
 <input class="form-control-justin" type="text" id="gpareq" name="gpareq" value="" size="10" maxlength="5" pattern="[0-9.]{1,4}" title="GPA must be numeric value with up to two digits after decimal" placeholder="Enter GPA Requirement" />

</div>
<div  class="form-group">


 <label for="gradereq">Grade Level Requirement </label>
 <select class="form-control-justin" id="gradereq" name="gradereq">
 	<option value="0">Undefined</option>
 	<option value="1">Freshman</option>
 	<option value="2">Sophomore</option>
 	<option value="3">Junior</option>
 	<option value="4">Senior</option></select>

</div>

<div  class="form-group">
<label for="category">Category </label>
 <select class="form-control-justin" id="category" name="category" required>
 <option value="">Select a Category</option>
 <option value="Aeronautical Engineering">Aeronautical Engineering</option> 
 <option value="Anthropology">Anthropology</option> 
 <option value="Architecture">Architecture</option> 
 <option value="Astronomy">Astronomy</option> 
 <option value="Biochemistry">Biochemistry</option> 
 <option value="Biology">Biology</option> 
 <option value="Biophysics">Biophysics</option> 
 <option value="Chemical Engineering">Chemical Engineering</option> 
 <option value="Chemistry">Chemistry</option> 
 <option value="Civil Engineering">Civil Engineering</option> 
 <option value="Computer Science">Computer Science</option> 
 <option value="Criminology">Criminology</option> 
 <option value="Cultural Studies">Cultural Studies</option> 
 <option value="Design">Design</option> 
 <option value="Digital Media">Digital Media</option> 
 <option value="Earth Sciences">Earth Sciences</option> 
 <option value="Economics">Economics</option> 
 <option value="Education">Education</option> 
 <option value="Electrical Engineering">Electrical Engineering</option> 
 <option value="Engineering Management">Engineering Management</option> 
 <option value="English">English</option> 
 <option value="Environmental Sciences">Environmental Sciences</option> 
 <option value="Geology">Geology</option> 
 <option value="Graphic Design">Graphic Design</option> 
 <option value="History">History</option> 
 <option value="Human Geography">Human Geography</option> 
 <option value="Information and Communication Technology">Information and Communication Technology</option> 
 <option value="Information Technology">Information Technology</option> 
 <option value="Interdisciplinary Studies">Interdisciplinary Studies</option> 
 <option value="International Relations">International Relations</option> 
 <option value="Law">Law</option> 
 <option value="Linguistics">Linguistics</option> 
 <option value="Literature">Literature</option> 
 <option value="Mass Communication">Mass Communication</option> 
 <option value="Mechanical Engineering">Mechanical Engineering</option> 
 <option value="Media">Media</option> 
 <option value="Nanoscience">Nanoscience</option> 
 <option value="Natural History">Natural History</option> 
 <option value="Oceanography">Oceanography</option> 
 <option value="Physics">Physics</option> 
 <option value="Politics">Politics</option> 
 <option value="Psychology">Psychology</option> 
 <option value="Science and Technology Policy">Science and Technology Policy</option> 
 <option value="Sociology">Sociology</option> 
 <option value="Space Sciences">Space Sciences</option> 
 <option value="Sustainability">Sustainability</option> 
 <option value="Telecommunications">Telecommunications</option>
 <option value="Other">Other</option>
</div>


<div  class="checkbox">


<label><input class="" type="checkbox" id="paid" name="paid" value="1" class="" />Paid</label>

</div>
<div  class="">


 <input class="btn btn-default" id="submit-button" name="op" value="Create!" type="submit">

</div>



 </form>

</div>

<?php 

require_once("template/footer.php");
require_once("template/closehtml.php");
?>

