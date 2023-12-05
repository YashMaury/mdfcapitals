<?php
session_start();
include('admin/inc/function.php');
date_default_timezone_set('Asia/Kolkata');
   $conn=mysqli_connect('localhost','root','root','mdfcapitals');
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM `imaksoft_member` order by userid";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

$users=array();
     while ($row = mysqli_fetch_assoc($result)) {
        echo $row['userid'];
        if (isset($row['userid'])) {

            array_push($users,
            "ZT5305981");
           getLeveIncome($conn,$users,12,0);
           array_splice($users,0);
            print_r($allUsers);
            echo "**************<br>";

        }
    }


    function getLeveIncome($conn,$userid,$amount,$k){
        print_r($userid);
        echo "Level".$k;
        echo "<br>"; 
        $loop_members=array();
        $all_val=array();
        $size=sizeof($userid);
        if($k<=6){


        for($i=0;$i<$size;$i++){
            $allUsers=getAllSponsorUserid($conn,$userid[$i],'userid');
            if($allUsers){
            $loop_members=array_merge($loop_members,$allUsers);

            }
         
        }
        $k=$k+1;

        getLeveIncome($conn,$loop_members,5,$k);
    }

 
    }
    
    mysqli_close($conn);
?>
