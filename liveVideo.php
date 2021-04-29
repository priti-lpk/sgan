<?php
ob_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="Live of SGAN,  Live of Naranpar Gurukul, Live of Shree Ghanshyam Academy, Live of Naranpar Gurukul,Live of Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Live | SGAN</title>
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
                        <h2 class="mb-2 section-title-border">Live Video</h2>
                    </div>
                    <div class="col-lg-12">
                        <?php
                        include_once 'admin/shreeLib/DBAdapter.php';
                        $dba = new DBAdapter();
                        $field = array("*");
                        $data = $dba->getRow("live_video", $field, "1 order by id desc limit 1");
                   
                         //foreach ($data as $subData) {

                            // echo $subData[1] . "<br/>";
                            echo' <iframe class="col-lg-12" height="400px" src="https://www.youtube.com/embed/' . $data[0][1] . '" frameborder="0" allowfullscreen></iframe>';
                       // }
                        ?>
                       <!--<iframe class="col-lg-12" height="400px" src="https://www.youtube.com/embed/XiyABRLwXjo" frameborder="0" allowfullscreen></iframe>-->
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