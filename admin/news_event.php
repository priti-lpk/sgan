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
                                                        <textarea  name="ne_desc" id="elm1" class="form-control summernote"><?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][5] : '') ?></textarea>
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

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">News & Events List</h4><br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>Date</th>
                                                        <th>Type</th>
                                                        <th>Desc</th>
                                                        <th>Image</th>
                                                        <th>Edit/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include_once 'shreeLib/DBAdapter.php';
                                                    $dba = new DBAdapter();
                                                    $field = array("*");
                                                    $data = $dba->getRow("news_event", $field, "1");
                                                    $count = count($data);
                                                    $i = 1;
                                                    if ($count >= 1) {
                                                        foreach ($data as $subData) {
                                                            echo "<tr>";
                                                            echo "<td>" . $i++ . "</td>";
                                                            echo "<td>" . $subData[1] . "</td>";
                                                            echo "<td>" . $subData[2] . "</td>";
                                                            echo "<td>" . $subData[3] . "</td>";
                                                            echo "<td style='width:300px;'>" . $subData[5] . "</td>";
                                                            echo "<td><img src=Images/News-Evants/" . $subData[4] . "  alt='image' class='img-responsive' height=100 width=100></td>";

                                                            echo "<td><a href='news_event.php?type=edit&id=" . $subData[0] . "' class='btn btn-primary' id='" . $subData[0] . "'><i class='fa fa-edit'></i> Edit</a>&nbsp;";
                                                            echo "<button class='btn btn-danger btn_delete' id='" . $subData[0] . "' onclick='SetForDelete(this.id);'><i class='fa fa-trash'>  Delete</button></td>";
                                                            echo '</tr>';
                                                        }
                                                    }
                                                    ?> 
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> 
                                <!--end col--> 
                            </div>  
                            <!--end row--> 


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

        <script src="plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="plugins/bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
        <script src="plugins/bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- Plugins js -->
        <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

        <script src="plugins/select2/js/select2.min.js"></script>
        <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
        <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="plugins/datatables/jszip.min.js"></script>
        <script src="plugins/datatables/pdfmake.min.js"></script>
        <script src="plugins/datatables/vfs_fonts.js"></script>
        <script src="plugins/datatables/buttons.html5.min.js"></script>
        <script src="plugins/datatables/buttons.print.min.js"></script>
        <script src="plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/pages/datatables.init.js"></script>

        <!-- Plugins Init js -->
        <script src="assets/pages/form-advanced.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
	    <link href="assets/dist-1/main.css" rel="stylesheet">
		<link href="assets/dist/summernote.css" rel="stylesheet">
        <script src="assets/dist-1/summernote.js"></script>
		<!--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.css" rel="stylesheet">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.7.0/summernote.js"></script>-->
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
		
        <script type="text/javascript">

            function SetForDelete(id) {
                location.href = "Delete.php?type=news_enents&id=" + id;

            }
        </script>
		
    
    </body>

</html>