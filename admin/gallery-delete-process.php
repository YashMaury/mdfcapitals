<?php
session_start();
include('inc/function.php');
if(!isset($_SESSION['sid']))
{
redirect('index.php');
}

if($_REQUEST['case']=='delete-img')
{
$sql="DELETE FROM `imaksoft_gallery_image` WHERE `id`='".mysqli_real_escape_string($conn,$_POST['id'])."'";
$res=query($conn,$sql);

$path = 'uploads/images/'.$_POST['image'];
unlink($path);

redirect('gallery-list.php');
}

if($_REQUEST['case']=='delete-video')
{
$sql="DELETE FROM `imaksoft_gallery_video` WHERE `id`='".mysqli_real_escape_string($conn,$_POST['id'])."'";
$res=query($conn,$sql);

if($_POST['type'] == 'upload'){
$path = 'uploads/videos/'.$_POST['video'];
unlink($path);
}

redirect('gallery-list.php');
}


if($_REQUEST['case']=='delete-document')
{
$sql="DELETE FROM `imaksoft_legal_document` WHERE `id`='".mysqli_real_escape_string($conn,$_POST['id'])."'";
$res=query($conn,$sql);

$path = 'uploads/documents/'.$_POST['image'];
unlink($path);

redirect('upload-document.php?d=1');
}

?>