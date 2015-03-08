<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container">
	<h1>My Account</h1>
	<form name="Image" enctype="multipart/form-data" action="image.php" method="POST">
	<div class="form-control">
	<input type="file" name="Photo" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"><br/>
	<INPUT type="submit" class="btn btn-default" name="Submit" value="  Submit  "> 
	&nbsp;&nbsp;<INPUT type="reset" class="btn btn-default" value="Cancel">
	</div>
</form>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
