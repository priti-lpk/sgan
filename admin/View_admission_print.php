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
$tenth_certificate = $data[0][18];
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
                /*margin-bottom: 15px;*/
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
                margin: 10px 0 0 0;
            }
            @media print {
                body{
                    margin: 0;
                    padding: 0;
                }

                .allpage {
                    margin:none !important;
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: 100%;
                    margin-bottom: 1%;
                }

                table th{
                    padding: 1px 10px !important;
                   
                }
                table tr td{
                    padding: 1px 10px !important;
                    
                }
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
                
                .table-bordered td, .table-bordered th {
                    border: 1px solid #535353;
                }
                .table thead th{
                    border: 1px solid #535353;
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
                                            <div class=''>
                                                <table border='0' style='width: 100%'>
                                                    <tr>
                                                        <td>
                                                            <img src="Images/sgan-logo.png" alt="logo" width="120">
                                                        </td>
                                                        <td>
                                                    <center>
                                                        <p style="font-size: 22px;margin: 0px;"><strong>SHREE GANSHYAM ACEDEMY NARANPAR</strong></p>
                                                        <p style="margin: 0px;"><strong>(CBSE English Medium Residential Cum Day School)</strong></p>
                                                        <p style="margin: 0px;">Kera Road Naranpar,Tal: Bhuj-Kutch Pin : 370429</p>
                                                        <p style="margin: 0px;">Email :shreeghanshyamacademy@hotmail.com</p>
                                                        <p style="margin: 0px;"><strong>Website : www.sgan.in  Ph. (02832) 281832 Mo. 6351819439</strong></p>
                                                        <button style="padding:5px;background-color:#b9b9b9;color: #000;width:40%">ADMISSION FORM</button>
                                                    </center>

                                                    </td>
                                                    <td>
                                                        <img src="Images/Picture1.png" alt="logo" width="100">
                                                    </td>

                                                    <tr>

                                                </table>
                                                <hr style="margin-top: 3px;margin-bottom: 2px;border-top: 1px solid rgba(40, 37, 37, 0.49);">
                                                <div class='col-md-12' style='margin-bottom: 70px;'>
                                                    <div class='col-md-10'></div>
                                                    <div class='col-md-2' style='float: right'>
                                                        <table border='1' style='float: right'>
                                                            <td >
                                                                <img src="../images/Admission_stu_photo/<?= $image ?>" alt="logo" width='80' height='80'>
                                                            </td>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">

                                                    <p style='font-size: 12px;'><span><lable>CLASS to which admission sought: </lable><input type="text" name="admission_class" id="admission_class" value="<?= $admission_class ?>" readonly="" style='  -webkit-appearance: none;
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
                                                <h5 class="pl-3 bottom-hr" style="font-size: 14px;
                                                    font-weight: bold"><i class="ti-layout-width-full"></i> PERSONAL DETAILS:</h5> 

                                                <div class="col-lg-12 text-left input-wrapper" style='font-size: 12px;'>
                                                    <ul class="col-md-12">
                                                        <li><p> Name: </p></li>
                                                        <li class="" style="width: 50%;"><input type="text" id="student_name" name="student_name" value="<?= $student_name ?>" readonly="" 
                                                                                                   style='-webkit-appearance: none;
                                                                                                   -moz-appearance: none;
                                                                                                   appearance: none;
                                                                                                   border: 0;
                                                                                                   border-bottom-color: currentcolor;
                                                                                                   border-bottom-style: none;
                                                                                                   border-bottom-width: 0px;
                                                                                                   outline: 0;
                                                                                                   border-radius: 0;
                                                                                                   background: transparent;
                                                                                                   width: 100%;
                                                                                                   border-bottom: 1px dotted gray;'/></li>

                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper checkbox-admission" style='font-size: 12px;margin: 0.5px;'>
                                                    <ul>
                                                        <li class="mr-1" style="margin-top: 2.5px;"> Gender:  &nbsp; &nbsp; Male</li>
                                                        <li class="mr-4">
                                                            <div class="form-group" style='margin: 0px;'><input type="checkbox" name="student_gender" id="male" value="male" <?= ($gender == 'male') ? 'checked' : '' ?> disabled><label for="male"></label>
                                                            </div> 
                                                        </li>
                                                        <li class="mr-1" style="margin-top: 2.5px;">Female </li>
                                                        <li class="mr-4">  
                                                            <div class="form-group" style='margin: 0px;'><input type="checkbox" name="student_gender" id="female" value="female" <?= ($gender == 'female') ? 'checked' : '' ?> disabled><label for="female"></label>
                                                            </div>
                                                        </li>
                                                        <li class="mr-1" style="margin-top: 2.5px;">Any Other </li>
                                                        <li class="mr-4">
                                                            <div class="form-group" style='margin: 0.5px;'><input type="checkbox" name="student_gender" id="other" value="other" <?= ($gender == 'other') ? 'checked' : '' ?> disabled><label for="other"></label>
                                                            </div> 
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper" style='font-size: 12px;margin: 0.5px;'>
                                                    <p><span> Date of Birth: <input type="text" id="bDate" name="date_of_birth" value="<?= $date_of_birth ?>" readonly="" style='  -webkit-appearance: none;
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
                                                                                    border-bottom: 1px dotted gray;margin: opx;'></span></p>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper" style='font-size: 12px;'>
                                                    <p class=""><span>In Words: <input type="text" id="" name="date_of_birth_in_word" value="<?= $date_of_birth_in_word ?>" readonly="" style='  -webkit-appearance: none;
                                                                                       -moz-appearance: none;
                                                                                       appearance: none;
                                                                                       border: 0;
                                                                                       border-bottom-color: currentcolor;
                                                                                       border-bottom-style: none;
                                                                                       border-bottom-width: 0px;
                                                                                       outline: 0;
                                                                                       border-radius: 0;
                                                                                       background: transparent;
                                                                                       width: 50%;
                                                                                       border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <div class="col-lg-12 text-left input-wrapper " style="font-size: 12px;">
                                                    <p><span> Place of Birth: <input type="text" id="place_of_birth" name="place_of_birth" value="<?= $place_of_birth ?>" readonly="" style='  -webkit-appearance: none;
                                                                                     -moz-appearance: none;
                                                                                     appearance: none;
                                                                                     border: 0;
                                                                                     border-bottom-color: currentcolor;
                                                                                     border-bottom-style: none;
                                                                                     border-bottom-width: 0px;
                                                                                     outline: 0;
                                                                                     border-radius: 0;
                                                                                     background: transparent;
                                                                                     width: 50%;
                                                                                     border-bottom: 1px dotted gray;'></span></p>
                                                </div>
                                                <!-- table -->
                                                <h4 class="pl-3" style='font-size: 14px;
                                                    font-weight: bold'><i class="ti-layout-width-full"></i> Details of Parents:</h4> 
                                                <div class="table-responsive col-lg-12">
                                                    <table class="table table-bordered" style='font-size: 12px;'>
                                                        <thead>
                                                            <tr class="text-center">
                                                                <th class="col-sm-2">Details</th>
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
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[2] ?>" readonly/></td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[3] ?>" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-left">Mobile No.</td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[4] ?>" readonly/></td>
                                                                <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" value="<?= $parents_result[5] ?>" readonly/></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <ul class="checkbox-admission col-md-12" style='font-size: 12px;'>
                                                    <li style="margin-top: 2.5px;">&nbsp&nbsp&nbsp&nbsp Category: &nbsp;</li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">General</li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="category" id="General" value="General" <?= ($category == 'General') ? 'checked' : '' ?> disabled=""><label for="General"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">SC </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="category" id="SC" value="SC" <?= ($category == 'SC') ? 'checked' : '' ?> disabled><label for="SC"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">ST </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="category" id="ST" value="ST" <?= ($category == 'ST') ? 'checked' : '' ?> disabled><label for="ST"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">OBC </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="category" id="OBC" value="OBC" <?= ($category == 'OBC') ? 'checked' : '' ?> disabled><label for="OBC"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.3px;">EWS </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="category" id="EWS" value="EWS" <?= ($category == 'EWS') ? 'checked' : '' ?> disabled><label for="EWS"></label>
                                                        </div>  
                                                    </li>
                                                </ul>
                                                <!--end col-->
                                                <div class="col-lg-12 text-left input-wrapper" style='font-size: 12px;'>
                                                    <p><span> Name & Address of the last attended school: <input type="text" id="last_school_name_address" name="last_school_name_address" value="<?= $last_school_name_address ?>" readonly style='  -webkit-appearance: none;
                                                                                                                 -moz-appearance: none;
                                                                                                                 appearance: none;
                                                                                                                 border: 0;
                                                                                                                 border-bottom-color: currentcolor;
                                                                                                                 border-bottom-style: none;
                                                                                                                 border-bottom-width: 0px;
                                                                                                                 outline: 0;
                                                                                                                 border-radius: 0;
                                                                                                                 background: transparent;
                                                                                                                 width: 50%;
                                                                                                                 border-bottom: 1px dotted gray;'></span></p>
                                                </div>  
                                                <div class="col-lg-12 text-left input-wrapper">
                                                    <p><span> Class Last Attended: <input type="text" id="last_school_attend" name="last_school_attend" value="<?= $last_school_attend ?>" readonly style='  -webkit-appearance: none;
                                                                                          -moz-appearance: none;
                                                                                          appearance: none;
                                                                                          border: 0;
                                                                                          border-bottom-color: currentcolor;
                                                                                          border-bottom-style: none;
                                                                                          border-bottom-width: 0px;
                                                                                          outline: 0;
                                                                                          border-radius: 0;
                                                                                          background: transparent;
                                                                                          width: 50%;
                                                                                          border-bottom: 1px dotted gray;'></span></p>
                                                </div>  
                                            </div>
                                            <div class="col-lg-12 text-left input-wrapper" style='font-size: 12px;'>
                                                <p> Last School Affiliated is:</p>
                                                <ul class="checkbox-admission">

                                                    <li class="mr-1" style="margin-top: 2.5px;">CBSE </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="last_school_affiliated" id="CBSE" <?= (($last_school_affiliated) == 'CBSE') ? 'checked' : '' ?> disabled><label for="CBSE"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">ICSE </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="last_school_affiliated" id="ICSE" <?= (($last_school_affiliated) == 'ICSE') ? 'checked' : '' ?> disabled><label for="ICSE"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">IB </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="last_school_affiliated" id="IB" <?= (($last_school_affiliated) == 'IB') ? 'checked' : '' ?> disabled><label for="IB"></label>
                                                        </div> 
                                                    </li>
                                                    <li class="mr-1" style="margin-top: 2.5px;">State Board </li>
                                                    <li class="mr-4">
                                                        <div class="form-group" style='margin: 0px;'><input type="checkbox" name="last_school_affiliated" id="State Board" <?= (($last_school_affiliated) == 'State Board') ? 'checked' : '' ?> disabled><label for="State Board"></label>
                                                        </div> 
                                                    </li>
                                                </ul>
                                                <ul style='margin: 0px;'>

                                                    <li class="mr-4 col-md-12 p-0">Any Other (Please Specify) <input type="text" id="last_school_affiliated" name="last_school_affiliated" value="<?= ((($last_school_affiliated) != 'CBSE') && (($last_school_affiliated) != 'IB') && (($last_school_affiliated) != 'ICSE') && (($last_school_affiliated) != 'State Board')) ? $last_school_affiliated : '' ?>" class="" placeholder="" readonly="" style='  -webkit-appearance: none;
                                                                                                                     -moz-appearance: none;
                                                                                                                     appearance: none;
                                                                                                                     border: 0;
                                                                                                                     border-bottom-color: currentcolor;
                                                                                                                     border-bottom-style: none;
                                                                                                                     border-bottom-width: 0px;
                                                                                                                     outline: 0;
                                                                                                                     border-radius: 0;
                                                                                                                     background: transparent;
                                                                                                                     width: 70%;
                                                                                                                     border-bottom: 1px dotted gray;'></li>
                                                </ul><br>
                                            </div> 
                                            <h4 class="pl-3" style='font-size: 14px;
                                                font-weight: bold'><i class="ti-layout-width-full"></i> Enclosures(all documents are mandatory at the time of admission):</h4>
                                            <div class="table-responsive col-lg-12">
                                                <table class="table table-bordered" id="tabledata" style='font-size: 12px;margin: 0px;'>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left">Birth Certificate</td>

                                                            <td class="text-center">
                                                                <a href="../images/Admission_doc/<?= $birth_certificate ?>" download><?= $birth_certificate ?></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Caste Certificate</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../images/Admission_doc/<?= $case_certificate ?>" download><?= $case_certificate ?></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Report Card</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../images/Admission_doc/<?= $report_card ?>" download><?= $report_card ?></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Marksheet of 10th board</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="..images/Admission_doc/<?= $tenth_certificate ?>" download><?= $tenth_certificate ?></a>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-left">Transfer Certificate</td>

                                                            <td class="text-center">
                                                                <div class="input-file-container">  
                                                                    <a href="../images/Admission_doc/<?= $transfer_certificate ?>" download><?= $transfer_certificate ?></a>

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