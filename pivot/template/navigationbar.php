<div id="navbar">
	<img src="<?php echo $thisSite; ?>images/logo.png" alt="Spark Open Research navbar logo">
	<a href="<?php echo $thisSite; ?>">Home</a>
	<a href="<?php echo $thisSite; ?>opportunity">Opportunities</a>
	<a href="<?php echo $thisSite; ?>opportunitylist">Create Opportunity</a>
	
	<?php
	if($isSignedIn === true){
		echo '
		<a href="'.$thisSite.'myaccount">My Account</a>
		<a href="'.$thisSite.'logout">Log Out</a>';
	}else{
		echo '
		<a href="'.$thisSite.'createaccount">Create Account</a>
		<a href="'.$thisSite.'login">Log In</a>';
	}
	?>
	
	
</div>
