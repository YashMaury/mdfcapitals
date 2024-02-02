<?php
session_start();
$placement;
// include('function.php');
if(!isset($_SESSION['mid'])){
redirect('../../user/index.php');
}
$userid=getMember($conn,$_SESSION['mid'],'userid');
$left=2;
?>

<?php 
function getTeamInvestment($conn, $user){

$sum = 0;
$sql="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$user."' AND `status`='A'";
$res=query($conn,$sql);
$num=numrows($res);
$i=0;
$arr=array();
if($num>0){
while($fetch=fetcharray($res)){
$arr[$i]=$fetch['userid'];
// echo getUserInvestment($conn,$fetch['userid'])." ---- ".$fetch['userid']."<br>";
$invest = getUserInvestment($conn,$fetch['userid']);
$sum += $invest;
//echo $sum;
// echo "<br>";
$i++;}

$count=count($arr);
if($count>0){ 
$i=0;
$arr1=array();
for($k=0;$k<$count;$k++){
$sql1="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr[$k]."' AND `status`='A'";
$res1=query($conn,$sql1);
$num1=numrows($res1);
if($num1>0){
while($fetch1=fetcharray($res1)){
$arr1[$i]=$fetch1['userid'];

// echo getUserInvestment($conn,$fetch1['userid'])." ---- ".$fetch1['userid']."<br>";
$invest1 = getUserInvestment($conn,$fetch1['userid']);
$sum += $invest1;
//echo $sum;
$i++;}}}

$count1=count($arr1);
if($count1>0){ 
$i=0;
$arr2=array();
for($k=0;$k<$count1;$k++){
$sql2="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr1[$k]."' AND `status`='A'";
$res2=query($conn,$sql2);
$num2=numrows($res2);
if($num2>0){
while($fetch2=fetcharray($res2)){
$arr2[$i]=$fetch2['userid'];

// echo getUserInvestment($conn,$fetch2['userid'])." ---- ".$fetch2['userid']."<br>";
$invest2 = getUserInvestment($conn,$fetch2['userid']);
$sum += $invest2;
//echo $sum;
$i++;}}}

$count2=count($arr2);
if($count2>0){
$i=0;
$arr3=array();
for($k=0;$k<$count2;$k++){
$sql3="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr2[$k]."' AND `status`='A'";
$res3=query($conn,$sql3);
$num3=numrows($res3);
if($num3>0){
while($fetch3=fetcharray($res3)){
$arr3[$i]=$fetch3['userid'];

// echo getUserInvestment($conn,$fetch3['userid'])." ---- ".$fetch3['userid']."<br>";
$invest3 = getUserInvestment($conn,$fetch3['userid']);
$sum += $invest3;
//echo $sum;
$i++;}}}

$count3=count($arr3);
if($count3>0){
$i=0;
$arr4=array();
for($k=0;$k<$count3;$k++){
$sql4="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr3[$k]."' AND `status`='A'";
$res4=query($conn,$sql4);
$num4=numrows($res4);
if($num4>0){
while($fetch4=fetcharray($res4)){
$arr4[$i]=$fetch4['userid'];

// echo getUserInvestment($conn,$fetch4['userid'])." ---- ".$fetch4['userid']."<br>";
$invest4 = getUserInvestment($conn,$fetch4['userid']);
$sum += $invest4;
//echo $sum;
$i++;}}}

$count4=count($arr4);
if($count4>0){
$i=0;
$arr5=array();
for($k=0;$k<$count4;$k++){
$sql5="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr4[$k]."' AND `status`='A'";
$res5=query($conn,$sql5);
$num5=numrows($res5);
if($num5>0){
while($fetch5=fetcharray($res5)){
$arr5[$i]=$fetch5['userid'];

// echo getUserInvestment($conn,$fetch5['userid'])." ---- ".$fetch5['userid']."<br>";
$invest5 = getUserInvestment($conn,$fetch5['userid']);
$sum += $invest5;
//echo $sum;
$i++;}}}

$count5=count($arr5);
if($count5>0){
$i=0;
$arr6=array();
for($k=0;$k<$count5;$k++)
{
$sql6="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr5[$k]."' AND `status`='A'";
$res6=query($conn,$sql6);
$num6=numrows($res6);
if($num6>0){
while($fetch6=fetcharray($res6)){
$arr6[$i]=$fetch6['userid'];

// echo getUserInvestment($conn,$fetch6['userid'])." ---- ".$fetch6['userid']."<br>";
$invest6 = getUserInvestment($conn,$fetch6['userid']);
$sum += $invest6;
//echo $sum;
$i++;}}}

$count6=count($arr6);
if($count6>0){
$i=0;
$arr7=array();
for($k=0;$k<$count6;$k++)
{
$sql7="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr6[$k]."' AND `status`='A'";
$res7=query($conn,$sql7);
$num7=numrows($res7);
if($num7>0){
while($fetch7=fetcharray($res7)){
$arr7[$i]=$fetch7['userid'];

// echo getUserInvestment($conn,$fetch7['userid'])." ---- ".$fetch7['userid']."<br>";
$invest7 = getUserInvestment($conn,$fetch7['userid']);
$sum += $invest7;
//echo $sum;
$i++;}}}

$count7=count($arr7);
if($count7>0){
$i=0;
$arr8=array();
for($k=0;$k<$count7;$k++){
$sql8="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr7[$k]."' AND `status`='A'";
$res8=query($conn,$sql8);
$num8=numrows($res8);
if($num8>0){
while($fetch8=fetcharray($res8)){
$arr8[$i]=$fetch8['userid'];

// echo getUserInvestment($conn,$fetch8['userid'])." ---- ".$fetch8['userid']."<br>";
$invest8 = getUserInvestment($conn,$fetch8['userid']);
$sum += $invest8;
//echo $sum;
$i++;}}}

$count8=count($arr8);
if($count8>0){
$i=0;
$arr9=array();
for($k=0;$k<$count8;$k++)
{
$sql9="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr8[$k]."' AND `status`='A'";
$res9=query($conn,$sql9);
$num9=numrows($res9);
if($num9>0){
while($fetch9=fetcharray($res9)){
$arr8[$i]=$fetch9['userid'];

// echo getUserInvestment($conn,$fetch9['userid'])." ---- ".$fetch9['userid']."<br>";
$invest9 = getUserInvestment($conn,$fetch9['userid']);
$sum += $invest9;
//echo $sum;
$i++;}}}
}}}}}}}}}}
return number_format($sum,2);
}
?>