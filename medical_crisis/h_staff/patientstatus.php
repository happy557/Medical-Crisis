<?php
include '../db.php';
ob_start();

    
    $iid=$_GET['id'];

$qy="update patient_reg set Status='Discharge' where Id='$iid'";
    $qyy=mysqli_query($con,$qy);
    header("location:patient_registration.php?id='$iid'");

ob_flush();
?>
