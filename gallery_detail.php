<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    include_once 'admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();
    $field = array("*");
    $edata = $dba->getRow("album_list", $field, "id=" . mysqli_real_escape_string($dba->Conn(),$_GET['id']));

    echo "<input type='hidden' id='id' value='" . $edata[0][0] . "'>";
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="SGAN Gallery Details, Naranpar Gallery, Naranpar Gurukul Gallery, Shree Ghanshyam Academy Gallery, Gallery" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
<meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Gallery Details | SGAN</title>
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

        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center mb-20">

                        <h2 class="mb-2 section-title-border"><?php echo (isset($_GET['id']) ? $edata[0][1] : ''); ?></h2>
                    </div>
                    <!-- team member -->
                    <div class="row" data-ref="mixitup-container">
                        <div class="row justify-content-center">
                            <?php
                            include_once 'admin/shreeLib/DBAdapter.php';
                            $dba = new DBAdapter();
                            $field = array("gallary_list.image_name");
                            $data = $dba->getRow("`album_list` INNER JOIN gallary_list ON album_list.id=gallary_list.album_id", $field, "gallary_list.album_id=" . $edata[0][0] . " ORDER BY gallary_list.id DESC");
                            $count = count($data);

                            if ($count >= 1) {
                                foreach ($data as $subData) {
                                    echo '<div class = "setsize">';
                                    echo '<div class = "card text-center">';
                                    echo "<a class='popup-image' data-effect='mfp-zoom-in' href='admin/Images/Gallary/" . $subData[0] . "'><img class='card-img-top ' src='admin/Images/Gallary/" . $subData[0] . "' alt = 'team-member' ></a>";
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /team -->
        <!-- footer -->

        <?php
        include_once './footer.php';
        
        ?>

    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>