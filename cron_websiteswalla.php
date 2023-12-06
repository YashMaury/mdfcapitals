<?php
date_default_timezone_set('Asia/Kolkata');
   $conn=mysqli_connect('localhost','root','root','mdfcapitals');
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT * FROM `imaksoft_member_roi` WHERE `status`='R'";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }
   


    while ($row = mysqli_fetch_assoc($result)) {
        
        $curr_date=date_create(date('Y-m-d'));
        $joining_date=date_create($row['date']);
       $diff=date_diff($joining_date,$curr_date);
     $days=(string)$diff->format("%a");
       

        if (isset($row['userid'])) {
           
            if($row['roi_days']<$days){
        if(date('N',strtotime(date('Y-m-d')))<6){
            if ($row['nodays'] >= $row['roi_days']) {
                $amount = $row['amount'];
                $user_id = $row['userid'];
                $id=$row['id'];
                
                // Assuming $i and $stdate are defined somewhere in your code
                $i = 1; // You need to set a proper value for $i
                $stdate = date('Y-m-d'); // You need to set a proper value for $stdate
                
                // Use DateTime for date manipulation
                $stdateObj = new DateTime($stdate);
                $stdateObj->modify("+$i day");
                $stdate1 = $stdateObj->format('Y-m-d');
                
                
                
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
                $sql = "INSERT INTO `imaksoft_commission_roi` 
                        (`userid`, `account`, `amount`, `percentage`, `bonus`, `status`, `date`) 
                        VALUES ('$user_id', '1', '$amount', '$commissionRate', '$commissionAmount', 'R', '$stdate1')";
                
                $result_insert = mysqli_query($conn, $sql);
                
                if (!$result_insert) {
                    die("Insert query failed: " . mysqli_error($conn));
                }
            }
        } 
    }
    }
    }
    
    mysqli_close($conn);
?>
