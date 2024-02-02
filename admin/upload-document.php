<?php include('head.php') ?>

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
<div class="col-md-4"></div>
<div class="col-md-4">

<div class="card">
<div class="card-header">
<div class="card-title">Upload Document</div>
</div>
<div class="card-body">
<?php if(isset($_REQUEST['er'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Title Missing !!</p><?php }?>
<?php if(isset($_REQUEST['e'])==1){?><p align="center" style="color:#CC0000; padding-bottom:8px;">Failed To Upload Image!!</p><?php }?>
<?php if(isset($_REQUEST['m'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Document Added Successfully!!</p><?php }?>

<form class="form" action="upload-gallery-process.php?type=document" autocomplete="off" enctype="multipart/form-data" method="post">

<div class="form-body">
<div class="form-group">
<label for="userinput5">Title<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" placeholder="Enter Message" required id="title" name="title">
</div>

<div class="form-group">
<label for="userinput5">Document Image<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="file" placeholder="Enter Message" required id="document" name="document">
</div>
</div>

<div class="form-actions right">

<button type="submit" class="btn btn-primary">
<i class="icon-check2"></i>Submit</button>
</div>
</form></div>
</div>
</div>
</div>
</div>
</div></div>
</div>



<div class="main-panel">
<div class="content">
<div class="page-inner">

<div class="row">
<div class="col-xs-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Documents</h4>
</div>

<div>&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<?php if(isset($_REQUEST['d'])==1){?><p align="center" style="color:#00CC33; padding-bottom:8px;">Document Deleted Successfully!!</p><?php }?>
<thead class="bg-teal bg-lighten-4">
<tr>
<th style="text-align:center;">Sl_No</th>
<th style="text-align:center;">Title</th>
<th style="text-align:center;">Image</th>
<th style="text-align:center;">Date</th>
<th style="text-align:center;">Action</th>
</tr>
</thead>
<tbody>

<?php
$tname='imaksoft_legal_document';
$lim=100;
$tpage='announcement.php';
$where=" ORDER BY `id` DESC";

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
<td align="center"><?=stripslashes($fetch['title'])?></td>
<td align="center"><img src="uploads/documents/<?=$fetch['image']?>" width="200px" ></td>
<td align="center"><?=date('d M Y',strtotime($fetch['created_at']))?></td>
<td align="center">
<form action="gallery-delete-process.php?case=delete-document" method="post">
    <input type="hidden" name="id" value="<?= $fetch['id']?>" >
    <input type="hidden" name="image" value="<?= $fetch['image']?>" >
    <button type="submit" class="btn btn-danger" >Delete</button>
</form>
</td>
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
