<?php
session_start(); 
include('inc/function.php');
if($_SESSION['sid']=='')
{
redirect('index.php');
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
if($_SESSION['sid'])
{
$sql="SELECT * FROM `imaksoft_admin` WHERE `id`='".trim(mysqli_real_escape_string($conn,$_SESSION['sid']))."' AND `password`='".base64_encode(trim(mysqli_real_escape_string($conn,$_POST['current'])))."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
if($_POST['newpass']==$_POST['conpass'])
{
$sql="UPDATE `imaksoft_admin` SET `password`='".base64_encode(trim(mysqli_real_escape_string($conn,$_POST['conpass'])))."' WHERE `id`='".trim(mysqli_real_escape_string($conn,$_SESSION['sid']))."'";
$res=query($conn,$sql);
redirect('password.php?n=2');
}else{
redirect('password.php?p=3');
}
}else{
redirect('password.php?m=1');
}
}
}
?>