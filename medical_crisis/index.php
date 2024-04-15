<?php 
ob_start();
include './db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Prevention</title>
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
	<div class="demo-2">	
		<header class="logo">
			<h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
		</header>
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
							<h3>Tele Medicine Service.</h3>
							<blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Prevention</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
							<h3>Protect yourself.</h3>
							<blockquote><p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p><cite>Preventionr</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-3"></div>
							<h3>Centre Of Excellence.</h3>
							<blockquote><p>Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the suffering and the terror of the abattoirs.</p><cite>Prevention</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-4"></div>
							<h3>Exceptional Technology.</h3>
							<blockquote><p>The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.</p><cite>Prevention</cite></blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-5"></div>
							<h3>Compassionate Care.</h3>
							<blockquote><p>I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.</p><cite>Prevention</cite></blockquote>
						</div>
					</div>
				</div><!-- /sl-slider -->

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->

        </div>
		<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
		<script type="text/javascript" src="js/jquery.slitslider.js"></script>
		<script type="text/javascript">	
			$(function() {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$nav.each( function( i ) {
							
								$( this ).on( 'click', function( event ) {
									
									var $dot = $( this );
									
									if( !slitslider.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );
									
									}
									
									slitslider.jump( i + 1 );
									return false;
								
								} );
								
							} );

						};

						return { init : init };

				})();

				Page.init();

				/**
				 * Notes: 
				 * 
				 * example how to add items:
				 */

				/*
				
				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
				
				// call the plugin's add method
				ss.add($items);

				*/
			
			});
		</script>
		
		<!-- banner-bottom -->
		<div class="banner-bottom">
			<div class="container">
				<div class="col-md-4 timing">
					<div class="opening-hours">
						<h3><i class="fa fa-clock-o"></i>Opening Hours</h3>
						<ul>
							<li>Monday - Friday</li>
							<li>9.00 AM - 8.00 PM</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Saturday</li>
							<li>9.00 AM - 8.00 PM</li>
							<div class="clearfix"></div>
						</ul>
						<ul>
							<li>Sunday</li>
							<li>9.30 AM - 6.00 PM</li>
							<div class="clearfix"></div>
						</ul>
					</div>
					<div class="help">
						<h3><i class="fa fa-pencil-square-o"></i>Need Help?</h3>
						<p>Just Make an Appointment to Get Help From Our Experts</p>
						<a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Request an Appointment</a>
					</div>
				</div>
				<div class="col-md-4 abt-img">
					<img src="images/abt1.png" alt="doctor" title="doctor" />
				</div>
				<div class="col-md-4 abt-dec">
					<h2>Ken Jeong</h2>
					<p class="diff">The greatest wealth one can possess in life</p>
					<p>The greatest wealth one can possess in life is definitely good health. When we started our first hospital in 2007, our focus was on delivering quality healthcare to areas that were deprived of the basic healthcare services.</p>
					<p> Today, with operations spread across the Middle East, Europe, UK and India, we still strive hard to deliver the best of care and wellness to people across the World.</p>
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>		
		<!-- //banner-bottom -->
		
		<!-- Stats -->
		<div class="stats">
			<div class="container">
				<p class="slideanim">The advanced hi-tech healthcare facility ushers in world class standards in healthcare and offers diverse medical specialties, including Multi Organ Transplantation, Gastroenterology, G.I Surgery, Medical, Surgical Oncology, Joint Replacement, Accident & Trauma Orthopedics, Sports Medicine, Neurology, Neurosurgery Surgery, Cardiology, Cardiovascular Surgery, Gynecology & more....</p>
				<div class="stats-info">
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-smile-o"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='18000' data-delay='.5' data-increment="50">18000</div>
						<p class="stats-info">Happy Smiles</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-facebook"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1700' data-delay='.5' data-increment="5">1700</div>
						<p class="stats-info">Facebook Likes</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-twitter"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='21500' data-delay='.5' data-increment="20">21500</div>
						<p class="stats-info">Twitter Followers</p>
					</div>
					<div class="col-md-3 col-sm-3 stats-grid slideanim">
						<i class="fa fa-flask"></i>
						<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='285' data-delay='.5' data-increment="1">285</div>
						<p class="stats-info">Lorem Ipsum</p>
					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div>
		<!-- //Stats -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
		
		<!-- tabs -->	
		<div class="vertical-tabs">
			<div class="container">
				<h3 class="title text-center">What We Do</h3>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container">
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
						  <div class="list-group">
							<a href="#" class="list-group-item active text-center">
							    Services 1
							</a>
							<a href="#" class="list-group-item text-center">
							    Services 2
							</a>
							<a href="#" class="list-group-item text-center">
							    Services 3
							</a>
							<a href="#" class="list-group-item text-center">
							    Services 4
							</a>
							<a href="#" class="list-group-item text-center">
							    Services 5
							</a>
						  </div>
						</div>
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
							<!-- flight section -->
							<div class="bhoechie-tab-content active">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser1.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Cutting Edge Technologies</h3>
										<p>one of the largest, most comprehensive, independent multi-specialty hospitals in Kerala is recognized as a leader in medical education, groundbreaking research, and innovative, patient-centered clinical care. The hospital has become the hospital of choice to patients' worldwide providing emergency,</p>
										<p>The advanced hi-tech healthcare facility ushers in world class standards in healthcare and offers diverse medical specialties, including Multi Organ Transplantation, Gastroenterology, G.I Surgery, Medical, Surgical Oncology, Joint Replacement, Accident & Trauma Orthopedics, Sports Medicine, Neurology, Neurosurgery Surgery, Cardiology, Cardiovascular Surgery, Gynecology & more...
										</p>
										<a href="single.html">Read More</a>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<!-- train section -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser2.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Exemplary Professional Expertise</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>This has been made possible by the talented medical professionals on board with expertise in many fields providing, courteous compassionate care with a personal approach.
										</p>
