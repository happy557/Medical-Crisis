<?php 
ob_start();
include './db.php';
$id=$_GET['id'];
$qdd=  mysqli_query($con, "select *from doctor where Hospital='$id'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Prevention</title>
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /> <!-- gallery css -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prevention Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/custom.css" />
		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>		
		<!-- js for news -->
		<script src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/pignose.layerslider.js"></script>
		<script type="text/javascript">
			//<![CDATA[
				$(window).load(function() {
					$('#visual').pignoseLayerSlider({
						play    : '.btn-play',
						pause   : '.btn-pause',
						next    : '.btn-next',
						prev    : '.btn-prev'
					});
				});
			//]]>
			</script>
		<!-- /js for news -->
		
		<!-- for smooth scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
		</script>
		<!-- //for smooth scrolling -->
</head>
<body>
	<!-- header -->
	<?php 
        include './inc/header.php';
        ?>
	<!-- //header -->
		<!-- Test-list-section -->
		<section class="test-menu">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Choose Your doctor</h2>
						<h6>Meet Our Specialists</h6>
					</div>
				</div>
			</div>
			<!--- Test-list ---->
			<div class="test-list">
				<div class="container">
					<h3>Doctor's List</h3>
					<p>Click on Doctor's to know more.</p>
					<table style="width:100%">
					  <tr>
						<th>Sl No</th>
						<th>Doctor Name</th>		
						<th>Department</th>
						<th>Appointment</th>
					  </tr>
                                          <?php 
                                          $i=1;
                                                  while ($r4=  mysqli_fetch_array($qdd))
                                                  {
                                          ?>
					  <tr style="cursor: pointer;" onclick="location='doctordes.php?id=<?php echo $r4['Id'];?>'">
						<td><?php echo $i;?></td>			
						<td><?php echo $r4['Doctor'];?></td>	
						<td><?php echo $r4['Department'];?></td>		
                                                <td><a href="bookadoctor.php?id=<?php echo $r4['Id'];?>">Click Here</a></td>	
					  </tr>
                                          <?php 
                                          $i++;
                                                  }
                                                  
                                          ?>
					  
					</table>
				</div>
			</div>
			<!--- /Test-list ---->
		</section>
		<!-- //Test-list-section -->
		<!-- book an appointment -->
		<div class="appointment">
			<div class="container">
				<div class="col-md-9 appointment-left">
					<h3>FREE APPOINTMENT BOOKING</h3>
					<p>Lorem Ipsum is simply dummy printing and typesetting industry. when an unknown printer took a galley of type and scrambled.</p>
				</div>
				<div class="col-md-3 appointment-right">
					<a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">book your appointment</a>
					<div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog dialog_3">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel"><div class="head_4">
			                         <h3>Make An appointment Now</h3>
									 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro similique ipsa deleniti doloribus fuga dicta id voluptate, excepturi nostrum cupiditate</p>
			                        </div></h4>
					      	</div>
							<div class="modal-body">
								<form name="row" method="post" class="register">
                                    <input type="text" name="name" id="name" placeholder="Name" required="">
                                    <input type="text" name="email id" id="Email id" placeholder="Email id" required="">
                                    <input type="text" name="mobile number" id="Mobile Number" placeholder="Mobile Number" required="">
									<input class="date" id="datepicker" type="text" value="Appointment date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Appointment date';}" required=>
									<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Message...';}" required="">Enter Message...</textarea>
									<input type="submit" onclick="myFunction()" value="Submit Now">
								</form>
							</div>
							<!---start-date-piker---->
								<link rel="stylesheet" href="css/jquery-ui.css" />
								<script src="js/jquery-ui.js"></script>
									<script>
										$(function() {
										$( "#datepicker" ).datepicker();
										});
									</script>
							<!---/End-date-piker---->
                     </div>
		         </div>
		     </div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //book an appointment -->
		
		<?php 
        include './inc/footer.php';
        ?>
		<!-- //footer -->
		<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>
<?php 
ob_flush();
?>