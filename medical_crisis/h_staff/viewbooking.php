<?php
ob_start();
include '../db.php ';

?>
<!DOCTYPE HTML>

<html>
<head>
<title>Admin/Prevention</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<script>
function selecttimealloction(val)
{
    var tid=$('#tid').val();
    //alert(tid);
	$("#a1").load('bookingreply.php?id='+tid +'&msg='+encodeURI(val));
}
</script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile" style="background:#008DE7;"> 
								<h1><a href="home.php">Prevention</a></h1>
							</div>

							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Registration <i class="fa fa-angle-right"></i>View Details</li>
            </ol>






<div style="margin-left: 320px;">


<div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
					  <h2>View Booking Details</h2>
                                          
                                          <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
							<th>Name</th>
							<th>Mobile</th>
							
							<th>Gender</th>
<!--                                                        <th>Phone</th>-->
                                                         <th>Age</th>
                                                        <th>Address</th>
                                                        <th>Pin</th>
                                                        <th>Email</th>
                                                         <th>Date</th>
                                                       
                                                          <th>E-Tocken</th>
                                                            <th>Time</th>
                                                         <th>Reply</th>
                                                        <th>Status</th>
                                                       
                                                        <th>Actions</th>
                                                        <th></th>
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                  $qr="select  * from booking order by Id desc";
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                  ?>
                                                    <tr>
                                                         
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $r['Name'];?></td>
                                                        <td><?php echo $r['Mobile'];?></td>
                                                        
                                                         <td><?php echo $r['Gender'];?></td>
<!--                                                          <td></td>-->
                                                           <td><?php echo $r['Age'];?></td>
                                                            <td><?php echo $r['Address'];?></td>
                                                             <td><?php echo $r['Pin'];?></td>
                                                             <td><?php echo $r['Email'];?></td>
                                                             <td><?php echo $r['Date'];?></td>
                                                              <td><?php echo $r['Etocken'];?></td>
                                                             <td><?php echo $r['Reply'];?></td>
                                                             <td><form method="post" action="bookingreply.php">
                                                                
                                                                     <select id="tallo" class="form-control"  name="tallo">
                                                                     <option>Time Allocation</option>
                                                                     <?php 
                                                                     $d=$r['Date'];
 $qsc=  mysqli_query($con, "SELECT t1.Rtime FROM replytime t1
LEFT JOIN booking t2 ON t2.Reply = t1.Rtime and Date='$d'
WHERE  t2.Reply IS NULL");

                                                                     while ($r55=mysqli_fetch_array($qsc))
                                                                     {
                                                                     ?>
                                                                     <option value="<?php echo $r55['Rtime'];?>"><?php echo $r55['Rtime'];?></option>
                                                                     <?php 
                                                                     }
                                                                     ?>
                                                                 </select>
                                                                      <input type="hidden" id="tid" name="tid" value="<?php echo $r['Id'];?>"/>
                                                                      <input type="submit" class="btn-danger" name="sett" value="SET TIME"/>
                                                                 </form>
                                                             </td>
                                                              <td><?php echo $r['Status'];?></td>
                                                         
                                                              
                                                              
                                                               <?php

                                                         if($r['Status']=='Inactive')
                                                         {
                                                         ?>
                                                         <td><a href="useractive.php?id=<?php echo $r['Id'];?>&sts=<?php echo $r['Status'];?>">Active</a></td>
                                                         <?php
                                                         }
                                                         elseif ($r['Status']=='Active') {
                                                         ?>
                                                     <td><a href="useractive.php?idd=<?php echo $r['Id'];?>&&stts=<?php echo $r['Status'];?>">Inactive</a></td>
                                                       
                                                         <?php
                                                         }
                                                         ?>
                                                              
                                                              
<!--                                                    <td><input type="hidden" name="eid" value="<?php echo $r['Id'];?>"/>
                        <input type="submit" name="s1" value="Inactive">
                       <input type="submit" name="s2" value="Active"></td>-->
                                                     <td><a href="delbooking.php?id=<?php echo $r['Id'];?>"><input type="button" name="btn" value="delete" onclick="alert('are you sure want to delete??')"> </a></td>
                             
                            </td>
                                                         
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
                                                   }
                                                    ?>
						
               
                <?php
if(isset($_POST['s1']))
{
   $iid=$_POST['eid'];
  
    $qy="update login set Status='Inactive' where Id='$iid'";
    $qyy=mysql_query($qy);
    header("location:viewuserreg.php?id='$iid'");
}
if(isset($_POST['s2']))
{
    $iiid=$_POST['eid'];
    $qy1="update login set Status='Active' where Id='$iiid'";
    $qyy1=mysql_query($qy1);
    header("location:viewuserreg.php?id='$iid'");
}
?>
                                              </tbody>  
                                                
					  </table>
    </div>
    
    
    
    
    
    



<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
</br>
<div class="copyrights" style="margin-left: -320px;">
	 <p>© 2021 Infotech . All Rights Reserved | Design by  <a href="#" target="_blank">Prevention</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<?php
include './adminsidebar.php';
                                ?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>
<?php
                             ob_flush();


?>
