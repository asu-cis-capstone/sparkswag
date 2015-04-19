<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>

 <header class="intro">
        <div class="intro-body">
            <div class="container">
		<h1>Create Users</h1>
                <div class="row">
                    <div id="contents" class="container login">
						<?php if($errorMessage !== ''){
							echo '<p>' . $errorMessage . '</p>';
						}elseif($errorMessage === ''&& count($_POST) > 0){
							echo'<p>User account creation successful.</p>';

						}?>
							<form id="login" class="form-signin" action="<?php 
echo $thisSite; ?>admin/users" method="post" role="form">
								<div class="form-group" >
	 
<input type="text" name="username" 
id="username" autofocus placeholder="Username" class="form-control" 
value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>">
								</div>
<div class="form-group" >

<input type="text" name="email"
id="email" autofocus placeholder="Email" class="form-control"
value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">

 </div>

								<div class="form-group" >
	
								<input type="password" name="password" id="password" placeholder="Password" class="form-control" >
								</div>
<div class="form-group" >
        <select class="form-control" name="role">
        <option value="student">student</option>
        <option value="profession">professional</option>
        <option value="admin">admin</option>
        </select>

 </div>								
                                                                
<button  type="submit" name="submit" class="btn btn-default btn-max">Go</button>
	
	
	
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
