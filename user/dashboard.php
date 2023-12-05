<?php
session_start();
include('../admin/inc/function.php');
if(!isset($_SESSION['mid']))
{
redirect('../index.php');
}

$userid=getMember($conn,$_SESSION['mid'],'userid');
$paystatus=getMember($conn,$_SESSION['mid'],'paystatus');

include('calculate-roi-release.php');
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
            display:;
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
</head>
<body>

        <div class="wrapper  theme-6-active pimary-color-green">
           



        <?php include('sidebar.php') ?>




            <div class="page-wrapper">
                <div class="container-fluid pt-25">
                    

    <div class="row row-sm">

        <div class="row animated fadeInUp">
            <div class="col-md-4" style="display:none;">
                <div class="page-titles">
                    <h4 class="fs-15">RUNNER FASTRACK BONUS
                                </h4>
                    <p  class="fs-16" style="color: black; font-weight: 600;">
                        
                        <span id="ctl00_ContentPlaceHolder1_demo" class=" font-16  blinker"></span>
                    </p>
                </div>
            </div>
            <div class="col-md-6" style="display:none;">
                <div class="page-titles">
                    <h4 class="fs-15">BIKER FASTRACK BONUS
                                </h4>
                    <p class="fs-16" style="color: black; font-weight: 600;">
                        
                        <span id="ctl00_ContentPlaceHolder1_demo2" class=" font-16  blinker"></span>
                    </p>
                </div>
            </div>
            <div class="col-md-6" style="display:none;">
                <div class="page-titles">
                    <h4 class="fs-15">FIGHTER FASTRACK BONUS
                                </h4>

                    <p  class="fs-16" style="color: black; font-weight: 600;">
                        
                        <span id="ctl00_ContentPlaceHolder1_demo3" class=" font-16  blinker"></span>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-primary card-view pb-15">
                <div class="sale-board">
                    <div class="scroll-widget spacer-sm">
                        <li class="list-group-item">
                            <div class="input-group sponsor">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-anim">
                                        <i class=""></i><span class="btn-text">Referral Link</span></button>
                                </span>
                                <?php
                                $userid=getMember($conn,$_SESSION['mid'],'userid');
                                ?>
                                <a href="/ref.php?spon=<?=$userid?>" id="ctl00_ContentPlaceHolder1_refferal" class="form-control input-sm border-none text-center text-success" target="blank"><?=$domain?>/ref?spon=<?=$userid?></a>
                                <span class="outer-share input-group-btn">
                                    <button type="button" class="btn btn-primary btn-icon-anim btn-square" href="JavaScript:Void(0);" onclick="CopyToClipboard('ctl00_ContentPlaceHolder1_refferal')"><i class="zmdi zmdi-copy"></i></button>
                                </span>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card animated fadeInUp box1 pull-up b1">
                <div class="card-body iconfont text-left  pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-3">Daily Income</h4>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="">
                            <h4 class="mb-1 font-weight-bold  ">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblliquiwallt"><?=getROIBonus($conn,$userid)?></span></span>
                            </h4>

                        </div>
                        <div class="card-chart bg-primary-transparent round ml-auto mt-0"><i class="fa fa-magic text-primary tx-24" aria-hidden="true"></i></div>
                    </div>



                </div>
                <svg id="SvgjsSvg4868" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                    <g id="SvgjsG4870" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                        <g id="SvgjsG4878" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                            <g id="SvgjsG4879" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                <path id="SvgjsPath4886" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#e9f5ff"></path>
                                <path id="SvgjsPath4887" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#2196f3" stroke-width="2"></path>
                                <g id="SvgjsG4880" class="apexcharts-series-markers-wrap" data:realindex="0">
                                    <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle4907" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                </g>
                            </g>
                            <g id="SvgjsG4881" class="apexcharts-datalabels" data:realindex="0"></g>
                        </g>
                    </g></svg>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card animated fadeInUp box1 pull-up b1">
                <div class="card-body iconfont text-left  pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-3">Level Income </h4>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="">
                            <h4 class="mb-1 font-weight-bold  ">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblroiinc"><?=getLevelBonus($conn,$userid)?></span></span>
                            </h4>

                        </div>
                        <div class="card-chart bg-primary-transparent round ml-auto mt-0"><i class="fa fa-magic text-primary tx-24" aria-hidden="true"></i></div>
                    </div>



                </div>
                <svg id="SvgjsSvg48681" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                    <g id="SvgjsG48701" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                        <g id="SvgjsG48781" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                            <g id="SvgjsG487911" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                <path id="SvgjsPath48861" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#f3fbe6"></path>
                                <path id="SvgjsPath48871" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#88d00f" stroke-width="2"></path>
                                <g id="SvgjsG48801" class="apexcharts-series-markers-wrap" data:realindex="0">
                                    <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle49071" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                </g>
                            </g>
                            <g id="SvgjsG48811" class="apexcharts-datalabels" data:realindex="0"></g>
                        </g>
                    </g></svg>
            </div>
        </div>
        <div class="col-md-3" style="display:none;">
            <div class="card animated fadeInUp box1 pull-up b1">
                <div class="card-body iconfont text-left  pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-3">Reward Income</h4>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="">
                            <h4 class="mb-1 font-weight-bold  "><span class="text-success " style="font-size: 17px;">
                                <span id="ctl00_ContentPlaceHolder1_lblfasttrackrank"><?=geTotalCommission($conn,$userid)?></span></span>
                            </h4>

                        </div>
                        <div class="card-chart bg-primary-transparent round ml-auto mt-0"><i class="zmdi zmdi-layers text-primary tx-24"></i></div>
                    </div>



                </div>
                <svg id="SvgjsSvg486811" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                    <g id="SvgjsG487011" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                        <g id="SvgjsG4878111" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                            <g id="SvgjsG48791" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                <path id="SvgjsPath48862" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#e9f5ff"></path>
                                <path id="SvgjsPath48872" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#2196f3" stroke-width="2"></path>
                                <g id="SvgjsG48802" class="apexcharts-series-markers-wrap" data:realindex="0">
                                    <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle49072" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                </g>
                            </g>
                            <g id="SvgjsG48812" class="apexcharts-datalabels" data:realindex="0"></g>
                        </g>
                    </g></svg>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card animated fadeInUp box1 pull-up b1">
                <div class="card-body iconfont text-left  pb-0">
                    <div class="d-flex justify-content-between">
                       
                            
                            
                            
                            <h4 class="card-title mb-3">Reward Income</h4>
                    </div>
                    <div class="d-flex mb-0">
                        <div class="">
                            <h4 class="mb-1 font-weight-bold  ">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lbllevelinc"><?=geTotalCommission($conn,$userid)?></span></span>
                            </h4>
                            

                        </div>
                        <div class="card-chart bg-primary-transparent round ml-auto mt-0"><i class="fa fa-sitemap text-primary tx-24" aria-hidden="true"></i></div>
                    </div>



                </div>
                <svg id="SvgjsSvg4868" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                    <g id="SvgjsG4870" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                        <g id="SvgjsG4878" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                            <g id="SvgjsG4879" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                <path id="SvgjsPath4886" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#f3fbe6"></path>
                                <path id="SvgjsPath4887" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#88d00f" stroke-width="2"></path>
                                <g id="SvgjsG4880" class="apexcharts-series-markers-wrap" data:realindex="0">
                                    <g class="apexcharts-series-markers">
                                        <circle id="SvgjsCircle4907" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                    </g>
                                </g>
                            </g>
                            <g id="SvgjsG4881" class="apexcharts-datalabels" data:realindex="0"></g>
                        </g>
                    </g></svg>
            </div>
        </div>



       
                   

        <div class="col-md-9">
            <div class="row row-sm">

                <div class="col-lg-12 col-md-12 col-sm-12 ">


                    <div class="card animated fadeInDown">



                        <div class="card-body pb-15 pt-15 pl-0 pr-0 chartcard">
                            <div class="col-md-3">
                                <div class="d-flex">
                                    <img src="images/bod2.png" class="graph-image" />
                                </div>
                                <div class="d-flex mb-0">
                                    <div class="topbox">
                                        <h4 class="mb-1 font-weight-bold">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblpassiveinc"></span></span></h4>
                                        <p class="mb-2 tx-12 text-muted">
                                            Superlative Bonus
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">

                                <div class="d-flex ">
                                    <img src="images/bod1.png" class="graph-image" />

                                </div>
                                <div class="d-flex mb-0">
                                    <div class="topbox">
                                        <h4 class="mb-1 font-weight-bold">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblfounderinc">0.00</span></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Happy Week Bonus</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-3">
                                <div class="d-flex ">
                                    <img src="images/bod1.png" class="graph-image" />
                                </div>
                                <div class="d-flex mb-0">
                                    <div class="topbox">
                                        <h4 class="mb-1 font-weight-bold  ">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lbldirectrefinc">0.00</span></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Direct Referral Bonus</p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="d-flex ">
                                    <img src="images/bod2.png" class="graph-image" />
                                </div>
                                <div class="d-flex mb-0">

                                    <div class="topbox">
                                        <h4 class="mb-1 font-weight-bold ">$<span class="counter-anim"></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Direct Referral Wallet </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 " style="display: none;">
                    <div class="row row-sm">






                        <div class="col-lg-12 pull-up">
                            <div class="card animated fadeInUp">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_b2cdd"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget(
                                            {
                                                "symbols": [
                                                    [
                                                        "BINANCEUS:BUSDUSD"
                                                    ]
                                                ],
                                                "chartOnly": false,
                                                "width": "100%",
                                                "height": "308",
                                                "locale": "in",
                                                "colorTheme": "dark",
                                                "isTransparent": true,
                                                "autosize": true,
                                                "showVolume": false,
                                                "hideDateRanges": false,
                                                "scalePosition": "right",
                                                "scaleMode": "Normal",
                                                "fontFamily": "Poppins, sans-serif",
                                                "noTimeScale": false,
                                                "valuesTracking": "1",
                                                "chartType": "line",
                                                "fontColor": "#787b86",
                                                "gridLineColor": "rgba(240, 243, 250, 0.06)",
                                                "container_id": "tradingview_b2cdd"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>


                    </div>
                </div>





                <div class="col-lg-12 col-md-5 col-sm-12">
                    <div class="row row-sm">
                        <div class="col-lg-5">
                            <div class="card animated fadeInUp box1 pull-up">
                                <div class="card-body iconfont text-left  pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-3">TOTAL REVENUE</h4>
                                    </div>
                                    <div class="d-flex mb-0">
                                        <div class="">
                                            <h4 class="mb-1 font-weight-bold  ">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lbltotlearning"><?=geTotalCommission($conn,$userid)?></span></span>
                                            </h4>

                                        </div>
                                        <div class="card-chart bg-primary-transparent round ml-auto mt-0"><i class="zmdi zmdi-format-line-spacing text-primary tx-24"></i></div>
                                    </div>



                                </div>
                                <svg id="SvgjsSvg4868" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                                    <g id="SvgjsG4870" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                                        <g id="SvgjsG4878" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                                            <g id="SvgjsG4879" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                                <path id="SvgjsPath4886" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#f9f4e5"></path>
                                                <path id="SvgjsPath4887" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#ffbe0b" stroke-width="2"></path>
                                                <g id="SvgjsG4880" class="apexcharts-series-markers-wrap" data:realindex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle4907" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG4881" class="apexcharts-datalabels" data:realindex="0"></g>
                                        </g>
                                    </g></svg>
                            </div>

                            <div class="card animated fadeInUp box2 pull-up">
                                <div class="card-body iconfont text-left pb-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mb-3">Total Withdraw</h4>
                                    </div>
                                    <div class="d-flex mb-0">
                                        <div class="">
                                            <h4 class="mb-1 font-weight-bold">$<span id="ctl00_ContentPlaceHolder1_lblTotalwithdrawals"><?=getApprovedWithdrawalMember($conn,$userid)?></span>
                                                </span></h4>

                                        </div>
                                        <div class="card-chart bg-warning-transparent round ml-auto mt-0"><i class="zmdi zmdi-accounts-alt text-warning tx-24"></i></div>
                                    </div>

                                </div>



                                <svg id="SvgjsSvg4868" width="100%" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: #f000 none repeat scroll 0 0; width: 100%; overflow: hidden; margin-top: -16px; border: none!important; border-radius: 9px">
                                    <g id="SvgjsG4870" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">




                                        <g id="SvgjsG4878" class="apexcharts-area-series apexcharts-plot-series" style="width: 100%;">
                                            <g id="SvgjsG4879" class="apexcharts-series" seriesname="Revenue" data:longestseries="true" rel="1" data:realindex="0">
                                                <path id="SvgjsPath4886" d="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 100L 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7C 365.00000000000006 38.7 365.00000000000006 38.7 365.00000000000006 100M 365.00000000000006 38.7z" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" style="width: 100%; overflow: hidden;" fill="#ebe8fb"></path>
                                                <path id="SvgjsPath4887" d="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskgy1wv7j9)" pathto="M 0 66.8C 10.645833333333334 66.8 19.770833333333336 46 30.41666666666667 46C 41.06250000000001 46 50.18750000000001 84 60.83333333333334 84C 71.47916666666667 84 80.60416666666669 76 91.25000000000001 76C 101.89583333333334 76 111.02083333333336 84 121.66666666666669 84C 132.3125 84 141.4375 32.900000000000006 152.08333333333334 32.900000000000006C 162.72916666666669 32.900000000000006 171.85416666666669 64.5 182.50000000000003 64.5C 193.14583333333337 64.5 202.27083333333337 32.900000000000006 212.91666666666669 32.900000000000006C 223.56250000000003 32.900000000000006 232.68750000000003 58.6 243.33333333333337 58.6C 253.97916666666669 58.6 263.1041666666667 44.5 273.75 44.5C 284.3958333333333 44.5 293.52083333333337 74.3 304.1666666666667 74.3C 314.8125 74.3 323.93750000000006 9.900000000000006 334.58333333333337 9.900000000000006C 345.2291666666667 9.900000000000006 354.35416666666674 38.7 365.00000000000006 38.7" pathfrom="M -1 100L -1 100L 30.41666666666667 100L 60.83333333333334 100L 91.25000000000001 100L 121.66666666666669 100L 152.08333333333334 100L 182.50000000000003 100L 212.91666666666669 100L 243.33333333333337 100L 273.75 100L 304.1666666666667 100L 334.58333333333337 100L 365.00000000000006 100" stroke="#6555be" stroke-width="2"></path>
                                                <g id="SvgjsG4880" class="apexcharts-series-markers-wrap" data:realindex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle4907" r="0" cx="212.91666666666669" cy="32.900000000000006" class="apexcharts-marker wg61wldx7 no-pointer-events" stroke="#ffffff" fill="#ffffff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG4881" class="apexcharts-datalabels" data:realindex="0"></g>
                                        </g>
                                    </g></svg>
                            </div>

                        </div>
                        <div class="col-lg-7">
                            <div class="card animated fadeInRight" style="min-height: 267px;">

                                <div class="card-header bg-transparent pd-b-0  pt-15 bd-b-0">
                                    <div class="d-flex justify-content-between">
                                        <h4 class="card-title mg-b-10">Account Details <i class="zmdi zmdi-plus plus-icon"></i></h4>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>

                                <div class="card-body pb-10 pt-10">
                                    <div class="ipbox pull-up">
                                        <i class="fa fa-star star text-white"></i>
                                        <i class="fa fa-angle-right icon-left "></i>
                                        <h4 class="mb-1 font-weight-bold">
                                            <span id="ctl00_ContentPlaceHolder1_lbluseruserid"><?=getMember($conn,$_SESSION['mid'],'userid')?></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">User ID</p>
                                    </div>

                                    <div class="ipbox pull-up">

                                        <i class="fa fa-star star text-white"></i>
                                        <i class="fa fa-angle-right icon-left "></i>
                                        <h4 class="mb-1 font-weight-bold">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblPackage">0.00</span></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Liquidity</p>
                                    </div>

                                    

                                    <div class="ipbox pull-up">

                                        <i class="fa fa-star star text-white"></i>
                                        <i class="fa fa-angle-right icon-left "></i>
                                        <h4 class="mb-1 font-weight-bold">
                                            <span id="ctl00_ContentPlaceHolder1_lbldate"><?=getMember($conn,$_SESSION['mid'],'date')?></span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Registration Date</p>
                                    </div>

                                    <div class="ipbox pull-up">

                                        <i class="fa fa-star star text-white"></i>
                                        <i class="fa fa-angle-right icon-left "></i>
                                        <h4 class="mb-1 font-weight-bold">
                                            <span id="ctl00_ContentPlaceHolder1_lblActivationDate">--------</span>
                                        </h4>
                                        <p class="mb-2 tx-12 text-muted">Activation Date</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card animated fadeInRight">
                <div class="card-header bg-transparent pd-b-0  pt-15 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-10">Account Details</h4>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>

                <div class="card-body pb-15 pt-10">
                    <div class="animated fadeInRight globe-bg">
                        <div class="shadow mg-b-20 rounded-10 text-white account-background ">
                            <div class="account pd-b-10 pull-right">
                                <h2 class="tx-40 text-white">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblphcrate"><?=getSettingsJoining($conn,'amount')?></span></span>
                                </h2>
                                <p class="mg-b-0">COC Rate</p>
                            </div>
                            <div class=" account pd-b-10">
                                <h2 class="tx-40 text-white">$<span class="counter-anim"><span id="ctl00_ContentPlaceHolder1_lblTotalBalance">0.00</span></span>
                                </h2>
                                <p class="mg-b-0">Balance</p>
                                <p class=" mt-15 d-flex text-capitalize ">
                                    <i class="zmdi zmdi-account-circle" style="font-size: 25px; padding-right: 5px;"></i>
                                    <span id="ctl00_ContentPlaceHolder1_lblusername1"><?=getMember($conn,$_SESSION['mid'],'name')?></span>
                                </p>
                            </div>
                        </div>




                    </div>


                    <div class=" pt-10">




                        <div class="ipbox">

                            <i class="fa fa-star star text-white"></i>
                            <i class="fa fa-angle-right icon-left "></i>
                            <h4 class="mb-1 font-weight-bold"><span id="time"></span>
                            </h4>
                            <p class="mb-2 tx-12 text-muted">System Time </p>
                        </div>

                        


                        
                    </div>

                    

                    <div class=" animated fadeInUp pull-up" style="display: none;">
                        <div class="card-header bg-transparent pd-b-0  pt-15 bd-b-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-10 text-center" style="width: 100%">Today Profit</h4>
                            </div>
                        </div>

                        <div class=" pb-15 pt-10">
                            <h2 class="text-center" style="font-size: 30px; font-weight: 700; margin-top: 3px; margin-bottom: 3px; line-height: 25px;">
                                <span id="ctl00_ContentPlaceHolder1_lbltodprofit">0.00</span>% </h2>


                            <img src="images/trad-icon.png" style="width: 100%; max-width: 115px; margin: 0 auto; display: block;" />

                            <div class="scroll-widget spacer-sm" style="margin-top: 10px; display: none;">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item"><i class="fa fa-star-half-empty text-white"></i>&nbsp;No Profit On <span class="pull-right text-success">Sat - Sun</span></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class=" animated fadeInUp">
                        <div class="card-header bg-transparent pd-b-0  pt-15 bd-b-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mg-b-10">Latest News</h4>
                            </div>
                        </div>

                        <div class="pt-10">
                            <marquee behavior="scroll" scrollamount="2" direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="height: 94px;"><h5 style="font-weight:600;"> 
                             </h5> <p>  <span id="ctl00_ContentPlaceHolder1_lblnews"><p>
	<span style="background-color:#000000;">ALL LEDERS AND INVESTORS&nbsp; YOU ALL ARE INFORMED TO DURGA PUJA BONANZA REWARD IS STARTED. PL. WITH YOUR TEAM MEMBERS AND WIN YOUR EXITING REWARDS</span></p>
</span></p></marquee>
                        </div>
                    </div>
                </div>
            </div>

            <div class="rank">
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">

                  
                  

                      

              </marquee>

            </div>
        </div>

        <div class="col-md-6">
            <div class="col-lg-12">

                <div class="animated fadeInUp" style="margin-bottom: 1.3rem !important;">
                    <table class="table gridtbl mb-0  " style="margin-top: -10px; margin-bottom: -10px !important;">
                        <tbody>
                            <tr class="pull-up">
                                <td style="width: 50px;"><i class="fa fa-star-half-empty circle text-white"></i></td>
                                <td>Total Members </td>
                                <td>
                                    <span id="ctl00_ContentPlaceHolder1_lblTotalmember">2</span></td>
                                <td style="min-width: 80px;">
                                    <div class="progress progress-xs mb-0 ">
                                        <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="pull-up">
                                <td><i class="fa fa-star-half-empty circle text-white"></i></td>
                                <td>Active ID</td>
                                <td>
                                    <span id="ctl00_ContentPlaceHolder1_lblActiveid">0</span></td>
                                <td>
                                    <div class="progress progress-xs mb-0 ">
                                        <div class="progress-bar progress-bar-primary" style="width: 50%"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="pull-up">
                                <td><i class="fa fa-star-half-empty circle text-white"></i></td>
                                <td>InActive ID</td>
                                <td>
                                    <span id="ctl00_ContentPlaceHolder1_lblTotalInActive">2</span></td>
                                <td>
                                    <div class="progress progress-xs mb-0 ">
                                        <div class="progress-bar progress-bar-primary" style="width: 90%"></div>
                                    </div>
                                </td>
                            </tr>


                            
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <div class="col-md-6">

            <div class="animated fadeInUp" style="margin-bottom: 1.3rem !important;">
                <table class="table gridtbl mb-0  " style="margin-top: -10px; margin-bottom: -10px !important;">
                    <tbody>

                        <tr class="pull-up">
                            <td><i class="fa fa-star-half-empty circle text-white"></i></td>
                            <td>Team Business</td>
                            <td>$<span id="ctl00_ContentPlaceHolder1_lblTotalteambussiness">0.00</span></td>
                            <td>
                                <div class="progress progress-xs mb-0 ">
                                    <div class="progress-bar progress-bar-primary" style="width: 40%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr class="pull-up">
                            <td><i class="fa fa-star-half-empty circle text-white"></i></td>
                            <td>Active Investment</td>
                            <td>$<span id="ctl00_ContentPlaceHolder1_lblActiveInvesment">0.00</span></td>
                            <td>
                                <div class="progress progress-xs mb-0 ">
                                    <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                </div>
                            </td>
                        </tr>
                        <tr class="pull-up">
                            <td><i class="fa fa-star-half-empty circle text-white"></i></td>
                            <td>Direct Business</td>
                            <td>$<span id="ctl00_ContentPlaceHolder1_lbldirectbussiness">0.00</span></td>
                            <td>
                                <div class="progress progress-xs mb-0 ">
                                    <div class="progress-bar progress-bar-primary" style="width: 70%"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>

        </div>

    </div>


                       
                <div class="col-lg-8 " style="display: none;">
                    <div class="row row-sm">






                        <div class="col-lg-12 pull-up">
                            <div class="card animated fadeInUp">
                                <!-- TradingView Widget BEGIN -->
                                <div class="tradingview-widget-container">
                                    <div id="tradingview_b2cdd"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.MediumWidget(
                                            {
                                                "symbols": [
                                                    [
                                                        "BINANCEUS:BUSDUSD"
                                                    ]
                                                ],
                                                "chartOnly": false,
                                                "width": "100%",
                                                "height": "308",
                                                "locale": "in",
                                                "colorTheme": "dark",
                                                "isTransparent": true,
                                                "autosize": true,
                                                "showVolume": false,
                                                "hideDateRanges": false,
                                                "scalePosition": "right",
                                                "scaleMode": "Normal",
                                                "fontFamily": "Poppins, sans-serif",
                                                "noTimeScale": false,
                                                "valuesTracking": "1",
                                                "chartType": "line",
                                                "fontColor": "#787b86",
                                                "gridLineColor": "rgba(240, 243, 250, 0.06)",
                                                "container_id": "tradingview_b2cdd"
                                            }
                                        );
                                    </script>
                                </div>
                                <!-- TradingView Widget END -->
                            </div>
                        </div>


                    </div>
                </div>






  

      
    <script>
        function myClock() {
            setTimeout(function () {
                const d = new Date();
                const n = d.toLocaleTimeString();
                document.getElementById("time").innerHTML = n;
                myClock();
            }, 1000)
        }
        myClock();
    </script>

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
    </form>
</body>
</html>
