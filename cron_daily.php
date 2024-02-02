<?php
date_default_timezone_set('Asia/Kolkata');
$conn = mysqli_connect('localhost', 'glintqnj_mdfcapitals', 'Glintel@2023', 'glintqnj_mdfcapitals');

//$conn=mysqli_connect('localhost','root','root','mdfcapitals',);  
// $job_date=date('2024-01-02');
$job_date=date('Y-m-d');

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
     $sql = "SELECT * FROM `imaksoft_member_roi` WHERE `status`='R'";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
   

  echo "Job Executed";
    while ($row = mysqli_fetch_assoc($result)) {
        
        $curr_date=date_create($job_date);
        $joining_date=date_create($row['date']);
        $diff=date_diff($joining_date,$curr_date);
        if($diff->format("%R")=="+"){
     $days=(string)$diff->format("%a");
  
        if (isset($row['userid'])) {
           
            if($row['roi_days']<=$days){
            if(date('N',strtotime($job_date))<6){
                // if(true){
            if ($row['nodays'] >= $row['roi_days']) {
                $amount = $row['amount'];
                $user_id = $row['userid'];
                $id=$row['id'];
                
                // Assuming $i and $stdate are defined somewhere in your code
             
                $stdate = date('Y-m-d'); // You need to set a proper value for $stdate
              
             
                // Adjust commission rate based on the amount
                if ($amount <= 10 || $amount <= 25 || $amount <= 50 || $amount <= 100) {
                    $commissionRate = 0.5;
                } elseif ($amount <= 500) {
                    $commissionRate = 0.7;
                } elseif ($amount >= 1000) {
                    $commissionRate = 1;
                }
                
                $commissionAmount = $amount * ($commissionRate / 100);
                
                // Update imaksoft_member_roi with roi_days = roi_days + 1
                $updateSql = "UPDATE `imaksoft_member_roi` SET `roi_days` = `roi_days` + 1 WHERE `id` = '$id'";
                $result_update = mysqli_query($conn, $updateSql);
                
                if (!$result_update) {
                    die("Update query failed: " . mysqli_error($conn));
                }
                
                // Insert into imaksoft_commission_roi //make it H
                
                 $account_name= $row['account'];
              $plan=$row['plan'];
                 $sql = "INSERT INTO `imaksoft_commission_roi` 
                        (`userid`,`plan`, `account`, `amount`, `percentage`, `bonus`, `status`, `date`) 
                        VALUES ('$user_id','$plan','$account_name', '$amount', '$commissionRate', '$commissionAmount', 'R', '$job_date')";
                
                $result_insert = mysqli_query($conn, $sql);
                
                if (!$result_insert) {
                    die("Insert query failed: " . mysqli_error($conn));
                }
            }
        } 
    }
    }
    }
    }

    
    mysqli_close($conn);
?>
