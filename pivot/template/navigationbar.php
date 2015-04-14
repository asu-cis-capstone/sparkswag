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
                    <span class="olive"><i class="fa fa-play-circle"></i></span>  <span class="light">Sparklr</span> Opportunity Database
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
							&& $_SESSION['userInfo']['role'] === "profession") {
						
						echo '<li>
							<a href="'.$thisSite.'createopportunity">Create Opportunity</a>
						</li>';
						
						}
						?>
					
					<li>
						<a href="<?php echo $thisSite; ?>opportunities">Opportunities</a>
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
                        <a href="'.$thisSite.'register">Register</a>
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