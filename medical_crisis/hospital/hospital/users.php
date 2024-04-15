<?php 
ob_start();
include '../../db.php';
?>
<!DOCTYPE html>
<head>
<title>Registration / Login Kovid brigade</title>
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
						<h2>Sign Up As</h2>
					</div>
					
					<div class="forms-grids">
						<div class="forms3">
						<div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
                                                                            <h3>Hospital :</h3><a class="btn btn-primary" href="index.php" style="padding: 0.5em 0.2em;
    width: 58%;float: right;
    margin-top: -53px;text-align: center;">GO</a>
									</div>
									
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
                                                                                    <h3>User :</h3><a class="btn btn-primary" href="registration.php" style="padding: 0.5em 0.2em;
    width: 58%;float: right;
    margin-top: -53px;text-align: center;">GO</a>
									</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="clear"> </div>
                                                <div class="w3agile-validation w3ls-validation">
							<div class="panel panel-widget agile-validation register-form">
								<div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
									<div class="input-info">
                                                                            <h3>Ambulance :</h3><a class="btn btn-primary" href="ambulance.php" style="padding: 0.5em 0.2em;
    width: 58%;float: right;
    margin-top: -53px;text-align: center;">GO</a>
									</div>
									
								</div>
							</div>
							
							<div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
                                                                                    <h3>Police Aid :</h3><a class="btn btn-primary" href="police.php" style="padding: 0.5em 0.2em;
    width: 58%;float: right;
    margin-top: -53px;text-align: center;">GO</a>
									</div>
										
									</div>
								</div>
							</div>
                                                    <div class="panel panel-widget agile-validation">
								<div class="validation-grids validation-grids-right login-form">
									<div class="widget-shadow login-form-shadow" data-example-id="basic-forms"> 
										<div class="input-info">
                                                                                    <h3>Hospital Staff :</h3><a class="btn btn-primary" href="staff.php" style="padding: 0.5em 0.2em;
    width: 58%;float: right;
    margin-top: -53px;text-align: center;">GO</a>
									</div>
										
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
				<!-- //validation -->
			</div>
		</div><br/><br/>
                <br/><br/>
                <br/><br/><br/><br/>
                <br/><br/>
                <br/><br/>
                
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
