<?php 
ob_start();
include './db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Prevention</title>
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
		<!-- about-section -->
		<section class="about">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>About Us</h2>
						<h6>add a short description here</h6>
					</div>
				</div>
			</div>
			<div class="about-grids">
				<div class="container">
					<div class="col-md-4 abt-grid">
						<h3>Professionals </h3>
						<i class="fa fa-stethoscope"></i>
						<div class="clearfix"></div>
						<p>This has been made possible by the talented medical professionals on board with expertise in many fields providing, courteous compassionate care with a personal approach.</p>
<!--						<a href="laboratory.html">Read More</a>-->
					</div>
					<div class="col-md-4 abt-grid">
						<h3>Technologies</h3>
						<i class="fa fa-plus-square"></i>
						<div class="clearfix"></div>
						<p>The hospital has incorporated innovative diagnostic and therapeutic medical technologies keeping pace with the amazing progress of medical science.</p>
<!--						<a href="laboratory.html">Read More</a>-->
					</div>
					<div class="col-md-4 abt-grid">
						<h3>Research</h3>
						<i class="glyphicon glyphicon-globe"></i>
						<div class="clearfix"></div>
						<p>The Hospital supports Pioneering research and treatments for life-threatening diseases through our core facilities and services,as well as offer formal academic programs and public education.</p>
<!--						<a href="laboratory.html">Read More</a>-->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
		<section class="happy-patients">
			<div class="container">
				<div class="happy-patients-head text-center">
					<h3>Kind words from</h3>
					<h4>happy patients</h4>
				</div>
				<div class="happy-patients-grids">
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-left text-right hvr-bounce-to-right dir-arrr">
							<p>Over the years, the hospital has emerged as a centre of international healthcare excellence for patients in India.</p>
							<h4>John Smith</h4>
						</div>
						<div class="happy-patients-grid-right">
							<img src="images/p1.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-right another1 dir-arrl">
							<img src="images/p2.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="happy-patients-grid-left another2 hvr-bounce-to-left">
							<p>Over the years, the hospital has emerged as a centre of international healthcare excellence for patients in India.</p>
							<h4>William Smith</h4>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-left text-right hvr-bounce-to-right dir-arrr">
							<p>Over the years, the hospital has emerged as a centre of international healthcare excellence for patients in India.</p>
							<h4>Mery Toms</h4>
						</div>
						<div class="happy-patients-grid-right">
							<img src="images/p3.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 happy-patients-grid">
						<div class="happy-patients-grid-right another1 dir-arrl">
							<img src="images/p4.jpg" alt="happy patient" title="happy patient" />
						</div>
						<div class="happy-patients-grid-left another2 hvr-bounce-to-left">
							<p>Over the years, the hospital has emerged as a centre of international healthcare excellence for patients in India.</p>
							<h4>Sohan Toms</h4>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</section>
			<!--team-->
		
		<!--who-we-are-->
		<div class="who-are-we">
			<div class="container">
				<h3>We are no. 1...<span>WHY?</span></h3>
				<div class="col-md-6 who-grids">
					<ul class="whogrid_info">
						<li class="tick">Exemplary Professional Expertise.</li>
						<li class="tick">Cutting Edge Technologies.</li>
						<li class="tick">Training & Postgraduate Courses.</li>
					</ul>
				</div>
				<div class="col-md-6 who-grids">
					<ul class="whogrid_info">
						<li class="tick">Cleanliness.</li>
						<li class="tick">Moderate Costs.</li>
						<li class="tick">Advanced hi-tech health care facility.</li>
					</ul>
				</div>
			</div>
		</div>
		<!--/who-we-are-->
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