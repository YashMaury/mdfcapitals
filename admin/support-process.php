<?php
session_start();
include('inc/function.php');
if(!isset($_SESSION['sid']))
{
redirect('index.php');
}
 
 if($_SESSION['sid'])
{
if($_REQUEST['case']=='reply')
{
$sql1="UPDATE `imaksoft_support` SET `reply`='".trim($_POST['reply'])."' WHERE `id`='".$_REQUEST['id']."'";
$res1=query($conn,$sql1);  
    
redirect('support.php');
}


if($_REQUEST['case']=='delete')
{
$sql="DELETE FROM `imaksoft_support` WHERE `id` = '".$_REQUEST['id']."' ";
$res=query($conn,$sql);

redirect('support.php?page='.$_REQUEST['page']);
}

if($_REQUEST['case']=='status')
{
if($_REQUEST['st']=='P'){$st='C';}else{$st='P';}

$sql="UPDATE `imaksoft_support` SET `status`='".$st."' WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);

redirect('support.php?page='.$_REQUEST['page']);
}
}
?>