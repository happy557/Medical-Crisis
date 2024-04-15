<?php
ob_start();
include '../db.php';
$txthos=  mysqli_real_escape_string($con,$_POST['txthos']);

$des=  mysqli_real_escape_string($con,$_POST['des']);
$txtuser=  mysqli_real_escape_string($con,$_POST['txtuser']);
$txtpass=  mysqli_real_escape_string($con,$_POST['txtpass']);
$qr="insert into hospial(Hospital,Des,Username,Password)values('$txthos','$des','$txtuser','$txtpass')";
$qrr=  mysqli_query($con,$qr);
$qy="insert into login(Username,Password,Usertype,Status)values('$txtuser','$txtpass','hospital','Active')";
    $qyy=  mysqli_query($con,$qy);
header("location:addhospital.php");
ob_flush();
?>