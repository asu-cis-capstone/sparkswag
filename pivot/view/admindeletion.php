<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1><?php echo 'Delete '. $route[3]; ?></h1>
	<div  class="container ">
		<p>Number <?php echo $route[4];?> deleted.</p>
	</div>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

