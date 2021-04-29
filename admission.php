<?php
ob_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Admission of SGAN, Admission of Naranpar, Admission of Naranpar Gurukul, Admission of Shree Ghanshyam Academy, Admission of Naranpar Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
        <meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Admission | SGAN</title>
    </head>

    <body>

        <!-- preloader start -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="preloader">
        </div>
        <?php
        include_once './header.php';
        ?>
        <!-- preloader end --> 

        <!-- about & Events -->
        <section class="section pb-0 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-title-sm">Admission</h5>
                        <h2 class="section-title section-title-border">Admission and Courses Details </h2>
                    </div>
                    <div class="col-lg-12 table-responsive">
                        <h3 class="section-title section-title-border-half">Courses</h3>
                        <table class="table" >
                            <thead >
                                <tr>
                                    <th scope="col">Sr. No.</th>
                                    <th scope="col">Class</th>
                                    <th scope="col">Compulsory Subjects</th>
                                    <th scope="col">Optional Subjects</th>
                                    <th scope="col">Vocational subjects</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include_once 'admin/shreeLib/DBAdapter.php';
                                $dba = new DBAdapter();
                                $field = array("*");
                                $data = $dba->getRow("admission_list", $field, "1 ORDER BY c_name  DESC");
                                $k = 1;
                                $count = count($data);
                                if ($count >= 1) {
                                    foreach ($data as $subData) {
                                        $strOpt = explode(",", $subData[3]);
                                        $strvoca = explode(",", $subData[4]);
                                        $countsub = explode(",", $subData[2]);
                                        // print_r($countsub);
                                        $cstr = count($countsub);
                                        $cstr1 = count($strOpt);
                                        // echo $cstr1;
                                        $cstr2 = count($strvoca);
                                        echo "<tr>";
                                        echo "<td rowspan='" . ($cstr ) . "'>" . $k++ . "</td>";
                                        echo "<td rowspan='" . ($cstr) . "'>" . $subData[5] . "</td>";
                                        echo "<td>" . $countsub[0] . "</td>";
                                        echo "<td >" . $strOpt[0] . "</td>";
                                        echo "<td >" . $strvoca[0] . "</td>";
                                        echo "</tr>";
                                        for ($i = 1; $i < $cstr; $i++) {
                                            echo "<tr>";
                                            echo "<td>" . $countsub[$i] . "</td>";

                                            if ($i < $cstr1) {
                                                echo "<td >" . $strOpt[$i] . "</td>";
                                            } else {
                                                echo "<td></td>";
                                            }
                                            if ($i < $cstr2) {
                                                echo "<td>" . $strvoca[$i] . "</td>";
                                            } else {
                                                echo "<td></td>";
                                            }

                                            echo "</tr>";
                                        }
                                    }
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <section class="section pb-0 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-title-sm">Admission</h5>
                        <h2 class="section-title section-title-border">Admission Procedure </h2>
                        <div class="col-lg-12 order-2 order-lg-1 text-justify">
                            <?php
                            include_once 'admin/shreeLib/DBAdapter.php';
                            $dba = new DBAdapter();
                            $field = array("*");
                            $data = $dba->getRow("admission_procedure", $field, "1");
                            $count = count($data);
                            if ($count >= 1) {
                                foreach ($data as $subData) {
                                    echo ' <p>' . $subData[1] . ' </p>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section pb-0 pt-5 bg-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="admin/Images/Form/Add_Registration.pdf" download>   
                            <button class="btn btn-primary col-lg-3"id="btn_save" type="submit" value="send" href = '' class = 'btn btn-default btn-xs' data-toggle = 'modal'><i class="ti-import"></i>&nbsp; &nbsp;REGISTRATION FORM</button>
                        </a>
                        <a href="admin/Images/Form/Add_Admission.pdf" download>   
                            <button class="btn btn-primary col-lg-3"id="btn_save" type="submit" value="send" href = '' class = 'btn btn-default btn-xs' data-toggle = 'modal'><i class="ti-import"></i>&nbsp; &nbsp;ADMISSION FORM</button>
                        </a>
                        <a href="admin/Images/Form/Add_Hostal_Schedule.pdf" download>   
                            <button class="btn btn-primary col-lg-3"id="btn_save" type="submit" value="send" href = '' class = 'btn btn-default btn-xs' data-toggle = 'modal'><i class="ti-import"></i>&nbsp; &nbsp;HOSTEL FORM</button>
                        </a>
                        <a href="online-admission.php" target="_blank">   
                            <button class="btn btn-primary col-lg-2"id="btn_save" class = 'btn btn-default btn-xs'>Online Admission</button>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="addregister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog" >
                <div class="modal-content"style="width: 150%;margin-right:  100px;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="margin-right: 260px;">VIEW REGISTRATION FORM</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <div class="modal-body">
                        <div id="form">
                            <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >
                                <embed src="admin/Images/Form/Add_Registration.pdf" type="application/pdf" width="100%" height="600px" />
                                <div class = "modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"><i class = "fa fa-times-circle"></i> Close</button>
                                </div>
                                </embled>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div  class="modal fade" id="addadmission" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-dialog" >
                <div class="modal-content"style="width: 150%;margin-right:  100px;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="margin-right: 260px;">View Admission Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <div class="modal-body">
                        <div id="form">
                            <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >

                                <embed id="lv_doc" src="admin/Images/Form/Add Admission.pdf" type="application/pdf" width="700px;" height="500px"/>
                                <div class = "modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"><i class = "fa fa-times-circle"></i> Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div  class="modal fade" id="addhostel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none">
            <div class="modal-dialog" >
                <div class="modal-content"style="width: 150%;margin-right:  100px;">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" style="margin-right: 260px;">View Hostel Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                    </div>
                    <div class="modal-body">
                        <div id="form">
                            <form action="javascript:void(0);" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" >

                                <embed id="lv_doc" src="admin/Images/Form/Add Hostal Schedule.pdf" type="application/pdf" width="700px;" height="500px"/>
                                <div class = "modal-footer">
                                    <button type = "button" class = "btn btn-default" data-dismiss = "modal"><i class = "fa fa-times-circle"></i> Close</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>

        </div>

        <!-- footer -->

        <?php
        include_once './footer.php';
        ;
        ?>
    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>