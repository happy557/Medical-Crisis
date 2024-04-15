<?php

ob_start();
include '../db.php';
$filename=$_FILES['img']['name'];
 $file_size=$_FILES['img']['size'];

$file_type=$_FILES['img']['type'];
$file_tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($file_tmp,"gallery/".$filename);
            $path="gallery/";
$filepath=$path.$filename;
   
$name=$_POST['txtname'];
$comment=$_POST['txtcomment'];
$qryy1="insert into testimonial(Image,Name,Comment)values('$filepath','$name','$comment')";
 $qry=mysql_query($qryy1);
   header("location:testimonial.php");
    ob_flush();
?>

