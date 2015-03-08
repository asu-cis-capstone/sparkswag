<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>
<div id="contents" class="container-fluid">
<h1>Create a Research Opportunity</h1>
	
	
<form class="" action="<?php echo $thisSite; ?>opportunity" method="post" id="researchopportunity" accept-charset="UTF-8" role="form" enctype="multipart/form-data">

<div  class="form-group">

<label for="name">Name *</label>
<input class="form-control-justin" type="text" id="name" name="name" value="" size="30" maxlength="255" required title="Please enter a name for your opportunity!" />

</div>
<div  class="form-group">


<label for="description">Description *</label>
<textarea class="form-control-justin" id="description" name="description" cols="60" rows="5" required title="Please enter a description for your opportunity!"></textarea>

</div>
<div  class="form-group">

 
<label for="positions">Positions available *</label>
 <input class="form-control-justin" type="text" id="positions" name="positions" value="" size="10" maxlength="5" required pattern="[0-9]" title="Positions: must be numeric!" />

</div>
<div  class="form-group form-inline">


 <label for="startdate">Start Date *</label>
 <input class="form-control" type="text" name="startdate" id="startdate" placeholder="MM/DD/YYYY" required>
 <label for="enddate">End Date *</label>
 <input class="form-control" type="text" name="enddate" id="enddate" placeholder="MM/DD/YYYY" required>
 <label for="deadline">Application Deadline *</label>
 <input class="form-control" type="text" name="deadline" id="deadline" placeholder="MM/DD/YYYY" required>

</div>
<div  class="form-group form-inline">



 <label for="locationcity">City *</label>
 <input class="form-control" type="text" id="locationcity" name="locationCity" value="" size="10" maxlength="100" required/>
 <label for="locationstate">State *</label>
 <select class="form-control" id="locationstate" name="locationState" required><option value="">Select a State</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select>

</div>
<div  class="form-group">


 <label for="institution">Institution </label>
 <input class="form-control-justin" type="text" id="institution" name="institution" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 <label for="institutiontype">Institution Type </label>
 <input class="form-control-justin" type="text" id="institutiontype" name="institutiontype" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 <label for="discipline">Discipline </label>
 <input class="form-control-justin" type="text" id="discipline" name="discipline" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 
 <label for="logo">Logo </label>
 <input class="form-control-justin" type="file" id="logo" name="logo1"  />

</div>
<div  class="form-group">


 
<label for="homepage">Opportunity Homepage </label>
 <input class="form-control-justin" type="text" id="homepage" name="homepage" value="" size="10" maxlength="100" />

</div>
<div  class="form-group">


 
 <label for="gpareq">GPA Requirement </label>
 <input class="form-control-justin" type="text" id="gpareq" name="gpareq" value="" size="10" maxlength="5" pattern="[0-9.]{1,4}" title="GPA must be numeric value with up to two digits after decimal" />

</div>
<div  class="form-group">


 <label for="gradereq">Grade Level Requirement </label>
 <select class="form-control-justin" id="gradereq" name="gradereq"><option value="0">Undefined</option><option value="1">Freshman</option><option value="2">Sophomore</option><option value="3">Junior</option><option value="4">Senior</option></select>

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

