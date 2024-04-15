<div class="top-strip">
		<div class="container-fluid">
			<div class="social-icons">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
			</div>
			<div class="contact-info">
				<ul>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+0123 384 920</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">contact@yourdomain.com</a></li>
				</ul>
			</div>

			<div class="clearfix"></div>
		</div>
	</div>
	<nav class="navbar nav_bottom" role="navigation">
	 <div class="container">
	 <!-- Brand and toggle get grouped for better mobile display -->
	   <div class="navbar-header nav_2">
		  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#"></a>
	   </div> 
	   <!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			<ul class="nav navbar-nav nav_1">
				<li class="current_page"><a href="index.php">Home</a></li>
                                
				<li><a href="about.php">About</a></li>
                                <li><a href="hospital.php">Hospital</a></li>
                            
                                <?php 
                              if(isset($_SESSION['admin']))
                              {
                               if($_SESSION['admin']['Usertype']=='user')
                                {
                                    ?>
                                <li><a href="emergency.php">Emergency</a></li>
                                <li><a href="complaints.php">Complaints</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <?php 
                                }
                                elseif ($_SESSION['admin']['Usertype']=='Ambulance') {
                                ?>
                               
                                <li><a href="viewemergency.php">Notification</a></li>
                               
                                <?php 
                            }
                              }
                                ?>
                                
                                    <?php
                                if(isset($_SESSION['admin']))
                                {
                                    ?>
                                    <li><a href="logout.php">Logout</a></li>
                                <?php 
                                    }
 else {
                                ?>
                                <li><a href="hospital/hospital/users.php">Login</a></li>
 <?php } ?>
                                
<!--                                <li><a href="trackstatus.php">Track A Status</a></li>
			<li><a target="_blank" href="booking/booking.php">Check Availability</a></li>-->
			
				
			</ul>
		 </div><!-- /.navbar-collapse -->
	   </div>
	</nav>