<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
if(isset($error) && $error !== ""){	
echo "<script type='text/javascript'>alert('$error');</script>";
}
?>
<!-- Steps Progress and Details - START -->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
	<h1>Create a Research Opportunity</h1>
		<div class="row">
			<div class="progress" id="progress1">
				<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
			</div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">0%</span>
        </div>
    </div>
	<div class="row">
        <div class="row step">
            <div id="div1" class="col-md-2 activestep" onclick="javascript: resetActive(event, 0, 'step-1'); focusthis(1);">
                <span class="fa fa-info-circle"></span>
                <p class="form">Basic Info</p>
            </div>
            <div id="div2" class="col-md-2" onclick="javascript: resetActive(event, 20, 'step-2'); focusthis(2);">
                <span class="fa fa-calendar"></span>
                <p class="form">Date & Hours</p>
            </div>
            <div id="div3" class="col-md-2" onclick="javascript: resetActive(event, 40, 'step-3'); focusthis(3);">
                <span class="fa fa-institution"></span>
                <p class="form">Institution</p>
            </div>
            <div id="div4" class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-4'); focusthis(4);">
                <span class="fa fa-exclamation-triangle"></span>
                <p class="form">Requirements</p>
            </div>
            <div id="div5" class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-5'); focusthis(5);">
                <span class="fa fa-file-text"></span>
                <p class="form">Uploads</p>
            </div>
            <div id="div6" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-6'); focusthis(6);">
                <span class="fa fa-cloud-upload"></span>
                <p class="form">Submit</p>
            </div>
        </div>
    </div> 
	<form class="form-horizontal" action="<?php echo $thisSite; ?>createopportunity" method="post" id="researchopportunity" accept-charset="UTF-8" role="form" enctype="multipart/form-data" >
	    <div class="row setup-content step activeStepInfo" id="step-1">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div class="form-group">
						<label for="title">Title of Opportunity *</label>
						<input class="form-control-justin" type="text" id="title" name="title" autofocus value="<?php if(isset($_POST['title'])){echo $_POST['title'];}?>" size="30" maxlength="255" required title="Please enter a name for your opportunity!" placeholder="Title of opportunity" />
					</div>
					<div  class="form-group">
						<label for="description">Description *</label>
						<textarea class="form-control-justin" id="description" name="description" cols="60" rows="5" maxlength="2000" required title="Please enter a description for your opportunity!" placeholder="Description of the opportunity"></textarea>
					</div>
					<div  class="form-group">
						<label for="experienceType">Experience Type</label>
						<select class="form-control-justin" id="experienceType" name="experienceType" title="Select an experience type"></select>
					</div>
					<div  class="form-group">
						<label for="positions">Positions available *</label>
						<input class="form-control-justin" type="text" id="positions" name="positions" size="10" maxlength="5" required pattern="[0-9]" title="Positions: must be numeric!" placeholder="Number of the opportunity available" value="<?php if(isset($_POST['positions'])){echo $_POST['positions'];}?>" />						
						<div class="col-md-10"></div>						
						<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 20, 'step-2'); focusthis(2); buttonpress(1);">NEXT</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="row setup-content step hiddenStepInfo" id="step-2">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div  class="form-group form-inline">
						<label for="startdate">Start Date *</label>
						<input class="form-control" type="date" name="startdate" id="startdate" required />
						<label for="enddate">End Date *</label>
						<input class="form-control" type="date" name="enddate" id="enddate" required />
						<label for="deadline">Application Deadline *</label>
						<input class="form-control" type="date" name="deadline" id="deadline" required />
					</div>
					<div  class="form-group"><label for="hoursPerWeek">Hours/Week (if known)</label><input class="form-control-justin" type="text" id="hoursPerWeek" name="hoursPerWeek" size="10" maxlength="2" pattern="[0-9]{0,2}" title="Hours/Week: must be numeric!" placeholder="Amount of hours the opportunity requires" value="<?php if(isset($_POST['hoursPerWeek'])){echo $_POST['hoursPerWeek'];}?>"/></div>
					<div  class="form-group form-inline">
						<label for="locationCity">City *</label>
						<input class="form-control" type="text" id="locationCity" name="locationCity" size="15" maxlength="100" placeholder="Enter the City" required value="<?php if(isset($_POST['locationCity'])){echo $_POST['locationCity'];}?>"/>
						<label for="locationState">State *</label>
						<select class="form-control" id="locationState" name="locationState" required><option value="">Select a State</option><option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District Of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option></select>						
						<div class="col-md-10"></div>						<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 40, 'step-3'); focusthis(3); buttonpress(2);">NEXT</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="row setup-content step hiddenStepInfo" id="step-3">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div  class="form-group">
						<label for="institution">Institution *</label>
						<input class="form-control-justin" type="text" id="institution" name="institution" size="10" maxlength="50" placeholder="Name of the Institution" required value="<?php if(isset($_POST['institution'])){echo $_POST['institution'];}?>" />
					</div>
					<div  class="form-group">
						<label for="institutiontype">Institution Type </label>
						<input class="form-control-justin" type="text" id="institutiontype" name="institutiontype" size="10" maxlength="50" placeholder="Type of Institution" value="<?php if(isset($_POST['institutiontype'])){echo $_POST['institutiontype'];}?>"/>
					</div>

