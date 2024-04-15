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
		<!-- blog-section -->
		<section class="error">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Track A Status</h2>
						<h6>Track Your Status</h6>
					</div>
				</div>
			</div>
			<!--- blog ---->
			<div class="blog">
				<div class="container">
					<div class="bolg-posts">
							
							<div class="col-md-12 blog-top">
								<div class="blog-in blog-in1">
									<a href="#" class="blog-post1"><img src="images/b2.jpg" alt=" "></a>
									<div class="blog-grid">
										<div class="date">
											<span class="date-in"><i class="fa fa-calendar"></i><?php echo date('d/m/Y');?></span>
											<a href="#" class="comments"><i class="fa fa-comment"></i>42</a>
											<div class="clearfix"> </div>
										</div>
                                                                            <form method="post" action="">
										<h3><a href="#">Enter Your Token Number</a></h3>
                                                                                <p><input style="color: black;font-size: 12px;"  type="text" name="txtsub" value="" />
                                                                                    <input  style="color: black" type="submit" name="sub" class="smore" value="TRACK A STATUS" />
                                                                                </p>
                                                                            </form>
                                                                            <?php 
                                                                            if(isset($_POST['sub']))
                                                                            {
                                                                                $tsub=$_POST['txtsub'];
                                                                                //echo "select *from booking where Etocken='$tsub'";
                                                                                $qsd=  mysqli_query($con, "select *from booking where Etocken='$tsub'");
                                                                                $r1=  mysqli_fetch_array($qsd);   
                                                                                $tt=$r1['Reply'];
                                                                                if($tt=='')
                                                                                {
                                                                                    $p='Keep Waiting...Under Processing';
                                                                                }
                                                                                else
                                                                                {
                                                                                    $p=$r1['Reply'];
                                                                                }
                                                                                ?>
                                                                            <h4 style="color: #fff;"> Your Appointment time is at <?php echo $p;?></h4>
                                                                              
                                                                            <?php 
                                                                                
                                                                            }
                                                                            ?>
									</div>
									<div class="clearfix"></div>					
								</div>
								<i class="black"> </i>
							</div>
						
						
							<div class="clearfix"> </div>
						
					</div>
				</div>
			</div>
			<!--- /404 ---->
		</section>
		<!-- //404-section -->
	
		<!-- //news letter -->
		
		<!-- footer -->
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