<?php
ob_start();
include '../db.php ';
$name=$_SESSION['admin']['Hospital'];
$hid=$_SESSION['admin']['Id'];
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

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
		
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="home.php">Home</a><i class="fa fa-angle-right"></i>Doctors <i class="fa fa-angle-right"></i>Add Doctors</li>
            </ol>


<div class="grid-form1">
<h3>Add Staff</h3>	
  <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
                                                    <form class="form-horizontal" method ="post" action="addstaff_code.php">
								<div class="form-group">
									<label for="Title" class="col-sm-3 control-label">Hospital Name</label>
									<div class="col-sm-7">
                                                                             <input type="text" name="slthospital" class="form-control" value="<?php echo $name;?>" />
                                                                            
                                                                          
									</div>
									
								</div>
								<div class="form-group">
									<label for="Title" class="col-sm-3 control-label">Department</label>
									<div class="col-sm-7">
                                                                            <select name="sltdept" class="form-control" >
                                                                                <option>Choose department</option>
                                                                                <?php 
                                                                                $qs2=  mysqli_query($con, "select distinct(Department) from department order by Id desc");
                                                                                while ($r2=  mysqli_fetch_array($qs2))
                                                                                {
                                                                                ?>
                                                                                <option value="<?php echo $r2['Department'];?>"><?php echo $r2['Department'];?></option>
                                                                                <?php 
                                                                                }
                                                                                ?>
                                                                            </select>
									</div>
									
								</div>
                                                            <div class="form-group">
									<label for="Title" class="col-sm-3 control-label">Staff Name</label>
									<div class="col-sm-7">
                                                                            <input type="text" name="txtdoctor" class="form-control" value=""/>
									</div>
									
								</div>
                                                              <div class="form-group">
									<label for="Title" class="col-sm-3 control-label">Staff Description</label>
									<div class="col-sm-7">
                                                                            <textarea name="des" class="form-control"></textarea>
									</div>
									
								</div>
                                                             <div class="form-group">
									<label for="Title" class="col-sm-3 control-label">User Name</label>
									<div class="col-sm-7">
                                                                            <input type="text" name="txtuser" class="form-control" value=""/>
									</div>
									
								</div>
                                                        <div class="form-group">
									<label for="Title" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-7">
                                                                            <input type="password" name="txtpass" class="form-control" value=""/>
									</div>
									
								</div>
								<div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
                              <input type="hidden" name="slthos" value="<?php echo $hid;?>"/>
                            <input type="submit" name="s1" class="btn-primary btn" value="Save">
                            <input type="reset" name="r11" class="btn-danger btn" value="Reset">
				
			</div>
		</div>
	 </div>
							</form>
						</div>
					</div>
</div>



<div style="margin-left: 320px;">


<div class="w3l-table-info" style="margin-left: -320px;">
					  <h2>View Staff List</h2>
                                          
					    <table id="table">
						<thead>
						  <tr>
							<th>Id</th>
							<th>Hospital</th>
                                                        <th>Department</th>
                                                         <th>Doctor</th>
                                                         <th>Description</th>
							<th>Action</th>
                                             
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                  $qr="select * from staff where Hospital='$hid' order by Id desc";
                                                  $qr1=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=  mysqli_fetch_array($qr1))
                                                  {
                                                  ?>
                                                    <tr>
                                                        <td><?php echo $i;?></td>
                                                        <?php 
                                                        $hh=$r['Hospital'];
                                                        $qdd=  mysqli_query($con, "select *from hospial where Id='$hh'");
                                                        $r9=  mysqli_fetch_array($qdd);
                                                       ?>
                                                        <td><?php echo $r9['Hospital'];?></td>
                                                        <td><?php echo $r['Department'];?></td>
                                                        <td><?php echo $r['Doctor'];?></td>
                                                        
                                                        <td><?php echo $r['Des'];?></td>
                                                        <td><a href="delstaff.php?id=<?php echo $r['Id'];?>"><input type="button" name="btn" value="delete" onclick="alert('are you sure want to delete??')"></a></td>
                                                    </tr>
                                                    <?php
                                                 
                                                  $i++;
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
	 <p>© 2018 Prevention . All Rights Reserved | Design by  <a href="#" target="_blank">Prevention</a> </p>
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