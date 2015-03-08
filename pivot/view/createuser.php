<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">

	<p><h2>Create a User Account</h2></p>
	
	<form class="form-horizontal" action="<?php echo $thisSite; ?>createaccount" method="post" id="createaccount" accept-charset="UTF-8" role="form">
	
	<!-- Role -->
	<div class="form-group">
	<label>Role *</label>
	<div class="radio form-control" style="padding-bottom:50px;">
	
	<label for="researcher">
	<input type="radio" id="researcher" name="role" value="researcher" onclick="showResearcherForm()" required>Researcher</label><br>
	
	<label for="student">
	<input type="radio" id="student" name="role" value="student" onclick="showStudentForm()" required checked>Student</label>

	 
	</div>
	</div>
	<div class="form-group" >
	

	<!-- Username -->
	<label for="username">Username *</label>
	 <input class="form-control" type="text" id="username" name="username" 
	 	value="" size="60" maxlength="60" required title="" 
	 	placeholder="Name">
	 
	 
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
	
	
	<!-- Email address -->
	<div class="form-group" >
	

	 <label for="email">E-mail address *</label>
	 <input class="form-control" type="text" id="email" name="email" 
	 value="" size="60" maxlength="254" required title="" 
	 placeholder="E-mail address" >

	</div>
	
	
	<!-- First Name, Last Name, Institution, Fields of Study, Birthday -->
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
	<div class="form-group" >
	

	<label for="birthday">Birthday *</label>
	<input type="date" id="birthday" name="birthday" class="form-control"  required title="" >
		
	</div>
	
	
	<!-- Researcher form -->
	<div class="form-group" id="staffDiv" style="display:none;">
 
  
	 <label for="department">Department *</label>
	  <input class="form-control" type="text" id="department" name="department" 
	  value="" size="60" maxlength="255"   title="" 
	  placeholder="Department"><br >
	 <label for="title">Title</label>
	  <input class="form-control" type="text" id="title" name="title" 
	  value="" size="60" maxlength="255" 
	  placeholder="Title"><br >
	 <label for="staffcv">CV *</label>
	  <input class="form-control" type="file" id="staffcv" name="staffcv"  ><br >

	 </div>
	 
	 <!-- Student form-->
	 <div class="form-group" id="studentDiv" >
	 
	  
	 <label for="gpa">GPA *</label>
	  <input class="form-control" type="text" id="gpa" name="gpa" value="" size="60" maxlength="255" placeholder="GPA" ><br >
	 <label for="gradeLevel">Grade Level *</label>
	  <input class="form-control" type="text" id="gradeLevel" name="gradeLevel" value="" size="60" maxlength="255" placeholder="Grade Level"><br >
	 <label for="major">Major *</label>
	  <input class="form-control" type="text" id="major" name="major" value="" size="60" maxlength="255" placeholder="Major" ><br > 

	 </div>
	
	
	<div class="form-group" >
	
	<button class="btn btn-default btn-large" id="submit" name="submit" value="Create new account" type="submit">Create User</button>
	
	</div>
	
	</form>
		
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

