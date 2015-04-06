<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1>My Account</h1>
	
	<?php //d($_SESSION);?>
	
	<div class="row">
		<div class="col-md-4">
			<p>User ID: <?php echo $_SESSION['userInfo']['UserNum']; ?>	
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>User Name: <?php echo $_SESSION['userInfo']['username']; ?>	
			</p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>First Name: <?php echo $_SESSION['userInfo']['fname']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('fname', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Last Name: <?php echo $_SESSION['userInfo']['lname']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('lname', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Address: <?php echo $_SESSION['userInfo']['address']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('address', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>City: <?php echo $_SESSION['userInfo']['city']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('city', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>State: <?php echo $_SESSION['userInfo']['state']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('state', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Zip code: <?php echo $_SESSION['userInfo']['zip']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('zip', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Institution: <?php echo $_SESSION['userInfo']['institution']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('institution', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Field of Study: <?php echo $_SESSION['userInfo']['fieldOfStudy']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('fieldOfStudy', this, 'text');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>email: <?php echo $_SESSION['userInfo']['email']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('email', this, 'email');"></i></p>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4">
			<p>Date of Birth: <?php echo $_SESSION['userInfo']['DOB']; ?>	
			<i class="fa fa-pencil-square-o" onClick="ShowEditForm('DOB', this, 'date');"></i></p>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-4">
			<p>Role: <?php echo $_SESSION['userInfo']['role']; ?></p>
		</div>
	</div>
	
	

	
</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
