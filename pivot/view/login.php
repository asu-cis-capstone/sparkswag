<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents">
	<form id="login" action="?login" method="post">
	<div class="" >
	
	<label for="username">Username</label>
	<input type="text" name="username" id="username">
	
	</div>
	<div class="" >
	
	<label for="password">Password</label>
	<input type="password" name="password" id="password">
	</div>
	<div class="" >
	<input type="submit" name="submit" value="Log In">
	</div>
	<div class="" >
	
	<a href="?createaccount">Create a new account</a>
	
	</div>
	<div class="" >

	<a href="?forgotpassword">Forgot my password</a>
	
	
	</div>
	</form>
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

