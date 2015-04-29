<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>


<div id="contents" class="container pull-down">
	<h1>Administration Panel</h1>
	<div  class="container ">
                <a href="<?php echo $thisSite; ?>admin/editopportunity">Edit Opportunity</a>
        </div>
	<div  class="container ">
		<a href="<?php echo $thisSite; ?>admin/approval">Pending Approval</a>
	</div>
	<div  class="container ">
		<a href="<?php echo $thisSite; ?>admin/import">Import Opportunities</a>
	</div>
	<div  class="container ">
                <a href="<?php echo $thisSite; ?>admin/users">User Accounts</a>
        </div>
	<div  class="container ">
				<a href="<?php echo $thisSite; ?>createopportunity">Create Opportunity</a>
    </div>
	<div class="container">
		<a href="<?php echo $thisSite; ?>admin/useraccounts">Show All Users</a>
	</div>

</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

