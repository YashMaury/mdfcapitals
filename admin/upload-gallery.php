<?php include('head.php') ?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

<div class="main-container container-fluid">

<div class="main-content-body">
<div class="row row-sm">


<div class="main-panel">
<div class="content">
    <div class="page-inner">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            Upload Image
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <?php if(isset($_REQUEST['ie'])==1){?><p align="center" style="color:#fff; background-color: #CC0000;">Failed to upload Image</p><?php }?>
                        <?php if(isset($_REQUEST['im'])==1){?><p align="center" style="color:#fff; background-color: #00CC33">Image Uploaded Successfully!!</p><?php }?>
                        <form class="form" action="upload-gallery-process.php?type=img" autocomplete="off" enctype="multipart/form-data" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label for="userinput5">Message<span style="color:#CC0000;">*</span></label>
                                    <input class="form-control border-primary" type="text" required id="message" name="message" value="" />
                                </div>
                        
                                <div class="form-group">
                                    <label for="userinput5">Image<span style="color:#CC0000;">*</span></label>
                                    <input class="form-control border-primary" type="file" required id="image" name="image" value="" />
                                </div>
                                <div class="form-actions right">
                        
                                <button type="submit" class="btn btn-primary">
                                    <i class="icon-check2"></i>Submit
                                </button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Upload Video
                    </div>
                </div>
                <div class="card-body">

<?php if(isset($_REQUEST['vf'])==1){?><p align="center" style="color:#fff; background-color: #CC0000;">Something went wrong. Failed to upload Video</p><?php }?>
<?php if(isset($_REQUEST['ve'])==1){?><p align="center" style="color:#fff; background-color: #CC0000;">Failed to upload Video</p><?php }?>
<?php if(isset($_REQUEST['vs'])==1){?><p align="center" style="color:#fff; background-color: #CC0000;">Size is greater to upload Video</p><?php }?>
<?php if(isset($_REQUEST['vt'])==1){?><p align="center" style="color:#fff; background-color: #CC0000;">Only video can be uploaded.</p><?php }?>
<?php if(isset($_REQUEST['vm'])==1){?><p align="center" style="color:#fff; background-color: #00CC33">Video Uploaded Successfully!!</p><?php }?>

<form class="form" action="upload-gallery-process.php?type=video" autocomplete="off" enctype="multipart/form-data" method="post">
<div class="form-body">
<input type="hidden" name="type" id="type" value="">
<div class="form-group">
<label for="userinput5">Message<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" required id="message" name="message" value="" />
</div>

<div class="form-group">
<label for="userinput5">Upload Type<span style="color:#CC0000;">*</span></label>
<div class="form-check">
<input class="form-check-input border-primary" type="radio" id="video-type-youtube" name="video-type" value="" />
<label class="form-check-label" for="userinput5">Youtube</label>
</div>
<div class="form-check">
<input class="form-check-input border-primary" type="radio" id="video-type-upload" name="video-type" value="" />
<label class="form-check-label" for="userinput5">Upload</label>
</div>
</div>

<div class="form-group d-none"  id="youtube">
<label for="userinput5">Video<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="text" id="video-youtube" name="youtube-video" value="" />
</div>

<div class="form-group d-none"  id="upload">
<label for="userinput5">Video<span style="color:#CC0000;">*</span></label>
<input class="form-control border-primary" type="file" id="video-upload" name="video" value="" />
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
</div>
</div></div>
</div>

<script type="text/javascript">
//<![CDATA[

theForm.oldSubmit = theForm.submit;
theForm.submit = WebForm_SaveScrollPositionSubmit;

theForm.oldOnSubmit = theForm.onsubmit;
theForm.onsubmit = WebForm_SaveScrollPositionOnSubmit;
//]]>
</script>

<script>
    $('input[name="video-type"]').change(function() {
        if($('#video-type-youtube').prop('checked')){
            // console.log('youtube');
            $('#youtube').removeClass('d-none');
            $('#upload').addClass('d-none');
            $('#video-upload').attr('disabled','disabled');
            $('#video-youtube').removeAttr('disabled');
            $('#type').val('youtube');
        } 
        if($('#video-type-upload').prop('checked')) {
            // console.log('upload');
            $('#upload').removeClass('d-none');
            $('#youtube').addClass('d-none');
            $('#video-youtube').attr('disabled','disabled');
            $('#video-upload').removeAttr('disabled');
            $('#type').val('upload');
        }
    })
</script>

</form>
<!--<script src="assets/plugins/jquery/jquery.min.js"></script>-->
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
