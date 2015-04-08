<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1><?php echo $pageTitle; ?></h1>
	<div  id="importResults" class="container ">
		<?php d($_FILES); ?>
	</div >
	<div  class="container ">
		<form method="post" action="<?php echo $thisSite; ?>admin/import" enctype="multipart/form-data" role="form">
			<label for="import">Select a CSV file to import</label>
			<input id="import" type="file" name="importFile">
			<button class="btn btn-default">Import</button>
		</form>
	</div>
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

