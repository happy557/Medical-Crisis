<?php
include '../db.php';
ob_start();

//$iid=$_GET[id];
//$status=$_GET['sts'];
//$iidd=$_GET[idd];
//$stts=$_GET['stts'];
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$status=$_GET['sts'];
 
if($status=='Inactive')
{
$qy="update testimonial set Status='Active' where Id='$iid' and Status='$status'";
    $qyy=mysql_query($qy);
    header("location:testimonial.php?id='$iid'");
}

    }
    if(isset($_GET['idd']))
    {
    
    
 $iidd=$_GET['idd'];
$stts=$_GET['stts'];

if ($stts=='Active')
{
    $qy1="update testimonial set Status='Inactive' where Id='$iidd' and Status='$stts'";
    $qyy1=mysql_query($qy1);
   
header("location:testimonial.php?id='$iidd'");
 }
    }
ob_flush();
?>
