<?php
include_once 'shreeLib/DBAdapter.php';
$dba = new DBAdapter();
$field = array("*");
$data = $dba->getRow("admission_master", $field, "id=" . $_GET['id']);
$last_result = $dba->getRow("admission_result_list", $field, "admission_id=" . $_GET['id']);

$image = $data[0][4];
$admission_class = $data[0][1];
$admission_session = $data[0][2];
$student_name = $data[0][3];
$gender = $data[0][5];
$date_of_birth = $data[0][6];
$date_of_birth_in_word = $data[0][7];
$place_of_birth = $data[0][8];
$parents_detail = $data[0][9];
$parents_result = array_values(json_decode($parents_detail, true));
$category = $data[0][10];
$last_school_name_address = $data[0][11];
$last_school_attend = $data[0][12];
$last_school_affiliated = $data[0][13];

$birth_certificate = $data[0][14];
$case_certificate = $data[0][15];
$report_card = $data[0][16];
$transfer_certificate = $data[0][17];
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admission List</title>
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

        <!-- Stylesheets -->
        <!--<link href="../css/style.css" rel="stylesheet">-->
        <style>

            .profileImage {

                display: block;
            }
            .file-upload {
                opacity: 0;
                position: absolute;
                left: 0;
                top: 0;
            }
            .table_input_box{
                font-family: none;
                border:none !important
            }

            .online-form ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
            .online-form li {
                float: left;
            }
            .checkbox-admission {
                display: block;
                margin-bottom: 15px;
            }

            .checkbox-admission input {
                padding: 0;
                height: initial;
                width: initial;
                margin-bottom: 0;
                display: none;
                cursor: pointer;
            }
            .checkbox-admission label {
                position: relative;
                cursor: pointer;
            }

            .checkbox-admission label:before {
                content:'';
                -webkit-appearance: none;
                background-color: transparent;
                border: 3px solid #0079bf;
                box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
                padding: 10px;
                display: inline-block;
                position: relative;
                vertical-align: middle;
                cursor: pointer;
                margin-right: 5px;
            }

            .checkbox-admission input:checked + label:after {
                content: '';
                display: block;
                position: absolute;
                top: 5px;
                left: 9px;
                width: 6px;
                height: 14px;
                border: solid #0079bf;
                border-width: 0 2px 2px 0;
                transform: rotate(45deg);
            }
            @page {
                size: A4;
                /*margin: 10mm 0mm 20mm 0mm;*/  

            }
            @media print {
                .btn-print{
                    display: none !important;
                }

                .online-form ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                }
                .online-form li {
                    float: left;
                }
                .checkbox-admission {
                    display: block;
                    margin-bottom: 15px;
                }

                .checkbox-admission input {
                    padding: 0;
                    height: initial;
                    width: initial;
                    margin-bottom: 0;
                    display: none;
                    cursor: pointer;
                }
                .checkbox-admission label {
                    position: relative;
                    cursor: pointer;
                }

                .checkbox-admission label:before {
                    content:'';
                    -webkit-appearance: none;
                    background-color: transparent;
                    border: 3px solid #0079bf;
                    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05), inset 0px -15px 10px -12px rgba(0, 0, 0, 0.05);
                    padding: 10px;
                    display: inline-block;
                    position: relative;
                    vertical-align: middle;
                    cursor: pointer;
                    margin-right: 5px;
                }

                .checkbox-admission input:checked + label:after {
                    content: '';
                    display: block;
                    position: absolute;
                    top: 5px;
                    left: 9px;
                    width: 6px;
                    height: 14px;
                    border: solid #0079bf;
                    border-width: 0 2px 2px 0;
                    transform: rotate(45deg);
                }
            }
        </style>

    </head>

    <body id='allpage'>

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
                                    <h4 class="page-title">Admission List</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">


                            <div class="row">
                                <div class="col-12">

                                    <div class="card m-b-20 online-form">
                                        <div class="card-body">
                                            <button class='btn btn-primary btn-print' id="btn" onclick="ExportPdf();"><i class='fa fa-print'></i></button>
                                            <div class='mb-5 mt-5' >
                                                <table border='0' style='width: 100%'>
                                                    <tr>
                                                        <td>
                                                            <img src="images/Picture2.png" alt="logo">
                                                        </td>
                                                        <td>
                                                    <center>
                                                        <h2>SHREE GANSHYAM ACEDEMY</h2>
                                                        <h5><strong>(CBSC English Medium Recidential cum Day School)</strong></h5>
                                                        <h6>Kera Road Naranpar,Tal: Bhuj-Kutch Pin : 370429</h6>
                                                        <h6>Email :shreeghanshyamacademy@hotmail.com</h6>
                                                        <h6><strong>Website : www.sgan.in  Ph. (02832) 281832 Mo. 6351819439</strong></h6>
                                                    </center>

                                                    </td>
                                                    <td>
                                                        <img src="images/Picture1.png" alt="logo" >
                                                    </td>

                                                    <tr>

                                                </table>
                                                <hr>
                                                <div class='col-md-12' style='margin-bottom: 100px;'>
                                                    <div class='col-md-10'></div>
                                                    <div class='col-md-2' style='float: right'>
                                                        <table border='1' style='float: right'>
                                                            <td >
                                                                <img src="../images/Admission_stu_photo/<?= $image ?>" alt="logo" width='80' height='100'>
                                                            </td>
                                                        </table>
                                                    </div>
                                                </div>
                                                <br><br>
                                                <div class="col-lg-12">

                                                    <p><span><lable>CLASS to which admission sought: </lable><input type="text" name="admission_class" id="admission_class" value="<?= $admission_class ?>" readonly="" style='  -webkit-appearance: none;
                                                                -moz-appearance: none;
                                                                appearance: none;
                                                                border: 0;
                                                                border-bottom-color: currentcolor;
                                                                border-bottom-style: none;
                                                                border-bottom-width: 0px;
                                                                outline: 0;
                                                                border-radius: 0;
                                                                background: transparent;
                                                                width: auto;
                                                                                                                                border-bottom: 1px dotted gray;'/> Session:<input type="text" name="admission_session" id="admission_session" value="<?= $admission_session ?>" placeholder="" readonly style='  -webkit-appearance: none;
                                                                -moz-appearance: none;
                                                                appearance: none;
                                                                border: 0;
                                                                border-bottom-color: currentcolor;
                                                                border-bottom-style: none;
                                                                border-bottom-width: 0px;
                                                                outline: 0;
                                                                border-radius: 0;
                                                                background: transparent;
                                                                width: auto;
                                                                border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <h5 class="pl-3">PERSONAL DETAILS:</h5> 
                                                <br>
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <ul>
                                                        <li> <p>1. Name: </p></li>
                                                      
                                                        <li><input type="text" id="student_name" name="student_name" value="<?= $student_name ?>" readonly="" 
                                                                   style='  -webkit-appearance: none;
                                                                   -moz-appearance: none;
                                                                   appearance: none;
                                                                   border: 0;
                                                                   border-bottom-color: currentcolor;
                                                                   border-bottom-style: none;
                                                                   border-bottom-width: 0px;
                                                                   outline: 0;
                                                                   border-radius: 0;
                                                                   background: transparent;
                                                                   width: auto;
                                                                   border-bottom: 1px dotted gray;'/></li>

                                                    </ul>
                                                      <br>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper checkbox-admission">
                                                    <ul>
                                                        <li class="mr-1">2. Gender:  &nbsp; &nbsp; Male</li>
                                                        <li class="mr-4">
                                                            <div class="form-group"><input type="checkbox" name="student_gender" id="male" value="male" <?= ($gender == 'male') ? 'checked' : '' ?>><label for="male"></label>
                                                            </div> 
                                                        </li>
                                                        <li class="mr-1">Female </li>
                                                        <li class="mr-4">  
                                                            <div class="form-group"><input type="checkbox" name="student_gender" id="female" value="female" <?= ($gender == 'female') ? 'checked' : '' ?>><label for="female"></label>
                                                            </div>
                                                        </li>
                                                        <li class="mr-1">Any Other </li>
                                                        <li class="mr-4">
                                                            <div class="form-group"><input type="checkbox" name="student_gender" id="other" value="other" <?= ($gender == 'other') ? 'checked' : '' ?>><label for="other"></label>
                                                            </div> 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <p><span>3. Date of Birth: <input type="text" id="bDate" name="date_of_birth" value="<?= $date_of_birth ?>" readonly="" style='  -webkit-appearance: none;
                                                                                      -moz-appearance: none;
                                                                                      appearance: none;
                                                                                      border: 0;
                                                                                      border-bottom-color: currentcolor;
                                                                                      border-bottom-style: none;
                                                                                      border-bottom-width: 0px;
                                                                                      outline: 0;
                                                                                      border-radius: 0;
                                                                                      background: transparent;
                                                                                      width: auto;
                                                                                      border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <p class="pl-3"><span>In Words: <input type="text" id="" name="date_of_birth_in_word" value="<?= $date_of_birth_in_word ?>" readonly="" style='  -webkit-appearance: none;
                                                                                           -moz-appearance: none;
                                                                                           appearance: none;
                                                                                           border: 0;
                                                                                           border-bottom-color: currentcolor;
                                                                                           border-bottom-style: none;
                                                                                           border-bottom-width: 0px;
                                                                                           outline: 0;
                                                                                           border-radius: 0;
                                                                                           background: transparent;
                                                                                           width: auto;
                                                                                           border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper mb-5" style="page-break-after: always;">
                                                    <p><span>4. Place of Birth: <input type="text" id="place_of_birth" name="place_of_birth" value="<?= $place_of_birth ?>" readonly="" style='  -webkit-appearance: none;
                                                                                       -moz-appearance: none;
                                                                                       appearance: none;
                                                                                       border: 0;
                                                                                       border-bottom-color: currentcolor;
                                                                                       border-bottom-style: none;
                                                                                       border-bottom-width: 0px;
                                                                                       outline: 0;
                                                                                       border-radius: 0;
                                                                                       background: transparent;
                                                                                       width: auto;
                                                                                       border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <!-- table -->
                                                <h4 class="pl-3">5. Details of Parents:</h4> 
                                                <div class="table-responsive mb-4">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th class="col-sm-3">Details</th>
                                                                <th class="col-sm-3">Mother</th>
                                                                <th class="col-sm-3">Father/Guardian</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-left">Name</td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[0] ?>" readonly=""/></td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[1] ?>" readonly=""/></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">Residential Address</td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[2] ?>"/></td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[3] ?>"/></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">Mobile No.</td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[4] ?>"/></td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[5] ?>"/></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <ul class="checkbox-admission">
                                                    <li>6. Category: &nbsp;</li>
                                                    <li class="mr-1">General</li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="category" id="General" value="General" <?= ($category == 'General') ? 'checked' : '' ?>><label for="General"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">SC </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="category" id="SC" value="SC" <?= ($category == 'SC') ? 'checked' : '' ?>><label for="SC"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">ST </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="category" id="ST" value="ST" <?= ($category == 'ST') ? 'checked' : '' ?>><label for="ST"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">OBC </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="category" id="OBC" value="OBC" <?= ($category == 'OBC') ? 'checked' : '' ?>><label for="OBC"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">EWS </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="category" id="EWS" value="EWS" <?= ($category == 'EWS') ? 'checked' : '' ?>><label for="EWS"></label>
                                                        </div>  
                                                    </li>
                                                </ul>
                                                <!--end col-->
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <p><span>7. Name & Address of the last attended school: <input type="text" id="last_school_name_address" name="last_school_name_address" value="<?= $last_school_name_address ?>" readonly style='  -webkit-appearance: none;
                                                                                                                   -moz-appearance: none;
                                                                                                                   appearance: none;
                                                                                                                   border: 0;
                                                                                                                   border-bottom-color: currentcolor;
                                                                                                                   border-bottom-style: none;
                                                                                                                   border-bottom-width: 0px;
                                                                                                                   outline: 0;
                                                                                                                   border-radius: 0;
                                                                                                                   background: transparent;
                                                                                                                   width: auto;
                                                                                                                   border-bottom: 1px dotted gray;'></span></p>
                                                </div>  
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <p><span>8. Class Last Attended: <input type="text" id="last_school_attend" name="last_school_attend" value="<?= $last_school_attend ?>" readonly style='  -webkit-appearance: none;
                                                                                            -moz-appearance: none;
                                                                                            appearance: none;
                                                                                            border: 0;
                                                                                            border-bottom-color: currentcolor;
                                                                                            border-bottom-style: none;
                                                                                            border-bottom-width: 0px;
                                                                                            outline: 0;
                                                                                            border-radius: 0;
                                                                                            background: transparent;
                                                                                            width: auto;
                                                                                            border-bottom: 1px dotted gray;'></span></p>
                                                </div>  
                                            </div>
                                            <div class="col-lg-12 text-left input-wrapper">
                                                <p>9. Last School Affiliated is:</p>
                                                <ul class="checkbox-admission">

                                                    <li class="mr-1">CBSE </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="CBSE" <?= (($last_school_affiliated) == 'CBSE') ? 'checked' : '' ?>><label for="CBSE"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">ICSE </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="ICSE" <?= (($last_school_affiliated) == 'ICSE') ? 'checked' : '' ?>><label for="ICSE"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">IB </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="IB" <?= (($last_school_affiliated) == 'IB') ? 'checked' : '' ?>><label for="IB"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1">State Board </li>
                                                    <li class="mr-4">
                                                        <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="State Board" <?= (($last_school_affiliated) == 'State Board') ? 'checked' : '' ?>><label for="State Board"></label>
                                                        </div> 
                                                    </li>


                                                </ul>
                                                <ol>

                                                    <li class="mr-4">Any Other (Please Specify) <input type="text" id="last_school_affiliated" name="last_school_affiliated" value="<?= ((($last_school_affiliated) != 'CBSE') && (($last_school_affiliated) != 'IB') && (($last_school_affiliated) != 'ICSE') && (($last_school_affiliated) != 'State Board')) ? $last_school_affiliated : '' ?>" class="col-sm-3" placeholder="" readonly="" style='  -webkit-appearance: none;
                                                                                                       -moz-appearance: none;
                                                                                                       appearance: none;
                                                                                                       border: 0;
                                                                                                       border-bottom-color: currentcolor;
                                                                                                       border-bottom-style: none;
                                                                                                       border-bottom-width: 0px;
                                                                                                       outline: 0;
                                                                                                       border-radius: 0;
                                                                                                       background: transparent;
                                                                                                       width: auto;
                                                                                                       border-bottom: 1px dotted gray;'></li>
                                                </ol><br>
                                            </div> 
                                            <h4 class="pl-3">10. Enclosures(all documents are mandatory at the time of admission):</h4>
                                            <div class="table-responsive col-lg-12">
                                                <table class="table table-bordered" id="tabledata">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">Birth Certificate</td>

                                                            <td class="text-center">
                                                                <a href="../Images/Admission_doc/<?= $birth_certificate ?>" download><?= $birth_certificate ?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Case Certificate</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../Images/Admission_doc/<?= $case_certificate ?>" download><?= $case_certificate ?></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Report Card</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../Images/Admission_doc/<?= $report_card ?>" download><?= $report_card ?></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Transfer Certificate</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../Images/Admission_doc/<?= $transfer_certificate ?>" download><?= $transfer_certificate ?></a>

                                                                </div>

                                                            </td>
                                                        </tr>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>  



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
            <link href="assets/dist-1/main.css" rel="stylesheet">
            <link href="assets/dist/summernote.css" rel="stylesheet">
            <script src="assets/dist-1/summernote.js"></script>


            <script type="text/javascript">
                                                function ExportPdf() {
                                                    var printContents = document.getElementById('allpage').innerHTML;
                                                    var originalContents = document.body.innerHTML;
                                                    document.body.innerHTML = printContents;
                                                    window.print();
                                                    document.body.innerHTML = originalContents;
                                                }
            </script>
    </body>

</html>