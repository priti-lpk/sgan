<?php
ob_start();
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="About us in SGAN, About us in Naranpar, About us in Naranpar Gurukul, About us in Shree Ghanshyam Academy, About us in Naranpar Gurukul" />
        <meta name="description" content="Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room." />
        <meta name="SGAN" content="www.lpktechnosoft.com" />
        <meta name="google-site-verification" content="s8Wg8l0FIyU3tz2dmBh1aaSe8XT6q18s6riOIOqrIEY" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>SGAN</title>
    </head>

    <body>

        <?php include_once './header.php';
        ?>

        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner"> <?php
                    include_once 'admin/shreeLib/DBAdapter.php';
                    $dba = new DBAdapter();
                    $field = array("*");
                    $data = $dba->getRow("slider_images", $field, "1");
                    ?>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="admin/Images/Slider-Images/<?php echo $data[0][1]; ?>" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/Images/Slider-Images/<?php echo $data[1][1]; ?>" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/Images/Slider-Images/<?php echo $data[2][1]; ?>" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="admin/Images/Slider-Images/<?php echo $data[3][1]; ?>" alt="Four slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

        <!-- about & Events -->

        <section class="section pb-0 pt-5">
            <div class="container">
                <div class="row">
                    <div class="box css3-shadow mb-40 col-lg-12 text-blue"><marquee scrollamount="3.5">
                            <?php
                            include_once 'admin/shreeLib/DBAdapter.php';
                            $dba = new DBAdapter();
                            $field = array("*");
                            $data = $dba->getRow("news_event", $field, "ne_type='News' and id order by id desc");
                            $count = count($data);
                            $date = $data[0][2];
                            $dates = date("d M, Y", strtotime($date));
                            if ($count >= 1) {
                                foreach ($data as $subData) {

                                    $marquee_data[] = $subData[1] . "&nbsp;&nbsp;" . $dates . "&nbsp;&nbsp;";
                                }
                                echo implode("<i class='ti-arrow-circle-right'></i>&nbsp;&nbsp;&nbsp;", $marquee_data);
                            }
                            ?>
                        </marquee>
                    </div>
                    <div class="col-lg-8 order-2 order-lg-1 align-self-center">
                        <h5 class="section-title-sm text-center">About SGAN</h5>
                        <h2 class="section-title text-center section-title-border uppercase blue">Welcome to Shree Ghanashyam Academy</h2>
                        <p>Shree Ghanshyam Academy managed by Shree Swaminarayan Gurukul is spread over 7 acres of land and it runs under Shree Narnarayan Dev Bhuj, which is the seventh gurukul of the Bhuj temple whose foundation stone was laid on Monday, 13- 3- 2004, which was then formally inaugurated by Mahant Swami Hariswarup dasji in 2004. The school started on the year 13-6- 2005, first class being KG 1, KG 2 with 29
                            students.</p>
                        <p>Shree Swaminarayan Gurukul is nested among natural opulence ofgreenery along Naranpar Kera highway between Naranpar and Kera (India), pollution free environment. The campus is absolutely calm, quiet, with large areas of gardens, lawns and playgrounds that merges with nature. It attracts tranquility and serenity for students to concentrate in their studies. The infrastructure of the school is large
                            enough to house students with classrooms in academic block, a library, science lab, two-computer class, a multimedia room etc.
                            <a href="about.php">READ MORE</a></p>
                    </div>
                    <!-- philosophy image -->
                    <div class="col-lg-4 order-1 order-lg-2 mb-md-50 col-12">
                        <center><a href="liveVideo.php" target="_blank"><button id="button" class="btn btn-primary mt-10 mb-40"><i class="ti-video-clapper"></i>&nbsp; &nbsp;Live Video</button></a></center>

                        <h5 class="section-title-sm text-center section-title-border mt-10 mb-3">Latest News</h5>
                        <ul class="bg-white border rounded pl-0 mb-4">
                            <?php
                            include_once 'admin/shreeLib/DBAdapter.php';
                            $dba = new DBAdapter();
                            $field = array("*");
                            $data = $dba->getRow("news_event", $field, "ne_type='News' LIMIT 3");
                            $count = count($data);
                            $date = $data[0][2];
                            $dates = date("d M, Y", strtotime($date));
                            if ($count >= 1) {
                                foreach ($data as $subData) {

                                    echo '<li class = "d-flex border-bottom">';
                                    echo '<div class = "py-3 px-4 border-right text-center">';
                                    echo '<img src =admin/Images/News-Evants/' . $subData[4] . ' class = "img-responsive" height = "50px" width = "50px" />';
                                    echo '</div>';
                                    echo '<div class = "p-3">';
                                    $details = $subData[1];
                                    $out = strlen($details) > 20 ? substr($details, 0, 70) . "..." : $details;
                                    echo '<a href = "news-event.php" class = "h6 font-primary text-dark">' . $out . '</a>';
                                    $date = $subData[2];
                                    $dates = date("d M, Y", strtotime($date));
                                    echo '<p>' . $dates . '</p>';
                                    echo '</div>';
                                    echo '</li>';
                                }
                            } else {
                                echo '<li class = "d-flex border-bottom">';
                                echo '<div class = "py-3 px-4 border-right text-center">';
                                echo '<img src =images/logo.png class = "img-responsive" height = "50px" width = "50px" />';
                                echo '</div>';
                                echo '<div class = "p-3 mt-12">';
                                echo '<a href = "news-event.php" class = "h4 font-primary text-dark">No Latest News</a>';
                                echo '</div>';
                                echo '</li>';
                            }
                            ?>

                        </ul>

                    </div>
                </div>
            </div>
        </section>


        <!-- facilities -->
        <section class="section bg-gray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-title-sm">Facilities</h5>
                        <h2 class="section-title section-title-border-gray">Facilities at Shree Ghanashyam Academy</h2>
                    </div>
                </div>
                <!-- work slider -->
                <div class="row work-slider">
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <img class="img-fluid w-100" src="images/facilities/sgan-facilities1.jpg" alt="work-image">
                            <div class="image-overlay">
                                <a class="popup-image" data-effect="mfp-zoom-in" href="images/facilities/sgan-facilities1.jpg">
                                    <i class="ti-search"></i>
                                </a>
                                <a class="h4" href="facilities.php">Bus Transport</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <img class="img-fluid w-100" src="images/facilities/sgan-facilities2.jpg" alt="work-image">
                            <div class="image-overlay">
                                <a class="popup-image" data-effect="mfp-zoom-in" href="images/facilities/sgan-facilities2.jpg">
                                    <i class="ti-search"></i>
                                </a>
                                <a class="h4" href="facilities.php">Science Lab</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <img class="img-fluid w-100" src="images/facilities/sgan-facilities3.jpg" alt="work-image">
                            <div class="image-overlay">
                                <a class="popup-image" data-effect="mfp-zoom-in" href="images/facilities/sgan-facilities3.jpg">
                                    <i class="ti-search"></i>
                                </a>
                                <a class="h4" href="facilities.php">Library</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <img class="img-fluid w-100" src="images/facilities/sgan-facilities4.jpg" alt="work-image">
                            <div class="image-overlay">
                                <a class="popup-image" data-effect="mfp-zoom-in" href="images/facilities/sgan-facilities4.jpg">
                                    <i class="ti-search"></i>
                                </a>
                                <a class="h4" href="facilities.php">Pray Hall</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 px-0">
                        <div class="work-slider-image">
                            <img class="img-fluid w-100" src="images/facilities/sgan-facilities5.jpg" alt="work-image">
                            <div class="image-overlay">
                                <a class="popup-image" data-effect="mfp-zoom-in" href="images/facilities/sgan-facilities5.jpg">
                                    <i class="ti-search"></i>
                                </a>
                                <a class="h4" href="facilities.php">Computer Lab</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /work -->

        <!-- service -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h5 class="section-title-sm">About Us</h5>
                        <h2 class="section-title section-title-border">Know More About Us</h2>
                    </div>
                    <!-- service item -->

                    <!-- service item -->
                    <div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
                        <div class="card text-center">
                            <h4 class="card-title pt-3">Message from Saints</h4>
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-0" src="images/sgan-about1.jpg" alt="service-image">
                            </div>
                            <div class="card-body p-0">
                                <i class="square-icon translateY-33 rounded ti-comment-alt"></i>
                                <p class="card-text mx-2 mb-0">We at Shree Ghanashyam Academy believe that a school should provide a warm, secure and welcoming atmosphere for children. When coupled with spiritual and modern infrastructure...</p>
                                <a href="about.php#saint" class="btn btn-secondary translateY-25">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- service item -->
                    <!--                    <div class="col-lg-4 col-sm-6 mb-20">
                                            <div class="card text-center">
                                                <h4 class="card-title pt-3">Director's Desk</h4>
                                                <div class="card-img-wrapper">
                                                    <img class="card-img-top rounded-0" src="images/sgan-about2 .jpg" alt="service-image" height="125px" width="auto">
                                                </div>
                                                <div class="card-body p-0">
                                                    <i class="square-icon translateY-33 rounded ti-comment-alt"></i>
                                                    <p class="card-text mx-2 mb-0">Shree Ghanshyan Academy-Naranpar own and managed by Shree Swaminarayan Gurukul-Naranpar under the guidance of shree Swaminarayan mandir-Bhuj, is one...</p>
                                                    <a href="about.php#director" class="btn btn-secondary translateY-25">Read More</a>
                                                </div>
                                            </div>
                                        </div>-->
                    <div class="col-lg-6 col-sm-6">
                        <div class="card text-center">
                            <h4 class="card-title pt-3">Principal's Pen</h4>
                            <div class="card-img-wrapper">
                                <img class="card-img-top rounded-0" src="images/sgan-about3.jpg" alt="service-image"  width="auto">
                            </div>
                            <div class="card-body p-0">
                                <i class="square-icon translateY-33 rounded ti-comment-alt"></i>
                                <p class="card-text mx-2 mb-0">Today India standup under the theme of digital India, skill India and make in India. It has many advantages as the world’s fastest growing economy including the very large...</p>
                                <a href="about.php#principal" class="btn btn-secondary translateY-25">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- <section class="about section-sm overlay" style="background-image: url(images/background/about-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 ml-auto">
                    <div class="rounded p-sm-5 px-3 py-5 bg-secondary">
                        <h3 class="section-title section-title-border-half text-white">Who We Are?</h3>
                        <p class="text-white mb-40">Excepteur sint occaecat cupidatat non proident sunt culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div>
                            <ul class="d-inline-block pl-0">
                                <li class="font-secondary mb-10 text-white float-sm-left mr-sm-5">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                            <ul class="d-inline-block pl-0">
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Business Services</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>Audit &amp; Assurance</li>
                                <li class="font-secondary mb-10 text-white">
                                    <i class="text-primary mr-2 ti-arrow-circle-right"></i>IT Control Solutions</li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-primary mt-4">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->





        <!-- footer -->

        <?php include_once './footer.php';
        ?>

    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>