<?php
session_start();
include('../admin/inc/function.php');
if (!isset($_SESSION['mid'])) {
    redirect('index.php');
}

if ($_SESSION['mid']) {
    $userid = getMember($conn, $_SESSION['mid'], 'userid');
    $receipt = $_POST['receipt'];
    $transaction_id = $_POST['transaction_id'];
    $amount = $_POST['amount'];
    $transaction_date = $_POST['transaction_date'];
    $date = date("Y-m-d h:i:s");

    if ($_POST['transaction_id'] !== "" | $_POST['$transaction_id'] !== null) {
        $path = "uploads/receipt/" . $userid . "/";

        if (!is_dir($path)) {
            mkdir($path, 0777, true);
            // echo "directory created";
        }

        $filename = time() . ".png";
        // $filename = "MDF-R".rand(1111111, 9999999) . ".png";
        $target_file = $path . $filename;

        if (move_uploaded_file($_FILES["receipt"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO `imaksoft_investment_receipt` (`user_id`,`transaction_id`,`amount`,`receipt`,`transaction_date`,`status`,`created_at`) VALUES ('" . $userid . "','" . $transaction_id . "','" . $amount . "','" . $filename . "','" . $transaction_date . "',0,'" . $date . "')";
            $res = query($conn, $sql);
        } else {
            redirect('upload-receipt.php?e=2');
        }

        redirect('receipt.php?m=1');
    } else {
        redirect('upload-receipt.php?e=1');
    }

}

?>