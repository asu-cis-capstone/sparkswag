<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div class="vertical-center">
<div id="contents" class="container ">
	<h1>Password Reset</h1>
	<p>
	<?php if($errorMessage === true){
			echo 'Check your email for your new password.';
		}else{
			echo 'Email address not found in the system.';
		} ?>
	</p>
</div>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

