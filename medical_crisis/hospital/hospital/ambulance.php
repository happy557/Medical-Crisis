<?php 
ob_start();
include '../../db.php';
?>
<!DOCTYPE html>
<head>
<title>Registration / Login </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Registration / Login form Responsive Widget, Login forms,Flat Pricing tables,Flat Drop downs  Sign up Web forms, Login sign up Responsive web Forms," />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS --><!--
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">-->
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body class="dashboard-page">
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>registration / login form</h2>
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
                                                                    <?php 
                                                                    if(isset($_GET['s']))
                                    {
                                        ?>
                                    <marquee scroll aamount="1">your registration saved successfully..."</marquee>
                                      <?php
                                      }
                                    if(isset($_GET['p']))
                                    {
                                        ?>
                                    <p><span style="color: red;">Username Already Exist,Please Choose Another Username</span></p>
                                      <?php
                                      }
                                    ?>
                                                                    
									<div class="input-info">
										<h3>Register Form :</h3>
									</div>
									<div class="form-body form-body-info">
										<form  action="#" method="post">
                                                                                 
                                                                                   
                                                                                    <div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="phone" placeholder="Contact Number" required="">
											</div>
                                                                                     <div class="form-group valid-form">
                                                                                         <select name="district" class="form-control" id="inputName"  style="color: #000;">
                                                                                             <option>Select District</option>
                                                                                             <option value="Trivandrum">Trivandrum</option>
                                                                                             <option value="Kollam">Kollam</option>
                                                                                             <option value="Pathanamthitta">Pathanamthitta</option>
                                                                                              <option value="Alappuzha">Alappuzha</option>
                                                                                             <option value="Kottayam">Kottayam</option>
                                                                                             <option value="Idukki">Idukki</option>
                                                                                              <option value="Ernakulam">Ernakulam</option>
                                                                                             <option value="Thrissur">Thrissur</option>
                                                                                             <option value="Palakkadu">Palakkadu</option>
                                                                                              <option value="Malappuram">Malappuram</option>
                                                                                             <option value="Kozhikode">Kozhikode</option>
                                                                                             <option value="Wayanad">Wayanad</option>
                                                                                              <option value="Kasargod">Kasargod</option>
                                                                                            
                                                                                         </select>
												</div>
                                                                                    <div class="form-group valid-form">
												<input type="text" class="form-control" id="inputName" name="city" placeholder="Aadhar" required="">
											</div>
                                                                                    <div class="form-group has-feedback">
												<input autocomplete="off" readonly 
onfocus="this.removeAttribute('readonly');" type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
												<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												
											</div>
											  <div class="form-group valid-form">
                                                                                              <input type="password" class="form-control" id="inputName" name="password" placeholder="password" required="">
											</div>
											
										
											<div class="form-group">
												<div class="checkbox">
													<label>
														<input type="checkbox" id="terms" data-error="Before you wreck yourself" required="">
														I have read and accept terms of use.
													</label>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="form-group">
                                                                                            <input type="submit" name="sub" class="btn btn-primary" value="Submit" />
											</div>
										</form>
                                                                            <?php 
                                                                            if(isset($_POST['sub']))
                                                                            {
                                                                    
                                                                                $phone=$_POST['phone'];
                                                                                $district=$_POST['district'];
                                                                       
                                                                                $city=$_POST['city'];
                                                                                $Email=$_POST['Email'];
                                                                           $password=$_POST['password'];
                                                                               
                                                                                $ucheck="select Username from login where Username='$Email'";
                                                                                $uchk=mysqli_query($con,$ucheck);
                                                                                $ucount=mysqli_num_rows($uchk);
                                                                               if($ucount!=0)
                                                                                {
                                                                             //      echo "Username already exists";
                                                                                    header("location:index.php?p=1");
                                                                                }
                                                                              else {
                                                                             $q="insert into ambulance(Conatct,District,Aadhaar,Email,Status,Usertype,Password)values('$phone','$district','$city','$Email','Active','Ambulance','$password')";
                                                                             $qr=  mysqli_query($con,$q);
                                                                                $qy="insert into login(Username,Password,Usertype,Status)values('$Email','$password','Ambulance','Active')";
                                                                                        $qyy=  mysqli_query($con,$qy);
                                                                              header("location:ambulance.php?s=1");
                                                                              }
                                                                            }
                                                                            ?>
                                                                            
									</div>
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
											<h3>Login form :</h3>
										</div>
										<div class="form-body form-body-info">
											<form  action="#" method="post">
												<div class="form-group has-feedback">
													<input type="email" name="username" class="form-control" readonly 
onfocus="this.removeAttribute('readonly');"  placeholder="Enter Your Email" data-error="Bruh, that email address is invalid" required="">
													<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
												</div>
												<div class="form-group">
													<input type="text"  data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword1" name="Password" placeholder="Enter Your Aadhar Number" required="">
												</div>
												<div class="bottom">
													<div class="form-group">
														<div class="checkbox">
															<label>
																<input type="checkbox" id="terms1" data-error="Before you wreck yourself" required="">
																Remember me
															</label>
															<div class="help-block with-errors"></div>
														</div>
													</div>
													<div class="form-group">
                                                                                                            <input type="submit" name="login" class="btn btn-primary" value="Login"/>
													</div>
													<div class="clearfix"> </div>
												</div>
											</form>
                                                                                    <?php 
                                                                                    if(isset($_POST['login']))
                                                                                    {
                                                                                        $username=  mysqli_real_escape_string($con,$_POST['username']);
                                                                                        $Password=  mysqli_real_escape_string($con,$_POST['Password']);
                                                                                        $qvb= mysqli_query($con,"select *from login where Username='$username' and Password='$Password'");
                                                                                        $r9=  mysqli_fetch_array($qvb);
                                                                                        if($r9['Usertype']=='Ambulance' and $r9['Status']=='Active')
                                                                                        {
                                                                                            $_SESSION['admin']=$r9;
                                                                                            header("location:../../index.php");
                                                                                        }
                                                                                    }
                                                                                    ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div>
		<!-- footer -->
		<div class="footer">
			<p>© 2021 Prevention . All Rights Reserved . Design by <a href="#" target="_blank">Prevention</a></p>
                </div>
		<!-- //footer -->
		<!-- input-forms -->
		
		
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
</body>
</html>
