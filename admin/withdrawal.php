<?php include('head.php');
$left=60;
 ?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">

<?php if($_REQUEST['case']=='pen'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">Pending Withdrawal</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
<thead>
<tr align="center">
<th width="5%" align="center">Sl_No</th>
<th width="6%" align="center">User_ID</th>
<th width="6%" align="center">Name</th>
<th width="7%" align="center">Request</th>
<th width="9%" align="center">Charge</th>
<th width="6%" align="center">Payout</th>
<th width="6%" align="center">Type</th>
<th width="6%" align="center">Bank</th>
<th width="6%" align="center">Branch</th>
<th width="6%" align="center">Acc_Holder_name</th>
<th width="6%" align="center">Acc_No.</th>
<th width="6%" align="center">IFS_Code</th>
<th width="6%" align="center">Bitcoin</th>
<th width="6%" align="center">UPI</th>
<th width="9%" align="center">Status</th>
<th width="5%" align="center">Date</th>
<th width="6%" align="center">Action</th>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_withdrawal';
$lim=100;
$tpage='pending-withdrawal.php';
if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim($_POST['search'])."' AND `status`='P' ORDER BY `id` DESC";
}else{
$where="WHERE `status`='P' ORDER BY `id` DESC";
}
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr height="30" align="center">
<th align="center" class="tborder"><?=$i?></th>
<th align="center" class="tborder"><?=$fetch['userid']?></th>
<th align="center" class="tborder"><?=getMemberUserid($conn,$fetch['userid'],'name')?></th>
<th align="center" class="tborder"><?=$fetch['request']?></th>
<th align="center" class="tborder"><?=$fetch['charge']?></th>
<th align="center" class="tborder"><?=$fetch['payout']?></th>
<th align="center" class="tborder"><?=$fetch['type']?></th>
<th align="center" class="tborder"><?=$fetch['bname']?></th>
<th align="center" class="tborder"><?=$fetch['branch']?></th>
<th align="center" class="tborder"><?=$fetch['accname']?></th>
<th align="center" class="tborder"><?=$fetch['accno']?></th>
<th align="center" class="tborder"><?=$fetch['ifscode']?></th>
<th align="center" class="tborder"><?=$fetch['bitcoin']?></th>
<th align="center" class="tborder"><?=$fetch['upi']?></th>
<th align="center" class="tborder"><?php if($fetch['status']=='P'){?><a href="withdrawal-process?case=status&id=<?=$fetch['id']?>&page=<?=$_REQUEST['page']?>" onClick="return confirm('Are you sure want to active this status?');" style="text-decoration:none;"><span style="color:#FF0000;">Pending</span></a><?php } ?></th>
<th align="center" class="tborder"><?=$fetch['date']?></th>
<th ><a href="withdrawal-process?case=delete&id=<?=$fetch['id']?>&page=<?=$_REQUEST['page']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to delete?');"><img src="images/delete.png" title="Delete" /></a></th>
</tr>
<?php $i++;}}else{?>
<tr height="15"><th align="center" colspan="17" style="color:#FF0000;"><div class="norecord">No Record Found!</div></th></tr>
<?php }?>
</tbody>
</table>
</div>
<div align="center"><?=$pagination?></div>
</div>
</div>
</div>
</div>
<?php }else if($_REQUEST['app']==''){?>

<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">

<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">Approved Withdrawal</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
<thead>
<tr align="center">
<th width="5%" align="center">Sl_No</th>
<th width="6%" align="center">User_ID</th>
<th width="6%" align="center">Name</th>
<th width="7%" align="center">Request</th>
<th width="9%" align="center">Charge</th>
<th width="6%" align="center">Payout</th>
<th width="6%" align="center">Type</th>
<th width="6%" align="center">Bank</th>
<th width="6%" align="center">Branch</th>
<th width="6%" align="center">Acc_Holder_name</th>
<th width="6%" align="center">Acc_No.</th>
<th width="6%" align="center">IFS_Code</th>
<th width="6%" align="center">Bitcoin</th>
<th width="6%" align="center">UPI</th>
<th width="5%" align="center">Date</th>
<th width="6%" align="center">Status</th>
<th width="6%" align="center">Approved</th>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_withdrawal';
$lim=100;
$tpage='approved-withdrawal.php';
if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim($_POST['search'])."' AND `status`='C' ORDER BY `id` DESC";
}else{
$where="WHERE `status`='C' ORDER BY `id` DESC";
}
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr height="30">
<td align="center" class="tborder"><?=$i?></td>
<td align="center" class="tborder"><?=$fetch['userid']?></td>
<td align="center" class="tborder"><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center" class="tborder"><?=$fetch['request']?></td>
<td align="center" class="tborder"><?=$fetch['charge']?></td>
<td align="center" class="tborder"><?=$fetch['payout']?></td>
<td align="center" class="tborder"><?=$fetch['type']?></td>
<td align="center" class="tborder"><?=$fetch['bname']?></td>
<td align="center" class="tborder"><?=$fetch['branch']?></td>
<td align="center" class="tborder"><?=$fetch['accname']?></td>
<td align="center" class="tborder"><?=$fetch['accno']?></td>
<td align="center" class="tborder"><?=$fetch['ifscode']?></td>
<td align="center" class="tborder"><?=$fetch['bitcoin']?></td>
<td align="center" class="tborder"><?=$fetch['upi']?></td>
<td align="center" class="tborder"><?=$fetch['date']?></td>
<td align="center" class="tborder"><?php if($fetch['status']=='C'){?><span style="color:#009900;">Approved</span><?php }?></td>
<td align="center" class="tborder"><?=$fetch['approved']?></td>
</tr>
<?php $i++;}}else{?>
<tr height="15"><td align="center" colspan="17" style="color:#FF0000;"><div class="norecord">No Record Found!</div></td></tr>
<?php }?>
</tbody>
</table>
</div>
<div align="center"><?=$pagination?></div>
</div>
</div>
</div>
</div>


<?php }?>

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
