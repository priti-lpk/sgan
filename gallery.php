<?php
ob_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <!--        <meta charset="utf-8">
                <title>SGAN</title>
                <meta name="description" content="">-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="SGAN Gallery, Naranpar Gallery, Naranpar Gurukul Gallery, Shree Ghanshyam Academy Gallery, Gallery" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Gallery | SGAN</title>
    </head>

    <body>

        <!-- preloader start -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="preloader">
        </div>
        <?php include_once './header.php';
        ?>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-20">
                        <h2 class="mb-2 section-title-border">Gallery</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="project-menu text-center">
                            <ul class="controls list-inline">
                                <!-- filter item list -->
                                <li class="list-inline-item control active" data-filter="all">All</li>
                                <?php
                                include_once 'admin/shreeLib/DBAdapter.php';
                                $dba = new DBAdapter();
                                $field = array("year_list.year_name,year_list.id");
                                $data = $dba->getRow("album_list INNER JOIN year_list ON album_list.year_id=year_list.id", $field, "1  GROUP BY year_list.year_name order by year_list.id asc");
                                $count = count($data);

                                if ($count >= 1) {
                                    foreach ($data as $subData) {
                                        echo '<li class="list-inline-item control "  data-filter=".gallery' . $subData[0] . '">' . $subData[0] . '</li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row" data-ref="mixitup-container">
                    <div class="row justify-content-center" id="">

                        <?php
                        include_once 'admin/shreeLib/DBAdapter.php';
                        $dba = new DBAdapter();
                        $field1 = array("year_list.year_name,album_list.id");
                        $data1 = $dba->getRow("album_list INNER JOIN year_list ON album_list.year_id=year_list.id INNER JOIN gallary_list ON gallary_list.album_id=album_list.id", $field1, "1  GROUP BY gallary_list.album_id order by gallary_list.id DESC");
                        $count1 = count($data1);

                        $field = array("*");
                        $data = $dba->getRow("gallary_list", $field, "1 GROUP BY album_id ORDER BY id DESC");
                       $count = count($data);
                        if ($count >= 1) {
                            for ($i = 0; $i < $count; $i++) {
                                if ($data[$i][1] == $data1[$i][1]) {
                                    //echo $data[$i][1] == $data1[$i][1];
                                    echo '<div class = " setsize gallery' . $data1[$i][0] . '" data-ref = "mixitup-target">';
                                    echo '<a href = "gallery_detail.php?id=' . $data[$i][1] . '">';
                                    echo '<div class = "card text-center">';
                                    echo '<img class = "card-img-top" src = "admin/Images/Gallary/' . $data[$i][2] . '" alt = "team-member" >';
                                    echo '<div class = "project-info h4">';
                                    echo '<p class="h4 btm_title" style="margin-top:180px;width:300px;text-align:left !important;">' . $data[$i][3] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                } else {
                                    echo '<div class = " setsize all" data-ref = "mixitup-target">';
                                    echo '<a href = "gallery_detail.php?id=' . $data[$i][1] . '">';
                                    echo '<div class = "card text-center">';
                                    echo '<img class = "card-img-top" src = "admin/Images/Gallary/' . $data[$i][2] . '" alt = "team-member" >';
                                    echo '<div class = "project-info h4">';
                                    echo '<p class="h4 btm_title" style="margin-top:180px;width:300px;text-align:left !important;">' . $data[$i][3] . '</p>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</a>';
                                    echo '</div>';
                                }
                            }
                        }
                        ?>

                    </div>
                </div>

        </section>
        <!-- footer -->

        <?php
        include_once './footer.php';
        ?>
        <script type="text/javascript">

        </script>
    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>                                    