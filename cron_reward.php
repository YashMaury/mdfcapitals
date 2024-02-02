<?php
session_start();
include ('admin/inc/function.php');
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');
// $conn=mysqli_connect('localhost','root','root','mdfcapitals',);  
$job_date=date('Y-m-d',strtotime(date('Y-m-d') . ' -1 day'));
//  $job_date=date('Y-m-d');

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `imaksoft_member` order by userid";
$result = mysqli_query($conn, $sql);

if (!$result)
{
    die("Query failed: " . mysqli_error($conn));
}

$users = array();
while ($row = mysqli_fetch_assoc($result))
{
    //echo $row['userid'];
    if (isset($row['userid']))
    {

        // $GLOBALS['reward_user']=$row['userid'];
        array_push($users, $row['userid']);
            // if($row['userid']=="MDF1001")
        getRewardIncome($conn,$row['userid'], $users, 0,$job_date);
        array_splice($users, 0);

    }
}

function getRewardIncome($conn,$curr_user, $userid, $k,$job_date)
{

echo $curr_user;
print_r($userid);


// if($userid[0]!=$curr_user){
 //Total lower direct earnings level 1 
 //Total investment made by customer  
   $total= getAllBusinessRewardAmount($conn,$userid,$job_date);
  
  //get paid reward last amount
  $getPaidReward=getPaidRewardAmount($conn,$curr_user);
//   echo "************";
//   print_r($getPaidReward);
$paidRewardSplit=explode(":",$getPaidReward);
$rewardTotalAmt=(float)$total-(float)$paidRewardSplit[1];
// echo "^^^^^^^^^";
// echo $paidRewardSplit[0];
// echo "9090s";

if( $paidRewardSplit[0]!="GLINTEL"){
    $newReward=getSettingsRewardOthers($conn,$paidRewardSplit[0]);
    $splitNewReward=explode(":",$newReward);
    // echo "****<br>";
    // echo $total."<br>";
    // echo $paidRewardSplit[1];
    // echo "+++++++++++++++";
    // echo $splitNewReward[0]."<br>";
    // echo $paidRewardSplit[0]."<br>";
    // echo $rewardTotalAmt."<br>";
    // echo $splitNewReward[1]."<br>";
    // echo "*****";

 if(($splitNewReward[0]!=$paidRewardSplit[0]) && ($rewardTotalAmt >= $splitNewReward[1])){
     $sqla="INSERT INTO `imaksoft_commission_reward_roi` (`userid`,`plan`,`totalAmount`,`amount`,`bonus`,`date`) 
    VALUES('".$curr_user."','".$splitNewReward[0]."',$paidRewardSplit[1]+$splitNewReward[1],$splitNewReward[1],$splitNewReward[2],'".date('Y-m-d')."')";
    query($conn,$sqla);
 }
}
else{
    $newReward=getSettingsReward($conn,'Reward1');
    $splitNewReward=explode(":",$newReward);
    if($rewardTotalAmt >= $splitNewReward[1]){
   
     $sqla="INSERT INTO `imaksoft_commission_reward_roi` (`userid`,`plan`,`totalAmount`,`amount`,`bonus`,`date`) 
    VALUES('".$curr_user."','".$splitNewReward[0]."',$splitNewReward[1],$splitNewReward[1],$splitNewReward[2],'".date('Y-m-d')."')";
    query($conn,$sqla);
    }
}
  
// }
  
  
    echo "<br>";
    $loop_members = array();
    $size = sizeof($userid);
    if ($k <= 0)
    {


        for ($i = 0;$i < $size;$i++)
        {
           
            $allUsers = getAllActiveSponsorUserid($conn, $userid[$i], 'userid');
            if ($allUsers)
            {
                $loop_members = array_merge($loop_members, $allUsers);

            }

        }
        $k = $k + 1;

        getRewardIncome($conn,$curr_user, $loop_members, $k,$job_date);
    }

}
echo "JOB COMPLETED";
mysqli_close($conn);
?>

