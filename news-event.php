<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="News of SGAN, SGAN's Event, Naranpar's Event, News of Naranpar Gurukul, News of Shree Ghanshyam Academy, News of Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>News Event | SGAN</title>
    </head>

    <body>



        <!-- preloader start -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="preloader">
        </div>
        <?php
        include_once './header.php';
        ;
        ?>
        <!-- preloader end --> 

        <!-- *** event Section *** -->

        <section class="section">
            
            <div class="container">

                <!-- img -->
                <?php
                include_once 'admin/shreeLib/DBAdapter.php';
                $dba = new DBAdapter();
                $field = array("*");
                $data = $dba->getRow("news_event", $field, " 1 ORDER BY id DESC ");
                $k = 1;
                $count = count($data);
                if ($count >= 1) {
                    foreach ($data as $subData) {
                        echo '<div class = "row col-lg-12">';
                        echo '<div class = "col-lg-4 align-self-center image-overlay mb-md-50">';
                        echo'<a class = "popup-image" data-effect = "mfp-zoom-in" href = admin/Images/News-Evants/' . $subData[4] . '>';
                        echo '<img class = "rounded img-responsive" src =admin/Images/News-Evants/' . $subData[4] . ' alt = "post-thumb" width = "300" height = "auto">';
                        echo '</a>';
                        echo '</div> ';

                        echo'<div class = "col-lg-8">';
                        echo '<h3 class = "section-title section-title-border-half">' . $subData[1] . '</h3>';
                        $date = $subData[2];
                        $dates = date("d M, Y", strtotime($date));
                        echo '<h5 class = "meta">' . $dates . '</h5>';
                        echo '<p>' . $subData[5] . '</p>';
                        ?>
                        <div class = "col-lg-12 b-0">
                            <!--share-icon -->
                            <div class = "d-flex">
                                <ul class = "list-inline">
                                    <li class = "list-inline-item">
                                        <a class = "social-icon-outline1" href = "#">
                                            <i class = "ti-facebook text-gray"></i>
                                        </a>
                                    </li>
                                    <li class = "list-inline-item">
                                        <a class = "social-icon-outline1" href = "#">
                                            <i class = "ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li class = "list-inline-item">
                                        <a class = "social-icon-outline1" href = "#">
                                            <i class = "ti-vimeo-alt"></i>
                                        </a>
                                    </li>
                                    <li class = "list-inline-item">
                                        <a class = "social-icon-outline1" href = "#">
                                            <i class = "ti-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div><hr>
                <?php
            }
        }
        ?>

        </div>
    </section>





    <!--footer -->

    <?php
    include_once './footer.php';
    ;
    ?>
</body>

<!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>                        