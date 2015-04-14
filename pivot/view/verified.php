<?php
	require_once("template/header.php");
	require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1><?php echo $pageTitle ;?></h1>
	<p>
	<? if($isVerified === true;){
		echo 'Account verified.';
	}else{
		echo 'Invalid account verification code';
	}
	</p>
	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

html.php");
?>

