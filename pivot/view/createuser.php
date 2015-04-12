<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">

	
<!-- Steps Progress and Details - START -->
<div class="container" style="margin-top: 100px; margin-bottom: 100px;">
  <h1>Create a User Account</h1>
    <div class="row">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
            </div>
            <span class="progress-type">Overall Progress</span>
            <span class="progress-completed">20%</span>
        </div>
    </div>
    <div class="row">
        <div class="row step">
            <div id="div1" class="col-md-2 col-md-offset-1 activestep" onclick="javascript: resetActive(event, 20, 'step-1');">
                <span class="fa fa-question-circle"></span>
                <p class="form">Who are you?</p>
            </div>
            <div id="div2" class="col-md-2" onclick="javascript: resetActive(event, 40, 'step-2'); focusthis(1);">
                <span class="fa fa-user"></span>
                <p class="form">Login Credentials</p>
            </div>
            <div id="div3" class="col-md-2" onclick="javascript: resetActive(event, 60, 'step-3'); focusthis(2);">
                <span class="fa fa-file-text"></span>
                <p class="form">Personal Info</p>
            </div>
            <div id="div4" class="col-md-2" onclick="javascript: resetActive(event, 80, 'step-4'); focusthis(3);">
                <span class="fa fa-mortar-board"></span>
                <p class="form">Education Background</p>
            </div>
            <div id="div5" class="col-md-2" onclick="javascript: resetActive(event, 100, 'step-5'); focusthis(4);">
                <span class="fa fa-cloud-upload"></span>
                <p class="form">Agree & Submit</p>
            </div>
        </div>


	<?php if(isset ($errorMessage)  && strlen($errorMessage) > 0){   ?>
	<div class="container row error">
		<p style="text-align:center;"><?php echo $errorMessage; ?>
		</p>
	</div>
			
	<?php }?>

    <div class="row setup-content step activeStepInfo" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">	<form class="form-horizontal" action="<?php echo $thisSite; ?>register" method="post" id="createaccount" accept-charset="UTF-8" role="form">
	<div class="form-group">
	<label>Role *</label>
	<div class="radio form-control" style="padding-bottom:50px;">
	
	<label for="professional">
	<input type="radio" id="professional" name="role" value="professional" onclick="showResearcherForm()" required>Professional</label><br>
	
	<label for="student">
	<input type="radio" id="student" name="role" value="student" onclick="showStudentForm()" required checked>Student</label>

	 
	</div>	<div class="col-md-10"></div>	<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 40, 'step-2'); focusthis(1); buttonpress(1);">NEXT</div>
	</div>
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
                <div class="form-group" >
	

	<!-- Username -->
	<label for="username">Username *</label>
	 <input class="form-control" type="text" id="username" name="username" 
	 	value="" size="60" maxlength="60" required title=""
	 	placeholder="Username">
	 
	 
	</div>
	<div class="form-group" >
	

	<!-- Password and Password confirmation -->
	<label for="password">Password *</label>
	 <input class="form-control" type="password" id="password" name="password" 
	 value="" size="60" maxlength="60" required title=""  
	 onchange="form.confirmpassword.pattern=this.value;" 
	 placeholder="Password">
	 
	 
	</div>
	
	<div class="form-group" >
	
	<label for="password">Confirm Password *</label>
	 <input class="form-control" type="password" id="confirmpassword" name="password" 
	 value="" size="60" maxlength="60" required title=""  
	 placeholder="Password Confirmation">	

	</div>

	<div class="form-group" >
	
	<label for="email">Email *</label>
	 <input class="form-control" type="email" id="email" name="email" 
	 value="" size="60" maxlength="60" required title=""  
	 placeholder="Email">				
	<div class="col-md-10"></div>		
	<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 60, 'step-3'); focusthis(2); buttonpress(2);">NEXT</div>
	</div>	
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
<div class="form-group" >
	
	 
	<label for="firstname">First Name *</label>
	 <input class="form-control" type="text" id="firstname" name="firstname" 
	 value="" size="60" maxlength="255" required title="" 
	 placeholder="First Name">

	</div>
	<div class="form-group" >
	
	 
	<label for="lastname">Last Name *</label>
	 <input class="form-control" type="text" id="lastname" name="lastname" 
	 value="" size="60" maxlength="255" required title=""  
	 placeholder="Last Name">

	</div>
    	<div class="form-group" >
	

	<label for="birthday">Birthday *</label>
	<input type="text" id="birthday" name="birthday" class="form-control"  required title="" >
					<div class="col-md-10"></div>			<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 80, 'step-4'); focusthis(3); buttonpress(3);">NEXT</div>
	</div>
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
         	<div class="form-group" >
	
	 
	<label for="institution">Institution *</label>
	 <input class="form-control" type="text" id="institution" name="institution" 
	 value="" size="60" maxlength="255" required title="" 
	 placeholder="Institution">

	</div>
	<div class="form-group" >
	
	 
	<label for="fieldofstudy">Field of Study </label>
	 <input class="form-control" type="text" id="fieldofstudy" name="fieldofstudy" 
	 value="" size="60" maxlength="255" required title=""  
	 placeholder="Field of Study">

	</div>
    
	<div class="form-group" id="studentDiv" name="studentDiv">
	 
	  
		<label for="gpa">GPA *</label>
		<input class="form-control" type="text" id="gpa" name="gpa" value="" size="60" maxlength="255" placeholder="GPA" ><br >
		
		<label for="gradeLevel">Grade Level *</label>
		<!--<input class="form-control" type="text" id="gradeLevel" name="gradeLevel" value="" size="60" maxlength="255" placeholder="Grade Level">-->
		<select name="gradeLevel" class="form-control">
			<option value="HS9">High School Grade 9</option>
			<option value="HS9">High School Grade 10</option>
			<option value="HS9">High School Grade 11</option>
			<option value="HS9">High School Grade 12</option>
			<option value="Freshman">Undergraduate Freshman</option>
			<option value="Sophomore">Undergraduate Sophomore</option>
			<option value="Junior">Undergraduate Junior</option>
			<option value="Senior">Undergraduate Senior</option>
		</select>
		<br >
		
		<label for="major">Major *</label>
		<input class="form-control" type="text" id="major" name="major" value="" size="60" maxlength="255" placeholder="Major" ><br > 
	 </div>
	<div class="form-group" id="staffDiv" style="display:none;">
 
  
		<label for="department">Department *</label>
		<input class="form-control" type="text" id="department" name="department" value="" size="60" maxlength="255"   title="" placeholder="Department"><br >
		
		<label for="title">Title</label>
		<input class="form-control" type="text" id="title" name="title" value="" size="60" maxlength="255" 
		  placeholder="Title"><br >
		
		<label for="professionaltype">I am a *</label>
		<select name="professionaltype" >
			<option value="universityresearcher">University Researcher</option>
			<option value="industryprofessional">Industry Professional</option>
		</select>
	
	
	 </div>
	<div class="col-md-10"></div>		<div class="btn btn-default col-md-2 padding" onclick="javascript: resetActive(event, 100, 'step-5'); focusthis(4); buttonpress(4);">NEXT</div>
            </div>
        </div>
    </div>
    <div class="row setup-content step hiddenStepInfo" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12 well text-center">
	<div class="form-group" id="" >
		<label for="agree">I agree to the 
			<a href="http://sparkopenresearch.com/terms.php">terms and conditions</a>
		</label>
		<input class="checkbox-inline" type="checkbox" id="agree" name="agree" value="1" required title="You must agree to the terms and conditions of the site. " >
		
	</div>
	
	<div class="form-group" id="" >
		<label for="13">I certify I'm 13 years old or older</label>
		<input class="checkbox-inline" type="checkbox" id="13" name="13" value="1"  required title="Sorry you are not old enough to join the site. ">
		
	</div>
	
	
	<div class="form-group" >
	
		<button class="btn btn-default btn-large" id="submit" name="submit" value="Create new account" type="submit">Create User</button>
	
	</div>
	
	</form>
            </div>
</div>
    </div
></div>

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
	$("#studentDiv").display("none");
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
			document.getElementById("username").focus();
		}
		else if (type == 2)
		{
			document.getElementById("firstname").focus();
		}
		else if (type == 3)
		{
			document.getElementById("institution").focus();
		}
		else if (type == 4)
		{
			document.getElementById("agree").focus();
		}
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
	}
	function showResearcherForm() {
	document.getElementById("studentDiv").style.display = "none";
	document.getElementById("staffDiv").style.display = "block";
	//document.getElementById("studentDiv").style.display = "none";
	}
	function showStudentForm() {
	document.getElementById("staffDiv").style.display = "none";
	document.getElementById("studentDiv").style.display = "block";
	}
</script>

<!-- Steps Progress and Details - END -->

</div>
		
	
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
	//$("#birthday").datepicker();
	$("#birthday").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
</script>

<!-- Steps Progress and Details - END -->
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

