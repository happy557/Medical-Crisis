<?php
ob_start();
include '../db.php';
$slthos=  mysqli_real_escape_string($con,$_POST['slthos']);

$sltdept=  mysqli_real_escape_string($con,$_POST['sltdept']);
$txtdoctor=  mysqli_real_escape_string($con,$_POST['txtdoctor']);
$des=  mysqli_real_escape_string($con,$_POST['des']);
$txtuser=  mysqli_real_escape_string($con,$_POST['txtuser']);
$txtpass=  mysqli_real_escape_string($con,$_POST['txtpass']);
$qr="insert into staff(Hospital,Department,Doctor,Des,Username,Password)values('$slthos','$sltdept','$txtdoctor','$des','$txtuser','$txtpass')";
$qrr=  mysqli_query($con,$qr);
$qy="insert into login(Username,Password,Usertype,Status)values('$txtuser','$txtpass','staff','Active')";
    $qyy=  mysqli_query($con,$qy);
header("location:addstaff.php");
ob_flush();
?>