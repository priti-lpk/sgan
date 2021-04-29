<!DOCTYPE html>
<?php
if (isset($_GET['grNo'])) {
    include_once 'admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();
    $field = array("*");
    $data_pdf = $dba->getRow("leaving_certificate", $field, "enrollment_no=" . $_GET['grNo']);

}
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Curriculum of SGAN,  Curriculum of Naranpar Gurukul, Curriculum of Shree Ghanshyam Academy, Curriculum of Naranpar Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="sgan.in" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>SGAN | Curriculum</title>
        <style>
            .gr{
                margin-left: 300px;
            }
        </style>
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


        <section class="section bg-gray tabTable">
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- sidebar -->

                    <aside class="col-lg-3">

                        <!-- service menu -->
                        <ul class="nav nav-tabs changeshash" id="myTab" role="tablist">
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left active show" id="affiliation-tab" data-toggle="tab" href="#affiliation" role="tab"
                                   aria-controls="affiliation" aria-selected="true">Affiliation</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="cbse-tab" data-toggle="tab" href="#cbse" role="tab"
                                   aria-controls="cbse" aria-selected="true">CBSE Curricular - Notice</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="leaving-tab" data-toggle="tab" href="#leaving" role="tab"
                                   aria-controls="leaving" aria-selected="true">Leaving Certificate</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="committee-tab" data-toggle="tab" href="#committee" role="tab"
                                   aria-controls="committee" aria-selected="false">Managing Committee</a>
                            </li>
                            <li class="nav-item mb-10">
                                <div id="accordion">
                                    <div class="card border-0" >
                                        <div class="card-header bg-gray border p-0">
                                            <a class="nav-link text-left d-block tex-dark mb-0 py-10 px-4" id="collapseOne-tab" data-toggle="collapse" href="#collapseOne" aria-selected="false">
                                                Teaching Staff &nbsp; &nbsp;<i class="ti-angle-down text-primary"></i> 
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse bg-white" data-parent="#accordion">
                                            <div class="card-body border font-secondary text-color pl-20">
                                                <ul class="formfield">
                                                    <?php
                                                    include_once 'admin/shreeLib/DBAdapter.php';
                                                    $dba = new DBAdapter();
                                                    $field = array("*");
                                                    $data = $dba->getRow("department_list", $field, "1");
                                                    $k = 1;
                                                    $count = count($data);
                                                    if ($count >= 1) {
                                                        foreach ($data as $subData) {
                                                            ?>

                                                            <li><a href="#staff" id="<?php echo $subData[0]; ?>" data-toggle="tab" role="tab" aria-controls="staff"
                                                                   aria-selected="false" class="clr-gray"><?php echo $subData[1]; ?></a></li><hr>


                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item mb-10">

                                <div id="accordion">
                                    <div class="card border-0">
                                        <div class="card-header bg-gray border p-0">
                                            <a class="nav-link text-left d-block tex-dark mb-0 py-10 px-4" id="collapseEnrol-tab" data-toggle="collapse" href="#collapseEnrol" aria-selected="false">
                                                Section Wise Enrolment &nbsp; &nbsp;<i class="ti-angle-down text-primary"></i> 
                                            </a>
                                        </div>
                                        <div id="collapseEnrol" class="collapse bg-white" data-parent="#accordion">
                                            <div class="card-body border font-secondary text-color pl-20">
                                                <ul class="classfield">
                                                    <?php
                                                    include_once 'admin/shreeLib/DBAdapter.php';
                                                    $dba = new DBAdapter();
                                                    $field = array("*");
                                                    $data = $dba->getRow("create_class", $field, "1");
                                                    $k = 1;
                                                    $count = count($data);
                                                    if ($count >= 1) {
                                                        foreach ($data as $subData) {
                                                            ?>
                                                            <li><a id="<?php echo $subData[0]; ?>" data-toggle = "tab" href = "#enrolment" role = "tab"
                                                                   aria-controls = "enrolment" aria-selected = "false" class = "clr-gray"><?php echo $subData[1]; ?></a></li><hr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </aside>
                    <!--/sidebar -->

                    <!--team member details -->
                    <div class = "col-lg-9">
                        <div class = "tab-content" id = "myTabContent">
                            <div class = "tab-pane fade active show" id = "affiliation" role = "tabpanel" aria-labelledby = "affiliation">
                                <div class = "col-lg-12">
                                    <h3 class = "mb-2 section-title-border-half">Curricular</h3><br/>
                                    <p>The school presently follows the curriculum prescribed by the CBSE for classes I to X. The curriculum is quite extensive and not confined to the textbooks. As far as the choice of the subjects at CBSE level is concerned, both the boards provide variety of subjects. Indian mind-set still run on three streams i.e. Science, Commerce & Humanities, hence subjects have been grouped to follow specified subjects under one stream.</p>
                                    <p>The curriculum content is blended to ensure that the requirement of CBSE is met and exceeded. It allows enough room to address individual needs and to create a learner-centered classroom. As per the Indian Union Government's guidelines, the students are made environment conscious by making provision of the subject Environmental Education compulsory.</p><hr>
                                    <h3 class="mb-2">Affiliation</h3>
                                    <img src="images/Affiliation.jpg" class="img-responsive col-lg-12">
                                </div>
                            </div>

                            <!-- CBSE  Curriculum - Notice -->

                            <div class="tab-pane fade" id="cbse" role="tabpanel" aria-labelledby="cbse-tab">
                                <div class="col-lg-12 order-lg-2 order-2 cbse table-responsive">
                                    <div class="col-lg-12">
                                        <h3 class="mb-2 section-title-border-half">CBSE  Curricular - Notice</h3><br/>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr. No.</th>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Image</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once 'admin/shreeLib/DBAdapter.php';
                                                $dba = new DBAdapter();
                                                $field = array("*");
                                                $data = $dba->getRow("cbs_circular", $field, "1");
                                                $k = 1;
                                                $count = count($data);
                                                if ($count >= 1) {
                                                    foreach ($data as $subData) {
                                                        echo "<tr>";
                                                        echo "<td>" . $k++ . "</td>";
                                                        echo "<td>" . $subData[1] . "</td>";
                                                        echo "<td>" . $subData[2] . "</td>";
                                                        echo "<td><div class='image-overlay'>
                                                    <a class='popup-image' data-effect='mfp-zoom-in' href='admin/Images/CBS-Notice/" . $subData[3] . "'> <img src=admin/Images/CBS-Notice/" . $subData[3] . "  height=50 width=50></a></div></td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Leaving Certificate --> 
                            <div class="tab-pane fade" id="leaving" role="tabpanel" aria-labelledby="leaving-tab">
                                <div class="col-lg-12 order-lg-2 order-2 leaving">
                                    <div class="col-lg-12">
                                        <h3 class="mb-2 section-title-border-half">Leaving Certificate</h3><br/>

                                        <div class="col-lg-12 col-md-7">
                                            <div class="rounded">
                                                 <form action="getpdf.php" class="row"  method="get" enctype="multipart/form-data" target="_blank">
                                                    <div class="col-lg-3">
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Student Name" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="text" class="form-control" name="grNo" id="grNo" placeholder="Gr.No" required>
                                                        <div style="width:400px;" id="user-msg" class="text-danger"></div>

                                                    </div>
                                                    <div class="col-lg-3">
                                                        <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" required>
                                                        <div style="width:400px;" id="user-msg1" class="text-danger"></div>
                                                    </div>

                                                    <div class="col-lg-2">
                                                        <button class="btn btn-secondary btn-sm" id="btn_save" type="submit" value="send" disabled=""><i class="ti-eye"></i></button>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="committee" role="tabpanel" aria-labelledby="committee-tab">
                                <div class="col-lg-12 order-lg-2 order-2 hall">
                                    <div class="col-lg-12 table-responsive">
                                        <h3 class="mb-2 section-title-border-half">List of the members of the School Managing Committee </h3><br/>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr. No</th>
                                                    <th scope="col">Name of the member</th>
                                                    <th scope="col">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                include_once 'admin/shreeLib/DBAdapter.php';
                                                $dba = new DBAdapter();
                                                $field = array("*");
                                                $data = $dba->getRow("school_management", $field, "1");
                                                $k = 1;
                                                $count = count($data);
                                                if ($count >= 1) {
                                                    foreach ($data as $subData) {
                                                        echo "<tr>";
                                                        echo "<td scope='row'>" . $k++ . "</td>";
                                                        echo "<td>" . $subData[1] . "</td>";
                                                        echo "<td>" . $subData[2] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                                <div class="col-lg-12 order-lg-2 order-2 staff">
                                    <div class="col-lg-12 table-responsive">
                                        <h3 class="mb-2 section-title-border-half">List of the Teaching Staff of the School </h3><br/>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr. No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Designation</th>
                                                    <th scope="col">Image</th>
                                                </tr>
                                            </thead>
                                            <tbody id="view_list">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade nktu" id="enrolment" role="tabpanel" aria-labelledby="enrolment-tab">
                                <div class="col-lg-12 order-lg-2 order-2 enrolment">
                                    <div class="col-lg-12">
                                        <h3 class="mb-2 section-title-border-half">Section Wise Enrollment of School for the Current Session
                                            2018-2019  </h3><br/>
                                        <div id="view_section">

                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>      <!-- Daily Schedule -->

                </div> <!-- End of Tab -->
            </div>

        </section>

        <!-- footer -->

        <?php
        include_once './footer.php';
        ?>

        <script type="text/javascript">

            // var type = window.location.hash.substr(1);
            //alert(type);
            // $("#" + type).addClass('active');
            // $("#" + type).addClass('show');

            // $('a[href ^= "#' + type + '"]').addClass('active');

        </script>
        <?php
        if (isset($_GET['id'])) {
            echo $_GET['id'];
            include_once 'admin/shreeLib/DBAdapter.php';
            $dba = new DBAdapter();
            $field = array("*");
            $data = $dba->getRow("leaving_certificate", $field, "enrollment_no=" . $_GET['id']);
        }
        ?>
        <script type="text/javascript">

            $('#grNo').focusout(function () {
                var gr = document.getElementById("grNo").value;

                var my_object = "gr-no=" + gr;
                $.ajax({
                    url: 'validation.php',
                    dataType: "html",
                    data: my_object,
                    cache: false,
                    success: function (Data) {
                        //alert(Data);
                        var useri = Data;
                        if (useri == 1) {
                            $("#user-msg").text("");
                            $("#btn_save").prop('disabled', true);
                        } else {
                            $("#user-msg").text("Please!Enter valid Enrollment No.");
                            $("#btn_save").prop('disabled', true);
                        }

                    },
                    error: function (errorThrown) {
                        alert(errorThrown);
                        alert("There is an error with AJAX!");
                    }
                });
            });
            $('#dob').focusout(function () {
                var date = document.getElementById("dob").value;
                var gr = document.getElementById("grNo").value;
                var my_object = {"dob": date, "en_no": gr};
                $.ajax({
                    url: 'validation.php',
                    dataType: "html",
                    data: my_object,
                    cache: false,
                    success: function (Data) {
                        //alert(Data);
                        var useri = Data;
                        if (useri == 1) {
                            $("#user-msg1").text("");
                            $("#btn_save").prop('disabled', false);

                        } else {
                            $("#user-msg1").text("Please!Enter valid Date.");
                            $("#btn_save").prop('disabled', true);

                        }

                        //$('#view_data1').html(Data);
                    },
                    error: function (errorThrown) {
                        alert(errorThrown);
                        alert("There is an error with AJAX!");
                    }
                });
            });
        </script>

        <script type="text/javascript">
            $('ul.formfield a').click(function () {

                var id = $(this).attr('id');
                // alert(id);
                var my_object = "id=" + id;
                $.ajax({
                    url: 'customfile/getValue.php',
                    dataType: "html",
                    data: my_object,
                    cache: false,
                    success: function (Data) {

                        $('#view_list').html(Data);
                        $(".clr-gray").removeClass('active');
                        $("#" + id).addClass('active');
                    },
                    error: function (errorThrown) {
                        alert(errorThrown);
                        alert("There is an error with AJAX!");
                    }
                });
            });

            $('ul.classfield a').click(function () {
                var id = $(this).attr('id');
//                alert(id);
                var my_object = "c_id=" + id;
                $.ajax({
                    url: 'customfile/getValue.php',
                    dataType: "html",
                    data: my_object,
                    cache: false,
                    success: function (Data) {
//                        alert(Data);
                        $('#view_section').html(Data);
                        $('input[name=tab1]').prop('checked', true);
                        var sid = $('input[name=tab1]').attr('id');
                        // alert(sid);
                        getValue(sid);

                    },
                    error: function (errorThrown) {
                        alert(errorThrown);
                        alert("There is an error with AJAX!");
                    }
                });

                $(".clr-gray").removeClass('active');
                $("#" + id).addClass('active');
            });
            //active class section enrollment
            $('#collapseEnrol-tab').click(function () {
                $(".nav-link").removeClass('active');
                $(".tab-pane").removeClass('show');
                $(".tab-pane").removeClass('active');

                $("#enrolment").addClass('active');
                $("#enrolment").addClass('show');
                $('a[href ^= "#enrolment"]').addClass('active');
            });
            //active clsss teaching staff
            $('#collapseOne-tab').click(function () {
                $(".nav-link").removeClass('active');
                $(".tab-pane").removeClass('show');
                $(".tab-pane").removeClass('active');

                $("#staff").addClass('active');
                $("#staff").addClass('show');
                $('a[href ^= "#staff"]').addClass('active');
            });
            function getValue(id)
            {
                //  alert(id);
                if (document.getElementById(id).checked)
                {

                    $('.tab').prop('checked', false);
                    $('#' + id).prop('checked', true);

                    var section_id = document.getElementById(id).value;

                    var my_object = "s_id=" + section_id;
                    $.ajax({
                        url: 'customfile/getValue.php',
                        dataType: "html",
                        data: my_object,
                        cache: false,
                        success: function (Data) {
                            //    alert(Data);
                            $('.content').html(Data);

                        },
                        error: function (errorThrown) {
                            alert(errorThrown);
                            alert("There is an error with AJAX!");
                        }
                    });
                }
            }

            // function onfocus1(id) {

                // $(".nav-link").removeClass('active');
                // $(".tab-pane").removeClass('show');
                // $(".tab-pane").removeClass('active');

                // var res = id.replace("-tab", "");

                // $("#" + res).addClass('active');
                // $("#" + res).addClass('show');
                // $('a[href ^= "#' + res + '"]').addClass('active');
                // location.hash = res;
            // }
            // ;
            // $('ul.changeshash a').click(function () {
                // var id = $(this).attr('href');
                // location.hash = id;
            // });
        </script>
      
    </body>

</html>