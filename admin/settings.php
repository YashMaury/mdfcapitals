<?php include('head.php') ;
$left=4111;
?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">

<?php if($_REQUEST['inc']=='package'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Package Settings</h4>

<div align="center">

</div></div>
<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Plan</th>
<th style="text-align:center;">Investment</th>
<th style="text-align:center;">Daily(%)</th>
<th style="text-align:center;">Weekly(%)</th>
<th style="text-align:center;">Profit(%)</th>
<th style="text-align:center;">No_Of_Days</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_settings_package';
$lim=100;
$tpage='settings-package.php';
$where="ORDER BY `id`";
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr height="40">
<td align="center" ><?=$i?></td>
<td align="center" ><?=$fetch['plan']?></td>
<td align="center"><?=$fetch['investment']?></td>
<td align="center" ><?=$fetch['dailyper']?> %</td>
<td align="center" ><?=$fetch['weeklyper']?> %</td>
<td align="center" ><?=$fetch['profitper']?> %</td>
<td align="center" ><?=$fetch['nodays']?></td>

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


<?php }else if($_REQUEST['inc']=='addpack'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add Package</h4>
</div>
<div class="card-body">
<?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Already Exists!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Added Successfully!!</p><?php }?>

<form class="form" action="settings-package-process.php?case=add" method="post">
<div class="form-body">

<div class="form-group">
<label for="userinput5">Plan Name<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Plan Name" required id="plan" name="plan" value="" />
</div>

<div class="form-group">
<label for="userinput5">Investment<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Investment" required id="investment" name="investment" value="" />
</div>

