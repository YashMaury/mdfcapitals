<?php
error_reporting(1);
/*-----------------Database Connection-----------------------*/
$conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');
//$conn=mysqli_connect('localhost','root','root','mdfcapitals',);  //echo $conn;
date_default_timezone_set('Asia/Calcutta');
/*-----------------Database Connection-----------------------*/
// $title='websiteswalla';
 $domain=$_SERVER['SERVER_NAME'];
$welcome='welcome@mdfcapitals.com';
$support='support@mdfcapitals.com';
$recovery='recovery@mdfcapitals.com';
$prefix='CC';
$currency = '&#36;';

function redirect($url)
{
header('Location: '.$url);
exit();
}
function query($conn,$sql)
{
$res=mysqli_query($conn,$sql);
return $res;
}
function numrows($exe)
{
$no=mysqli_num_rows($exe);
return $no;
}
function fetcharray($res)
{
$fetch=mysqli_fetch_array($res);
return $fetch;
}

function input($string)
{
$string=addslashes(trim(strip_tags($string)));
return $string;
}

function output($string)
{
$string=stripslashes(trim(strip_tags($string)));
return $string;
} 

function getUser($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_admin` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}



function getTotalFund($conn){
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_investment_receipt` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalUsedFund($conn){
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_deposit` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalAvailableFund($conn){
    $total = (getTotalFund($conn) - getTotalUsedFund($conn));
    
    return $total;
}

function getRoyalityMember($conn,$plan){
$sql="SELECT COUNT(`id`) AS total FROM `imaksoft_commission_royality_roi` WHERE `plan`='".$plan."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getTransferFundOthersToid($conn,$userid)
{
$sql="SELECT SUM(`balance`) AS total FROM `imaksoft_transfer_fund_others` WHERE `toid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}



function getFundTransfer($conn,$userid)
{
$sql="SELECT SUM(`total`) AS total FROM `imaksoft_transfer_fund_others` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getFundReceived($conn,$userid)
{
$sql="SELECT SUM(`balance`) AS total FROM `imaksoft_transfer_fund_others` WHERE `toid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTransferFundOthers($conn,$userid)
{
$sql="SELECT SUM(`total`) AS total FROM `imaksoft_transfer_fund_others` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}


function getAdminName($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_admin` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}


function getSettingsJoining($conn,$field)
{
$sql="SELECT * FROM `imaksoft_settings_direct` ORDER BY `id` LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getDirectBonusMember($conn,$userid)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_direct` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalDirectBonus($conn)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_direct` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

//-------------23-07-2019-----------//
function getImageGallery($conn){
    $sql="SELECT * FROM `imaksoft_gallery_image` ";
    $res=query($conn,$sql);
    $num=numrows($res);
    return $res;
}

function getLegalDocument($conn){
    $sql="SELECT * FROM `imaksoft_legal_document` ";
    $res=query($conn,$sql);
    $num=numrows($res);
    return $res;
}

function getVideoGallery($conn){
    $sql="SELECT * FROM `imaksoft_gallery_video` ";
    $res=query($conn,$sql);
    $num=numrows($res);
    return $res;
}

function getFirstMember($conn)
{
$sql="SELECT * FROM `imaksoft_member` ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $num;
}
}


function getNoAnnouncement($conn)
{
$sql="SELECT * FROM `imaksoft_announcement` ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $num;
}
}

function getContactDetails($conn,$field)
{
$sql="SELECT * FROM `imaksoft_contact` ";
$res=query($conn,$sql);
 $num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}

function getFromUserID($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getUserID($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

//-------------26-07-2019-----------//

function getReceipt($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_investment_receipt` WHERE `user_id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getMember($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}



function getAnnouncement($conn,$field)
{
$sql="SELECT * FROM `imaksoft_announcement` ORDER BY `id` DESC";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getCommStatus($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_commission_roi` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getMemberUserid($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}


function getAllSponsorUserid($conn,$userid,$field)
{
    //echo $userid;
  
    $all_members=array();
  $sql="SELECT * FROM `imaksoft_member` WHERE `sponsor` IN ('$userid')";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{

    while($fetch=fetcharray($res)){
        array_push($all_members,$fetch["userid"]);
}

return $all_members;
}
}

function getAllActiveSponsorUserid($conn,$userid,$field)
{
    //echo $userid;
  
    $all_members=array();
  $sql="SELECT * FROM `imaksoft_member` WHERE `sponsor` IN ('$userid') and paystatus='A'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{

    while($fetch=fetcharray($res)){
        array_push($all_members,$fetch["userid"]);
}

return $all_members;
}
}


function getSettingsPackage($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_settings_package` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

/*------------31-07-2019---------------------*/
function getTotalMember($conn)
{
$sql="SELECT `id` FROM `imaksoft_member`";
$res=query($conn,$sql);
$num=numrows($res);

return $num;
}


function getApprovedMember($conn)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `status`='A' AND `paystatus`='A'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getInactiveMember($conn)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `status`='A' AND `paystatus`='I'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getPendingWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `userid`='".$userid."' AND `status`='P'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getApprovedWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `userid`='".$userid."' AND  `status`='C'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getDailyPendingWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_daily_withdrawal` WHERE `userid`='".$userid."' AND `status`='P'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getDailyApprovedWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_daily_withdrawal` WHERE `userid`='".$userid."' AND  `status`='C'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getDaliyWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_daily_withdrawal` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getWithdrawalMember($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getAddress($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_contact` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}

function getPendingWithdrawalAdmin($conn)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `status`='P' ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getApprovedWithdrawalAdmin($conn)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `status`='C'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}


function getNoOfFeedback($conn)
{
$sql="SELECT `id` FROM `imaksoft_feedback`";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getTotalSupport($conn)
{
$sql="SELECT `id` FROM `imaksoft_support`";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getNoOfSponsor($conn,$sponsor)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}


function getNoOfSponsorActive($conn,$sponsor)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."' AND `paystatus`='A' ";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getNoOfSponsorInActive($conn,$sponsor)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."' AND `paystatus`='I' ";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getSponsorPosition($conn,$sponsor,$position)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."' AND `position`='".$position."' AND `paystatus`='A'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getWithdrawalAdmin($conn)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getPendingWithdrawal($conn)
{
$sql="SELECT SUM(`payout`) AS total FROM `imaksoft_withdrawal` WHERE `status`='P' ORDER BY `id` DESC";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getApprovedWithdrawal($conn)
{
$sql="SELECT SUM(`payout`) AS total FROM `imaksoft_withdrawal` WHERE `status`='A' ORDER BY `id` DESC";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getMemberFirstMember($conn)
{
$sql="SELECT * FROM `imaksoft_member` ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch['id'];
}
}

function getTotalROIBonus($conn)
{
$sql="SELECT total_income AS total FROM `imaksoft_commission_royality_business` ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalROIBonusPercentage($conn)
{
$sql="SELECT royality_percentage AS total FROM `imaksoft_commission_royality_business` ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}


function getTotalLevelBonus($conn,$userid)
{
    if($userid == 'ALL'){
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_level_roi` ORDER BY `id`";
    } else {
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_level_roi` WHERE `userid`='".$userid."' ORDER BY `id`";
    }
        
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalRefferalBonus($conn,$userid)
{
    if($userid == 'ALL'){
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_direct` ORDER BY `id`";
    } else {
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_direct` WHERE `fromid`='".$userid."' ORDER BY `id`";
    }
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalRewardBonus($conn,$userid)
{
    if($userid == 'ALL'){
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_reward_roi` ORDER BY `id`";
    } else {
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_reward_roi` WHERE `userid`='".$userid."' ORDER BY `id`";
    }
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalAdsBonus($conn)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_ads` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getROIBonus($conn,$userid)
{
    if($userid == 'ALL'){
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_roi` WHERE `status`='R' ORDER BY `id`";
    } else {
        $sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_roi` WHERE `userid`='".$userid."' AND `status`='R' ORDER BY `id`";
    }
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getLevelBonus($conn,$userid)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_level` WHERE `userid`='".$userid."'  ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getAdsBonus($conn,$userid)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_ads` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getDirectTeamInvestment($conn,$userid){
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` LEFT JOIN imaksoft_member ON imaksoft_member_investment.userid=imaksoft_member.userid WHERE imaksoft_member.sponsor='".$userid."'";

$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;

}

function getUserInvestment($conn,$userid){
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` WHERE `userid`='".$userid."'";

$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalInvestment($conn,$userid){
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` WHERE MONTH(datetime)=MONTH(now()) ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getInvestmentDeposit($conn,$userid)
{
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_roi` WHERE `userid`='".$userid."' AND `remarks`='Deposit' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getIMPSWithdrawal($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal_imps` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getTotalIMPSWithdrawal($conn)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal_imps` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getMemberWithdrawal($conn,$userid)
{
$sql="SELECT SUM(`request`) AS total FROM `imaksoft_withdrawal` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}
function getMemberCoinPayment($conn,$userid)
{
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_coinpayment` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getAvailableWallet($conn,$userid)
{
$total=(getTotalCommission($conn,$userid)+getDepositMember($conn,$userid)+getFundReceived($conn,$userid))-(getWithdrawalMember($conn,$userid)+getMemberInvestment($conn,$userid)+getDeductMember($conn,$userid)+getFundTransfer($conn,$userid));

return $total;
}


function getAvailableFundWallet($conn,$userid)
{
$total=(getDepositMember($conn,$userid))-(getDeductMember($conn,$userid)+getMemberInvestment($conn,$userid));

return $total;
}

function getTotalCommission($conn,$userid)
 {
$total=(getROIBonus($conn,$userid)+getTotalLevelBonus($conn,$userid)+getTotalRefferalBonus($conn,$userid)+getTotalRewardBonus($conn,$userid));
 return $total;
 }


function getALLROIBonus($conn,$userid)
{
$total=(getROIBonus($conn,$userid)-getDaliyWithdrawalMember($conn,$userid));

return $total;
}

function getMemberInvestment($conn,$userid)
{
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getDepositMember($conn,$userid)
{
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_deposit` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getDeductMember($conn,$userid)
{
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_deduct` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}


function getPendingTotalWithdrawal($conn,$column)
{
$sql="SELECT SUM(`".$column."`) AS total FROM `imaksoft_withdrawal` WHERE`status`='P'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getApprovedTotalWithdrawal($conn,$column)
{
$sql="SELECT SUM(`".$column."`) AS total FROM `imaksoft_withdrawal` WHERE `status`='C'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

//---------------------------18/12/2019---------------------//
function getNoOfActiveSponsor($conn,$userid)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$userid."' AND `status`='A' AND `paystatus`='A'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

//---------------------19/12/2019-----------------------//
function getActiveSponsorDate($conn,$sponsor,$fmdate,$todate)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."' AND `paystatus`='A' AND `date` BETWEEN '".$fmdate."' AND '".$todate."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}


function getActiveSponsor($conn,$sponsor)
{
$sql="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$sponsor."' AND `paystatus`='A'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}



function getAchievedMember($conn,$userid,$table,$nomember,$fmdate,$todate)
{
$sql="SELECT `id` FROM `".$table."` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

$noactive=getActiveSponsorDate($conn,$userid,$fmdate,$todate);
if($noactive>=$nomember)
{
$next=($nomember-1);

$sql2="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$userid."' AND `paystatus`='A' AND `date` BETWEEN '".$fmdate."' AND '".$todate."' ORDER BY `id` LIMIT $next,1";
$res2=query($conn,$sql2);
$num2=numrows($res2);
$fetch2=fetcharray($res2);

$sql1="SELECT * FROM `".$table."` WHERE `id`>'".$fetch2['id']."'";
$res1=query($conn,$sql1);
$num1=numrows($res1);

if($num1>0){$total=$num1;}else{$total=0;}
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getFromDateGenealogy($conn,$table,$userid)
{
$sql="SELECT * FROM `".$table."` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['date'];
}
}

function getMemberSponsorByDate($conn,$userid,$fromdate,$todate)
{
$sql="SELECT `id` FROM `imaksoft_member` WHERE `sponsor`='".$userid."' AND `paystatus`='A' AND `approved` BETWEEN '".$fromdate."' AND '".$todate."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

//----------------------18/03/2020---------------------//
function getUplineID($conn,$userid)
{
$sql="SELECT * FROM `imaksoft_genealogy` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch['placement'];
}
}

function getDownlineByPosition($conn,$sponsor,$position)
{
$sql="SELECT * FROM `imaksoft_genealogy` WHERE `placement`='".$sponsor."' AND `position`='".$position."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch['userid'];
}
}

function getDownlinePosition($conn,$userid,$placement)
{
$sql1="SELECT * FROM `imaksoft_genealogy` WHERE `userid`='".$userid."' AND `placement`='".$placement."'";
$res1=query($conn,$sql1);
$num1=numrows($res1);
if($num1>0)
{
$fetch1=fetcharray($res1);

return $fetch1['position'];
}
}

// function getTotalSales($conn,$userid)
// {
// $total=getSales($conn,$userid,'left')+getSales($conn,$userid,'right');
// return $total;
// }

function getSettingsWithdrawal($conn,$field)
{
$sql="SELECT * FROM `imaksoft_settings_withdrawal` ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getSettingsLevel($conn,$level)
{
$sql="SELECT * FROM `imaksoft_settings_level` WHERE `level`='".$level."' ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['percentage'];
}
}

function getCountry($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_country` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getCountAccount($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_commission_roi` WHERE `userid`='".$userid."' ";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getMatrixTreeFirst($conn,$placement)
{
$sql="SELECT * FROM `imaksoft_genealogy` WHERE `placement`='".$placement."' ORDER BY `id` LIMIT 0,1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['userid'];
}
}

function getMatrixTreeSecond($conn,$placement)
{
$sql="SELECT * FROM `imaksoft_genealogy` WHERE `placement`='".$placement."' ORDER BY `id` LIMIT 1,1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['userid'];
}
}

function getMatrixTreeThird($conn,$placement)
{
$sql="SELECT * FROM `imaksoft_genealogy` WHERE `placement`='".$placement."' ORDER BY `id` LIMIT 2,1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['userid'];
}
}

function getLastROIAccount($conn,$userid)
{
$sql="SELECT * FROM `imaksoft_member_roi` WHERE `userid`='".$userid."' ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

$last=$fetch['account'];
}else{
$last=0;
}
return $last;
}

function getMemberCount($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member_count` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}

function getKycInformation($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member_kyc` WHERE `userid`='".$userid."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getSettingsCoinpayment($conn,$field)
{
$sql="SELECT * FROM `imaksoft_settings_coin_payment` ORDER BY `id` LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getCoinPaymentByInvoice($conn,$invoice,$field)
{
$sql="SELECT * FROM `imaksoft_member_coinpayment` WHERE `invoice`='".$invoice."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}


function getMemberAdsVisit($conn,$userid,$adsid,$date)
{
$sql="SELECT * FROM `imaksoft_advertisement_view` WHERE `userid`='".$userid."' AND `adsid`='".$adsid."' AND `date`='".$date."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getAdvertisementNum($conn)
{
$sql="SELECT * FROM `imaksoft_advertisement`";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getAdvertisementByPackage($conn,$package)
{
$sql="SELECT * FROM `imaksoft_advertisement` WHERE `package`='".$package."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}


function getMemberAdsNum($conn,$userid,$date)
{
$sql="SELECT * FROM `imaksoft_advertisement_view` WHERE `userid`='".$userid."' AND `date`='".$date."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getAdvertisement($conn,$id,$field)
{
$sql="SELECT * FROM `imaksoft_advertisement` WHERE `id`='".$id."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch[$field];
}
}

function getMemberAds($conn,$userid,$date)
{
$sql="SELECT * FROM `imaksoft_advertisement_view` WHERE `userid`='".$userid."' AND `date`='".$date."'";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getTotalAdvertisement($conn)
{
$sql="SELECT * FROM `imaksoft_advertisement` WHERE `status`='A' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
return $num;
}

function getPackageMember($conn,$userid,$field)
{
$sql="SELECT * FROM `imaksoft_member_investment` WHERE `userid`='".$userid."' ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
return $fetch[$field];
}
}


function getLevelROIBonus($conn,$userid)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_level_roi` WHERE `userid`='".$userid."' ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}

function getTotalLevelROIBonus($conn)
{
$sql="SELECT SUM(`bonus`) AS total FROM `imaksoft_commission_level_roi` ORDER BY `id`";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=number_format(0,2);
}
}else{
$total=number_format(0,2);
}
return $total;
}


function getSettingsLevelROI($conn,$level)
{
$sql="SELECT * FROM `imaksoft_settings_level_roi` WHERE `level`='".$level."' ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['percentage'];
}
}

function getAllBusinessAmount($conn,$userid,$date)
{
    $user= "'" . implode ( "', '", $userid ) . "'";
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` where userid IN ($user) and date in ('$date')";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getSettingsReward($conn,$business)
{
 $sql="SELECT * FROM `imaksoft_settings_reward` WHERE `level`='".$business."' ORDER BY `id` DESC LIMIT 1";

$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['business']>0)
{
$total=$fetch['level'].":".$fetch['business'].":".$fetch['bonus'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}

function getSettingsRewardOthers($conn,$business)
{
  $sql="SELECT * FROM `imaksoft_settings_reward` WHERE `level`>'".$business."' ORDER BY `id` LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['business']>0)
{
$total=$fetch['level'].":".$fetch['business'].":".$fetch['bonus'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;

}


// function getSettingsRewardBonus($conn,$business)
// {
// $sql="SELECT * FROM `imaksoft_settings_reward` WHERE `business`=$business ORDER BY `id` DESC LIMIT 1";
// $res=query($conn,$sql);
// $num=numrows($res);
// if($num>0)
// {
// $fetch=fetcharray($res);

// if($fetch['bonus']>0)
// {
// $total=$fetch['bonus'];
// }else{
// $total=0;
// }
// }else{
// $total=0;
// }
// return $total;
// }


function getPaidRewardAmount($conn,$userid)
{
 $sql="SELECT plan,totalAmount,amount FROM `imaksoft_commission_reward_roi` where userid = '".$userid."' order by id limit 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
 $fetch=fetcharray($res);
if($fetch['plan']!="")
{
$total= $fetch['plan'].":".$fetch['totalAmount'].":".$fetch['amount'];
}else{
$total="GLINTEL";
}
}else{
$total="GLINTEL";
}
return $total;
}



function getAllBusinessRewardAmount($conn,$userid,$date)
{
    $user= "'" . implode ( "', '", $userid ) . "'";
$sql="SELECT SUM(`amount`) AS total FROM `imaksoft_member_investment` where userid IN ($user) ";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getPaidRoyalityAmount($conn,$userid)
{
$sql="SELECT plan FROM `imaksoft_commission_royality_roi` where userid = '".$userid."' order by id DESC limit 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
 $fetch=fetcharray($res);
if($fetch['plan']>0)
{
$total=$fetch['plan'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}


function getSettingsRoyality($conn,$direct,$team)
{
$sql="SELECT * FROM `imaksoft_settings_royality` WHERE `direct`<=$direct and team<=$team ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

if($fetch['plan']!="")
{
$total=$fetch['plan'].":".$fetch['percentage'].":".$fetch['direct'].":".$fetch['team'];
}else{
$total="GLINTEL";
}
}else{
$total="GLINTEL";
}
return $total;
}


function getLatestRoyalityCondition($conn,$user,$date)
{
 $sql="SELECT * FROM `imaksoft_commission_royality_roi_records` WHERE `userid`='".$user."' and date='".$date."' ORDER BY `id` DESC LIMIT 1";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);

return $fetch['direct_member'].":".$fetch['total_member'];
}
}


function sumLevelIncomeForRoyality($conn,$userid,$date)
{
   
 $sql="SELECT SUM(`dailybonus`) AS total FROM `imaksoft_commission_level_roi` where userid ='".$userid."' and date<='".$date."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
if($fetch['total']>0)
{
$total=$fetch['total'];
}else{
$total=0;
}
}else{
$total=0;
}
return $total;
}



?>