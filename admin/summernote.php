<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';
if (isset($_GET['type']) && isset($_GET['id'])) {

    $edba = new DBAdapter();
    $field = array("*");
    $edata = $edba->getRow("news_event", $field, "id=" . $_GET['id']);

    echo "<input type='hidden' id='news_event_id' value='" . $_GET['id'] . "'>";
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?php
            if (isset($_GET['type']) && isset($_GET['id'])) {
                echo 'Edit News Event';
            } else {
                echo 'Add News Event';
            }
            ?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <style>
            #image-link:hover {
                -webkit-transform: scale(4,4);
            }
            .note-icon-caret {
                display: inline;
            }
            .modal-header .close {
                padding: 0rem;
                margin: 0;
            }
        </style>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php include 'topbar.php'; ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include 'sidebar.php'; ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">News Event</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">                   
                                            <form action="customFile/news_eventPro.php" id="form_data" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >  
                                                <h4 class="mt-0 header-title">Textual inputs</h4>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Title" id="ne_title" name="ne_title" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][1] : ''); ?>" required="">
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="date"  placeholder="Date" id="ne_date" name="ne_date" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][2] : ''); ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Type</label>
                                                    <div class="col-sm-4">
                                                        <select class="form-control select2" name="ne_type" id="ne_type" required="">
                                                            <?php if (isset($_GET['id'])) { ?>
                                                                <option value = "News"<?php echo $edata[0][3] == 'News' ? ' selected="selected"' : '';
                                                                ?>>News</option>
                                                                <option value="Events"<?php echo $edata[0][3] == 'Events' ? ' selected="selected"' : ''; ?>>Events</option>
                                                            <?php } else {
                                                                ?>
                                                                <option value="" >Select Type</option>
                                                                <option value="News">News</option>
                                                                <option value="Events">Events</option>
                                                            <?php }
                                                            ?>
                                                        </select>                         
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="file"  placeholder="Choose Image" id="ne_image" name="ne_image" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][2] : ''); ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control summernote" type="text"  placeholder="Description" id="ne_desc" name="ne_desc" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][5] : ''); ?>" required="">
                                                    </div>
                                                </div>

                                                <div class="button-items">
                                                    <input type="hidden" name="action" id="action" value="<?php echo (isset($_GET['id']) ? 'edit' : 'add') ?>"/>
                                                    <input type="hidden" name="id" id="id" value="<?php echo (isset($_GET['id']) ? $edata[0][0] : '') ?>"/>
                                                    <button type="submit" id="btn_save" class="btn btn-primary waves-effect waves-light"><?php echo (isset($_GET['type']) && isset($_GET['id']) ? 'Edit' : 'Save') ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->



                        </div>

                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <?php include 'footer.php' ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <link href="assets/dist/main.css" rel="stylesheet">

        <link href="assets/dist/summernote.css" rel="stylesheet">
        <script src="assets/dist/summernote.js"></script>
       
        <script type="text/javascript">
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['fontsize', ['fontsize']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['insert', ['picture', 'hr']],
                    ['table', ['table']],
                    ['insert', ['link', 'image', 'doc', 'video']],
                ],
                height: 400
            });
        </script>

    </body>

</html>