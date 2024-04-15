<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $qr1="delete from registration where Id='$iid'";
            $qr2=mysql_query($qr1);
            header("location:appruval.php");
        }
ob_flush();
?>
