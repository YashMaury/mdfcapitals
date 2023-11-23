<?php 
session_start();
include('administrator/includes/function.php');

if($_SERVER['REQUEST_METHOD']=='POST')
{
$sql="SELECT * FROM `cw_member` WHERE `userid`='".trim($_POST['userid'])."' AND `password`='".base64_encode(trim($_POST['password']))."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
$_SESSION['mid']=$_POST['userid'];

redirect('member/dashboard.php');
}else{
redirect('login.php?e=1');
}
}
?>