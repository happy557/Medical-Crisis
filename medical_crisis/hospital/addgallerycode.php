<?php

ob_start();
include '../db.php';

$filename=$_FILES['img']['name'];
 $file_size=$_FILES['img']['size'];

$file_type=$_FILES['img']['type'];
$file_tmp=$_FILES['img']['tmp_name'];
$file_ext= strtolower(end(explode('.',$_FILES['img']['name'] )));
$extensions= array("jpeg","jpg","png");
if(in_array($file_ext, $extensions)==false)
{
    $error[]="extension not allowed, please choose a jpeg or png file";
}
if($file_size > 2097152 || $file_size=='0')
{
    $error[]="file size must be exactly 2mb";
}
if(empty($error)==true)
{
    //echo $file_size;
    move_uploaded_file($file_tmp,"gallery/".$filename);
            $path="gallery/";
$filepath=$path.$filename;
   
    //echo "success";
}
 else {
print_r($error);    
}
$caption=$_POST['txtcaption'];
$qr ="insert into galleryadd(Image,Caption)values('$filepath','$caption')";
    $qry=mysql_query($qr);
    header("location:addgallery.php");
    ob_flush();
?>