<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';
$edba = new DBAdapter();

if (isset($_GET['type']) && isset($_GET['id'])) {

    $field = array("*");
    $data = $edba->getRow("gallary_list", $field, "id=" . $_GET['id']);

    echo "<input type='hidden' id='id' value='" . $data[0][0] . "'>";
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
                echo 'Edit Gallary';
            } else {
                echo 'Add Gallary';
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
                                    <h4 class="page-title">Create Gallary</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">   
                                            <button type="button" id="enable" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addalbum"><b>Create Album</b></button>
                                            <br><br>
                                            <form action="customFile/gallary_listPro.php" id="form_data" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >  
                                                <h4 class="mt-0 header-title">Textual inputs</h4>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select Album</label>
                                                    <div class="col-sm-4" id="albm_list">
                                                        <select class="form-control select2" name="album_id" id="album_list" required="">
                                                            <option value="0">Select Album</option>
                                                            <?php
                                                            $dba = new DBAdapter();
                                                            $data = $dba->getRow("album_list", array("id", "album_name"), "1 order by id desc");
                                                            foreach ($data as $subData) {
                                                                echo "<option  value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Image (576 x 432 pixels)</label>
                                                    <div class="col-sm-">
                                                        <input class="form-control" type="file"  placeholder="Image" id="image" name="image_name[]" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $data[0][1] : ''); ?>" required="" multiple="">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Gallery Title" id="gallary_title" name="gallary_title" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $datas[0][1] : ''); ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="button-items">
                                                    <input type="hidden" name="action" id="action" value="<?php echo (isset($_GET['id']) ? 'edit' : 'add') ?>"/>
                                                    <input type="hidden" name="id" id="id" value="<?php echo (isset($_GET['id']) ? $data[0][0] : '') ?>"/>
                                                    <button type="submit" id="btn_save" class="btn btn-primary waves-effect waves-light"><?php echo (isset($_GET['type']) && isset($_GET['id']) ? 'Edit' : 'Save') ?></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                            <form action="" id="form_data" class="form-horizontal" role="form" method="get" enctype="multipart/form-data" >  
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select Album</label>
                                    <div class="col-sm-4" id="partylist">
                                        <select class="form-control select2" name="alb_list" id="alb_id" required="">
                                            <option>Select Album</option>
                                            <?php
                                            $dba = new DBAdapter();
                                            $data = $dba->getRow("album_list", array("id", "album_name"), "1 order by id desc");
                                            foreach ($data as $subData) {
                                                echo "<option value=" . $subData[0] . ">" . $subData[1] . "</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="button-items">
                                        <button type="submit" id="btn_go" name="btn_go" class="btn btn-primary waves-effect waves-light">Go</button>
                                    </div>
                                </div>

                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Gallary List</h4><br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>No</th>
                                                        <th>Images</th>
                                                        <th>Title</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    if (isset($_GET['alb_list'])) {
                                                        $a_id = $_GET['alb_list'];
                                                        include_once 'shreeLib/DBAdapter.php';
                                                        $dba = new DBAdapter();
                                                        $field = array("*");
                                                        $data = $dba->getRow("gallary_list", $field, "album_id=" . $a_id);
                                                        $count = count($data);
                                                        $k = 1;
                                                        if ($count >= 1) {
                                                            foreach ($data as $subData) {
                                                                echo "<tr>";
                                                                echo"<td><input type = 'checkbox' class = 'case' id='check$subData[0]' name='check[]' value='$subData[0]'/></td>";
                                                                echo "<td>" . $k . "</td>";
                                                                echo "<td> <img src=Images/Gallary/" . $subData[2] . "  alt='image' class='img-responsive' height=100 width=100></td>";
                                                                echo "<td>" . $subData[3] . "</td>";
                                                                echo "</tr>";
                                                                $k++;
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <?php
                                            echo "<button class='btn btn-danger btn_delete' id='save_value' onclick='SetForDelete();'><i class='fa fa-trash-o'></i>Delete</button>";
                                            ?>
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
                <div class="col-sm-6 col-md-3 m-t-30">
                    <div class="modal fade" id="addalbum" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Album</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" onsubmit="addParty();" >
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Year</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" name="year_id" id="year_id" required="">
                                                    <option>Select Year</option>
                                                    <?php
                                                    $dba = new DBAdapter();
                                                    $data1 = $dba->getRow("year_list", array("id", "year_name"), "1");
                                                    foreach ($data1 as $subData) {
//                                                            echo "<option  value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
                                                        echo "<option " . ($subData[0] == $data[0][2] ? 'selected' : '') . " value=" . $subData[0] . ">" . $subData[1] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Create Album</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text"  placeholder="Album Name" id="album_name" name="album_name" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $data[0][1] : ''); ?>" required="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" onClick="addAlbum(); getAlbum();">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <?php include 'footer.php' ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="customFile/createAlbumJs.js"></script>
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
        <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>
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
        <script type="text/javascript">
                                        function getAlbum() {

                                            $.ajax({
                                                url: 'getNewAlbum.php',
                                                dataType: "html",
                                                cache: false,
                                                success: function (Data) {
                                                    // alert(Data);
                                                    $('#albm_list').html(Data);
                                                },
                                                error: function (errorThrown) {
                                                    alert(errorThrown);
                                                    alert("There is an error with AJAX!");
                                                }
                                            });
                                        }
                                        ;

        </script>
        <script type="text/javascript">

            function SetForDelete(id) {
                var values = $('input:checked').map(function () {
                    return this.value;
                }).get();
                location.href = "Delete.php?type=gallary_list&id=" + values;

            }
        </script>
    </body>

</html>