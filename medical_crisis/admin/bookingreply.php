<?php
ob_start();
include '../db.php ';
$id = $_REQUEST['tid'];
$message = $_REQUEST['tallo'];
$qa=  mysqli_query($con, "select *from booking where Id='$id'");
$r3=  mysqli_fetch_array($qa);
$email=$r3['Email'];
$Reply=$r3['Reply'];
$name=$r3['Name'];
 $query = "update booking set Reply='$message' where Id='$id'";
//echo($query);
$q=mysqli_query($con,$query);
$datee=date('d/m/Y');
//require_once "Mail.php";



echo '<script type="text/javascript">
                       alert(" Replied Successfully..");
            window.location="viewbooking.php";</script>';

?>