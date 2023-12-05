<?php include('head.php') ;
$left=411;
?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">

<?php if($_REQUEST['inc']=='memdet'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Member Details</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Direct_login</th>
<th style="text-align:center;">Sponsor</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Password</th>
<th style="text-align:center;">Phone</th>
<th style="text-align:center;">Account_Status</th>
<th style="text-align:center;">Pay_status</th>
<th style="text-align:center;">Date</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member';
$lim=1000000;
$tpage='member.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim(mysqli_real_escape_string($conn,$_POST['search']))."' OR `name` LIKE '".trim(mysqli_real_escape_string($conn,$_POST['search']))."' OR `phone` LIKE '".trim(mysqli_real_escape_string($conn,$_POST['search']))."' ORDER BY `id` DESC";
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

<style>
    @-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
    .blink{
    text-decoration: blink;
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 0.9s;
    -webkit-animation-iteration-count:infinite;
    -webkit-animation-timing-function:ease-in-out;
    -webkit-animation-direction: alternate;
}
</style>
<td  align="center"><?=$i?></td>
<td  align="center"><?=$fetch['userid']?></a></td>
<td  align="center"><a href="../user/admin-login-process.php?userid=<?=$fetch['userid']?>&password=<?=base64_decode($fetch['password'])?>&ch=sc" target="_blank" style="text-decoration:none;"><strong><span  class="blink" style="color:#ffeb07;">Login</span></strong></a></td>

<td align="center" ><?php if($fetch['sponsor']){?><?=$fetch['sponsor']?><?php }else{?>---<?php }?></td>
<td align="center" ><?=ucfirst($fetch['name'])?></td>
<td align="center" ><?=base64_decode($fetch['password'])?></td>
<td align="center" ><?=$fetch['phone']?></td>
<td align="center" ><?php if($fetch['status']=='I'){?><a href="member-process.php?case=status&id=<?=$fetch['id']?>&st=<?=$fetch['status']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-info" style="color:#CC0000;">Unblock</span></a><?php }else{?><a href="member-process.php?case=status&id=<?=$fetch['id']?>&st=<?=$fetch['status']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-success" style="color:#00CC00;">Block</span></a><?php }?></td>
<td align="center" style="padding:5px;"><?php if($fetch['paystatus']=='A'){?><span style="color:#fff;">Paid</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></th>
<td align="center" ><?=$fetch['date']?></td>
<td align="center" >

<a href="member.php?inc=view&id=<?=$fetch['id']?>" ><img src="images/eye.png" title="Inquiry Details" height="18" /></a>
&nbsp;&nbsp;
<a href="member.php?inc=edit&id=<?=$fetch['id']?>"><img src="images/edit.png"></a>&nbsp;&nbsp;
<a href="member-process.php?case=delete&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to delete this?')"><img src="images/delete.png" /></a></th>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="10" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='view'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Level Income Statement</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<?php
$sql="SELECT * FROM `imaksoft_member` WHERE `id`='".trim($_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res)
?>
<table width="95%" class="table table-striped table-bordered table-hover" id="sample_1">
<tr><th width="33%">User ID</th><th width="67%"><?=$fetch['userid']?></th></tr>
<tr><th>Sponsor ID</th><th><?php if($fetch['sponsor']){?><?=$fetch['sponsor']?><?php }else{?>--<?php }?></th></tr>
<tr><th>Placement</th><th><?php if($fetch['placement']){?><?=$fetch['placement']?><?php }else{?>--<?php }?></th></tr>
<tr><th>Name</th><th><?=ucfirst($fetch['name'])?></th></tr>
<tr><th>Password</th><th><?=base64_decode($fetch['password'])?></th></tr>
<tr><th>Email</th><th><?=$fetch['email']?></th></tr>
<tr><th>Phone</th><th><?=$fetch['phone']?></th></tr>
<tr><th>Address</th><th><?=$fetch['address']?></th></tr>
<tr><th>Status</th><th><?php if($fetch['status']=='A'){?><span style="color:#009900;">Active</span><?php }else{?><span style="color:#FF0000;">Pending</span><?php }?></th></tr>
<tr><th>Joining</th><th><?=$fetch['date']?></th></tr>

<tr><th>Bank</th><th><?=$fetch['bname']?></th></tr>
<tr><th>Branch</th><th><?=$fetch['branch']?></th></tr>
<tr><th>Account Holder Name</th><th><?=$fetch['accname']?></th></tr>
<tr><th>Account No</th><th><?=$fetch['accno']?></th></tr>
<tr><th>IFS Code</th><th><?=$fetch['ifscode']?></th></tr>

<tr><th>Bitcoin</th><th><?=$fetch['bitcoin']?></th></tr>
<tr><th>UPI</th><th><?=$fetch['upi']?></th></tr>

</table>
<?php } ?>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='edit'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Member Details</h4>
</div>
<div class="card-body">
<?php if($_REQUEST['e']=='1'){?><p align="center" style=" color:#FF0000;">Already exists!</p><?php }?>
<?php if($_REQUEST['m']=='1'){?><p align="center" style=" color:#00CC33;">Updated successfully!</p><?php }?>

<?php 
$sql="SELECT * FROM `imaksoft_member` WHERE `id`='".trim($_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="member-process.php?case=edit&id=<?=$_REQUEST['id']?>&page=<?=$_REQUEST['page']?>" autocomplete="off" method="post">
<div class="form-body">

<div class="form-group">
<label for="userinput5">Name</label>
<input class="form-control border-primary" type="text" placeholder="Enter Name" id="name" name="name" value="<?=$fetch['name']?>">
</div>

<div class="form-group">
<label for="userinput5">Password</label>
<input class="form-control border-primary" type="password" placeholder="Enter Password" id="password" name="password" value="<?=base64_decode($fetch['password'])?>">
</div>


<div class="form-group">
<label for="userinput5">Email</label>
<input class="form-control border-primary" type="text" placeholder="Enter Email" id="email" name="email" value="<?=$fetch['email']?>" />
</div>

<div class="form-group">
<label for="userinput5">Phone</label>
<input class="form-control border-primary" type="text" placeholder="Enter Phone" id="phone" name="phone" value="<?=$fetch['phone']?>" />
</div>

<div class="form-group">
<label for="userinput5">Address<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Address" required id="address" name="address" value="<?=$fetch['address']?>" />
</div>


<div class="form-group">
<label for="userinput5">Bank Name<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Bank Name" required id="bname" name="bname" value="<?=$fetch['bname']?>" />
</div>
<div class="form-group">
<label for="userinput5">Branch<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Branch" required id="branch" name="branch" value="<?=$fetch['branch']?>" />
</div>
<div class="form-group">
<label for="userinput5">Account Holder Name<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Account Holder Name" required id="accname" name="accname" value="<?=$fetch['accname']?>" />
</div>
<div class="form-group">
<label for="userinput5">Account No<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Account No" required id="accno" name="accno" value="<?=$fetch['accno']?>" />
</div>
<div class="form-group">
<label for="userinput5">IFS Code<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter IFS Code" required id="ifscode" name="ifscode" value="<?=$fetch['ifscode']?>" />
</div>

<div class="form-group">
<label for="userinput5">Bitcoin Wallet<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Bitcoin" required id="bitcoin" name="bitcoin" value="<?=$fetch['bitcoin']?>" />
</div>

<div class="form-group">
<label for="userinput5">UPI<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter UPI" required id="upi" name="upi" value="<?=$fetch['upi']?>" />
</div>


</div>

<div class="form-actions right">

<button type="submit" class="btn btn-primary">
<i class="icon-check2"></i>Submit</button>
</div>
</form>
<?php }?>
</div>
</div>
</div>
</div>
</div>



<?php }else if($_REQUEST['inc']=='bank'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Bank Details</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr align="center">
<th align="center">Sl_No.</th>                           
<th  align="center">User_ID</th>             
<th align="center">Name</th>                        
<th  align="center">Bank</th>    
<th  align="center">Branch</th>
<th  align="center">Account_Holder_Name</th> 
<th  align="center">Account_No</th>  
<th  align="center">IFS_Code</th>
<th  align="center">Bitcoin</th> 
<th  align="center">UPI</th> 
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member';
$lim=100;
$tpage='bank-details.php';
if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim($_POST['search'])."' OR `name` LIKE '".trim($_POST['search'])."' ORDER BY `id` DESC";
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
<tr align="center">
<td ><?=$i?></td>
<td ><?=$fetch['userid']?></td>
<td ><?=ucwords(strtolower($fetch['name']))?></td>
<td ><?=$fetch['bname']?></td>
<td ><?=$fetch['branch']?></td>
<td ><?=$fetch['accname']?></td>
<td ><?=$fetch['accno']?></td>
<td ><?=$fetch['ifscode']?></td>
<td ><?=$fetch['bitcoin']?></td>
<td ><?=$fetch['upi']?></td>
</tr>              
<?php $i++;}}else{?>
<tr><td colspan="10" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='kyc'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Kyc Details</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th width="10%">Sl_No.</th>                         
<th width="10%">User_ID</th>                
<th width="10%">Name</th>                       
<th width="10%">Identity_Proof</th> 
<th width="10%">Status</th>                     
<th width="10%">Address_Proof</th>
<th width="10%">Status</th>
<th width="10%">Date</th>   
<th width="10%">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member_kyc';
$lim=100;
$tpage='kyc-details.php';

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
<tr align="center">
<td style="padding:2px;"><?=$i?></td>
<td style="padding:2px;"><?=$fetch['userid']?></td>
<td style="padding:2px;"><?=getMemberUserid($conn,$fetch['userid'],'name')?></td>

<td style="padding:2px;"><?php if($fetch['idproof']){?><img src="../member/kyc/<?=$fetch['idproof']?>" height="100" width="100" /><?php }?></td>

<td style="padding:2px;"><?php if($fetch['idstatus']=='I'){?><a href="kyc-status.php?case=idstatus&id=<?=$fetch['id']?>&st=<?=$fetch['idstatus']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-info" style="color:#FF0000;">Pending</span></a><?php }else{?><a href="kyc-status.php?case=idstatus&id=<?=$fetch['id']?>&st=<?=$fetch['idstatus']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-success" style="color:#00CC00;">Approved</span></a><?php }?></td>

<td style="padding:2px;"><?php if($fetch['address']){?><img src="../member/kyc/<?=$fetch['address']?>" height="100" width="100" /><?php }?></td>

<td style="padding:2px;"><?php if($fetch['addstatus']=='I'){?><a href="kyc-status.php?case=addstatus&id=<?=$fetch['id']?>&st=<?=$fetch['addstatus']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-info" style="color:#FF0000;">Pending</span></a><?php }else{?><a href="kyc-status.php?case=addstatus&id=<?=$fetch['id']?>&st=<?=$fetch['addstatus']?>" style="text-decoration:none;" onClick="return confirm('Are you sure want to change the status?');"><span class="label label-success" style="color:#00CC00;">Approved</span></a><?php }?></td>

<td style="padding:2px;"><?=$fetch['date']?></td>
<td align="center" style="padding:5px;">
<a href="kyc-status.php?case=delete&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to delete?');"><img src="images/delete.png" /></a></td>
</tr>              
<?php $i++;}}else{?>
<tr><td colspan="9" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='income'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Wallet Details</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Total_Income</th>
<th style="text-align:center;">ROI_Wallet</th>
<th style="text-align:center;">Current_Wallet</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member';
$lim=100;
$tpage='income-statement.php';

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
<td align="center" ><?=$i?></td>
<td align="center"><?=$fetch['userid']?></td>
<td align="center" ><?=ucfirst(getMemberUserid($conn,$fetch['userid'],'name'))?></td>
<td align="center"><?=geTotalCommission($conn,$fetch['userid'])?></td>
<td align="center"><?=getROIBonus($conn,$fetch['userid'])?></td>
<td align="center"><?=getAvailableFundWallet($conn,$fetch['userid'])?></td>

</tr>
<?php $i++;}}else{?>
<tr><td colspan="9" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='invd'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Investment Details</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">User_ID</th>
<th style="text-align:center;">Name</th>
<th style="text-align:center;">Package</th>
<th style="text-align:center;">Amount</th>
<th style="text-align:center;">Date</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_member_investment';
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
<td align="center" ><?=ucfirst(getMemberUserid($conn,$fetch['userid'],'name'))?></td>
<td align="center"><?=getSettingsPackage($conn,$fetch['package'],'plan')?></td>
<td align="center" ><?=$fetch['amount']?></td>
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
