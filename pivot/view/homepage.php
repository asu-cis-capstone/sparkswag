<?php 
require_once("template/header.php");
require_once("template/navigationbar.php");
?>
<!-- Intro Header -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <header class="intro">
        <div class="intro-body">
        <video id="videobcg" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
     	<source src="/img/students.mp4" type="video/mp4">
          Sorry, your browser does not support HTML5 video.</video>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                    	<div id="logo"><img class="logo" src="/img/sparklogo.png"/></div>
                        

                        <h2>discover <span class="olive">•</span> connect <span class="olive">•</span> learn</h2>
                                                   <div id="imaginary_container">
							<form action="<?php echo $thisSite; ?>opportunities" method="post" role="form" class="input-group stylish-input-group">
                    			<input type="text" name="searchText" class="form-control"  placeholder="Spark something." autofocus style="color: white";>
                   				<span class="input-group-addon">
                        			<button type="submit">
                          		<span class="glyphicon glyphicon-search"></span>
                       					 </button>  
                   				 </span>
						    </form>
                            
                           </div>
 						<p class="intro-text"><img class="logo" src="/img/sublogo.png" /></p>
                        		<a href="#download" class="btn btn-circle page-scroll">
                           			 <i class="fa fa-angle-double-down animated"></i>
                       			</a>
                    </div>
                </div>
            </div>
            <div class="fb-facepile" style="margin: 35px auto;" data-href="https://www.facebook.com/sparkopenresearch" data-max-rows="1" data-colorscheme="dark" data-size="medium" data-show-count="true"></div>
        </div>
    </header>

    <!-- About Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
        	<div class="container">
              <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                            <i class="fa fa-mortar-board"></i>
                        </div>
                        <div class="type">
                            Students
                        </div>
                        <ul>

                            <li><i class="glyphicon glyphicon-ok"></i>Build your skills and resume </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Discover your passions</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Learn what kind of opportunities are available</li>
                        </ul>
                        <div class="pricing-footer">

                            <a href="http://pivot.sparkopenresearch.com/register" class="btn db-button-color-square btn-lg">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-one">
                    <div class="price">
                     	<i class="fa fa-university"></i>
                    </div>
                    <div class="type">
                        Universities
                    </div>
                    <ul>

                           <li><i class="glyphicon glyphicon-ok"></i>Advertise & Promote out of classroom opportunities </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Gain help to review student applications</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Organize opportunities</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="http://pivot.sparkopenresearch.com/register" class="btn db-button-color-square btn-lg">Register</a>
                    </div>
                </div>
                      </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-three">
                    <div class="price">
						<i class="fa fa-user-md"></i>
                    </div>
                    <div class="type">
                        Professionals
                    </div>
                    <ul>

                           <li><i class="glyphicon glyphicon-ok"></i>Advertise & Promote out of classroom opportunities </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Gain help to review student applications</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Recruit from top talent</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="http://pivot.sparkopenresearch.com/register" class="btn db-button-color-square btn-lg">Register</a>
                    </div>
                </div>
                      </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                  <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-six">
                    <div class="price">
						<i class="fa fa-users"></i>
                    </div>
                    <div class="type">
                        School Districts
                    </div>
                    <ul>

                           <li><i class="glyphicon glyphicon-ok"></i>Empower your students with up-to-date knowledge</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Help students gain an edge while in school</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assist in discovering their interests</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="http://pivot.sparkopenresearch.com/register" class="btn db-button-color-square btn-lg">Register</a>
                    </div>
                </div>
                      </div>
            </div>
        </div>
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Sparklr</h2>
                <p>Spark Open Research is creating digital pathways to help students discover their passion and build skills to help prepare them for future successes.  The Sparklr Opportunity Database catalogues, all in one place, active opportunities for in-person experiences including: internships, volunteerships, research programs, and more.</p>
                
                <p>Search by your interest, geographic location, skill you want to develop, paid or unpaid opportunities...etc.  Develop a profile to track new opportunities as they become available.  We are continuously adding new opportunities.  Don't see anything right for you? Tell us and we'll respond.  Get started now.
                </p>
            </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Spark</h2>
                <p>Feel free to email us to provide some feedback on our site, or to just say hello!</p>
                <p>The Spark Team<br /><a href="mailto:info@sparkopenresearch.com">info@sparkopenresearch.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
