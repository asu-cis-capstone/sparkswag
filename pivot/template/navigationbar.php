<div id="navbar">
	<img src="./images/logo.png" alt="Spark Open Research navbar logo">
	<a href="./">Home</a>
	<a href="./?opportunity">Opportunities</a>
	<a href="./?opportunitylist">Create Opportunity</a>
	
	<?php
	if($isSignedIn === true){
		echo '
		<a href="./?myaccount">My Account</a>
		<a href="./?logout">Log Out</a>';
	}else{
		echo '
		<a href="./?createaccount">Create Account</a>
		<a href="./?login">Log In</a>';
	}
	?>
	
	
</div>