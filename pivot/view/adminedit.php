<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div class="vertical-center">
<div id="contents" class="container">
	<h1><?php echo $pageTitle; ?></h1>
	<form class="form-horizontal" action="" method="post" id="createaccount" role="form">
	<div class="form-group" >
	

	 <label for="opportunity">Opportunity number: </label>
	 <input class="form-control" type="text" id="opportunity" name="opportunity" 
	 value="" size="10" maxlength="254" placeholder="" 
	oninput="updateLink();">
	</div>
	
	</form>
	<p id="editlink"></p>
	

</div>
</div>
<script>
function updateLink(){
	var l = document.getElementById('editlink');
	var i = document.getElementById('opportunity');
	
	while(l.firstChild){
		l.removeChild(l.firstChild);
	}
	
	var j = document.createElement("a");
	l.appendChild(j);
	j.appendChild(document.createTextNode("Click"));
	j.href = "<?php echo $thisSite; ?>opportunities/" + i.value;
	//alert(j.href);
}
</script>
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
