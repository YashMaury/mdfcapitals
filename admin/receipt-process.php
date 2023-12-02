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
if($_REQUEST['st']=='0'){$st='1';}else{$st='0';}

$sql2="UPDATE `imaksoft_investment_receipt` SET `status`='".$st."' WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res2=query($conn,$sql2); 

redirect('receipt.php');
}

}
?>