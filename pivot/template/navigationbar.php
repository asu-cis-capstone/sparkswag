<?php
//d($_SESSION)
?>
<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <span class="olive"><i class="fa fa-play-circle"></i></span>  <span class="light">Spark</span> Open Research
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        	<a href="<?php echo $thisSite; ?>">Home</a>
                    </li>
					
						<?php
						if(isset($_SESSION['userInfo'])
							&& $_SESSION['userInfo']['role'] === "researcher") {
						
						echo '<li>
							<a href="'.$thisSite.'opportunity">Create Opportunities</a>
						</li>';
						
						}
						?>
					
					<li>
						<a href="<?php echo $thisSite; ?>opportunitylist">List Opportunity</a>
                    </li>
                    <?php
					if(isset($_SESSION['userInfo']) && $_SESSION['userInfo']['role'] === 'admin') {
						echo '
						<li>
							<a href="'.$thisSite.'admin">Administration</a>
						</li>';
                    }
					?>
					<li>
					<?php
					if(!isset($_SESSION['userInfo'])) {
					echo '	
						<li>
                        <a href="'.$thisSite.'createaccount">Register</a>
						</li>
						<li>
                        <a href="'.$thisSite.'login">Login</a>
						</li>';
					}else{
						echo '	
						<li>
                        <a href="'.$thisSite.'myaccount">My Account</a>
						</li>
						<li>
                        <a href="'.$thisSite.'logout">Log Out</a>
						</li>';
					}?>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>