<!--										<a href="single.html">Read More</a>-->
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
				
							<!-- hotel search -->
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser3.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>On the other hand, we denounce with righteous indignation</h3>
										<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 
											1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their 
											by English versions from the 1914 translation by H. Rackham.
										</p>
										<p>This has been made possible by the talented medical professionals on board with expertise in many fields providing, courteous compassionate care with a personal approach.
										</p>
<!--										<a href="#">Read More</a>-->
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser4.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Research</h3>
										<p>The Hospital supports Pioneering research and treatments for life-threatening diseases through our core facilities and services,</p>
										<p>as well as offer formal academic programs and public education. Special research attention is paid to diseases endemic to Kerala.
										</p>
<!--										<a href="#">Read More</a>-->
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="bhoechie-tab-content">
								<div class="services">
									<div class="ser-img">
										<img src="images/ser5.jpg" title="service" alt="" />
									</div>
									<div class="ser-info">
										<h3>Training & Postgraduate Courses</h3>
										<p>Training in advanced endoscopic procedures is given to doctors from centers in India and abroad at the Hospital. </p>
										<p>Continuing medical education programmed courses designed to prepare postgraduate students for National Board Examinations is conducted here.
										</p>
<!--										<a href="#">Read More</a>-->
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
			  </div>
			</div>
		</div>
		<script type="text/javascript" src="js/tabs.js"></script>		
		<!-- //tabs -->
	
		<!-- news -->
		<div class="our-news">
		<h3 class="text-center">Our laboratories</h3>
		<p class="text-center">It is health that is real wealth and not pieces of gold and silver." - Mahatma Gandhi.</p>
			<div id="visual">
				<div class="slide-visual slideanim">
					<!-- Slide Image Area (1000 x 424) -->
					<ul class="slide-group">
						<li><img src="images/news1.jpg" alt="Dummy Image" class="img-responsive"/></li>
						<li><img src="images/news2.jpg" alt="Dummy Image" class="img-responsive"/></li>
						<li><img src="images/news3.jpg" alt="Dummy Image" class="img-responsive"/></li>
						<li><img src="images/news4.jpg" alt="Dummy Image" class="img-responsive"/></li>
						<li><img src="images/news5.jpg" alt="Dummy Image" class="img-responsive"/></li>
					</ul>
					<!-- Slide Description Image Area (316 x 328) -->
					<div class="script-wrap">
						<ul class="script-group">
							<li><div class="inner-script"><img src="images/news1-1.jpg" alt="Dummy Image" class="img-responsive"/></div></li>
							<li><div class="inner-script"><img src="images/news2-2.jpg" alt="Dummy Image" class="img-responsive"/></div></li>
							<li><div class="inner-script"><img src="images/news3-3.jpg" alt="Dummy Image" class="img-responsive"/></div></li>
							<li><div class="inner-script"><img src="images/news4-4.jpg" alt="Dummy Image" class="img-responsive"/></div></li>
							<li><div class="inner-script"><img src="images/news5-5.jpg" alt="Dummy Image" class="img-responsive"/></div></li>
						</ul>
						<div class="slide-controller">
							<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
							<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
							<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
							<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /news -->
		
		<!-- quick links -->
<!--		<div class="news-section" id="news">
			<div class="container">
				<div class="news-section-head text-center">
					<h3>Latest news</h3>
					<p>Here, there and everywhere... what we've been doing</p>
				</div>
				<div class="news-section-grids">
					<div class="col-md-4 news-section-grid">
						<img src="images/n1.jpg" alt="" />
						<div class="info">
							<a class="news-title" href="single.html">There are sit amet</a>
							<label>March 18</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="single.html">Read more</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="images/n2.jpg" alt="" />
						<div class="info">
							<a class="news-title" href="single.html">Lorem ipsum dolor</a>
							<label>August 28</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="single.html">Read more</a>
						</div>
					</div>
					<div class="col-md-4 news-section-grid">
						<img src="images/n3.jpg" alt="" />
						<div class="info">
						    <a class="news-title" href="single.html">The standard chunk</a>
							<label>September 12</label>
							<p>The Duchess took her choice, and was gone in a moment. 'Let's go on with the game,' the Queen said to Alice; and Alice was too much frightened to say a word, but slowly followed her back to the croquet-ground.</p>
							<a class="more" href="single.html">Read more</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>-->

		
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