<div class="form-group">
<label for="userinput5">Daily(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Daily" required id="dailyper" name="dailyper" value="" />
</div>

<div class="form-group">
<label for="userinput5">Weekly(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Weekly" required id="weeklyper" name="weeklyper" value="" />
</div>

<div class="form-group">
<label for="userinput5">Profit(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Profit" required id="profitper" name="profitper" value="" />
</div>

<div class="form-group">
<label for="userinput5">No Of Days<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter No Of Days" required id="nodays" name="nodays" value="" />
</div>



</div>

<div class="form-actions right">

<button type="submit" class="btn btn-primary">
<i class="icon-check2"></i> Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='packedit'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add Package</h4>
</div>
<div class="card-body">
<?php 
$sql="SELECT * FROM `imaksoft_settings_package` WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="settings-package-process.php?case=edit&id=<?=$_REQUEST['id']?>" method="post">
<div class="form-body">

<div class="form-group">
<label for="userinput5">Plan Name<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Plan Name" required id="plan" name="plan" value="<?=$fetch['plan']?>" />
</div>

<div class="form-group">
<label for="userinput5">Investment<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Investment" required id="investment" name="investment" value="<?=$fetch['investment']?>" />
</div>

<div class="form-group">
<label for="userinput5">Daily(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Daily" required id="dailyper" name="dailyper" value="<?=$fetch['dailyper']?>" />
</div>

<div class="form-group">
<label for="userinput5">Weekly(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Weekly" required id="weeklyper" name="weeklyper" value="<?=$fetch['weeklyper']?>" />
</div>

<div class="form-group">
<label for="userinput5">Profit(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Profit" required id="profitper" name="profitper" value="<?=$fetch['profitper']?>" />
</div>

<div class="form-group">
<label for="userinput5">No Of Days<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter No Of Days" required id="nodays" name="nodays" value="<?=$fetch['nodays']?>" />
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


<?php }else if($_REQUEST['inc']=='direct'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Price</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Price</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_settings_direct';
$lim=100;
$tpage='deduct.php';

if($_REQUEST['act']=='search')
{
$where="WHERE `userid` LIKE '".trim($_POST['search'])."'  ORDER BY `id` DESC";
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
<td align="center" ><?=$fetch['amount']?></td>
<td align="center" >
<a href="settings.php?inc=editdirect&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to edit?')"><img src="images/edit.png"></a></td>
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


<?php }else if($_REQUEST['inc']=='editdirect'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Price</h4>
</div>
<div class="card-body">
<?php 
$sql="SELECT * FROM `imaksoft_settings_direct` WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="settings-direct-process.php?case=edit&id=<?=$_REQUEST['id']?>" method="post">
<div class="form-body">

<div class="form-group">
<label for="userinput5">Price<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Price" required id="amount" name="amount" value="<?=$fetch['amount']?>" />
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


<?php }else if($_REQUEST['inc']=='level'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Package Settings</h4></div>
<div align="center">
    <!--<a href="settings.php?inc=leveladdnew"><button type="submit" class="btn btn-primary">+ ADD</button></a>-->
</div>
<div>&nbsp;</div><?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Already Exists!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Added Successfully!!</p><?php }?>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Level</th>
<th style="text-align:center;">Percentage</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_settings_level';
$lim=100;
$tpage='settings-level.php';
$where="ORDER BY `id`";
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr height="40">
<td align="center" ><?=$i?></td>
<td align="center" ><?=$fetch['level']?></td>
<td align="center" ><?=$fetch['percentage']?> %</td>
<td align="center" >
<a href="settings.php?inc=leveladd&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to edit?')"><img src="images/edit.png"></a>&nbsp;
<a href="settings-level-process.php?case=delete&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to delete?')"><img src="images/delete.png" /></a></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="4" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='leveladd'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-4">
<div class="card">
<div class="card-header">
<h4 class="card-title">Level Settings</h4>
</div>
<div class="card-body">

<?php 
$sql="SELECT * FROM `imaksoft_settings_level` WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="settings-level-process.php?case=edit&id=<?=$_REQUEST['id']?>" method="post">
<div class="form-body">
<div class="form-group">
<label for="userinput5">Level<span style="color:#CC0000;">*</span></label>
<select name="level" id="level" class="form-control  border-primary" required>
<option value="" >Select Level</option>
<option value="Level 1"<?php if($fetch['level']=='Level 1'){ echo 'selected';}?>>Level 1</option>
<option value="Level 2"<?php if($fetch['level']=='Level 2'){ echo 'selected';}?>>Level 2</option>
<option value="Level 3"<?php if($fetch['level']=='Level 3'){ echo 'selected';}?>>Level 3</option>
<option value="Level 4"<?php if($fetch['level']=='Level 4'){ echo 'selected';}?>>Level 4</option>
<option value="Level 5"<?php if($fetch['level']=='Level 5'){ echo 'selected';}?>>Level 5</option>
<option value="Level 6"<?php if($fetch['level']=='Level 6'){ echo 'selected';}?>>Level 6</option>
<option value="Level 7"<?php if($fetch['level']=='Level 7'){ echo 'selected';}?>>Level 7</option>
<option value="Level 8" <?php if($fetch['level']=='Level 8'){ echo 'selected';}?>>Level 8</option>
<option value="Level 9" <?php if($fetch['level']=='Level 9'){ echo 'selected';}?>>Level 9</option>
<option value="Level 10" <?php if($fetch['level']=='Level 10'){ echo 'selected';}?>>Level 10</option>
<option value="Level 11" <?php if($fetch['level']=='Level 11'){ echo 'selected';}?>>Level 11</option>
<option value="Level 12" <?php if($fetch['level']=='Level 12'){ echo 'selected';}?>>Level 12</option>
<option value="Level 13" <?php if($fetch['level']=='Level 13'){ echo 'selected';}?>>Level 13</option>
<option value="Level 14" <?php if($fetch['level']=='Level 14'){ echo 'selected';}?>>Level 14</option>
<option value="Level 15" <?php if($fetch['level']=='Level 15'){ echo 'selected';}?>>Level 15</option>
</select>
</div>

<div class="form-group">
<label for="userinput5">Percentage(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Percentage" id="percentage" name="percentage" value="<?=$fetch['percentage']?>" required />
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


<?php }else if($_REQUEST['inc']=='leveladdnew'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-4">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add Level</h4>
</div>
<div class="card-body">

<?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Already Exists!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Added Successfully!!</p><?php }?>

<form class="form" action="settings-level-process.php?case=add" method="post">
<div class="form-body">
<div class="form-group">
<label for="userinput5">Level<span style="color:#CC0000;">*</span></label>
<select name="level" id="level" class="form-control  border-primary" required>
<option value="" >Select Level</option>
<option value="Level 1">Level 1</option>
<option value="Level 2">Level 2</option>
<option value="Level 3">Level 3</option>
<option value="Level 4">Level 4</option>
<option value="Level 5">Level 5</option>
<option value="Level 6">Level 6</option>
<option value="Level 7">Level 7</option>
<option value="Level 8">Level 8</option>
<option value="Level 9">Level 9</option>
<option value="Level 10">Level 10</option>
<option value="Level 11">Level 11</option>
<option value="Level 12">Level 12</option>
<option value="Level 13">Level 13</option>
<option value="Level 14">Level 14</option>
<option value="Level 15">Level 15</option>
</select>
</div>

<div class="form-group">
<label for="userinput5">Percentage (%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Percentage" id="percentage" name="percentage" value="" required />
</div>

</div>

<div class="form-actions right">
<button type="submit" class="btn btn-primary">
<i class="icon-check2"></i>Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>





<?php }else if($_REQUEST['inc']=='levelroi'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Level Roi Settings</h4></div>
<div align="center">
    <a href="settings.php?inc=levelroiaddnew"><button type="submit" class="btn btn-primary">+ ADD</button></a>
</div>
<div>&nbsp;</div><?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Already Exists!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Added Successfully!!</p><?php }?>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Level</th>
<th style="text-align:center;">Percentage</th>
<th style="text-align:center;">Business</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_settings_level_roi';
$lim=100;
$tpage='settings-level-roi.php';
$where="ORDER BY `id`";
include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr height="40">
<td align="center" style="padding:2px;"><?=$i?></td>
<td align="center" style="padding:2px;"><?=$fetch['level']?></td>
<td align="center" style="padding:2px;"><?=$fetch['percentage']?> %</td>
<td align="center" style="padding:2px;"><?=$fetch['business']?></td>
<td align="center" style="padding:2px;">
<a href="settings.php?inc=levelroiadd&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to edit?')"><img src="images/edit.png"></a>&nbsp;
<a href="settings-level-roi-process.php?case=delete&id=<?=$fetch['id']?>" onclick="return confirm('Are you sure want to delete?')"><img src="images/delete.png" /></a></td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="5" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='levelroiadd'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-4">
<div class="card">
<div class="card-header">
<h4 class="card-title">Level Settings</h4>
</div>
<div class="card-body">

<?php 
$sql="SELECT * FROM `imaksoft_settings_level_roi` WHERE `id`='".mysqli_real_escape_string($conn,$_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="settings-level-roi-process.php?case=edit&id=<?=$_REQUEST['id']?>" method="post">
<div class="form-body">
<div class="form-group">
<label for="userinput5">Level<span style="color:#CC0000;">*</span></label>
<select name="level" id="level" class="form-control  border-primary" required>
<option value="" >Select Level</option>
<option value="Level 1"<?php if($fetch['level']=='Level 1'){ echo 'selected';}?>>Level 1</option>
<option value="Level 2"<?php if($fetch['level']=='Level 2'){ echo 'selected';}?>>Level 2</option>
<option value="Level 3"<?php if($fetch['level']=='Level 3'){ echo 'selected';}?>>Level 3</option>
<option value="Level 4"<?php if($fetch['level']=='Level 4'){ echo 'selected';}?>>Level 4</option>
<option value="Level 5"<?php if($fetch['level']=='Level 5'){ echo 'selected';}?>>Level 5</option>
<option value="Level 6"<?php if($fetch['level']=='Level 6'){ echo 'selected';}?>>Level 6</option>
<option value="Level 7"<?php if($fetch['level']=='Level 7'){ echo 'selected';}?>>Level 7</option>
<option value="Level 8" <?php if($fetch['level']=='Level 8'){ echo 'selected';}?>>Level 8</option>
<option value="Level 9" <?php if($fetch['level']=='Level 9'){ echo 'selected';}?>>Level 9</option>
</select>
</div>

<div class="form-group">
<label for="userinput5">Percentage(%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Percentage" id="percentage" name="percentage" value="<?=$fetch['percentage']?>" required />
</div>

<div class="form-group">
<label for="userinput5">Business</label>
<input class="form-control border-primary" type="text" placeholder="Enter Business" id="business" name="business" value="<?=$fetch['business']?>"/>
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


<?php }else if($_REQUEST['inc']=='levelroiaddnew'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-4">
<div class="card">
<div class="card-header">
<h4 class="card-title">Add Level</h4>
</div>
<div class="card-body">

<?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Already Exists!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Added Successfully!!</p><?php }?>

<form class="form" action="settings-level-roi-process.php?case=add" method="post">
<div class="form-body">
<div class="form-group">
<label for="userinput5">Level<span style="color:#CC0000;">*</span></label>
<select name="level" id="level" class="form-control  border-primary" required>
<option value="" >Select Level</option>
<option value="Level 1">Level 1</option>
<option value="Level 2">Level 2</option>
<option value="Level 3">Level 3</option>
<option value="Level 4">Level 4</option>
<option value="Level 5">Level 5</option>
<option value="Level 6">Level 6</option>
<option value="Level 7">Level 7</option>
<option value="Level 8">Level 8</option>
<option value="Level 9">Level 9</option>
</select>
</div>

<div class="form-group">
<label for="userinput5">Percentage (%)<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Percentage" id="percentage" name="percentage" value="" required />
</div>

<div class="form-group">
<label for="userinput5">Business</label>
<input class="form-control border-primary" type="text" placeholder="Enter Business" id="business" name="business" value=""/>
</div>

</div>

<div class="form-actions right">
<button type="submit" class="btn btn-primary">
<i class="icon-check2"></i>Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='with'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Withdrawal Settings </h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Minimum</th>
<th style="text-align:center;">Charge</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_settings_withdrawal';
$lim=100;
$tpage='settings-withdrawal.php';
$where="ORDER BY `id` DESC";

include('pagination.php');
$num=numrows($result);
$i=1;
if($num>0)
{
while($fetch=fetcharray($result))
{
?>
<tr  style="text-align:center; ">
<td  style="text-align:center; "><?=$i?></td>
<td style="text-align:center; "><?=$fetch['minimum']?></td>
<td style="text-align:center; "><?=$fetch['charge']?> %</td>
<td align="center" style="padding:2px;">
<a href="settings.php?inc=withedit&id=<?=$fetch['id']?>"><img src="images/edit.png"></a>&nbsp;
</td>
</tr>
<?php $i++;}}else{?>
<tr><td colspan="5" align="center" style="color:#FF0000;">No Record Found!</td></tr>
<?php }?>

</tbody>
</table>
</div>
</div>
</div>
</div>
</div>


<?php }else if($_REQUEST['inc']=='withedit'){?>
<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-md-3">&nbsp;</div>

<div class="col-md-6">
<div class="card">
<div class="card-header">
<h4 class="card-title">Withdrawal Settings</h4>
</div>
<div class="card-body">
<?php 
$sql="SELECT * FROM `imaksoft_settings_withdrawal` WHERE `id`='".trim($_REQUEST['id'])."'";
$res=query($conn,$sql);
$num=numrows($res);
if($num>0)
{
$fetch=fetcharray($res);
?>
<form class="form" action="settings-withdrawal-process.php?case=edit&id=<?=$_REQUEST['id']?>&page=<?=$_REQUEST['page']?>" method="post">

<div class="form-body">
<div class="form-group">
<label for="userinput5">Minimum<span style="color:#CC0000;">*</span></label>
<input type="text" id="minimum" name="minimum" class="form-control  border-primary" placeholder="Minimum" value="<?=$fetch['minimum']?>" required>         
</div>

<div class="form-group">
<label for="userinput5">Charge (%)<span style="color:#CC0000;">*</span></label>
<input type="text" id="charge" name="charge" class="form-control  border-primary" placeholder="Charge"value="<?=$fetch['charge']?>" required>                            
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
