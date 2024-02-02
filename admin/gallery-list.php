<?php include('head.php');
$left = 411;
?>

<?php include('header.php') ?>

<?php include('sidebar.php') ?>
<div class="jumps-prevent" style="padding-top: 20px;"></div>


<div class="main-content app-content">

    <div class="main-container container-fluid">

        <div class="main-content-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Images</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Videos</button>
                </li>
            </ul>
            <div class="tab-content mt-3" id="myTabContent">
                <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <div class="row row-sm">
                        <table class="table table-head-bg-primary mt-1">
                            <thead>
                                <tr align="center">
                                    <th align="center">Sl_No</th>
                                    <th align="center">Message</th>
                                    <th align="center">Image</th>
                                    <th align="center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tname = 'imaksoft_gallery_image';
                                $lim = 100;
                                $tpage = 'investment-fund.php';
                                $where = "ORDER BY `id` DESC";
                                include('pagination.php');
                                $num = numrows($result);
                                $i = 1;
                                if ($num > 0) {
                                    while ($fetch = fetcharray($result)) {
                                        ?>
                                        <tr align="center">
                                            <td align="center">
                                                <?= $i ?>
                                            </td>
                                            <td align="center">
                                                <?= $fetch['message'] ?>
                                            </td>
                                            <td align="center"><img src="uploads/images/<?= $fetch['image'] ?>" style="width: 200px;">
                                            </td>
                                            <td>
                                                <form action="gallery-delete-process.php?case=delete-img" method="post">
                                                    <input type="hidden" name="id" value="<?= $fetch['id']?>" >
                                                    <input type="hidden" name="image" value="<?= $fetch['image']?>" >
                                                    <button type="submit" class="btn btn-danger" >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="8" align="center" style="color:#FF0000;">No Record Found!</td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <div align="center">
                            <?= $pagination ?>
                        </div>


                    </div>
                </div>
                <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="0">
                    <div class="row row-sm">
                        <table class="table table-head-bg-primary mt-1">
                            <thead>
                                <tr align="center">
                                    <th align="center">Sl_No</th>
                                    <th align="center">Message</th>
                                    <th align="center">Video</th>
                                    <th align="center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $tname = 'imaksoft_gallery_video';
                                $lim = 100;
                                $tpage = 'investment-fund.php';
                                $where = "ORDER BY `id` DESC";
                                include('pagination.php');
                                $num = numrows($result);
                                $i = 1;
                                if ($num > 0) {
                                    while ($fetch = fetcharray($result)) {
                                        ?>
                                        <tr align="center">
                                            <td align="center">
                                                <?= $i ?>
                                            </td>
                                            <td align="center">
                                                <?= $fetch['message'] ?>
                                            </td>
                                            <td align="center">
                                                <?php
                                                if($fetch['type'] == 'upload'){
                                                ?>
                                                <video style="height: 300px; width: 18rem; display: block;" controls>
                                                    <source src="uploads/videos/<?php echo $fetch['video'] ;?>" >
                                                </video>
                                                <?php 
                                                } else {
                                                ?>
                                                <iframe style="height: 300px; width: 18rem;" src="<?=$fetch['video']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <form action="gallery-delete-process.php?case=delete-video" method="post">
                                                    <input type="hidden" name="id" value="<?= $fetch['id']?>" >
                                                    <input type="hidden" name="video" value="<?= $fetch['video']?>" >
                                                    <input type="hidden" name="type" value="<?= $fetch['type']?>" >
                                                    <button type="submit" class="btn btn-danger" >Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    }
                                } else { ?>
                                    <tr>
                                        <td colspan="8" align="center" style="color:#FF0000;">No Record Found!</td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <div align="center">
                            <?= $pagination ?>
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