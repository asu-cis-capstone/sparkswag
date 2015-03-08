<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container">
	<form id="login" class="form-signin pull-down" action="<?php echo $thisSite; ?>login" method="post" role="form">
	<h2>SIGN IN</h2>
	<div class="form-group" >
	
	<input type="text" name="username" id="username" placeholder="Username" class="form-control" >
	
	</div>
	<div class="form-group" >
	
	<input type="password" name="password" id="password" placeholder="Password" class="form-control" >
	</div>
	<button  type="submit" name="submit" class="btn btn-default">Log In</button>
	<div class="" >
	
	<a href="createaccount">Create a new account</a>
	
	</div>
	<div class="" >

	<a href="forgotpassword">Forgot my password</a>
	
	
	</div>
	</form>
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

