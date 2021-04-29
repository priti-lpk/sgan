<!DOCTYPE html>
<html>

    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Video SGAN Gallery, Naranpar Video Gallery, Naranpar Gurukul Video Gallery, Shree Ghanshyam Academy Video Gallery, Video Gallery" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Video Gallery | SGAN</title>
    </head>

    <body>
        <!-- preloader start -->
        <div class="preloader">
            <img src="images/preloader.gif" alt="preloader">
        </div>
        <?php include_once './header.php';
        ?>

        <section class="section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-20">
                        <h2 class="mb-2 section-title-border">Video Gallery</h2>
                    </div>

                </div>
                <div class="row" data-ref="mixitup-container">
                    <div class="row justify-content-center">
                        <?php
                        include_once 'admin/shreeLib/DBAdapter.php';
                        $dba = new DBAdapter();
                        $field = array("*");
                        $data = $dba->getRow("video_list", $field, "1 order by id desc");

                        foreach ($data as $subData) {
                            echo ' <div class = "col-lg-4 col-sm-6 mb-4">';
                            echo' <iframe class="col-lg-12" height="270px" src="https://www.youtube.com/embed/' . $subData[1] . '" frameborder="0" allowfullscreen></iframe>';
                            echo '</div>';
                        }
                        ?>

                    </div>

                </div>


            </div>
        </section>
        <!-- footer -->

        <?php
        include_once './footer.php';
        ?>

    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>