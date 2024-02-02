<?php include('head.php') ?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">
    <?php if($_REQUEST['inc']=='daily'){?>


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Daily Income</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Amount</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_commission_roi';
$lim=100;
$tpage='investment-statement.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".input($_POST['search'])."' ORDER BY `id` DESC";
}else{
$where="ORDER BY `id` DESC";
}

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
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center" ><?=$fetch['bonus']?></td>
<td align="center" ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="6" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='level'){?>


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Level Income</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">User_Name</th>
<th style="text-align:center;">From_ID</th>
<th style="text-align:center;">From_Name</th>
<th style="text-align:center;">Percentage</th>
<th style="text-align:center;">Amount</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_commission_level_roi';
$lim=100;
$tpage='investment-statement.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".input($_POST['search'])."' ORDER BY `id` DESC";
}else{
$where="ORDER BY `id` DESC";
}

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
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center" ><?=$fetch['fromid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['fromid'],'name')?></td>
<td align="center" ><?=$fetch['percentage']?></td>
<td align="center" ><?=$fetch['bonus']?></td>
<td align="center" ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="6" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='refferal'){?>


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Refferal Income</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">User_Name</th>
<th style="text-align:center;">From_ID</th>
<th style="text-align:center;">From_Name</th>
<th style="text-align:center;">Amount</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_commission_direct';
$lim=100;
$tpage='investment-statement.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".input($_POST['search'])."' ORDER BY `id` DESC";
}else{
$where="ORDER BY `id` DESC";
}

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
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center" ><?=$fetch['fromid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['fromid'],'name')?></td>
<td align="center" ><?=$fetch['bonus']?></td>
<td align="center" ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="7" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='reward'){?>


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Reward Income</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Plan</th>
<th style="text-align:center;">Total Amount</th>
<th style="text-align:center;">Amount</th>
<th style="text-align:center;">Bonus</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_commission_reward_roi';
$lim=100;
$tpage='investment-statement.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".input($_POST['search'])."' ORDER BY `id` DESC";
}else{
$where="ORDER BY `id` DESC";
}

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
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center"><?=$fetch['plan']?></td>
<td align="center" ><?=$fetch['totalAmount']?></td>
<td align="center"><?=$fetch['amount']?></td>
<td align="center" ><?=$fetch['bonus']?></td>
<td align="center" ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="8" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

    
<?php }else if($_REQUEST['inc']=='royality'){?>


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Royality Income</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Package</th>
<th style="text-align:center;">Bonus</th>
<th style="text-align:center;">Percentage</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_commission_royality_roi';
$lim=100;
$tpage='investment-statement.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".input($_POST['search'])."' ORDER BY `id` DESC";
}else{
$where="ORDER BY `id` DESC";
}

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
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center"><?=$fetch['plan']?></td>
<td align="center" ><?=$fetch['bonus']?></td>
<td align="center" ><?=$fetch['percentage']?></td>
<td align="center" ><?=$fetch['date']?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="8" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php } else if($_REQUEST['inc']=='total'){?>

    
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Total Income</h4>
</div>

<div class="table-responsive">
<table class="table table-bordered table-striped" id="myTable">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Amount</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member';
$lim=100;
$tpage='deposit.php';
if($_REQUEST['act']=='search')
{
$where=" ORDER BY `id` DESC";
}else{

$where="ORDER BY `id` DESC";
}
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr>
<td align="center" ><?=$i?></td>
<td align="center" ><?=$fetch['userid']?></td>
<td align="center" ><?=$fetch['name']?></td>
<td align="center" ><?=getTotalCommission($conn,$fetch['userid'])?></td>
</tr>

<?php $i++;}}else{?>
<tr><td colspan="7" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<?php } ?>

</div>
</div>
<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>
</form>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="assets/plugins/bootstrap/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/ionicons/ionicons.js"></script>
<script src="assets/plugins/chart.js/Chart.bundle.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/chart.flot.sampledata.js"></script>
<script src="assets/js/eva-icons.min.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>
<script src="assets/plugins/side-menu/sidemenu.js"></script>
<script src="assets/js/sticky.js"></script>
<script src="assets/plugins/sidebar/sidebar.js"></script>
<script src="assets/plugins/sidebar/sidebar-custom.js"></script>
<script src="assets/plugins/raphael/raphael.min.js"></script>
<script src="assets/plugins/morris.js/morris.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/themecolor.js"></script>
<script src="assets/js/swither-styles.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="../assets/js/datatable.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable({
        responsive: true
    });
} );
</script>

<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
<script>
        $(document).ready(function () {
            $("#copy").text($("#ref_link").val());
            $('.clipboard').on('click', function () {
                var $temp = $("<input>");
                var $url = $("#ref_link").val();//$(location).attr('href');
                //$("#linkModal").modal();
                $("body").append($temp);
                $temp.val($url).select();
                document.execCommand("copy");
                //$("#lblCopyLink").text($temp[0].value);
                alert("link copied");
                $temp.remove();
            });
        });
    </script>
</body>
</html>
