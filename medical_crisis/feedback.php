<?php 
ob_start();
include './db.php';
$name=$_SESSION['admin']['Username'];
$qrt=  mysqli_query($con, "select *from patient where Email='$name'");
$r1=  mysqli_fetch_array($qrt);
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
<?php 
        include './inc/header.php';
        ?>
	<!-- //header -->
		<!-- login-section -->
		<section class="login-page">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index.html">Prevention <span>is better than cure.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Post Feedback</h2>
						<h6>post Feedback here</h6>
					</div>
				</div>
			</div>
			<!--- login ---->
			<!-- login -->
			<div class="login">
				<div class="container">
					<h3>Post Feedback Here</h3>
					<div class="login-form-grids">
                                            <form method="post" action="" enctype="multipart/form-data">
                                                                    <label class="test-info">Name <span>*</span></label>
                                                                    <input type="text" placeholder="Enter Username" name="txtname" required=" " >
									<label class="test-info">Email <span>*</span></label>
                                                                        <input type="text" placeholder="" name="mail" value="<?php echo $r1['Email'];?>" required=" " readonly="" >
									<div class="clearfix"></div>
                                                                      
                                                                        	
									<label class="test-info">Feedback <span>*</span></label>
                                                                        <input type="text" name="acdes" placeholder="Feedback" required=" " >
									<div class="clearfix"></div>
									
                                                                        <input type="submit" name="sub" value="Send">
								</form>
                                            <?php 
                                            if(isset($_POST['sub']))
                                            {
                                                $name=$_POST['txtname'];
$mail=$_POST['mail'];

$acdes=$_POST['acdes'];

  
$qr ="insert into feedback(Name,Email,Ac_des)values('$name','$mail','$acdes')";
    $qry=mysqli_query($con,$qr);
    echo '<script>alert("successfully send details...")</script>';
                                            }
                                            ?>
							</div>
						</div>
					</div>
				<!-- //login -->
			<!--- /login ---->
		</section>
		
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