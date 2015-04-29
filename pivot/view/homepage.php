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
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="db-wrapper">
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price">
                           <li class="fa fa-university"></li>
                        </div>
                        <div class="type">
                            Universities
                        </div>
                        <ul>

                            <li><i class="fa fa-check-square-o"></i>Catalogue in one place campus-based, out of the classroom opportunities.</li>
                            <li><i class="fa fa-check-square-o"></i>Have the Sparklr team help review and manage student applications.</li>
                            <li><i class="fa fa-check-square-o"></i>Organize opportunities in a single place for all students, across all academic units.</li>
                        </ul>
                        <div class="pricing-footer">

                            <a href="<?php echo $thisSite; ?>register" class="btn db-button-color-square btn-lg">Register</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-two popular">
                    <div class="price">
                        <li class="fa fa-graduation-cap"></li>
                    </div>
                    <div class="type">
                        Students
                    </div>
                    <ul>

                        <li><i class="fa fa-check-square-o"></i>Explore opportunities. Discover your passions. Build your skills and resume.</li>
                        <li><i class="fa fa-check-square-o"></i>Don’t see an opportunity yet in the database that fits your interests? Tell us more about yourself and we will let you know when a matching opportunity becomes available.</li>
                        <li><i class="fa fa-check-square-o"></i>Gain in-field experience!</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="<?php echo $thisSite; ?>register" class="btn db-button-color-square btn-lg">Register</a>
                    </div>
                </div>
                     </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="db-wrapper">
                <div class="db-pricing-eleven db-bk-color-three">
                    <div class="price">
                        <li class="fa fa-user-md"></li>
                    </div>
                    <div class="type">
                        Professionals
                    </div>
                    <ul>

                        <li><i class="fa fa-check-square-o"></i>Promote and advertise an internship, volunteer experience, or other research experiences for your business on Sparklr.</li>
                        <li><i class="fa fa-check-square-o"></i>Have the Sparklr team help  to review and manage student applications.</li>
                        <li><i class="fa fa-check-square-o"></i>Recruit from top talent across university students who are eager to engage in their field!</li>
                    </ul>
                    <div class="pricing-footer">

                        <a href="<?php echo $thisSite; ?>register" class="btn db-button-color-square btn-lg">Register</a>
                    </div>
                </div>
                     </div>
            </div>

        </div>
			</div>
        </div>
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Sparklr</h2>
                <p>Spark is creating digital pathways to help students discover their passion and build skills to help prepare them for future successes.  The Sparklr Opportunity Database is a product of Spark and aims to provide a one-stop catalogue of active opportunities for in-person experiences, including: internships (paid and unpaid), volunteerships, research progrms, and more.</p>
                
                <p>Search by interest, geographic location, specific skill, age, eligibility, and other criteria.   Develop a profile and track new opportunities as they become available.  We are continuously adding new opportunities.  Don't see anything right for you? Tell us and we'll respond.  Get started now.
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
                <p>Use the e-mail below to provide feedback on the database, or just to say hello!</p>
                <p>The Spark Team<br /><a href="mailto:info@sparkopenresearch.com">info@sparkopenresearch.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://www.facebook.com/sparkopenresearch?fref=ts" class="btn btn-default btn-lg"><i class="fa fa-facebook-square fa-fw"></i> <span class="network-name">facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
<?php 
require_once("template/footer.php");
require_once("template/closehtml.php");
?>
