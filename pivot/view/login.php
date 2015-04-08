<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

 <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div id="contents" class="container login">
						<?php if($errorMessage !== ''){
							echo '<p>' . $errorMessage . '</p>';
						}?>
							<form id="login" class="form-signin" action="<?php echo $thisSite; ?>login" method="post" role="form">
   							  <p align="center"><img src="/img/signin.png" /></p>
   							  <p align="center">Sign in to your Spark account</p>
								<div class="form-group" >
	
								<input type="text" name="username" id="username" autofocus placeholder="Username" class="form-control" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>">
	
								</div>
								<div class="form-group" >
	
								<input type="password" name="password" id="password" placeholder="Password" class="form-control" >
								</div>
								<button  type="submit" name="submit" class="btn btn-default btn-max">Log In</button>
								<div class="" >
	
								<a href="<?php echo $thisSite; ?>register">Create a new account</a><span class="inline-separator">|</span><a href="<?php echo $thisSite; ?>forgotpassword">Forgot my password</a>
	
	
							</div>
						   </form>
	
					</div>
                </div>
            </div>
        </div>
    </header>
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>