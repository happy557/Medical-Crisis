<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            $path=$_GET['path'];
            $qr1="delete from testimonial where Id='$iid' and Image='$path'";
            
            $qr2=mysql_query($qr1);
            unlink($path);
            header("location:testimonial.php");
        }
ob_flush();
?>
