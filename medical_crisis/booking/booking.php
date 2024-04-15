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
    th, td {
  padding: 15px;
}
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
                                    <div class="front">AVAILABILITY OF TIME</div>					
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
                                  
                                     </form><br/>
                                     <center>
                                    <table border="1" >
                                        <tr><th>Time</th></tr>
                                   <?php 
                                   if (isset($_POST['s1']))
                                                        {
                                        $tdate= mysqli_real_escape_string($con, $_POST['txttody']);
                                         $q= "SELECT t1.Rtime FROM replytime t1
LEFT JOIN booking t2 ON t2.Reply = t1.Rtime and Date='$tdate'
WHERE  t2.Reply IS NULL";
                                                        }
 else {
     $q="select *from replytime";
 
                                     }
                                      $asd1=  mysqli_query($con, $q);
                                    
                                      while ($r1=  mysqli_fetch_array($asd1))
                                                             {                      
                                   ?>
                                        <tr><td id="a3"><?php echo $r1['Rtime'];?><td></tr>
                                        <?php 
                                                             }
                                        ?>
                                 
                                     </table>
                                     </center>
                                    
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
