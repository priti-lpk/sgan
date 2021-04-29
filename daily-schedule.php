<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Daily Schedule of SGAN,  Daily Schedule of Naranpar Gurukul, Daily Schedule of Shree Ghanshyam Academy, Daily Schedule of Naranpar Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>SGAN | Daily Schedule</title>
    </head>

    <body>

        <!-- preloader start -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="preloader">
        </div>
        <?php include_once './header.php';
        ?>
        <!-- preloader end --> 



        <section class="section bg-gray">
            <div class="container-fluid">
                <div class="row tab-content">
                    <!-- sidebar -->

                    <aside class="col-lg-3">

                        <!-- service menu -->
                        <ul class="nav nav-tabs changeshash" id="myTab" role="tablist">
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="daily-tab" data-toggle="tab" href="#daily" role="tab"
                                   aria-controls="daily" aria-selected="true">Hostel Schedule</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="curriculam-tab" data-toggle="tab" href="#curriculam" role="tab"
                                   aria-controls="curriculam" aria-selected="false">Co-Curriculam</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="sports-tab" data-toggle="tab" href="#sports" role="tab"
                                   aria-controls="sports" aria-selected="false">Sports, Games & Yoga</a>
                            </li>
                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="extra-tab" data-toggle="tab" href="#extra" role="tab" aria-controls="extra"
                                   aria-selected="false">Extracurricular Activity</a>
                            </li>

                            <li class="nav-item mb-10">
                                <a class="nav-link text-left" id="trip-tab" data-toggle="tab" href="#trip" role="tab" aria-controls="trip"
                                   aria-selected="false">Educational Trip</a>
                            </li>
                        </ul>

                    </aside>
                    <!-- /sidebar -->

                    <!-- team member details -->
                    <div class="col-lg-9">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="daily" role="tabpanel" aria-labelledby="daily">
                                <div class="col-lg-12 table-responsive">
                                    <h2 class="mb-2 section-title-border-half">Hostel Schedule</h2><br/>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr. No.</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once 'admin/shreeLib/DBAdapter.php';
                                            $dba = new DBAdapter();
                                            $field = array("*");
                                            $data = $dba->getRow("hostal_schedule", $field, "1");
                                            $k = 1;
                                            $count = count($data);
                                            if ($count >= 1) {
                                                foreach ($data as $subData) {
                                                    echo "<tr>";
                                                    echo "<td>" . $k++ . "</td>";
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
                            <!-- tab 2 -->
                            <div class="tab-pane fade" id="curriculam" role="tabpanel" aria-labelledby="curriculam-tab">
                                <div class="col-lg-12 order-lg-2 order-2 curriculam">
                                    <div class="col-lg-12 table-responsive">
                                        <h2 class="mb-2 section-title-border-half">Tentative Plan of Co-Curricular Activities 2018-19</h2><br/>
                                        <table class="table">
                                            <thead>
                                                <tr align="center">
                                                    <th rowspan="2" scope="col" style="vertical-align: middle;">Sr. No.</th>
                                                    <th rowspan="2" scope="col" style="vertical-align: middle;">Date</th>
                                                    <th rowspan="2" scope="col" style="vertical-align: middle;">Day</th>
                                                    <th colspan="2" scope="col">Co-Curricular Activity</th>
                                                </tr>
                                                <tr align="center">
                                                    <th>Primary Section</th>
                                                    <th>Secondary Section</th>
                                                </tr>
                                            </thead>
                                            <tbody  align="center">

                                                <?php
                                                include_once 'admin/shreeLib/DBAdapter.php';
                                                $dba = new DBAdapter();
                                                $field = array("*");
                                                $data = $dba->getRow("co_curricular", $field, "1");
                                                $k = 1;
                                                $count = count($data);
                                                if ($count >= 1) {
                                                    foreach ($data as $subData) {
                                                        echo "<tr>";
                                                        echo "<td scope='row'>" . $k++ . "</td>";
                                                        $date = $subData[1];
                                                        $dates = date("d-m-Y", strtotime($date));
                                                        echo "<td>" . $dates . "</td>";
                                                        echo "<td>" . $subData[2] . "</td>";
                                                        echo "<td>" . $subData[3] . "</td>";
                                                        echo "<td>" . $subData[4] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
                                <div class="col-lg-12 order-lg-2 order-2 sports">
                                    <div class="col-lg-12 table-responsive">
                                        <h2 class="mb-2 section-title-border-half">Sports, Games & Yoga</h2><br/>
                                        <table class="table">
                                            <thead>
                                                <tr align="center">
                                                    <th rowspan="2" style="vertical-align: middle;">Sr. No.</th>
                                                    <th rowspan="2" style="vertical-align: middle;">Date</th>
                                                    <th rowspan="2" style="vertical-align: middle;">Day</th>
                                                    <th rowspan="2" style="vertical-align: middle;">Sports Activity</th>
                                                    <th colspan="2" style="width: 400px;">For Std.</th>
                                                </tr>
                                                <tr align="center">
                                                    <th>3<sup>th</sup> to 5<sup>th</sup></th>
                                                    <th>6<sup>th</sup> to 8<sup>th</sup></th>
                                                    <th>9<sup>th</sup> to 12<sup>th</sup></th>
                                                </tr>
                                            </thead>
                                            <tbody  align="center">
                                                <?php
                                                include_once 'admin/shreeLib/DBAdapter.php';
                                                $dba = new DBAdapter();
                                                $field = array("*");
                                                $data = $dba->getRow("sports_activities", $field, "1");
                                                $k = 1;
                                                $count = count($data);
                                                if ($count >= 1) {
                                                    foreach ($data as $subData) {
                                                        echo "<tr>";
                                                        echo "<td>" . $k++ . "</td>";
                                                        $date = $subData[1];
                                                        $dates = date("d-m-Y", strtotime($date));
                                                        echo "<td>" . $dates . "</td>";
                                                        echo "<td>" . $subData[2] . "</td>";
                                                        echo "<td>" . $subData[3] . "</td>";
                                                        echo "<td>" . $subData[4] . "</td>";
                                                        echo "<td>" . $subData[5] . "</td>";
                                                        echo "<td>" . $subData[6] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="extra" role="tabpanel" aria-labelledby="extra-tab">
                                <div class="col-lg-12 order-lg-2 order-2 extra">
                                    <div class="col-lg-12 table-responsive">
                                        <h2 class="mb-2 section-title-border-half">Extracurricular Activity</h2><br/>
                                        <table class="table">
                                            <thead>
                                                <tr align="center">
                                                    <th rowspan="2" style="vertical-align: middle;">Sr. No.</th>
                                                    <th rowspan="2" style="vertical-align: middle;">Date</th>
                                                    <th rowspan="2" style="vertical-align: middle;">Day</th>
                                                    <th colspan="2">Extracurricular Activity</th>
                                                </tr>
                                                <tr align="center">
                                                    <th>Primary Section</th>
                                                    <th>Secondary Section</th>
                                                </tr>
                                            </thead>
                                            <tbody  align="center">
                                                <?php
                                                include_once 'admin/shreeLib/DBAdapter.php';
                                                $dba = new DBAdapter();
                                                $field = array("*");
                                                $data = $dba->getRow("extra_circular", $field, "1");
                                                $k = 1;
                                                $count = count($data);
                                                if ($count >= 1) {
                                                    foreach ($data as $subData) {
                                                        echo "<tr>";
                                                        echo "<td scope='row'>" . $k++ . "</td>";
                                                        $date = $subData[1];
                                                        $dates = date("d-m-Y", strtotime($date));
                                                        echo "<td>" . $dates . "</td>";
                                                        echo "<td>" . $subData[2] . "</td>";
                                                        echo "<td>" . $subData[3] . "</td>";
                                                        echo "<td>" . $subData[4] . "</td>";
                                                        echo "</tr>";
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>   

                            <div class="tab-pane fade" id="trip" role="tabpanel" aria-labelledby="trip-tab">
                                <div class="col-lg-12 order-lg-2 order-2 trip table-responsive">
                                    <h2 class="mb-2 section-title-border-half">Educational Trip</h2><br/>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Sr. No.</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Place / Title</th>
                                                <th scope="col">Duration</th>
                                                <th scope="col">Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include_once 'admin/shreeLib/DBAdapter.php';
                                            $dba = new DBAdapter();
                                            $field = array("*");
                                            $data = $dba->getRow("eduction_trip", $field, "1");
                                            $k = 1;
                                            $count = count($data);
                                            if ($count >= 1) {
                                                foreach ($data as $subData) {
                                                    echo "<tr>";
                                                    echo "<td class='row'>" . $k++ . "</td>";
                                                    $date = $subData[1];
                                                    $dates = date("d-m-Y", strtotime($date));
                                                    echo "<td>" . $dates . "</td>";
                                                    echo "<td>" . $subData[2] . "</td>";
                                                    echo "<td>" . $subData[3] . "</td>";
                                                    echo "<td>" . $subData[4] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>         

                    <!-- Daily Schedule -->

                </div> <!-- End of Tab -->
            </div>

        </section>

        <!-- footer -->

        <?php
        include_once './footer.php';
        ;
        ?>

        <!--  tab hyperLink -->
        <script type="text/javascript">

            var type = window.location.hash.substr(1);
            //   alert(type);
            $("#" + type).addClass('active');
            $("#" + type).addClass('show');
            $('a[href^="#' + type + '"]').addClass('active');

            function onfocus1(id) {
                $(".nav-link").removeClass('active');
                $(".tab-pane").removeClass('show');
                $(".tab-pane").removeClass('active');

                var res = id.replace("-tab", "");
                $("#" + res).addClass('active');
                $("#" + res).addClass('show');

                $('a[href ^= "#' + res + '"]').addClass('active');
                location.hash = res;
            }
            ;
            $('ul.changeshash a').click(function () {
                var id = $(this).attr('href');
                location.hash = id;
            });
//            $(function () {
//                // Remove the # from the hash, as different browsers may or may not include it
//                var hash = location.hash.replace('#', '');
//
//                if (hash != '') {
//                    // Clear the hash in the URL
//                    location.hash = '';
//                }else {
//                    $("#daily").addClass('active');
//                    $("#daily").addClass('show');
//
//                    $('a[href ^= "#daily"]').addClass('active');
//                }
//            });
        </script>  
        <script type="text/javascript">
//            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//                anchor.addEventListener('click', function (e) {
//                    e.preventDefault();
//
//                    document.querySelector(this.getAttribute('href')).scrollIntoView({
//                        behavior: 'smooth'
//                    });
//                });
//            });
        </script> 
    </body>

</html>