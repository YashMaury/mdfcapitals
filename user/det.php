<?php
session_start();
$placement;
include('../admin/inc/function.php');
if(!isset($_SESSION['mid']))
{
redirect('../index.php');
}
$userid=getMember($conn,$_SESSION['mid'],'userid');
$left=2;
?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?=$title?></title>
<meta name="description" content="." />
<meta name="keywords" />
<meta name="author" content="" />
    <!-- Sweet Alert -->
    <link href="assets/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css" />
    <script src="assets/vendors/bower_components/sweetalert/dist/sweetalert.min.js" type="text/javascript"></script>
    <link rel="icon" href="../assets/favicon.jpeg" />
    <!-- Data table CSS -->
    <link href="assets/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" /><link href="assets/vendors/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" /><link href="assets/vendors/bower_components/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet" />
    <!-- Toast CSS -->
    <link href="assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet" /><link rel="preconnect" href="https://fonts.googleapis.com" /><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" /><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&amp;display=swap" rel="stylesheet" />

    <script src="assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <style>
        .toast {
            opacity: 1 !important;
            box-shadow: none !important;
        }
    </style>
    
   
</head>
<body>

        <div class="wrapper  theme-6-active pimary-color-green">
           



        <?php include('sidebar.php') ?>




          <div class="right-sidebar-backdrop">
            </div>
            <div class="page-wrapper">
                <div class="container-fluid pt-25">
                    
    <div class="row margin-balance">



    <?php if($_REQUEST['p']=='p'){?>
        <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

    <div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">

<div class="card">
<div class="card-header"><br>
<div class="card-title">Profile Information</div>
</div>
<div class="card-body">

<div class="card-body">

<?php if(isset($_REQUEST['Updated'])=='1'){?>
<div align="center" style="color:#009933;font-size:16px;">Your profile successfully updated!</div>
<?php }?>

<form class="form" action="imaksoft-process.php?p=p" autocomplete="off" method="post">
<div class="row mt-3">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Name</label>
<input type="text" class="form-control" name="name" placeholder="Name" value="<?=getMember($conn,$_SESSION['mid'],'name')?>" <?php if(getMember($conn,$_SESSION['mid'],'name')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Email</label>
<input type="email" class="form-control" name="email" placeholder="Email" value="<?=getMember($conn,$_SESSION['mid'],'email')?>" <?php if(getMember($conn,$_SESSION['mid'],'email')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Phone</label>
<input type="text" class="form-control" id="phone" name="phone" value="<?=getMember($conn,$_SESSION['mid'],'phone')?>" placeholder="Phone Number" <?php if(getMember($conn,$_SESSION['mid'],'phone')!=''){?>readonly="readonly"<?php }?>  />
</div>
</div>

<div class="col-md-6">
<div class="form-group form-group-default">
<label>Address</label>
<input type="text" class="form-control" value="<?=getMember($conn,$_SESSION['mid'],'address')?>" name="address" id="address" placeholder="Address" <?php if(getMember($conn,$_SESSION['mid'],'address')!=''){?>readonly="readonly"<?php }?>  />
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Bank Name</label>
<input type="text" class="form-control" id="bname" name="bname" value="<?=getMember($conn,$_SESSION['mid'],'bname')?>" placeholder="Bank Name" <?php if(getMember($conn,$_SESSION['mid'],'bname')!=''){?>readonly="readonly"<?php }?>  />
</div>
</div>

<div class="col-md-6">
<div class="form-group form-group-default">
<label>Branch</label>
<input type="text" class="form-control" value="<?=getMember($conn,$_SESSION['mid'],'branch')?>" name="branch" id="branch" placeholder="Branch" <?php if(getMember($conn,$_SESSION['mid'],'branch')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>Account Holder Name</label>
<input type="text" class="form-control" id="accname" name="accname" value="<?=getMember($conn,$_SESSION['mid'],'accname')?>" placeholder="Account Holder Name" <?php if(getMember($conn,$_SESSION['mid'],'accname')!=''){?>readonly="readonly"<?php }?>  />
</div>
</div>

<div class="col-md-6">
<div class="form-group form-group-default">
<label>Account No</label>
<input type="text" class="form-control" value="<?=getMember($conn,$_SESSION['mid'],'accno')?>" name="accno" id="accno" placeholder="Account No" <?php if(getMember($conn,$_SESSION['mid'],'accno')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>
</div>

<div class="row mt-3">
<div class="col-md-6">
<div class="form-group form-group-default">
<label>IFS Code</label>
<input type="text" class="form-control" id="ifscode" name="ifscode" value="<?=getMember($conn,$_SESSION['mid'],'ifscode')?>" placeholder="IFS Code" <?php if(getMember($conn,$_SESSION['mid'],'ifscode')!=''){?>readonly="readonly"<?php }?>  />
</div>
</div>

<div class="col-md-6">
<div class="form-group form-group-default">
<label>Bitcoin Wallet</label>
<input type="text" class="form-control" name="bitcoin" id="bitcoin" placeholder="Wallet Address" value="USDT-TRC-20" <?php if(getMember($conn,$_SESSION['mid'],'bitcoin')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>
</div>

<div class="row mt-3">

<div class="col-md-6">
<div class="form-group form-group-default">
<label>UPI</label>
<input type="text" class="form-control" name="upi" id="upi" placeholder="UPI" value="<?=getMember($conn,$_SESSION['mid'],'upi')?>" <?php if(getMember($conn,$_SESSION['mid'],'upi')!=''){?>readonly="readonly"<?php }?> />
</div>
</div>

</div>


<div class="text-left mt-3 mb-3">
<button class="btn btn-success">Update Now</button>
</div>
</form>
</div>
</div>
</div>


<?php }else if($_REQUEST['p']=='ps'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

    <div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">

<div class="card">
<div class="card-header"><br>
<div class="card-title">Change Password</div>
</div><br>
<div class="card-body">
<?php if($_REQUEST['invalid']==1){?><div align="center"><div id="norecord" style="color:#FF0000;">Current password does not match!</div></div><?php }?>
<?php if($_REQUEST['updated']==2){?><div align="center"><div id="norecord" style="color:#009900;">New password successfully updated!</div></div><?php }?>
<?php if($_REQUEST['invalid']==3){?><div align="center"><div id="norecord" style="color:#FF0000;">Confirm password does not match!</div></div><?php }?>
<form class="form" action="imaksoft-process.php?p=ps" autocomplete="off" method="post">

<div class="form-group">
<input type="password" class="form-control input-pill" id="current" name="current" placeholder="Current Password" required>
</div>
<br>
<div class="form-group">
<input type="password" class="form-control input-pill" id="newpass" name="newpass" placeholder="New Password" required>
</div>
<br>
<div class="form-group">
<input type="password" class="form-control input-pill" id="conpass" name="conpass" placeholder="Confirm Password" required>
</div>
<br>
<div class="card-action">
<button class="btn btn-success">Update Now</button>
</div>
</form>
</div>
</div>

</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['p']=='di'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

    <div class="col-md-12 col-sm-12">

<div class="panel panel-default card-view">
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">Direct Income Statement</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">SI_No</td>
<td align="center">FromID</td>
<td align="center">Name</td>
<td align="center">Income</td>
<td align="center">Date</td>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_commission_direct';
$lim=100;
$tpage='commission-roi.php';
$where="WHERE `userid`='".getMember($conn,$_SESSION['mid'],'userid')."'  ORDER BY `id` DESC";

include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr>
<td align="center"><?=$i?></td>
<td align="center"><?=$fetch['fromid']?></td>
<td align="center"><?=ucfirst(getFromUserID($conn,$fetch['fromid'],'name'))?></td>
<td align="center"><?=$fetch['bonus']?></td>
<td align="center"><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="5" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>

<div align="center"><?=$pagination?></div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>



<?php }else if($_REQUEST['p']=='mi'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

<div class="col-md-12 col-sm-12">

<div class="panel panel-default card-view">
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">Monthly Income Statement</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">SI_No</td>
<td align="center">Amount</td>
<td align="center">Percentage</td>
<td align="center">Income</td>
<td align="center">Date/Time</td>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_commission_roi';
$lim=100;
$tpage='commission-roi.php';
$where="WHERE `userid`='".getMember($conn,$_SESSION['mid'],'userid')."' AND `status`='R' ORDER BY `id` DESC";

include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr>
<td align="center"><?=$i?></td>
<td align="center"><?=$fetch['amount']?></td>
<td align="center"><?=$fetch['percentage']?> %</td>
<td align="center"><?=$fetch['bonus']?></td>
<td align="center"><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="5" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>

<div align="center"><?=$pagination?></div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>



<?php }else if($_REQUEST['p']=='ri'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

<div class="col-md-12 col-sm-12">

<div class="panel panel-default card-view">
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">Daily Reward Income Statement</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">SI_No</td>
<td align="center">Reward</td>
<td align="center">Date/Time</td>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_commission_ads';
$lim=100;
$tpage='commission-roi.php';
$where="WHERE `userid`='".getMember($conn,$_SESSION['mid'],'userid')."' ORDER BY `id` DESC";

include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr>
<td align="center"><?=$i?></td>
<td align="center"><?=$fetch['bonus']?></td>
<td align="center"><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="5" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>

<div align="center"><?=$pagination?></div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>

</div>



<?php }else if($_REQUEST['p']=='rl'){?>

<div class="col-md-12 col-sm-12">

            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Referrals</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    <div class="outer-image mb-25 mt-30">

                        <div class="col-md-9 refer-link">
                            <h2><i class="fa fa-share-square-o"></i>&nbsp;Your Personal Referral Link</h2>
                            <p class="url">
                                <span id="ctl00_ContentPlaceHolder1_lblreferral">


                                    <a href="/ref.php?spon=<?=$userid?>" id="ctl00_ContentPlaceHolder1_refferal" placeholder="Search" type="text" target="blank"><?=$domain?>/ref.php?spon=<?=$userid?></a>
                                    <a>
                                        <span class="pera">********</span>
                                    </a>
                                </span>

                                <a href="JavaScript:Void(0);" onclick="CopyToClipboard('ctl00_ContentPlaceHolder1_refferal')" class="btn-left">
                                    <img id="ctl00_ContentPlaceHolder1_Image1" class="fa fa-copy" src="" style="border-width:0px;" />
                                    <!-- <i class="fa fa-copy"></i>-->
                                    &nbsp;
                                        <span>Referral Link</span>
                                </a>
                            </p>

                            <p class="url" style="display:none;">
                                <span id="ctl00_ContentPlaceHolder1_lblreferral2">
                                    <a id="ctl00_ContentPlaceHolder1_A1" placeholder="Search" type="text"></a>
                                    <a id="ctl00_ContentPlaceHolder1_RLINK">
                                        <span id="ctl00_ContentPlaceHolder1_lblReferright"></span></a>
                                    <span class="pera">********</span>
                                </span>

                                <a href="JavaScript:Void(0);" onclick="CopyToClipboard('ctl00_ContentPlaceHolder1_lblReferright')" class="btn-right">
                                    <img id="ctl00_ContentPlaceHolder1_Image2" class="fa fa-copy" src="" style="border-width:0px;" />
                                    <!--<i class="fa fa-copy"></i>-->
                                    &nbsp;
                                        <span>Right Referral Link</span>
                                </a>
                            </p>
                        </div>

                        <div class="col-md-3 hidden-xs tree">
                            <span><i class="fa fa-share"></i></span>
                        </div>

                    </div>
                </div>

                <div class="panel-wrapper collapse in">
                    <div class="panel-body">


                        <div class="graph-chart mt-40">

                            <ul class="list-group no-margin">
                                <li class="list-group-item">Referrals<span class="pull-right text-info">
                                    <span>
                                        <span id="ctl00_ContentPlaceHolder1_lblreferal"><?=getNoOfSponsor($conn,$userid)?></span></span></span></li>
                                <li class="list-group-item">Active Referrals<span class="pull-right text-success">
                                    <span>
                                        <span id="ctl00_ContentPlaceHolder1_lblActiverefe"><?=getNoOfSponsorActive($conn,$userid)?></span></span></span></li>
                                <li class="list-group-item">Non Active Referrals<span class="pull-right  text-danger">
                                    <span>
                                        <span id="ctl00_ContentPlaceHolder1_lblNonactiveid"><?=getNoOfSponsorInActive($conn,$userid)?></span></span></span></li>
                            </ul>
                        </div>


                    </div>
                </div>

            </div>
</div>
<style>
        thead {
            color: white;
        }

        .table > thead > tr > th {
            border-bottom-width: 1px;
            font-size: 14px;
            font-weight: 300;
        }

        table.dataTable > thead > tr > th, table.dataTable > tbody > tr > th, table.dataTable > tfoot > tr > th, table.dataTable > thead > tr > td, table.dataTable > tbody > tr > td, table.dataTable > tfoot > tr > td {
            padding: 11px 5px !important;
            outline: 0;
            border: 0;
            border-bottom: 1px solid #d2d2d2;
            font-size: 13px;
        }

        .table > thead > tr > th {
            border-bottom-width: 1px;
            font-size: 15px;
            font-weight: 300;
        }

        .togglebutton label {
            cursor: pointer;
            color: #4e4e4e;
        }

        #myTabs_12 {
            border-bottom: 1px solid #8bc34a;
        }

       .outer-image {
	padding: 10px;
	margin-left: 10px;
	margin-right: 10px;
	display: flex;
	background: #0d152f;
	background-size: cover;
	padding-bottom: 20px;
	border: 1px solid #ffffff29;
	border-radius: 12px;
}

        .col-md-3.tree {
            text-align: center;
            font-size: 54px;
            color: #fff;
            border-left: 1px solid #ffffff38;
            padding-top: 30px;
        }

        .refer-link h2 {
            color: #fff;
            font-size: 19px;
        }

        .url {
            font-size: 14px;
            line-height: 36px;
            color: #fff !important;
            background: #ffffff14;
            margin: 4px 0px 0px;
            padding: 0px 0 0 10px;
            border-radius: 4px;
        }

        @media only screen and (max-width: 600px) {
            .outer-image {
                display: block;
            }

            .refer-link h2 {
                font-size: 15px;
            }

            .url {
	font-size: 14px;
	line-height: 36px;
	color: #fff !important;
	background: #384662;
	margin: 4px 0px 0px;
	padding: 0px 0 0 10px;
	border-radius: 4px;
}

            .pera {
                display: none;
            }
        }

        .btn-left, .btn-right {
            background: linear-gradient(45deg, #2878F0, #17EAAF);
            padding: 0px 7px;
            float: right;
            border-radius: 0 5px 5px 0;
            color: #fff !important;
            min-width: 155px;
            text-align: left;
            font-size: 13px;
        }

        #ctl00_ContentPlaceHolder1_refferal {
            color: #fff;
        }

        .pera {
            position: absolute;
            background: #384662;
            /* width: 60px; */
            margin-left: -63px;
            font-size: 20px;
            padding-top:;
            color: #fff;
            line-height: 30px;
            padding-top: 6px;
        }

.list-group-item {
	color: #132250 !important;
	font-weight: 500;
	font-size: 14px;
	background: #f4f6f9;
	border: none !important;
	margin-top: 8px;
	border-radius: 5px;
}



        #ctl00_ContentPlaceHolder1_lblReferright {
            color: #fff !important;
        }
    </style>
            <script>
            $(document).ready(function () {
                register_tab_GUID();
            });
            /*
            Multi Tab detection for single browser.
            */
            // multi tab detection
            function register_tab_GUID() {
                // detect local storage available
                if (typeof (Storage) !== "undefined") {
                    // get (set if not) tab GUID and store in tab session
                    if (sessionStorage["tabGUID"] == null) sessionStorage["tabGUID"] = tab_GUID();
                    var guid = sessionStorage["tabGUID"];

                    // add eventlistener to local storage
                    window.addEventListener("storage", storage_Handler, false);

                    // set tab GUID in local storage
                    localStorage["tabGUID"] = guid;
                }
            }

            function storage_Handler(e) {
                // if tabGUID does not match then more than one tab and GUID
                if (e.key == 'tabGUID') {
                    if (e.oldValue != e.newValue) tab_Warning();
                }
            }

            function tab_GUID() {
                function s4() {
                    return Math.floor((1 + Math.random()) * 0x10000)
                        .toString(16)
                        .substring(1);
                }
                return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
                    s4() + '-' + s4() + s4() + s4();
            }

            function tab_Warning() {
                var x = confirm('Can not be opened in another tab, Your current session expired.');
                if (x) {
                    window.location = '../Sign_in.aspx?returnurl=' + window.location.href;
                }
            }
        </script>
        <script>
            setTimeout(function () {
                $('#Notice').modal();
            }, 3000);

        </script>


        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>













<?php }else if($_REQUEST['p']=='md'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

<div class="col-md-12 col-sm-12">

<div class="panel panel-default card-view">
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header"  >
<div class="card-title">My Direct</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-head-bg-primary mt-1">
<tdead>

<td align="center">Sl_No</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Phone</td>
<td align="center">Status</td>
<td align="center">Pay_Status</td>
<td align="center">Date</td>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_member';
$lim=100;
$tpage='member-direct-downline.php';
$where="WHERE `sponsor`='".getMember($conn,$_SESSION['mid'],'userid')."' ORDER BY `id` DESC";
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<td align="center"><?=$i;?></td>
<td align="center"><?=$fetch['userid']?></td>
<td align="center"><?=ucfirst($fetch['name'])?></td>
<td align="center"><?=$fetch['phone']?></td>
<td align="center" style="font-weight:bold;"><?php if($fetch['status']=='A'){?><a style="color:#00FF00;">Active</a><?php }else{?> <a style="color:#FF0000;">Inactive</a><?php }?></td>
<td align="center" style="font-weight:bold;"><?php if($fetch['paystatus']=='I'){?><a style="color:#FF0000;">Pending</a><?php }else{?><a style="color:#00FF00;">Paid</a><?php }?></td>
<td align="center"><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="10" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
<div align="center"><?=$pagination?></div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<?php }else if($_REQUEST['p']=='t'){?>
    <style>
        .topbox h4 {
            text-transform: none;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent;
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%)
        }

        .modal-dialog .modal-content {
            border-radius: 0px;
        }

        .timer {
            color: #7ac1ff;
            font-family: 'Orbitron', sans-serif;
            font-size: 17px;
            letter-spacing: 1px;
        }

        .clock-outer {
            padding: 4px 10px;
            background: #19262e85;
            border: 5px solid #19262ec9;
            min-width: 155px;
            text-align: center;
        }

        .timer-bold {
            font-weight: 600;
            color: #85d510;
        }

        .img-responsive {
            display: block;
            max-width: 100%;
        }

        .txt-success, .text-success {
            color: #16E9AE !important;
        }

        .text-white {
            color: #fff !important;
        }

        #ctl00_ContentPlaceHolder1_lblNews p span {
            color: #efedfe !important;
        }

        #ctl00_ContentPlaceHolder1_refferal {
	background: #eceef1;
	color: #464c59 !important;
	line-height: 27px;
	text-align: left;
	border: 0;
}

        .panel-primary > .panel-heading {
            background: #00000038;
        }

        .panel-title {
            color: #efedfe;
            font-weight: 600;
        }

        .panel-warning > .panel-heading {
            background: #ff9700;
        }

        .btn.btn-primary, .wizard > .actions .disabled a, .wizard > .actions .disabled a:hover, .wizard > .actions .disabled a:active, .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active, .dt-buttons .dt-button, .tablesaw-sortable th.tablesaw-sortable-head button.btn-primary, .tablesaw-sortable th.tablesaw-sortable-head .dt-buttons button.dt-button, .dt-buttons .tablesaw-sortable th.tablesaw-sortable-head button.dt-button, .sweet-alert button.btn-primary, .owl-theme .owl-nav .btn-primary[class*="owl-"], .owl-theme .owl-nav .wizard > .actions a[class*="owl-"], .wizard > .actions .owl-theme .owl-nav a[class*="owl-"], .owl-theme .owl-nav .dt-buttons [class*="owl-"].dt-button, .dt-buttons .owl-theme .owl-nav [class*="owl-"].dt-button, button.btn-primary.fc-agendaDay-button.fc-state-default.fc-corner-right, .dt-buttons button.fc-agendaDay-button.fc-state-default.fc-corner-right.dt-button, button.btn-primary.fc-month-button.fc-state-default.fc-corner-left, .dt-buttons button.fc-month-button.fc-state-default.fc-corner-left.dt-button, button.btn-primary.fc-agendaWeek-button, .btn-primary.fc-prev-button, .btn-primary.fc-next-button, .btn-primary.fc-today-button {
            background: #0f73ee;
            border: solid 1px #0f72eb;
        }

        .txt-light {
            color: #fff !important;
        }

        td {
            padding: 0 10px;
        }

        .news {
            height: 268px;
        }

        .list-group-item {
            color: #5b5b5b !important;
        }

            .list-group-item > a {
                color: #5b5b5b !important;
            }

        .first {
            border-color: #fff;
            background: #607d8b;
        }

        .graph-item.first > .graph-chart > .round {
            background: #446170 !important;
        }

        .sec {
            border-color: #fff;
            background: #7aca07;
        }

        .graph-item.sec > .graph-chart > .round {
            background: rgb(110, 186, 0) !important;
        }

        .thir {
            border-color: #fff;
            background: #0063d4;
        }

        .graph-item.thir > .graph-chart > .round {
            background: #0053b2 !important;
        }

        .fort {
            border-color: #fff;
            background: #ff9200;
        }

        .graph-item.fort > .graph-chart > .round {
            background: #d97c00 !important;
        }

        .list-group-item {
            background-color: none;
        }

        /*.box1 {
            background: #ff9200;
        }

        .box2 {
            background: #0091d4;
        }

        .box3 {
            background: #6fbd00;
        }

        .box4 {
            background: #af43af;
        }*/

        .panel.panel-primary.card-view.box1 > .panel-heading {
            background: #ff6f00 !important;
        }

        .panel.panel-primary.card-view.box2 > .panel-heading {
            background: #0063d4 !important;
        }

        .panel.panel-primary.card-view.box3 > .panel-heading {
            background: #519700 !important;
        }

        .panel.panel-primary.card-view.box4 > .panel-heading {
            background: #992098 !important;
        }



        .table-striped > tbody > tr:nth-of-type(2n+1) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .volume {
            color: #fff;
        }

        .list-group-item {
            background-color: rgba(23, 34, 49, 0);
            /*border: 1px solid #304e71 !important;*/
        }

            .list-group-item:first-child {
                margin-top: 0;
            }

        .list-group-item {
            color: #fff !important;
            font-weight: 500;
            font-size: 13px;
            background: #ffffff0d;
            border: none !important;
            margin-top: 8px;
            border-radius: 5px;
        }

        .table > tbody > tr > td, .jsgrid-table > tbody > tr > td, .table > tbody > tr > th, .jsgrid-table > tbody > tr > th, .table > tfoot > tr > td, .jsgrid-table > tfoot > tr > td, .table > tfoot > tr > th, .jsgrid-table > tfoot > tr > th, .table > thead > tr > td, .jsgrid-table > thead > tr > td, .table > thead > tr > th, .jsgrid-table > thead > tr > th {
            padding: 10px 15px;
        }

        /*.table > tbody > tr > td, .table > thead > tr > th {
            color: #606060 !important;
            border: 1px solid #959494;
            border-left: 0;
            border-right: 0;
        }

        thead > tr {
            background: #ffffff !important;
        }*/

        .table > tbody > tr > td, .table > thead > tr > th {
            box-shadow: none !important;
            background: none !important;
            color: #acb0bf;
            padding-top: 12px !important;
            padding-bottom: 12px !important;
        }

        .graph-content {
            width: 100%;
        }

        @media only screen and (max-width: 600px) {
            .sponsor {
                display: grid;
            }

            .input-group.sponsor span {
                display: contents;
            }

            .input-group.sponsor a {
                height: 60px;
            }

            .page-wrapper {
                padding: 15px 4px 50px;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                transition: all 0.4s ease;
                left: 0;
            }

            .row.mart {
                margin-top: 28px;
            }

            .navbar.navbar-inverse.navbar-fixed-top .mobile-only-brand {
                background: #000;
            }
        }

        .graph-chart {
            position: absolute;
        }

        .carousel-control {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 7%;
            font-size: 20px;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 2px rgba(0,0,0,.6);
            background-color: rgba(0,0,0,0);
            filter: alpha(opacity=50);
            opacity: .5;
        }

        .get-title {
            position: absolute;
            right: 28px;
            top: 21px;
            font-size: 18px;
        }

        @media only screen and (max-width: 600px) {
            .get-title {
                position: inherit;
                right: 28px;
                top: 21px;
                font-size: 18px;
            }

            .token-price {
                display: block !important;
            }
        }

        .token-price {
            display: none;
        }

       .card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-clip: border-box;
	border-radius: 10px;
	border: none !important;
	margin-bottom: 1.3rem;
	background: #fff;
	box-shadow: 0px 10px 30px 0px rgba(0, 0, 0, 0.05);
}

        .pd-20 {
            padding: 20px;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 10px;
        }

        /*.account-background::before {
            background: rgba(12, 14, 26, 0.2) !important;
        }*/

        /*.account-background::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 10px;
        }*/

        /*.account-background {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-size: cover !important;
        }*/

        .globe-bg {
            background: url(images/card2.jpg);
            background-size: cover !important;
            background-position: right;
            border-radius: 11px;
            padding: 5px;
            border: 2px solid #88d00f;
        }

        .account-background {
            background: #00000021 !important;
            background-size: cover !important;
            border-radius: 11px;
            padding: 10px;
        }

        .account h2 {
            font-size: 19px;
            line-height: 31px;
            font-weight: 600;
        }

        .card-title {
            font-weight: 500;
            color: #585f6f;
            font-size: 14px;
            text-transform: capitalize;
        }

       h1, h2, h3, .error-comment, h4, h5, h6, .panel-title {
	color: #192833;
}
        .mb-3, .my-3 {
            margin-bottom: 6px !important;
        }

        .d-flex {
            display: flex !important;
        }

        /*.bg-primary-transparent {
            background-color: rgba(80, 102, 224, 0.2) !important;
        }

        .bg-warning-transparent {
            background-color: rgba(255, 140, 0, 0.15) !important;
        }

        .bg-info-transparent {
            background-color: rgba(69, 170, 242, 0.13) !important;
        }

        .bg-danger-transparent {
            background-color: #f9e2e2 !important;
        }*/

        .card-chart {
	width: 50px;
	height: 50px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 4px;
	margin-top: -38px !important;
	font-size: 20px;
	background: rgb(136, 208, 15);
	border: none !important;
	border-radius: 20%;
}

        .brround {
            border-radius: 50%;
        }

        .wd-70p {
            width: 70%;
        }

        .wd-50p {
            width: 50%;
        }

        .wd-60p {
            width: 60%;
        }

        .wd-40p {
            width: 40%;
        }

        .bg-danger {
            background-color: #f62c55 !important;
        }

        .bg-info {
            background-color: #02d7ff !important;
        }

        .mg-lg-b-50 {
            margin-bottom: 30px;
        }

        .content-title.mb-2 nav {
            position: absolute;
            right: 0;
            top: 0;
        }

        body {
            color: #fff !important;
        }

        #demo.pull-right {
            font-size: 18px;
        }

        .booster {
            padding: 10px;
            font-size: 18px;
            line-height: 47px;
        }

        .cstext {
            font-size: 23px;
            background: #012346b0;
            padding: 8px 15px;
            border: 1px solid #09396a;
            border-radius: 8px;
        }

        #ctl00_ContentPlaceHolder1_rightrefferal {
            background: #f2f2fe12;
            color: #fff !important;
            line-height: 27px;
            text-align: left;
            border: 0;
        }

        .chart {
            width: 100%;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .mb-1.font-weight-bold.refe {
            font-size: 13px;
            color: #fff;
            line-height: 22px;
        }

        .card-title.txtrefe {
            font-weight: 500;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .mb-1.font-weight-bold {
            font-weight: 600 !important;
        }

        #SvgjsSvg4868 {
            z-index: -1;
            margin-top: -30px !important;
        }

        .topbox {
            text-align: right;
            width: 100%;
        }

            .topbox h4 {
                color: #acb0bf;
                font-size: 16px;
            }

        .graph-image {
            width: 65px;
            position: absolute;
            top: 10px;
        }
        /*.card-body.chartcard .col-md-3 {
	padding-left: 10px;
	padding-right: 10px;
}*/


        .card-body.chartcard .col-md-3 {
            border-right: 2px solid #3c4053;
        }

        .card-body.chartcard .col-md-4:last-child {
            border-right: none;
        }

        .progress-bar-primary {
            background: linear-gradient(147deg, #87cf0e 15%, #ffe3a1 93%);
        }

        table.gridtbl {
            border-spacing: 0 10px;
            border-collapse: separate !important;
        }

        .table.gridtbl tr {
            background: linear-gradient(229deg, #213357 0%, #1d2b48 74%);
            background: #fff;
            backdrop-filter: blur(3px);
        }

            .table.gridtbl tr td:last-child {
                border-bottom-right-radius: 10px;
                border-top-right-radius: 10px;
            }

           .table.gridtbl tr td:nth-child(2) {
	font-size: 12px !important;
	color: #3d4b66 !important;
}

        .fa.fa-star-half-empty.circle {
            background: #ffffff29;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            /* background: ; */
            background-clip: border-box;
            /* -webkit-background-clip: text; */
            /* -webkit-text-fill-color: transparent; */
            z-index: 20;
            position: relative;
        }

            .fa.fa-star-half-empty.circle::after {
                content: '';
                background: linear-gradient(147deg, #88d00f 15%, #67a202 93%);
                position: absolute;
                width: 24px;
                height: 24px;
                z-index: -11;
                left: 0px;
                border-radius: 50%;
            }

        .zmdi.zmdi-plus.plus-icon {
            position: absolute;
            right: 10px;
            font-size: 22px;
            color: #6e717d;
            margin-top: 5px;
        }

       .ipbox {
	width: 100%;
	background: #ffffff0a;
	padding: 8px;
	padding-left: 40px;
	border-radius: 10px;
	margin-bottom: 8px;
	border: 2px solid #f2f4f7;
}

        .fa.fa-star.star {
            background: linear-gradient(315deg, #88d00f 0%, #88d00f 74%);
            background-clip: border-box;
            background-clip: border-box;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: absolute;
            margin-top: 10px;
            margin-left: -26px;
        }

      .ipbox h4 {
	color: #132250;
	font-size: 13px;
	line-height: 18px;
	padding-top: 3px;
}

        p.text-muted {
            font-size: 11px;
            line-height: 20px;
        }

        .fa.fa-angle-right.icon-left {
            position: absolute;
            right: 26px;
            font-size: 21px;
            margin-top: 15px;
            color: #6e717d;
        }

        hr.light-grey-hr {
            border-top: 1px solid #2b2f3b;
        }

      .b1::after {
	background: url(images/wave.png) !important;
	content: '';
	position: absolute;
	height: 100%;
	width: 100%;
	background-size: 164px !important;
	opacity: 0.4;
	z-index: -111;
	background-repeat: no-repeat !important;
	background-position: 1px -44px !important;
}

        .rank marquee img {
            max-width: 230px;
        }

     .page-titles {
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding: 0.625rem 1.275rem;
	background: #fff;
	margin-bottom: 1.2rem;
	border-radius: 0.625rem;
	position: relative;
	z-index: 1;
	flex-wrap: wrap;
}

            .page-titles p {
                color: #88d00f !important;
                font-size: 13px !important;
                font-weight: 500 !important;
            }

            .page-titles h4 {
                font-size: 13px !important;
            }
    </style>

    <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    
    


    <style>
        .text {
            position: relative;
            -webkit-animation: myfirst 5s linear 2s infinite alternate;
            color: #fff;
        }




        .actives {
            background: linear-gradient(-47deg, #8731E8 0%, #4528DC 100%);
        }



        @keyframes myfirst {
            0% {
                color: #03ff84;
            }

            25% {
                color: #037eff;
            }

            50% {
                color: #03ff84;
            }

            75% {
                color: #037eff;
            }

            100% {
                color: #03ff84;
            }
        }

        .pad {
            padding-top: 21px;
            padding-right: 10px;
        }

        .rat {
            font-size: 14px;
        }

        .row.cs {
            padding: 0px 30px 0px 20px;
            font-size: 12px;
            margin: 0px -15px 0px -5px;
            line-height: 20px;
            color: #140000;
        }

        .row.css {
            font-size: 12px;
            margin: 0px 0px 0px 0px;
            /* margin-bottom: 20px; */
            background: black;
            color: white;
            font-weight: 700;
        }

        .list-group-item {
            color: #303030;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a {
            padding: 10px 13px 10px 42px;
            display: block;
            color: #d9e0e8;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .username {
                font-size: 10px;
            }
        }

        .fixed-sidebar-left {
            border-right: 1px solid #0e1726;
            z-index: 9999;
        }

        .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
            background-color: none !important;
            opacity: 1;
        }

        .fixed-sidebar-left .side-nav > li > ul > li a::before {
            content: '';
            background: #c0c4d3;
            position: absolute;
            height: 7px;
            width: 7px;
            left: 22px;
            border-radius: 50%;
            margin-top: 6px;
        }

        .blinker {
            color: red;
            -webkit-animation-name: example;
            -webkit-animation-duration: 2s;
            animation-name: example;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            font-weight: 600;
        }

        @-webkit-keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }

        /* Standard syntax */
        @keyframes example {
            from {
                color: red;
            }

            to {
                color: yellow;
            }
        }


        .blinker2 {
            background-color: red;
            -webkit-animation-name: example2;
            -webkit-animation-duration: 1s;
            animation-name: example2;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }


        @-webkit-keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }

        /* Standard syntax */
        @keyframes example2 {
            from {
                background-color: #96682e;
            }

            to {
                background-color: #be9e44;
            }
        }




        .codepad-logo,
        .codepad-logo::before,
        .codepad-logo::after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .codepad-logo {
            width: 200px;
            height: 200px;
            margin: auto;
            color: #3498db;
            border-radius: 6px;
            box-shadow: inset 0 0 0 1px #3498db;
            transform: rotate(45deg);
        }

        .logo {
            background: url("images/logo-light.png") no-repeat 50%/70%;
            width: 100%;
            height: 100%;
            transform: rotate(-45deg);
        }


        .pre {
            background: linear-gradient(rgba(1, 28, 43, 0.63), rgba(2, 44, 67, 0.94)) repeat scroll 0% 0%, rgba(0, 0, 0, 0) url(images/bg-10.jpg) no-repeat fixed center center !important;
            width: 100%;
            /* position: absolute; */
            height: 100vh;
            z-index: 1111;
            position: fixed;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        
        }



        .codepad-logo::before,
        .codepad-logo::after {
            content: '';
            z-index: -1;
            margin: -5%;
            box-shadow: inset 0 0 0 2px;
            border-radius: 6px;
            animation: clipIt 8s linear infinite;
        }

        .codepad-logo::before {
            animation-delay: -4s;
        }

        @keyframes clipIt {
            0%, 100% {
                clip: rect(0px, 220px, 2px, 0px);
            }

            25% {
                clip: rect(0px, 2px, 220px, 0px);
            }

            50% {
                clip: rect(218px, 220px, 220px, 0px);
            }

            75% {
                clip: rect(0px, 220px, 220px, 218px);
            }
        }

        .currency {
            float: left;
            margin: 12px;
        }

            .currency select {
                border-radius: 20px;
                border: 2px solid #be9e44 !important;
            }

        @media only screen and (max-width: 600px) {
            .page-wrapper {
                margin-top: 0px;
            }
        }

        option {
            background: #222;
        }
    </style>

<div class="col-md-12 col-sm-12">

<div class="panel panel-default card-view">
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header"  >
<div class="card-title">Team View</div>
</div>
<div class="card-body" style="overflow:auto;">

<?php if($_REQUEST['placement']){?><h3 align="center" style="color:#24847A;font-size:20px;line-height:20px;">User_ID: <?=$_REQUEST['placement']?>&nbsp;&nbsp;&nbsp;Name: <?=ucwords(strtolower(getMemberUserid($conn,$_REQUEST['placement'],'name')))?></h3><?php }?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 1</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr>
</thead>
<tbody>
<?php

if($_REQUEST['placement'])
{
$sql="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$_REQUEST['placement']."' AND `status`='A'";
}else{
$sql="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".getMember($conn,$_SESSION['mid'],'userid')."' AND `status`='A'";
}
$res=query($conn,$sql);
$num=numrows($res);
$i=0;
$arr=array();
if($num>0)
{
while($fetch=fetcharray($res))
{
$arr[$i]=$fetch['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch['userid']?>"><?=$fetch['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch['name']))?></td>
<td align="center"><?php if($fetch['sponsor']){?><?=$fetch['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch['date']?></td>
</tr>
<?php $i++;}}?>
</tbody>
</table>

<?php
$count=count($arr);
if($count>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 2</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr>
</thead>
<tbody>
<?php
$i=0;
$arr1=array();

for($k=0;$k<$count;$k++)
{
$sql1="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr[$k]."' AND `status`='A'";
$res1=query($conn,$sql1);
$num1=numrows($res1);
if($num1>0)
{
while($fetch1=fetcharray($res1))
{
$arr1[$i]=$fetch1['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch1['userid']?>"><?=$fetch1['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch1['name']))?></td>
<td align="center"><?php if($fetch1['sponsor']){?><?=$fetch1['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch1['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch1['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch1['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table> 
<?php
$count1=count($arr1);
if($count1>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 3</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr2=array();
for($k=0;$k<$count1;$k++)
{
$sql2="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr1[$k]."' AND `status`='A'";
$res2=query($conn,$sql2);
$num2=numrows($res2);
if($num2>0)
{
while($fetch2=fetcharray($res2))
{
$arr2[$i]=$fetch2['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch2['userid']?>"><?=$fetch2['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch2['name']))?></td>
<td align="center"><?php if($fetch2['sponsor']){?><?=$fetch2['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch2['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch2['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch2['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count2=count($arr2);
if($count2>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 4</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr>
</thead>
<tbody>
<?php
$i=0;
$arr3=array();
for($k=0;$k<$count2;$k++)
{
$sql3="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr2[$k]."' AND `status`='A'";
$res3=query($conn,$sql3);
$num3=numrows($res3);
if($num3>0)
{
while($fetch3=fetcharray($res3))
{
$arr3[$i]=$fetch3['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch3['userid']?>"><?=$fetch3['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch3['name']))?></td>
<td align="center"><?php if($fetch3['sponsor']){?><?=$fetch3['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch3['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch3['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch3['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count3=count($arr3);
if($count3>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 5</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr>
</thead>
<tbody>
<?php
$i=0;
$arr4=array();
for($k=0;$k<$count3;$k++)
{
$sql4="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr3[$k]."' AND `status`='A'";
$res4=query($conn,$sql4);
$num4=numrows($res4);
if($num4>0)
{
while($fetch4=fetcharray($res4))
{
$arr4[$i]=$fetch4['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch4['userid']?>"><?=$fetch4['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch4['name']))?></td>
<td align="center"><?php if($fetch4['sponsor']){?><?=$fetch4['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch4['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch4['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch4['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count4=count($arr4);
if($count4>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 6</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr5=array();
for($k=0;$k<$count4;$k++)
{
$sql5="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr4[$k]."' AND `status`='A'";
$res5=query($conn,$sql5);
$num5=numrows($res5);
if($num5>0)
{
while($fetch5=fetcharray($res5))
{
$arr5[$i]=$fetch5['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch5['userid']?>"><?=$fetch5['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch5['name']))?></td>
<td align="center"><?php if($fetch5['sponsor']){?><?=$fetch5['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch5['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch5['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch5['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count5=count($arr5);
if($count5>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 7</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr6=array();
for($k=0;$k<$count5;$k++)
{
$sql6="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr5[$k]."' AND `status`='A'";
$res6=query($conn,$sql6);
$num6=numrows($res6);
if($num6>0)
{
while($fetch6=fetcharray($res6))
{
$arr6[$i]=$fetch6['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch6['userid']?>"><?=$fetch6['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch6['name']))?></td>
<td align="center"><?php if($fetch6['sponsor']){?><?=$fetch6['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch6['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch6['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch6['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count6=count($arr6);
if($count6>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 8</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr7=array();
for($k=0;$k<$count6;$k++)
{
$sql7="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr6[$k]."' AND `status`='A'";
$res7=query($conn,$sql7);
$num7=numrows($res7);
if($num7>0)
{
while($fetch7=fetcharray($res7))
{
$arr7[$i]=$fetch7['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch7['userid']?>"><?=$fetch7['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch7['name']))?></td>
<td align="center"><?php if($fetch7['sponsor']){?><?=$fetch7['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch7['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch7['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch7['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count7=count($arr7);
if($count7>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 9</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr8=array();
for($k=0;$k<$count7;$k++)
{
$sql8="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr7[$k]."' AND `status`='A'";
$res8=query($conn,$sql8);
$num8=numrows($res8);
if($num8>0)
{
while($fetch8=fetcharray($res8))
{
$arr8[$i]=$fetch8['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch8['userid']?>"><?=$fetch8['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch8['name']))?></td>
<td align="center"><?php if($fetch8['sponsor']){?><?=$fetch8['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch8['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch8['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch8['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php
$count8=count($arr8);
if($count8>0)
{?>
<h2 style="color:#000;font-size:20px;">&nbsp;Genealogy - Level 10</h2>
<table class="table table-head-bg-primary mt-1">
<tdead>
<tr align="center">
<td align="center">S_no.</td>
<td align="center">User_ID</td>
<td align="center">Name</td>
<td align="center">Sponsor</td>
<td align="center">Status</td>
<td align="center">Paystatus</td>
<td align="center">Join</td>
</tr></thead>
<tbody>
<?php
$i=0;
$arr9=array();
echo "****";
for($k=0;$k<$count8;$k++)
{
$sql9="SELECT * FROM `imaksoft_member` WHERE `sponsor`='".$arr8[$k]."' AND `status`='A'";
$res9=query($conn,$sql9);
$num9=numrows($res9);
if($num9>0)
{
while($fetch9=fetcharray($res9))
{
$arr9[$i]=$fetch9['userid'];
?>
<tr>
<td align="center"><?=$i+1?></td>
<td align="center"><a href="det.php?p=t&placement=<?=$fetch9['userid']?>"><?=$fetch9['userid']?></a></td>
<td align="center"><?=ucwords(strtolower($fetch9['name']))?></td>
<td align="center"><?php if($fetch9['sponsor']){?><?=$fetch9['sponsor']?><?php }else{?>----<?php }?></td>
<td align="center"><?php if($fetch9['status']=='A'){?><span style="color:#00CC00;">Active</span><?php }else{?><span style="color:#FF0000;">Inactive</span><?php }?></td>
<td align="center"><?php if($fetch9['paystatus']=='A'){?><span style="color:#00CC00;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></td>
<td align="center"><?=$fetch9['date']?></td>
</tr>
<?php $i++;}}}?>
</tbody>
</table>
<?php 
$count9=count($arr9);
}}}}}}}}}
?>
<h2 style="color:#000;text-align:center;">Total Team Member - <?php echo $count+$count1+$count2+$count3+$count4+$count5+$count6+$count7+$count8+$count9;?></h2>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

    <?php }?>
</div>
</div>
</div>

</div>

                </div>

        </div>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Data table JavaScript -->
        <script src="assets/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
        <!-- Slimscroll JavaScript -->
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Progressbar Animation JavaScript -->
        <script src="assets/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>
        <!-- Fancy Dropdown JS -->
        <script src="assets/js/dropdown-bootstrap-extended.js"></script>
        <!-- Sparkline JavaScript -->
        <script src="assets/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- Owl JavaScript -->
        <script src="assets/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
        <!-- Switchery JavaScript -->
        <script src="assets/vendors/bower_components/switchery/dist/switchery.min.js"></script>
        <!-- EChartJS JavaScript -->
        <script src="assets/vendors/bower_components/echarts/dist/echarts-en.min.js"></script>
        <!-- Toast JavaScript -->
        <script src="assets/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- Init JavaScript -->
        <script src="assets/js/init.js"></script>
        <script src="assets/js/dashboard-data.js"></script>
        <!--Live rate js  -->
          <script src="assets/js/custom_JS/refcopy.js"></script>
    <script src="assets/vendors/jquery-ui.min.js"></script>

    </form>
</body>
</html>
