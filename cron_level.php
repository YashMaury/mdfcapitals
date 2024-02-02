<?php
session_start();
include ('admin/inc/function.php');
date_default_timezone_set('Asia/Kolkata');
 $conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');
// $conn=mysqli_connect('localhost','root','root','mdfcapitals',);  $conn=mysqli_connect('localhost','root','root','mdfcapitals',);
// $job_date=date('Y-m-d');
 $job_date=date('Y-m-d',strtotime(date('Y-m-d') . ' -1 day'));


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

        array_push($users, $row['userid']);
        // if($row['userid']!="MDF1001")
        getLevelIncome($conn,$row['userid'], $users, 0,$job_date);
        array_splice($users, 0);

    }
}

function getLevelIncome($conn,$curr_user, $userid, $k,$job_date)
{
    // if(!empty($userid)){
    //       print_r($userid);  
    // }

try{
    $level= "Level " . $k;
    

    // echo "<br>";
    $loop_members = array();
    $size = sizeof($userid);
    if ($k < 10)
    {

echo $userid."**".$job_date."<br>";
    $business= getAllBusinessAmount($conn,$userid,$job_date);
$user_list=implode(",",$userid);

  $percentage=getSettingsLevel($conn,$level);
  $bonus=($business*$percentage)/100;
  


if($bonus>0){
echo $sqla="INSERT IGNORE INTO `imaksoft_commission_level_roi` (`userid`,`fromid`,`level`,`dailybonus`,`percentage`,`bonus`,`date`) 
VALUES('".$curr_user."','".$user_list."','".$level."','".$business."','".$percentage."','".$bonus."','".date('Y-m-d')."')";
$resa=query($conn,$sqla);
}

        for ($i = 0;$i < $size;$i++)
        {
            $allUsers = getAllSponsorUserid($conn, $userid[$i], 'userid');
            if ($allUsers)
            {
                $loop_members = array_merge($loop_members, $allUsers);

            }

        }
        $k = $k + 1;

        getLevelIncome($conn,$curr_user, $loop_members, $k,$job_date);
    }
}
catch(Exception $x){
    
}
}

echo "JOB COMPLETED";
mysqli_close($conn);
?>

