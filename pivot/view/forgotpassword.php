<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div class="vertical-center">
<div id="contents" class="container">
	<h1>Password Reset</h1>
	<p>Enter your email address and a new password will be sent to you.</p>
	<form class="form-horizontal" action="<?php echo $thisSite; ?>forgotpassword" method="post" id="createaccount" accept-charset="UTF-8" role="form">
	<!-- Email address -->
	<div class="form-group" >
	

	 <label for="email">E-mail address *</label>
	 <input class="form-control" type="text" id="email" name="email" 
	 value="" size="60" maxlength="254" required title="" 
	 placeholder="E-mail address" >
	</div>
	
	<div class="form-group" >
	
	<button class="btn btn-default btn-large" id="submit" name="submit" value="reset password" type="submit">Reset Password</button>
	
	</div>
	
	
	</form>

</div>
</div>

<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>