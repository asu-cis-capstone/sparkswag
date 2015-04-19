<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

<div class="vertical-center">
<div id="contents" class="container">
	<h1>Apply Through Email</h1>
	<form class="form-horizontal" action="<?php echo $thisSite; ?>applyemailform" method="post" id="applyemailform" accept-charset="UTF-8" role="form">
	<input type="hidden" name="staffNum" value="<?php echo $staffNum?>">
	<div class="form-group" >
		<label for="name">Full Name *</label>
		<input class="form-control" type="text" id="name" name="name" 
		value="" size="60" maxlength="254" required title="" 
		placeholder="E-mail address" >
	</div>
	<div class="form-group" >
		<label for="email">E-mail address *</label>
		<input class="form-control" type="text" id="email" name="email" 
		value="" size="60" maxlength="254" required title="" 
		placeholder="E-mail address" >
	</div>
	<div class="form-group">
		<label>Cover Letter</label>
		<textarea id="comments" name="comments" class="form-control"></textarea>
	</div>
	<div class="form-group" >
	
	<button class="btn btn-default btn-large" id="submit" name="submit" value="reset password" type="submit">Send Email</button>
	
	</div>
	
	
	</form>

</div>
</div>

<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>