<?php
ob_start();
include '../db.php';
@session_start();
if(@$_REQUEST['submit']!=="")
{
 $username=$_REQUEST['txtname'];  
$password=$_REQUEST['txtpassword'];
$sel_ad=mysqli_query($con,"select * from login where Username='$username' && Password='$password'");

$num=  mysqli_num_rows($sel_ad);
$row_ad=  mysqli_fetch_array($sel_ad);
//if($username==$row_ad['Username'] && $password==$row_ad['Passsword'])
//{
 if($num>=1)
{   

    $_SESSION['admin']=$row_ad;
    header("location:home.php");
}
 


//$q1=  mysql_query("select *from login where Username='$uname' and Password='$pass'");
//$r=  mysql_fetch_array($q1);

//
//if ($r['Usertype']=='admin') {
//header("location:home.php");
//}
elseif ($row_ad['Usertype']=='employee') {
header("location:admin/index.php ");
}
 elseif($row_ad['Usertype']=='') {
    echo 'Only registered users can enter this site!'; 
}
else{
echo 'After Verification U can Enter..!'; 
}
}
ob_flush();
?>
