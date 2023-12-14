<?php
session_start();
include('../admin/inc/function.php');
if (!isset($_SESSION['mid'])) {
    redirect('index.php');
}

if ($_SESSION['mid']) {

    $userid = $_POST['userid'];
    $bonus = $_POST['bonus'];

    if ($_REQUEST['p'] == 's') {
        $sql = "INSERT INTO `imaksoft_commission_royality` (`userid`,`bonus`,`date`) VALUES ('" . $userid . "','" . $bonus . "','" . date('Y-m-d') . "')";
        $res = query($conn, $sql);

        redirect('royality-income.php?msg=1');
    }

}

?>