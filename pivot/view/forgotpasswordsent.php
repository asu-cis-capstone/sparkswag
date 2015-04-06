<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div class="vertical-center">
<div id="contents" class="container pull-down">
	<h1>Password Reset</h1>
	<p>
	<?php if($errorMessage === ''){
			echo 'Check your email for your new password.';
		}else{
			echo $errorMessage;
		} ?>
	</p>
</div>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

