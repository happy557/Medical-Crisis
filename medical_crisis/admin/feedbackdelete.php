<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from feedbck where Id='$iid'";
            $qr2=mysql_query($qr1);
            header("location:feedback.php");
        }
ob_flush();
?>
