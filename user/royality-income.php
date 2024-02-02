<?php
session_start();
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
<meta name="description" content="." /><meta name="keywords" /><meta name="author" content="hencework" />
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
</head>
<body>




    <form name="aspnetForm" method="post" action="./Dwn-Team" id="aspnetForm">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJOTk1NTcyMDY0D2QWAmYPZBYCAgMPZBYCAgUPZBYCAgEPFgIeC18hSXRlbUNvdW50AgIWBAIBD2QWAmYPFQkBMQhQVzgwNjM1OQRTdGFyCFBXNzQwNzYyATEEMC4wMBQxMC82LzIwMjMgMTo0NDo0MiBQTQRMZWZ0CEluQWN0aXZlZAICD2QWAmYPFQkBMghQVzY5NDIyOAZTdGFyMTIIUFc3NDA3NjIBMQQwLjAwFDEwLzYvMjAyMyAxOjQ3OjEyIFBNBExlZnQISW5BY3RpdmVkZM1cljX9mBlJ1F4I+PZnqZccvw89" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="73BCE228" />
</div>
        <div class="wrapper  theme-6-active pimary-color-green">
           



        <?php include('sidebar.php') ?>




<div class="page-wrapper">
                <div class="container-fluid pt-25">
                    
    <div class="row margin-balance">

        <div class="col-md-12 col-sm-12">

            <div class="panel panel-default card-view">
                <div class="panel-heading">
                    <div class="pull-left">
                        <h6 class="panel-title txt-dark">Royality Income Details</h6>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="panel-wrapper collapse in">
                    <div class="panel-body">

                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table  table-striped dataTable tran" id="dataTable1">


                                    
                                            <thead>
                                                <tr >
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
<th>Sl_No.</th>
<th>Plan</th>
<th>Percentage</th>
<th>Bonus</th>
<th>Status</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_commission_royality_roi';
$lim=10;
$tpage='commission-level-roi.php';
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
<td ><?=$i?></td>
<td ><div class="text" title="<?=$fetch['plan']?>"><?=$fetch['plan']?></div></td>
<td ><?=$fetch['percentage']?></td>
<td  class="text-success">$ <?=$fetch['bonus']?></td>
<td ><?php if($fetch['status']=='R') {?> 
<div class="text-danger"> UNPAID </div>

<?php } else { ?>
<div class="text-success"> PAID </div>
<?php } ?>

</td>
<td ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="8"  style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>


                                        
                                           
                                        
                                            </tbody>
                                        
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>

        </div>
    </div>

</div>

</div>

                </div>

        </div>

        <!-- Bootstrap Core JavaScript -->
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
