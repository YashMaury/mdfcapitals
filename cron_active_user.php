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

$sql = "SELECT * FROM `imaksoft_member_roi` order by roi_days desc;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_assoc($result))
// if (true)

{
    //echo $row['userid'];
    if (isset($row['userid'])) {
        if ($row['roi_days'] - $row['nodays'] == 0)
            $sqlu = "UPDATE `imaksoft_member` SET `status`='I',`paystatus`='I',date='" . date('Y-m-d') . "' where userid='" . $row['userid'] . "'";
        query($conn, $sqlu);
    }
}
