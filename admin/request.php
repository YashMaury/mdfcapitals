<?php include('head.php') ?>
<body class="main-body app sidebar-mini ltr light-theme open">

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">


<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-12">

<div class="card">
<div class="card-header">
<div class="card-title">View Request</div>
</div>
<div class="card-body" style="overflow:auto;">

<table class="table table-hover table-bordered mb-0 text-md-nowrap text-lg-nowrap text-xl-nowrap table-striped ">
<thead>
<tr align="center">
<th width="10%" align="center"><strong>Sl_No</strong></th>
<th width="10%" align="center"><strong>User_ID</strong></th>
<th width="10%" align="center"><strong>Name</strong></th>
<th width="15%" align="center"><strong>UTR No.</strong></th>
<th width="10%" align="center"><strong>Amount</strong></th>
<th width="15%" align="center"><strong>Slip</strong></th>
<th width="10%" align="center"><strong>Status</strong></th>
<th width="10%" align="center"><strong>Date</strong></th>
<th width="10%" align="center"><strong>Action</strong></th>
</tr>
</thead>
<tbody>
<?php
$tname='imaksoft_member_payment';
$lim=100;
$tpage='payment.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim($_POST['search'])."' ORDER BY `id` DESC";
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
<tr class="<?=$class?>">
<td align="center"><?=$i?></th>
<td align="center"><?=$fetch['userid']?></td>
<td align="center"><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>
<td align="center"><?=$fetch['tranid']?></td>
<td align="center"><?=$fetch['amount']?></td>
<td align="center" style="padding:5px;"><a href="file-download-payment.php?f=<?=$fetch['slip']?>" style="cursor:pointer;"><img src="../user/assets/img/down-arrow.png" height="20"></a></td>
<td align="center" style="padding:5px;"><?php if($fetch['status']=='P'){?><a href="payment-request-process.php?case=status&id=<?=$fetch['id']?>&st=<?=$fetch['status']?>&page=<?=$_REQUEST['page']?>" style="text-decoration:none;"><span style="color:#FFFFFF;background:#FF0000;padding:2px 10px;border-radius:5px;" onClick="return confirm('Are you sure want to change status of payment request?');">Pending</span></a><?php }else{?><span style="color:#FFFFFF;background:#009900;padding:2px 10px;border-radius:5px;">Active</span><?php }?></td>
<td align="center" style="padding:5px;"><?=$fetch['date']?></td>

<td align="center" style="padding:5px;"><?php if($fetch['status']=='P'){?><a href="payment-request-process.php?case=delete&id=<?=$fetch['id']?>&page=<?=$_REQUEST['page']?>" class="btn btn-danger" onClick="return confirm('Are you sure want to delete this record?');"><i class="fa fa-times icon-only"></i></a><?php }else{?>---<?php }?></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="7" align="center" style="color:#FF0000;">No Record Found!</td></tr>
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
