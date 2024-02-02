<?php
session_start();
include('../admin/inc/function.php');

if($_REQUEST['case'] == 'getUserName'){
    $userid=getUserID($conn,$_POST['userId'],'name');
    print_r($userid);
}
?> 