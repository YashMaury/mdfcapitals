<?php
session_start();
include('inc/function.php');
if (!isset($_SESSION['sid'])) {
    redirect('index.php');
}

if ($_SESSION['sid']) {
    
    if(!empty($_POST['address'])){
    $path = "../assets/";
    if (!is_dir($path)) {
        mkdir($path, 0777, true);
        // echo "directory created";
    }
    $filename = "qr_code.png";
    $target_file = $path . $filename;
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        
        $myfile = fopen("qr_code_address.txt", "w") or die("Unable to open file!");
        $txt = $_POST['address'];
        fwrite($myfile, $txt);
        fclose($myfile);

        redirect('qr_code.php?m=1');
    } else {
        redirect('qr_code.php?e=1');
    }
    
    redirect('qr_code.php?m=1');
} else {
    redirect('qr_code.php?e=1');
}
}

?>