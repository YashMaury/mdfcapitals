<?php
session_start();
include('inc/function.php');
if(!isset($_SESSION['sid']))
{
redirect('index.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" /><meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Admin | Meta Dream Force</title>

<link rel="icon" href="../assets/favicon.jpeg" type="image/x-icon" />

<link id="ctl00_style" href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

<link href="assets/css/style.css" rel="stylesheet" /><link href="assets/css/plugins.css" rel="stylesheet" />

<link href="assets/css/icons.css" rel="stylesheet" />

<link href="assets/css/animate.css" rel="stylesheet" />

<link href="assets/switcher/css/switcher.css" rel="stylesheet" /><link rel="stylesheet" href="assets/switcher/demo.css" /><meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body class="main-body app sidebar-mini ltr light-theme open">