<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

	<div id="contents" class="container pull-down">
	<p></p>
	<p></p>
	<p><h1>User account creation successful!</h1></p>
		<p class="bold">
			<?php
				date_default_timezone_set('MST');
				$time = date('H');
				if ($time < '12')
				{
					echo "Good Morning! Thanks you for registering!";
				}
				elseif ($time < '17')
				{
					echo "Good Afternoon! Thanks you for registering!";
				}
				else
				{
					echo "Good Evening! Thanks you for registering!";
				}
			?>
		</p>
		<p>Check your email for an account verification.</p>
		<p class="bold">
		Click <a href="<?php echo $thisSite; ?>login">here</a> to login</p>
	</div>


<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>

