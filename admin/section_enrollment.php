<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';
if (isset($_GET['type']) && isset($_GET['id'])) {

    $edba = new DBAdapter();
    $field = array("*");
    $edata = $edba->getRow("section_enrollment", $field, "id=" . $_GET['id']);

    echo "<input type='hidden' id='section_enrollment_id' value='" . $_GET['id'] . "'>";
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
                echo 'Edit Section Wise Enrollment';
            } else {
                echo 'Add Section Wise Enrollment';
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
                                    <h4 class="page-title">Section Wise Enrollment</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body"> 
                                            <button type="button" id="enable" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addclass"><b>Create Class</b></button>
                                            <button type="button" id="enable" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#addsection"><b>Create Section</b></button>
                                            <br><br>
                                            <form action="customFile/section_enrollmentPro.php" id="form_data" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >  
                                                <h4 class="mt-0 header-title">Textual inputs</h4>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select Class</label>
                                                    <div class="col-sm-4" id="class_list">
                                                        <select class="form-control select2" name="class_id" id="create_class" required="" onchange="cgetSection();">
                                                            <option>Select Class</option>
                                                            <?php
                                                            $dba = new DBAdapter();
                                                            $data = $dba->getRow("create_class", array("id", "class_name"), "1");
                                                            foreach ($data as $subData) {
                                                                echo "<option " . ($subData[0] == $edata[0][1] ? 'selected' : '') . " value=" . $subData[0] . ">" . $subData[1] . "</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Select Section</label>
                                                    <div class="col-sm-4" id="section_list">
                                                        <select class="form-control select2" name="section_id" id="create_section" required="">
                                                            <option>Select Section</option>
                                                            <?php
                                                            $editdata = isset($_GET['type']);
                                                            if ($editdata == 1) {
                                                                $dba = new DBAdapter();
                                                                $data = $dba->getRow("create_section", array("id", "section_name"), "class_id=" . $edata[0][1]);

                                                                foreach ($data as $subData) {
                                                                    echo "<option " . ($subData[0] == $edata[0][2] ? 'selected' : '') . " value=" . $subData[0] . ">" . $subData[1] . "</option>";
                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Present Student</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Present Student" id="pr_student" name="pr_student" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][3] : ''); ?>" required="">
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Left Student</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Left Student" id="left_student" name="left_student" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][4] : ''); ?>" required="" onchange="totalstudent();">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Total Student</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Total Student" id="total_student" name="total_student" value="<?php echo ( isset($_GET['type']) && isset($_GET['id']) ? ($edata[0][3] + $edata[0][4]) : ''); ?>" required="">
                                                    </div>
                                                    <label for="example-text-input" class="col-sm-2 col-form-label">Enrolled</label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text"  placeholder="Enrolled" id="enrolled" name="enrolled" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $edata[0][5] : ''); ?>" required="">
                                                    </div>
                                                </div>
                                                <div class="button-items">
                                                    <input type="hidden" name="action" id="action" value="<?php echo (isset($_GET['id']) ? 'edit' : 'add') ?>"/>
                                                    <input type="hidden" name="id" id="id" value="<?php echo (isset($_GET['id']) ? $_GET['id'] : '') ?>"/>
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

                                            <h4 class="mt-0 header-title">Section Wise Enrollment List</h4><br>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Class Name</th>
                                                        <th>Section Name</th>
                                                        <th>Present Student</th>
                                                        <th>Left Student</th>
                                                        <th>Total Student</th>
                                                        <th>Enrolled</th>
                                                        <th>Edit/Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    include_once 'shreeLib/DBAdapter.php';
                                                    $dba = new DBAdapter();
                                                    $field = array("section_enrollment.id,create_class.class_name,create_section.section_name,section_enrollment.pr_student,section_enrollment.left_student,section_enrollment.enrolled");
                                                    $data = $dba->getRow("section_enrollment INNER JOIN create_class ON section_enrollment.class_id=create_class.id LEFT JOIN create_section ON section_enrollment.section_id=create_section.id", $field, "1");
                                                    $count = count($data);
                                                    $i = 1;
                                                    if ($count >= 1) {
                                                        foreach ($data as $subData) {
                                                            echo "<tr>";
                                                            echo "<td>" . $i++ . "</td>";
                                                            echo "<td>" . $subData[1] . "</td>";
                                                            echo "<td>" . $subData[2] . "</td>";
                                                            echo "<td>" . $subData[3] . "</td>";
                                                            echo "<td>" . $subData[4] . "</td>";
                                                            echo "<td>" . ($subData[3] + $subData[4]) . "</td>";
                                                            echo "<td>" . $subData[5] . "</td>";
                                                            echo "<td><a href='section_enrollment.php?type=edit&id=" . $subData[0] . "' class='btn btn-primary' id='" . $subData[0] . "'><i class='fa fa-edit'></i> Edit</a>&nbsp;";
                                                            echo "<button class='btn btn-danger btn_delete' id='" . $subData[0] . "' onclick='SetForDelete(this.id);'><i class='fa fa-trash'>  Delete</button></td>";
                                                            echo '</tr>';
                                                        }
                                                    } else {
                                                        //echo 'No Data Available';
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
                <div class="col-sm-6 col-md-3 m-t-30">
                    <div class="modal fade" id="addclass" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Class</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" onsubmit="addParty();" >
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Class Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text"  placeholder="Class Name" id="class_name" name="class_name" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $data[0][1] : ''); ?>" required="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" onClick="addClass(); getClass();">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
                <div class="col-sm-6 col-md-3 m-t-30">
                    <div class="modal fade" id="addsection" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Add New Section</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" onsubmit="addParty();" >
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Class</label>
                                            <div class="col-sm-6">
                                                <select class="form-control select2" name="class_id" id="class_id" required="">
                                                    <option>Select Class</option>
                                                    <?php
                                                    $dba = new DBAdapter();
                                                    $data = $dba->getRow("create_class", array("id", "class_name"), "1");
                                                    foreach ($data as $subData) {
//                                                            echo "<option  value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
                                                        echo "<option " . ($subData[0] == $datas[0][2] ? 'selected' : '') . " value=" . $subData[0] . ">" . $subData[1] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Section Name</label>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="text"  placeholder="Section Name" id="section_name" name="section_name" value="<?php echo (isset($_GET['type']) && isset($_GET['id']) ? $datas[0][1] : ''); ?>" required="">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light"  data-toggle="modal" onClick="addSection();getSection();">Save changes</button>
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
        <script src="customFile/createClassJs.js"></script>
        <script src="customFile/createSectionJS.js"></script>
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
                                        function getClass() {

                                            $.ajax({
                                                url: 'getNewClass.php',
                                                dataType: "html",
                                                cache: false,
                                                success: function (Data) {
                                                    // alert(Data);
                                                    $('#class_list').html(Data);
                                                },
                                                error: function (errorThrown) {
                                                    alert(errorThrown);
                                                    alert("There is an error with AJAX!");
                                                }
                                            });
                                        }
                                        ;
                                        function getoldClass(id) {
                                            var data_string = "c_id=" + id;
                                            $.ajax({
                                                url: 'getNewClass.php',
                                                dataType: "html",
                                                data: data_string,
                                                cache: false,
                                                success: function (Data) {
                                                    // alert(Data);
                                                    $('#class_list').html(Data);
                                                },
                                                error: function (errorThrown) {
                                                    alert(errorThrown);
                                                    alert("There is an error with AJAX!");
                                                }
                                            });
                                        }
                                        ;
                                        function getSection() {

                                            $.ajax({
                                                url: 'getNewSection.php',
                                                dataType: "html",
                                                cache: false,
                                                success: function (Data) {
                                                    // alert(Data);
                                                    $('#section_list').html(Data);
                                                },
                                                error: function (errorThrown) {
                                                    alert(errorThrown);
                                                    alert("There is an error with AJAX!");
                                                }
                                            });
                                        }
                                        ;
                                        function cgetSection() {
                                            var class_name = document.getElementById("create_class").value;
                                            // alert(class_name);
                                            var data_string = "class_id=" + class_name;
                                            $.ajax({
                                                url: 'getData.php',
                                                dataType: "html",
                                                data: data_string,
                                                cache: false,
                                                success: function (Data) {
//                           alert(Data);
                                                    $('#section_list').html(Data);
                                                },
                                                error: function (errorThrown) {
                                                    alert(errorThrown);
                                                    alert("There is an error with AJAX!");
                                                }
                                            });
                                        }
                                        ;
                                        function totalstudent() {
                                            var p_std = document.getElementById("pr_student").value;
                                            var l_std = document.getElementById("left_student").value;
                                            var total = +p_std + +l_std;
                                            document.getElementById("total_student").value = total;
                                        }
                                        ;
                                        function SetForDelete(id) {
                                            location.href = "Delete.php?type=section_enrol&id=" + id;

                                        }
        </script>
    </body>

</html>