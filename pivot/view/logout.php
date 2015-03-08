<?php 
header( 'Location: '.$thisSite.'' ) ;

require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container">
	<h1>Log Out</h1>
	<p>You have been signed out from Spark Open Research.  It is our hope you enjoyed your stay and will return soon.</p>
	
	<p><a href="<?php echo $thisSite;?>">Click here to return the home page.</a></p>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

