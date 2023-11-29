<?php
session_start();
include('inc/function.php');
if(!isset($_SESSION['sid']))
{
redirect('index.php');
}

if($_SESSION['sid'])
{


if($_SERVER['REQUEST_METHOD']=='POST')
{
if($_REQUEST['case']=='edit')
{
$sql2="UPDATE `imaksoft_settings_direct` SET `amount`='".mysqli_real_escape_string($conn,$_POST['amount'])."',`upi1`='0',`upi2`='0',`upi3`='0' WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res2=query($conn,$sql2);

redirect('settings.php?inc=direct');
}
}


}

?>