<!---<div  class="form-group">
 <label for="discipline">Discipline </label>
 <input class="form-control-justin" type="text" id="discipline" name="discipline" value="" size="10" maxlength="50" placeholder="Enter Discipline" />
</div> -->

					<div  class="form-group">
						<label for="url">URL</label>
						<input class="form-control-justin" type="text" id="url" name="url" size="10" maxlength="50" placeholder="Enter Opportunity Homepage" value="<?php if(isset($_POST['url'])){echo $_POST['url'];}?>" />												
						<div class="col-md-10"></div>						<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 60, 'step-4'); focusthis(4); buttonpress(3);">NEXT</div>						
					</div>
				</div>
			</div>
		</div>

		<div class="row setup-content step hiddenStepInfo" id="step-4">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div  class="form-group">
						<label for="gpareq">GPA Requirement </label>
						<input class="form-control-justin" type="text" id="gpareq" name="gpareq" size="10" maxlength="5" pattern="[0-9.]{1,4}" title="GPA must be numeric value with up to two digits after decimal" placeholder="Enter GPA Requirement" value="<?php if(isset($_POST['gpareq'])){echo $_POST['gpareq'];}?>" />
					</div>
					<div class="form-group">
						<label for="gradereq">Grade Level Requirement </label>
						<select class="form-control-justin" id="gradereq" name="gradereq">
							<option value="0">Undefined</option>
							<option value="High School">High School</option>
							<option value="College">College</option>
							<option value="Graduate">Graduate</option>
							<!--<option value="4">Senior</option>-->
							</select>
					</div>
					<div  class="form-group">
						<label for="specialReq">Special Eligibility Requirements</label>
						<textarea class="form-control-justin" id="specialReq" name="specialReq" cols="60" rows="5" maxlength="255" title="Enter any special requirements for your opportunity" placeholder="Enter any requirements for your opportunity" ></textarea>												
						<div class="col-md-10"></div>						<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 80, 'step-5'); focusthis(5); buttonpress(4);">NEXT</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="row setup-content step hiddenStepInfo" id="step-5">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div  class="form-group"> <label for="keywords">Keywords </label> <input class="form-control-justin" type="text" id="keywords" name="keywords" size="10" maxlength="150" pattern="[A-Za-z ]{0,25}" title="Keywords must be letters only!" placeholder="Enter Keywords for opportunity" value="<?php if(isset($_POST['keywords'])){echo $_POST['keywords'];}?>" /></div>
					<!--<div  class="form-group">
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
						</select>
					</div>-->
					<div  class="form-group">  <label for="additionalDoc">Additional Documents or Materials </label> <input class="form-control-justin" type="file" id="additionalDoc" name="additionalDoc" />																
					<div class="col-md-10"></div>						<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 100, 'step-6'); focusthis(6); buttonpress(5);">NEXT</div>										</div>
				</div>
			</div>
		</div>
		<div class="row setup-content step hiddenStepInfo" id="step-6">
			<div class="col-xs-12">
				<div class="col-md-12 well text-center">
					<div class="form-group">
						<label for="howToApply">How do Students Apply? *</label>
						<select class="form-control-justin" id="howToApply" name="howToApply">
							<option value="1">Direct students to your own personal page</option>
							<option value="2">Students apply through your email</option>
						</select>
					</div>
					<div  class="checkbox">
						<label><input class="" type="checkbox" id="paid" name="paid" value="1" />Check if this is a paid opportunity</label>
					</div>
					<div  class="">
						<input class="btn btn-default" id="submit-button" name="op" value="Create!" type="submit">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<style>
.hiddenStepInfo {
    display: none;
}

.activeStepInfo {
    display: block !important;
}

.underline {
    text-decoration: underline;
}

.step {
    margin-top: 27px;
}

.progress {
    position: relative;
    height: 25px;
}

.progress > .progress-type {
    position: absolute;
    left: 0px;
    font-weight: 800;
    padding: 3px 30px 2px 10px;
    color: rgb(255, 255, 255);
    background-color: rgba(25, 25, 25, 0.2);
}

.progress > .progress-completed {
    position: absolute;
    right: 0px;
    font-weight: 800;
    padding: 3px 10px 2px;
}

.step {
    text-align: center;
}

.step .col-md-2 {
    background-color: #fff;
    border: 1px solid #C0C0C0;
    border-right: none;
}

.step .col-md-2:last-child {
    border: 1px solid #C0C0C0;
}

.step .col-md-2:first-child {
    border-radius: 5px 0 0 5px;
}

