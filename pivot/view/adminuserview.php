<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>
	<div class="container pull-down">
		<?php if(count($showAllUsers) > 0){
			foreach($showAllUsers as $key => $listing){
			echo '
				<div class="row opplisting">
					<div class="col-md-2">
						First Name: '.$listing['fname'].'
					</div>
					<div class="col-md-2">
						Last Name: ' .$listing['lname'].'
					</div>
					<div class="col-md-4">
							Username: '.$listing['username'].'
					</div>
					<div class="col-md-2" style="color: #f28b54;">
						Email: '.$listing['email'].'
					</div>
			</div>';
			
		}}?>
	</div>
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
