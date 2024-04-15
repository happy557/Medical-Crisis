<?php
ob_start();
include '../db.php';
$slthos=  mysqli_real_escape_string($con,$_POST['slthos']);

$sltdept=  mysqli_real_escape_string($con,$_POST['sltdept']);
$txtdoctor=  mysqli_real_escape_string($con,$_POST['txtdoctor']);
$des=  mysqli_real_escape_string($con,$_POST['des']);
$qr="insert into doctor(Hospital,Department,Doctor,Des)values('$slthos','$sltdept','$txtdoctor','$des')";
$qrr=  mysqli_query($con,$qr);
header("location:adddoctor.php");
ob_flush();
?>