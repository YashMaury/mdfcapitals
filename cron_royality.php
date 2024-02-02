<?php
session_start();
include('admin/inc/function.php');
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');
// $conn = mysqli_connect('localhost', 'root', 'root', 'mdfcapitals',);  // $conn=mysqli_connect('localhost','root','root','mdfcapitals',);
$job_date = date('Y-m-d');
//$job_date=date('Y-m-d',strtotime(date('Y-m-d') . ' -1 day'));
$count = 0;

//Step 1: List all the user
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `imaksoft_member` where status='A' order by userid ";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$users = array();
while ($row = mysqli_fetch_assoc($result))
// if (true)

{
    //echo $row['userid'];
    if (isset($row['userid']))
    // if (true)

    {

        array_push($users, $row['userid']);
        if ($row['userid'] == "MDF9585695")
            getRoyalityIncome($conn, $row['userid'], $users, 0, $job_date, $count);

        array_splice($users, 0);
    }
}

function getRoyalityIncome($conn, $curr_user, $userid, $k, $job_date, $count)
{
    // if(!empty($userid)){

    // }
    $level = "Level " . $k;
    //As the level1 count is shown in level 2    

    if ($level == "Level 1") {

        $level1 = count($userid) - 1;
        if ($level1 > 0) {
            $sqli = "INSERT INTO `imaksoft_commission_royality_roi_records`
    (`userid`, `direct_member`,`date`) VALUES 
    ('" . $curr_user . "','" . $level1 . "','" . date('Y-m-d') . "')";
            $resa = query($conn, $sqli);
        }
    }

    if ($level == "Level 10") {
        $level10 = $count - 1;
        if ($level10 > 0) {
            $sqlu = "UPDATE `imaksoft_commission_royality_roi_records` SET `total_member`='" . $level10 . "' where userid='" . $curr_user . "' and date='" . $job_date . "'";
            $resu = query($conn, $sqlu);

            //    echo  $getPaidRoyality = getPaidRoyalityAmount($conn, $curr_user);
            $royalityCondition = getLatestRoyalityCondition($conn, $curr_user, $job_date);


            $conditionSplit = explode(":", $royalityCondition);

            $sql = "SELECT * FROM `imaksoft_settings_royality` WHERE `t_direct`<=$conditionSplit[0] and `t_team`<=$conditionSplit[1] ORDER BY  `id`";
            $res = query($conn, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                $sqlu1 = "UPDATE `imaksoft_commission_royality_roi_records`SET `business_created`='T' where userid='" . $curr_user . "' and date='" . $job_date . "'";
                query($conn, $sqlu1);

                $sqla = "INSERT INTO `imaksoft_commission_royality` (`userid`,`plan`,`percentage`,`status`,`date`) 
               VALUES('" . $curr_user . "','" . $row['plan'] . "','" . $row['percentage'] . "','R','" . date('Y-m-d') . "')";
                query($conn, $sqla);
            }
        }
    }

    //get paid royality last amount

    $loop_members = array();
    $size = sizeof($userid);
    if ($k < 10) {
        for ($i = 0; $i < $size; $i++) {
            $count++;
            $allUsers = getAllActiveSponsorUserid($conn, $userid[$i], 'userid');

            $total_business = 0;
            if ($allUsers) {
                $loop_members = array_merge($loop_members, $allUsers);
            }
        }
        $k = $k + 1;

        getRoyalityIncome($conn, $curr_user, $loop_members, $k, $job_date, $count);
    }
}

echo "JOB COMPLETED";
mysqli_close($conn);
?>