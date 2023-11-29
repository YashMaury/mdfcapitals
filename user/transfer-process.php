<?php
session_start();
include('../admin/inc/function.php');
if(!isset($_SESSION['mid']))
{
redirect('index.php');
}

if($_SESSION['mid'])
{

//-------------------------//
if(trim($_POST['amount'])>0)
{
$userid=getMember($conn,$_SESSION['mid'],'userid');
if($userid!=trim($_POST['userid']))
{
$avafund=getAvailableWallet($conn,$userid);

$minimum='0';
if(trim($_POST['amount'])>=$minimum)
{
$chaper='0';

$charge=(trim($_POST['amount'])*$chaper)/100;
$balance=(trim($_POST['amount'])-$charge);

$sql1="SELECT * FROM `imaksoft_member` WHERE `userid`='".trim($_POST['userid'])."'";
$res1=query($conn,$sql1);
$num1=numrows($res1);
if($num1>0)
{
if($avafund>=trim($_POST['amount']))
{
$sql="INSERT INTO `imaksoft_transfer_fund_others`(`userid`,`toid`,`total`,`charge`,`balance`,`remarks`,`date`) values('".$userid."','".trim($_POST['userid'])."','".trim($_POST['amount'])."','".$charge."','".$balance."','".trim(addslashes($_POST['remarks']))."','".date('Y-m-d')."')";
$res=query($conn,$sql);

redirect('transfer.php?case=add&m=1&page='.$_REQUEST['page']);
}else{
redirect('transfer.php?case=add&e=2&page='.$_REQUEST['page']);
}
}else{
redirect('transfer.php?case=add&e=1&page='.$_REQUEST['page']);
}
//------------------------------//
}else{
redirect('transfer.php?case=add&e=6&page='.$_REQUEST['page']);
}
}else{
redirect('transfer.php?case=add&e=4&page='.$_REQUEST['page']);
}
}else{
redirect('transfer.php?case=add&e=3&page='.$_REQUEST['page']);
}


}
?> 