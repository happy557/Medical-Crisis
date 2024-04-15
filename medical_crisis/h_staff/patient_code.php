<?php
ob_start();
include '../db.php';
$txtname=  mysqli_real_escape_string($con,$_POST['txtname']);

$sltdept=  mysqli_real_escape_string($con,$_POST['sltdept']);
$txtcont=  mysqli_real_escape_string($con,$_POST['txtcont']);
$des=  mysqli_real_escape_string($con,$_POST['des']);
$txtcity=  mysqli_real_escape_string($con,$_POST['txtcity']);
$district=  mysqli_real_escape_string($con,$_POST['district']);

$hos=  mysqli_real_escape_string($con,$_POST['hos']);

$qr="insert into patient_reg(Hospital,Department,Name,Address,Contact,City,District,Status)values('$hos','$sltdept','$txtname','$des','$txtcont','$txtcity','$district','Admitted')";
$qrr=  mysqli_query($con,$qr);
header("location:patient_registration.php");
ob_flush();
?>