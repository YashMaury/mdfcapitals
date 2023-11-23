<?php
session_start();
include('../admin/inc/function.php');
if(!isset($_SESSION['mid']))
{
redirect('index');
}


if($_SERVER['REQUEST_METHOD']=='POST')
{
if($_SESSION['mid'])
{
if($_REQUEST['p']=='ps')
{
$sql="SELECT * FROM `imaksoft_member` WHERE `id`='".trim($_SESSION['mid'])."' AND `password`='".base64_encode($_POST['current'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
if($_POST['newpass']==$_POST['conpass'])
{
$sql="UPDATE `imaksoft_member` SET `password`='".base64_encode($_POST['newpass'])."' WHERE `id`='".$_SESSION['mid']."'";
$res=query($conn,$sql);

redirect('det?p=ps&updated=2');
}else{
redirect('det?p=ps&invalid=3');
}

}else{
redirect('det?p=ps&invalid=1');
}
}
}
}

if($_REQUEST['p']=='s')
{
 $sql="INSERT INTO `imaksoft_support` (`userid`,`type`,`subject`,`message`,`date`,`status`) VALUES ('".getMember($conn,$_SESSION['mid'],'userid')."','".$_POST['type']."','".addslashes($_POST['subject'])."','".addslashes(trim($_POST['description']))."','".date('Y-m-d')."','P')";
 $res=query($conn,$sql);

redirect('reqa?p=s&sent=1');
}


if($_REQUEST['p']=='p')
{
$sql="UPDATE `imaksoft_member` SET `name`='".trim($_POST['name'])."',`email`='".trim($_POST['email'])."',`phone`='".trim($_POST['phone'])."',`address`='".trim($_POST['address'])."',`accname`='".trim($_POST['accname'])."',`accno`='".trim($_POST['accno'])."',`ifscode`='".trim($_POST['ifscode'])."',`bname`='".trim($_POST['bname'])."',`branch`='".trim($_POST['branch'])."',`bitcoin`='".trim($_POST['bitcoin'])."',`upi`='".trim($_POST['upi'])."' WHERE `id`='".trim($_SESSION['mid'])."'";
$res=query($conn,$sql);

redirect('det?p=p&m=1');
}


?>