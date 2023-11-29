<?php
session_start();
include('inc/function.php');
if(!isset($_SESSION['sid']))
{
redirect('index.php');
}

if($_SESSION['sid'])
{
if($_REQUEST['case']=='status')
{
$sql="UPDATE `imaksoft_daily_withdrawal` SET `status`='C',`approved`='".date('Y-m-d')."' WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);

redirect('daily-withdrawal.php?case=pen&page='.mysqli_real_escape_string($conn,$_REQUEST['page']));
}

if($_REQUEST['case']=='delete')
{
$sql="DELETE FROM `imaksoft_daily_withdrawal` WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql); 

redirect('daily-withdrawal.php?case=pen&page='.mysqli_real_escape_string($conn,$_REQUEST['page']));
}

}
?>