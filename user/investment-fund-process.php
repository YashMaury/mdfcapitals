<?php
session_start();
include('../admin/inc/function.php');
if(!isset($_SESSION['mid']))
{
redirect('index.php');
}

if($_SESSION['mid'])
{
$tname = 'imaksoft_settings_package';
$lim = 100;
$amount=$_POST['amount'];
$tpage = 'settings-package.php';
$where = "WHERE `id` = '".$amount."' ORDER BY `id`";
include('pagination.php');
$package = fetcharray($result);
//  print_r($package);

$userid=getMember($conn,$_SESSION['mid'],'userid');
$sponsorId=getMember($conn,$_SESSION['mid'],'sponsor');

$avafund=getAvailableWallet($conn,$userid);

if($avafund>=$package['investment'])
{
$sql="INSERT INTO `imaksoft_member_investment`(`userid`,`package`,`amount`,`date`)VALUES('".$userid."','".$package['id']."','".$package['investment']."','".date('Y-m-d')."')";
$res=query($conn,$sql);

$bonus=$package['investment']*0.07;

//Added 05 dec 2023
$sql_refferal="INSERT INTO imaksoft_commission_direct(`userid`,`fromid`,`bonus`,`date`,`datetime`) VALUES 
('".$userid."','".$sponsorId."','".$bonus."','".date('Y-m-d')."','".date('Y-m-d h:i:s')."')";
$res_ref=query($conn,$sql_refferal);

$paystatus=getMemberUserID($conn,$userid,'paystatus');
if($paystatus=='I')
{
$sql1="UPDATE `imaksoft_member` SET `paystatus`='A',`approved`='".date('Y-m-d')."' WHERE `userid`='".$userid."'";
$res1=query($conn,$sql1);
}



$dailyper='2';
$nodays='24';

$bonus=$dailyper;

//---------------------------ROI-------------------------------//
$last=getLastROIAccount($conn,$userid);
$account=($last+1);

$sql6="INSERT INTO `imaksoft_member_roi` (`userid`,`plan`,`account`,`amount`,`percentage`,`nodays`,`bonus`,`status`,`date`,`remarks`) 
VALUES('".$userid."','".$package['plan']."','".$account."','".$package['investment']."','".$package['dailyper']."','".$package['nodays']."','0','R','".date('Y-m-d')."','')";
$res6=query($conn,$sql6);

$date=strtotime(date("Y-m-d"));
$stdate=date('Y-m-d',strtotime('+1 day',$date));

if($nodays>0)
{
$limit=$nodays+100;

for($i=0;$i<$limit;$i++)
{
$stdate1=date('Y-m-d',strtotime('+'.$i.'day',strtotime($stdate)));
$day=date('l',strtotime($stdate1));

if($day=='Monday' || $day=='Tuesday' || $day=='Wednesday' || $day=='Thursday' || $day=='Friday' || $day=='Saturday' || $day=='Sunday')
{
$sqlc="SELECT * FROM `imaksoft_commission_roi` WHERE `userid`='".$userid."' AND `account`='".$account."'";
$resc=query($conn,$sqlc);
$numc=numrows($resc);
if($numc<$nodays)
{
 //$sql7="INSERT INTO `imaksoft_commission_roi`(`userid`,`account`,`amount`,`percentage`,`bonus`,`status`,`date`) VALUES('".$userid."','".$account."','".$amount."','".$dailyper."','".$bonus."','H','".$stdate1."')";
 //$res7=query($conn,$sql7);

}
}
}
}
//------------------------------------------------//

/*-------------------Matrix Calculation-------------------------*/

//-----------------Level 1-----------------------------//
$upline1=getMemberUserid($conn,$userid,'sponsor');
if($upline1)
{
$level1=getSettingsLevel($conn,'Level 1');
if($level1>0)
{
$bonus1=($amount*$level1)/100;

$sql1="INSERT INTO `imaksoft_commission_level`(`userid`,`fromid`,`level`,`amount`,`percentage`,`bonus`,`date`)VALUES('".$upline1."','".$userid."','Level 1','".$amount."','".$level1."','".$bonus1."','".date('Y-m-d')."')";
$res1=query($conn,$sql1);
}
}

//-----------------Level 2-----------------------------//
$upline2=getMemberUserid($conn,$upline1,'sponsor');
if($upline2)
{
$level2=getSettingsLevel($conn,'Level 2');
if($level2>0)
{
$bonus2=($amount*$level2)/100;

$sql2="INSERT INTO `imaksoft_commission_level`(`userid`,`fromid`,`level`,`amount`,`percentage`,`bonus`,`date`)VALUES('".$upline2."','".$userid."','Level 2','".$amount."','".$level2."','".$bonus2."','".date('Y-m-d')."')";
$res2=query($conn,$sql2);
}
}

//-----------------Level 3-----------------------------//
$upline3=getMemberUserid($conn,$upline2,'sponsor');
if($upline3)
{
$level3=getSettingsLevel($conn,'Level 3');
if($level3>0)
{
$bonus3=($amount*$level3)/100;

$sql3="INSERT INTO `imaksoft_commission_level`(`userid`,`fromid`,`level`,`amount`,`percentage`,`bonus`,`date`)VALUES('".$upline3."','".$userid."','Level 3','".$amount."','".$level3."','".$bonus3."','".date('Y-m-d')."')";
$res3=query($conn,$sql3);
}
}

redirect('invest.php?m=2');
}else{
redirect('invest.php?e=3');
}

}

?>