.step .col-md-2:last-child {
    border-radius: 0 5px 5px 0;
}

.step .col-md-2:hover {
    color: #F58723;
    cursor: pointer;
}

.step .activestep {
    color: #F58723;
    height: 100px;
    margin-top: -7px;
    padding-top: 7px;
    border-left: 6px solid #5CB85C !important;
    border-right: 6px solid #5CB85C !important;
    border-top: 3px solid #5CB85C !important;
    border-bottom: 3px solid #5CB85C !important;
    vertical-align: central;
}

.step .fa {
    padding-top: 15px;
    font-size: 40px;
}
</style>

<script type="text/javascript">
    function resetActive(event, percent, step) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }

        hideSteps();
        showCurrentStepInfo(step);
    }

    function hideSteps() {
        $("div").each(function () {
            if ($(this).hasClass("activeStepInfo")) {
                $(this).removeClass("activeStepInfo");
                $(this).addClass("hiddenStepInfo");
            }
        });
    }

    function showCurrentStepInfo(step) {        
        var id = "#" + step;
        $(id).addClass("activeStepInfo");
    }
	
	function buttonpress(type)
	{
		
		if (type == 1)
		{
			$("#div1").removeClass("activestep");
			$("#div2").addClass("activestep");   
		}
		else if (type == 2)
		{
			$("#div2").removeClass("activestep");
			$("#div3").addClass("activestep");   
		}
		else if (type == 3)
		{
			$("#div3").removeClass("activestep");
			$("#div4").addClass("activestep");   
		}
		else if (type == 4)
		{
			$("#div4").removeClass("activestep");
			$("#div5").addClass("activestep");   
		}
		else if (type == 5)
		{
			$("#div5").removeClass("activestep");
			$("#div6").addClass("activestep");   
		}
	}
</script>

<!-- Steps Progress and Details - END -->

<style>
.hiddenStepInfo {
    display: none;
}

.activeStepInfo {
    display: block !important;
}

.underline {
    text-decoration: underline;
}

.step {
    margin-top: 27px;
}

.progress {
    position: relative;
    height: 25px;
}

.progress > .progress-type {
    position: absolute;
    left: 0px;
    font-weight: 800;
    padding: 3px 30px 2px 10px;
    color: rgb(255, 255, 255);
    background-color: rgba(25, 25, 25, 0.2);
}

.progress > .progress-completed {
    position: absolute;
    right: 0px;
    font-weight: 800;
    padding: 3px 10px 2px;
}

.step {
    text-align: center;
}

.step .col-md-2 {
    background-color: #000000;
    border: 1px solid #C0C0C0;
    border-right: none;
}

.step .col-md-2:last-child {
    border: 1px solid #C0C0C0;
}

.step .col-md-2:first-child {
    border-radius: 5px 0 0 5px;
}

.step .col-md-2:last-child {
    border-radius: 0 5px 5px 0;
}

.step .col-md-2:hover {
    color: #F58723;
    cursor: pointer;
}

.step .activestep {
    color: #F58723;
    height: 100px;
    margin-top: -7px;
    padding-top: 7px;
    border-left: 6px solid #5CB85C !important;
    border-right: 6px solid #5CB85C !important;
    border-top: 3px solid #5CB85C !important;
    border-bottom: 3px solid #5CB85C !important;
    vertical-align: central;
}

.step .fa {
    padding-top: 15px;
    font-size: 40px;
}
</style>

<script type="text/javascript">
    function resetActive(event, percent, step) {
        $(".progress-bar").css("width", percent + "%").attr("aria-valuenow", percent);
        $(".progress-completed").text(percent + "%");

        $("div").each(function () {
            if ($(this).hasClass("activestep")) {
                $(this).removeClass("activestep");
            }
        });

        if (event.target.className == "col-md-2") {
            $(event.target).addClass("activestep");
        }
        else {
            $(event.target.parentNode).addClass("activestep");
        }

        hideSteps();
        showCurrentStepInfo(step);
    }

    function hideSteps() {
        $("div").each(function () {
            if ($(this).hasClass("activeStepInfo")) {
                $(this).removeClass("activeStepInfo");
                $(this).addClass("hiddenStepInfo");
            }
        });
    }

    function showCurrentStepInfo(step) {        
        var id = "#" + step;
        $(id).addClass("activeStepInfo");
    }
	
	function focusthis(type)
	{
		if (type == 1)
		{
			document.getElementById("title").focus();
		}
		else if (type == 2)
		{
			document.getElementById("startdate").focus();
		}
		else if (type == 3)
		{
			document.getElementById("institution").focus();
		}
		else if (type == 4)
		{
			document.getElementById("gpareq").focus();
		}
		else if (type == 5)
		{
			document.getElementById("keywords").focus();
		}
		else if (type == 6)
		{
			document.getElementById("howToApply").focus();
		}
	}
	
	
</script>
<?php 

require_once("template/footer.php");
require_once("template/closehtml.php");
?>

