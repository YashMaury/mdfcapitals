<?php
session_start();
include('admin/inc/function.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM `imaksoft_member` WHERE `userid`='" . trim(mysqli_real_escape_string($conn, $_POST['sponsor'])) . "'  ";
    $res = query($conn, $sql);
    $num = numrows($res);
    if ($num > 0) {
        $sqlp = "SELECT * FROM `imaksoft_member` WHERE `phone`='" . trim(mysqli_real_escape_string($conn, $_POST['phone'])) . "' AND `email`='" . trim(mysqli_real_escape_string($conn, $_POST['email'])) . "'";
        $resp = query($conn, $sqlp);
        $nump = numrows($resp);
        if ($nump < 20) {
            $fetch = fetcharray($res);
            $userid = 'MDF' . rand(1111111, 9999999);

            $sql = "INSERT INTO `imaksoft_member`(`userid`,`sponsor`,`password`,`name`,`email`,`phone`,`address`,`date`,`status`,`placement`,`bname`,`branch`,`accname`,`accno`,`ifscode`,`bitcoin`,`upi`,`paystatus`,`approved`) VALUES('" . trim($userid) . "','" . trim($_POST['sponsor']) . "','" . base64_encode(trim($_POST['password'])) . "','" . trim($_POST['name']) . "','" . trim($_POST['email']) . "','" . trim($_POST['phone']) . "','" . trim($_POST['address']) . "','" . date('Y-m-d') . "','A','','','','','','','','','I','')";

            $res = query($conn, $sql);
            $id = mysqli_insert_id($conn);
            if ($id) {
                if ($_POST['email']) {
                    $headers = "From: " . $welcome . "\r\n";
                    $headers .= "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

                    $to = trim($_POST['email']);
                    $subject = "Welcome To " . $title . ". Your ref is successfully completed!";

                    $message = "Dear " . trim($_POST['name']) . " ,<br/> Welcome To " . $title . ". <br /><br/>User ID: " . $userid . "<br /> Password: " . trim($_POST['password']) . " <br /><br />Visit us " . $domain . " to login into your account. <br /><br/>Thanks <br/>" . $title;

                    mail($to,$subject,$message,$headers);
                }
            }

            if ($_REQUEST['case'] == 'introducer') {
                redirect('introducer.php?msg=4&id=' . $id . '&intr=' . trim($_POST['sponsor']));
            } else {
                redirect('ref.php?msg=4&id=' . $id);
            }

        } else {
            if ($_REQUEST['case'] == 'introducer') {
                redirect('introducer.php?intr=' . trim($_POST['sponsor']) . '&e=1');
            } else {
                redirect('ref.php?reg=' . trim($_POST['sponsor']) . '&e=1');
            }
        }
    } else {

        if ($_REQUEST['case'] == 'introducer') {
            redirect('introducer.php?intr=' . trim($_POST['sponsor']) . '&q=4');
        } else {
            redirect('ref.php?reg=' . trim($_POST['sponsor']) . '&q=4');
        }

    }
}
?>