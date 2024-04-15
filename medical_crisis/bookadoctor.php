<?php 
ob_start();
include './db.php';
$id=$_GET['id'];
$qdd=  mysqli_query($con, "select *from doctor where Hospital='$id'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Prevention</title><link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
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
                <style>
                    input[type="number"] , input[type="date"] , input[type="email"] {
    padding: 10px 10px 10px 10px;
    width: 70%;
    margin-bottom: 25px;
    border: 1px solid #8F44AD;
    outline: none;
    color: #555;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    float: left;
                    }
                </style>
		<!-- //for smooth scrolling -->
</head>
<body>
	<!-- header -->
	<?php 
        include './inc/header.php';
        ?>
	<!-- //header -->
		<!-- Book-a-test-section -->
		<section class="book-a-test">
			<div class="inner-banner demo-2 text-center">
				<header class="logo">
					<h1><a class="cd-logo link link--takiri" href="index.php">Prevention <span>is better than cure.</span></a></h1>
				</header>
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Book Your Doctor Now</h2>
						<h6>Book Your Doctor Now</h6>
					</div>
				</div>
			</div>
			<!--- Book-a-test ---->
			<div class="test-booking">
				<div class="container">
					<h3 class="last-updated">Book Your Doctor Now</h3>
					<div class="text-booking-form">
						<div class="col-md-6 text-booking-form-left">
                                                    <form method="post" action="">
								<label>Name <span>*</span></label>
                                                                <input type="text" name="txtname" class="phone" placeholder="">
									<div class="clearfix"></div>
								<label>Mobile Number<span>*</span></label>
                                                                <input type="number" name="txtmob" class="phone" placeholder="">
									<div class="clearfix"></div>
								<label>Gender <span>*</span></label>
                                                                <select name="gender" class="">
									  <option>Gender</option>
                                                                          <option value="Male">Male</option>
                                                                          <option value="Female">Female</option>
									</select>
									<div class="clearfix"></div>
								<label>Age<span>*</span></label>
                                                                <input type="text" name="age" class="phone" placeholder="">
									<div class="clearfix"></div>
								<label>Address <span>*</span></label>
                                                                <textarea class="mess" name="addr" placeholder="Address"></textarea>
									<div class="clearfix"></div>
								<label>Pin<span>*</span></label>
                                                                <input type="text" name="pin" class="phone" placeholder="">
									<div class="clearfix"></div>								
								<label>Email<span>*</span></label>
                                                                <input type="email" name="mail" class="phone" placeholder="">
									<div class="clearfix"></div>
								<label>Date<span>*</span></label>
                                                                <input type="date" name="bdate" class="phone" placeholder="">
									<div class="clearfix"></div>
									<div class="clearfix"></div>
									<div class="c-lang">
									<p class="update"><input type="checkbox" id="c1" name="cc">Keep me updated on the latest offers and much more	</p>							</div>
									<div class="book-submit">
                                                                            <input type="submit" name="s1" value="Book Now">
									</div>
							</form>
                                                    <?php 
                                                    if(isset($_POST['s1']))
                                                    {
                                                        $name= mysqli_real_escape_string($con,$_POST['txtname']);
                                                        $txtmob= mysqli_real_escape_string($con,$_POST['txtmob']);
                                                        $gender= mysqli_real_escape_string($con,$_POST['gender']);
                                                        $age= mysqli_real_escape_string($con,$_POST['age']);
                                                        $addr= mysqli_real_escape_string($con,$_POST['addr']);
                                                        $pin= mysqli_real_escape_string($con,$_POST['pin']);
                                                        $mail= mysqli_real_escape_string($con,$_POST['mail']);
                                                         $bdate= mysqli_real_escape_string($con,$_POST['bdate']);
                                                        $qsc=  mysqli_query($con, "insert into booking(Name,Mobile,Gender,Age,Address,Pin,Email,Date,Status) values ('$name','$txtmob','$gender','$age','$addr','$pin','$mail','$bdate','Booked')");
                                                   $qv=  mysqli_query($con, "select MAX(Id) from booking");
                                                   $q1=  mysqli_fetch_array($qv);
                                                   $vv=$q1['0'];
                                                        $eid='EPT'.$name.$vv;
                                                        $qscc=  mysqli_query($con, "update booking set Etocken='$eid' where Id='$vv'");
                                                  
                                                        echo '<script type="text/javascript">
                       alert(" Your Booking Successfully Registered..Please Keep Your E-Tocken .'.$eid.'");
            window.location="index.php";</script>';
                                                        
                                                    }
                                                    ?>
						</div>
						<div class="col-md-6 text-booking-form-right">
							<img src="images/bookshow.jpg" alt="" />
						</div>
						<div class="clearfix"></div>
					</div>
					
					
				</div>
			</div>
			<!--- /Book-a-test ---->
		</section>
		<!-- //Book-a-test-section -->
				
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
<?php 
ob_flush();
?>