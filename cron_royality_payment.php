<?php
session_start();
include('admin/inc/function.php');
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');
// $conn = mysqli_connect('localhost', 'root', 'root', 'mdfcapitals',);  // $conn=mysqli_connect('localhost','root','root','mdfcapitals',);
$job_date = date('Y-m-d');
$t_silver = 0;
$t_gold = 0;
$t_platinum = 0;
$t_diamond = 0;

$u_silver = 0;
$u_gold = 0;
$u_platinum = 0;
$u_diamond = 0;

$level_income = 0;
$reward_income = 0;
$direct_income = 0;

//Sum all amount

$sql_dir = "SELECT sum(bonus) as bonus FROM `imaksoft_commission_roi`";
$res_dir = query($conn, $sql_dir);

$num = numrows($res_dir);
if ($num > 0) {
    $fetch = fetcharray($res_dir);
    $direct_income = $fetch['bonus'];
}

$sql_level = "SELECT sum(bonus) as bonus FROM `imaksoft_commission_level_roi`";
$res_lev = query($conn, $sql_level);


$num = numrows($res_lev);
if ($num > 0) {
    $fetch = fetcharray($res_lev);
    $level_income = $fetch['bonus'];
}

$sql_reward = "SELECT sum(bonus) as bonus FROM `imaksoft_commission_reward_roi`";
$res_reward = query($conn, $sql_reward);

$num = numrows($res_reward);
if ($num > 0) {
    $fetch = fetcharray($res_reward);
    $reward_income = $fetch['bonus'];
}


$total_business = $direct_income + $level_income + $reward_income;
$total_royality_business = $total_business * 0.10;


$sqlp = "SELECT count(*) as sum, plan FROM `imaksoft_commission_royality` group by plan";
$resp = query($conn, $sqlp);
while ($row = mysqli_fetch_assoc($resp)) {

    if ($row['plan'] == "SILVER") {
        if ($row['sum'] > 0 || $row['sum'] != "")
            $u_silver = $row['sum'];
        $t_silver = ($total_royality_business * 0.40) / $u_silver;
    } else if ($row['plan'] == "GOLD") {
        if ($row['sum'] > 0 || $row['sum'] != "")
            $u_gold = $row['sum'];
        $t_gold = ($total_royality_business * 0.30) / $u_gold;
    } else if ($row['plan'] == "PLATINUM") {
        if ($row['sum'] > 0 || $row['sum'] != "")
            $u_platinum = $row['sum'];
        $t_platinum = ($total_royality_business * 0.20) / $u_platinum;
    } else if ($row['plan'] == "DIAMOND") {
        if ($row['sum'] > 0 || $row['sum'] != "")
            $u_diamond = $row['sum'];
        $t_diamond = ($total_royality_business * 0.10) / $u_diamond;
    }
}


$sql_bus = "INSERT INTO `imaksoft_commission_royality_business`(`direct_income`, 
`level_income`, `reward_income`, `total_income`, `royality_percentage`, `silver_user`, 
`gold_user`, `titanium_user`, `diamond_user`, `silver_per`, `gold_per`, `titanium_per`,
 `diamond_per`, `date`) VALUES ($direct_income,$level_income,$reward_income,$total_business,$total_royality_business
, $u_silver, $u_gold,$u_platinum,$u_diamond,$t_silver, $t_gold,$t_platinum,$t_diamond,'" . date('Y-m-d') . "')";
query($conn, $sql_bus);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `imaksoft_commission_royality` order by userid";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}


while ($row = mysqli_fetch_assoc($result)) {
    if ($row['plan'] == "SILVER") {
        $bonus = $t_silver;
    } else if ($row['plan'] == "GOLD") {
        $bonus = $t_gold;
    } else if ($row['plan'] == "PLATINUM") {
        $bonus = $t_platinum;
    } else if ($row['plan'] == "DIAMOND") {
        $bonus = $t_diamond;
    }

    if ($bonus > 0)
        $sqla = "INSERT INTO `imaksoft_commission_royality_roi` (`userid`,`plan`,`bonus`,`percentage`,`business`,`status`,`date`) 
VALUES('" . $row['userid'] . "','" . $row['plan'] . "','" . $bonus . "','" . $row['percentage'] . "',$total_royality_business,'R','" . date('Y-m-d') . "')";
    query($conn, $sqla);
}

echo "JOB COMPLETED";
mysqli_close($conn);

?>