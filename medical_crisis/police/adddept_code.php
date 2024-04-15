<?php
ob_start();
include '../db.php';
$slthos=  mysqli_real_escape_string($con,$_POST['slthos']);

$txtdept=  mysqli_real_escape_string($con,$_POST['txtdept']);

$qr="insert into Department(Hid,Department)values('$slthos','$txtdept')";
$qrr=  mysqli_query($con,$qr);
header("location:adddept.php");
ob_flush();
?>