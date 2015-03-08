<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div id="contents" class="container">
<h1>Create a Research Opportunity</h1>
	
	
<form action="/?opportunity=1" method="post" id="researchopportunity" accept-charset="UTF-8" role="form">

<div  class="form-group">

<label for="name">Name </label>
<input class="form-control" type="text" id="name" name="name" value="" size="30" maxlength="255" />

</div>
<div  class="form-group">


<label for="description">Description </label>
<textarea class="form-control" id="description" name="description" cols="60" rows="5"></textarea>

</div>
<div  class="form-group">

 
<label for="positions">Positions available </label>
 <input class="form-control" type="text" id="positions" name="positions" value="" size="10" maxlength="5" />

</div>
<div  class="form-group">


 <label for="startdate">Start Date *</label>
 <input class="form-control" type="text" name="startdate" id="startdate">


</div>
<div  class="form-group">

 

 <label for="enddate">End Date </label>
 <input class="form-control" type="text" name="enddate" id="enddate">
 

</div>
<div  class="form-group">



 <label for="deadline">Application Deadline </label>
 <input class="form-control" type="text" name="deadline" id="deadline">

</div>
<div  class="form-group">



 <label for="locationcity">City </label>
 <input class="form-control" type="text" id="locationcity" name="locationCity" value="" size="10" maxlength="100" />

</div>
<div  class="form-group">


 <label for="locationstate">State </label>
 <input class="form-control" type="text" id="locationstate" name="locationState" value="" size="10" maxlength="100" />

</div>
<div  class="form-group">


 <label for="institution">Institution </label>
 <input class="form-control" type="text" id="institution" name="institution" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 <label for="institutiontype">Institution Type </label>
 <input class="form-control" type="text" id="institutiontype" name="institutiontype" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 <label for="discipline">Discipline </label>
 <input class="form-control" type="text" id="discipline" name="discipline" value="" size="10" maxlength="30" />

</div>
<div  class="form-group">


 
 <label for="logo">Logo </label>
 <input class="form-control" type="file" id="logo" name="logo1"  />

</div>
<div  class="form-group">


 
<label for="homepage">Opportunity Homepage </label>
 <input class="form-control" type="text" id="homepage" name="homepage" value="" size="10" maxlength="100" />

</div>
<div  class="form-group">


 
 <label for="gpareq">GPA Requirement </label>
 <input class="form-control" type="text" id="gpareq" name="gpareq" value="" size="10" maxlength="5" />

</div>
<div  class="form-group">


 <label for="gradereq">Grade Level Requirement </label>
 <select class="form-control" id="gradereq" name="gradereq"><option value="0">Undefined</option><option value="1">Freshman</option><option value="2">Sophomore</option><option value="3">Junior</option><option value="4">Senior</option></select>

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
<?php
echo
'<script type=text/javascript>
	$(document).ready(function() {
		$("#startdate").datepicker();
		$("#enddate").datepicker();
		$("#deadline").datepicker();
	});
</script>'
?>
