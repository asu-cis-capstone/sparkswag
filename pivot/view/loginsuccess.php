<?php 
header('Location: '. $thisSite);
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents">
	<h1>Log in successful!</h1>
	<p><a href="<?php echo $thisSite;?>">Click here to return to the home page.</a></p>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

