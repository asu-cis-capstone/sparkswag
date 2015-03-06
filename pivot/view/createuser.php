<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents">
	
	<form class="" action="<?php echo $thisSite; ?>createaccount" method="post" id="createaccount" accept-charset="UTF-8">
	
	<div>Role *</div>
	
	<div class="" >
	
	<input type="radio" id="researcher" name="role" value="researcher" class="" />
	<label for="researcher">Researcher </label>
	
	
	</div>
	<div class="" >
	
	<input type="radio" id="student" name="role" value="student" class="" />
	<label for="student">Student </label>

	 
	</div>
	<div class="" >
	


	<label for="username">Username *</label>
	 <input class="" type="text" id="username" name="username" value="" size="60" maxlength="60" />
	 
	 
	</div>
	<div class="" >
	

	 <label for="email">E-mail address *</label>
	 <input class="  " type="text" id="email" name="email" value="" size="60" maxlength="254" />

	</div>
	<div class="" >
	
	 
	<label for="firstname">First Name *</label>
	 <input class="" type="text" id="firstname" name="firstname" value="" size="60" maxlength="255" />

	</div>
	<div class="" >
	
	 
	<label for="lastname">Last Name *</label>
	 <input class="   " type="text" id="lastname" name="lastname" value="" size="60" maxlength="255" />

	</div>
	<div class="" >
	
	 
	<label for="institution">Institution *</label>
	 <input class="   " type="text" id="institution" name="institution" value="" size="60" maxlength="255" />

	</div>
	<div class="" >
	
	 
	<label for="fieldofstudy">Field of Study </label>
	 <input class="  " type="text" id="fieldofstudy" name="fieldofstudy" value="" size="60" maxlength="255" />

	</div>
	<div class="" >
	

	<label for="birthday">Birthday *</label>
	<input type="date" id="birthday" name="birthday">
		
	</div>
	<div class="" >
	
	<input class="" id="submit" name="submit" value="Create new account" type="submit">
	
	</div>
	
	</form>
		
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

