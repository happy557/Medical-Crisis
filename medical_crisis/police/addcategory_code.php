<?php
ob_start();
include '../db.php';
$category=$_POST['category'];
;


$qr="insert into category(Category)values('$category')";
$qrr=  mysql_query($qr);
header("location:addcategory.php");
ob_flush();
?>