<?php
ob_start();
include '../db.php';



$des=  mysqli_real_escape_string($con,$_POST['des']);

$hos=  mysqli_real_escape_string($con,$_POST['hos']);

$qr="insert into facilities(Hospital,Facilities)values('$hos','$des')";
$qrr=  mysqli_query($con,$qr);
header("location:facilities.php");
ob_flush();
?>