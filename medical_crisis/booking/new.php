<?php 
ob_start();
include '../db.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Prevention</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
<style>
    #a1
    {
        background-color: red;
    }
    #a2
    {
        background-color: green;
    }
    #a3
    {
        background-color: gray;
    }
</style>
</head>
<body>
<div class="content">
	<h1>Booking Widget</h1>
	<div class="main">
		<h2>Check Availability Of Doctor's Appointment</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
                    
			<div class="">
                            <form method="post" action="">
                                <table   style="border: 1px solid #000;">
                                     <form method="post" action="">
                                    <tr>
                                        <td>Choose date</td>
                                        <td><input type="date" name="txttody" value=""  /></td>
                                        <td><input type="submit" name="s1" value="SEARCH"  /></td>
                                    </tr>
                                     </form>
                                    <?php 
                                                        if (isset($_POST['s1']))
                                                        {
                                                            $tdate= mysqli_real_escape_string($con, $_POST['txttody']);
                                                             $asd=  mysqli_query($con, "select *from booking where Date='$tdate'");
                                         while ($r1=  mysqli_fetch_array($asd))
                                        {
                                    $tt=$r1['Reply'];
                                   
                                echo $tt;
                                    ?>
                                    <tr>
                                        <?php  
                                        if($tt=='10:00AM')
                                            
                                        {
                                            ?>
                                        <td colspan="2" id="a1">10:00AM-10:30AM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a3">10:00AM-10:30AM</td>
                                        <?php 
                                        }
                                        ?>
                                    </tr>
                                    <tr>
                                        <?php 
                                        
                                        if($tt=='10:30AM')
                                        {
                                        ?>
                                     <td colspan="2" id="a1">10:30AM-11:00AM</td>
                                     <?php 
                                        }
                                        else
                                        {
                                        ?>
                                      <td colspan="2" id="a3">10:30AM-11:00AM</td>
                                      <?php 
                                        }
                                     ?>
                                    </tr>
                                    <tr>
                                      <?php 
                                        if($tt=='11:00AM')
                                        {
                                        ?>
                                     
                                      <td colspan="2" id="a3">11:00AM-11:30AM</td>
                                      <?php 
                                        }
                                        else
                                        {
                                        ?>
                                       <td colspan="2" id="a1">11:00AM-11:30AM</td>
                                       <?php 
                                        }
                                       ?>
                                    </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='11:30AM')
                                        {
                                        ?>
                                       <td colspan="2" id="a3">11:30AM-12:00PM</td>
                                       <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1">11:30AM-12:00PM</td>
                                        <?php 
                                        }
                                       ?>
                                    </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='12:00PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">12:00PM-12:30PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                         <td colspan="2" id="a1">12:00PM-12:30PM</td>
                                         <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='12:30PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3"> 12:30PM-01:00PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1"> 12:30PM-01:00PM</td>
                                        <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='01:00PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">01:00PM-01:30PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1">01:00PM-01:30PM</td>
                                        <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='01:30PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">01:30PM-02:00PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1"> 01:30PM-02:00PM</td>
                                        <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='02:00PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">02:00PM-02:30PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1">02:00PM-02:30PM</td>
                                        <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='02:30PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">02:30PM-03:00PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1"> 02:30PM-03:00PM</td>
                                        <?php 
                                        }
                                       ?>
                                        </tr>
                                    <tr>
                                         <?php 
                                        if($tt=='03:00PM')
                                        {
                                        ?>
                                        <td colspan="2" id="a3">03:00PM-03:30PM</td>
                                        <?php 
                                        }
                                        else
                                        {
                                        ?>
                                        <td colspan="2" id="a1">03:00PM-03:30PM</td>
                                        <?php 
                                        }
                                       ?>
                                    </tr>
                                    <?php 
                                     }
                                       }
                                    ?>
                                    
                                </table>
                                
                           
	    </div>

		
	</div>
	<p class="copy_rights">&copy; 2021 Prevention. All Rights Reserved | Design by  <a href="#" target="_blank"> Prevention</a></p>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php 
ob_flush();
?>
