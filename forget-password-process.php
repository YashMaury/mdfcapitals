<?php
session_start();
include('admin/inc/function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM `imaksoft_member` WHERE `email`='" . trim(mysqli_real_escape_string($conn, $_POST['email'])) . "'  ";
    $res = query($conn, $sql);
    $num = numrows($res);
    if ($num > 0) {
            $password = rand(1111111, 9999999);
            $sql = "UPDATE `imaksoft_member` SET `password` = '" . base64_encode(trim($password)) . "' WHERE `email` = '".$_POST['email']."'";
            $res = query($conn, $sql);
            
            if ($_POST['email']) {
                $headers = "From: " . $welcome . "\r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
                $to = trim($_POST['email']);
                $subject = "Welcome, Your password has been reset successfully!";
                $message = "Dear User ,<br/> Your new Password is <b>".$password."</b> <br /><br />Visit us " . $domain . " to login into your account. <br /><br/>Thanks <br/>" . $title;
                mail($to,$subject,$message,$headers);
            }
    } else {
        redirect('forget-password.php?e=1');
    }
    redirect('forget-password.php?s=1');
}
?>