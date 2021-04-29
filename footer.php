<html>
    <body>
        <!-- footer -->
        <section class="section pb-0 pt-5 bg-gray1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="align-self-center font-primary">
                            <center><i class="round-icon1 mr-3 ti-mobile"></i></center>
                            <p class="text-center">02832-281831, +91 6351819439, </br>+91 6351833431</p>
                        </div>
                    </div>
                    <div class="align-self-center font-primary col-lg-4 col-md-4">
                        <center><i class="round-icon1 mr-3 ti-location-pin"></i></center>
                        <p class="text-center">Kera Road, Naranpar, Taluka Bhuj-Kutch<br/>Gujarat, India. Pin Code: 370429</p>
                    </div>
                    <div class="align-self-center font-primary col-lg-4 col-md-4">
                        <center><i class="round-icon1 mr-3 ti-email"></i></center><br/>
                        <div class="align-self-center font-primary">
                            <a href="mailto:shreeghanshyamacademy@hotmail.com" target="_blank"><p class="text-center">shreeghanshyamacademy@hotmail.com</p></a><br/>
                        </div>

                    </div>
                </div>
        </section>

        <footer class="bg-secondary">

            <div class="py-50 border-bottom" style="border-color: #454547 !important">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mb-5 mb-md-0 text-center text-md-left">
                                <!-- logo -->
                                <img class="logo-footer" src="images/logo.png" alt="logo">
                                <p class="text-white card-text mb-30">Shree Ghanshyam Academy managed by Shree Swaminarayan Gurukul is spread over 7 acres of land and it runs under Shree Narnarayan Dev Bhuj, which is the seventh gurukul of the Bhuj temple whose foundation stone was laid on Monday, 13- 3- 2004, which was then formally inaugurated by Mahant Swami Hariswarup dasji in 2004. <a href="about.php">Read More</a></p>
                                <!-- social icon -->
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="social-icon-outline" href="https://www.facebook.com/pages/Shree-Ghanshyam-Academy-NaranparKutch/1435124170033781" target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon-outline" href="https://www.youtube.com/channel/UCOJX_5DcEcvP4AwonEM5WZA" target="_blank">
                                            <i class="ti-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon-outline" href="tel:91 6351819439">
                                            <i class="ti-mobile"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="social-icon-outline" href="mailto:shreeghanshyamacademy@hotmail.com" target="_blank">
                                            <i class="ti-email"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-lg-5 col-md-5">
                            <h4 class="section-title-sm text-center text-white section-title-border">Latest News</h4><br/>
                            <ul>
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
                                        echo '<li class = "d-flex Bborder">';
                                        echo '<div class = "px-4 text-center pt-2">';
                                        echo '<img src = "admin/Images/News-Evants/' . $subData[4] . '" class = "img-responsive1" height = "60px" width = "60px" />';
                                        echo '</div>';
                                        echo '<div class = "px-2 pt-2">';
                                        $details=$subData[1];
                                        $out = strlen($details) > 20 ? substr($details, 0, 30) . "..." : $details;
                                        echo '<a href = "news-event.php" class = "text-white font-primary text-white">' . $out . '</a>';
                                        $date = $subData[2];
                                        $dates = date("d M, Y", strtotime($date));
                                        echo '<p>' . $dates . '</p>';
                                        echo '</div>';
                                        echo '</li>';
                                    }
                                }
                                ?>
                              
                            </ul>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!--copyright -->
            <div class = "pt-4 pb-3 position-relative">
                <div class = "container">
                    <div class = "row">
                        <div class = "col-lg-6 col-md-4">
                            <p class = "text-white text-center text-md-left">
                                <span class = "text-primary">Shree Ghanshyam Academy</span> &copy;
                                2018 All Right Reserved</p>
                        </div>
                        <div class = "col-lg-6 col-md-7">
                            <ul class = "list-inline text-center text-md-right">
                                <li class = "list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                                    <span class = "text-white">Design & Developed by : </span><a href = "http://lpktechnosoft.com/"target = "_blank">LPK Technosoft</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--back to top -->
                <button class = "back-to-top">
                    <i class = "ti-angle-up"></i>
                </button>
            </div>
        </footer>
        <!--/footer -->

        <!--jQuery -->
        <script src = "plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="plugins/bootstrap/bootstrap.min.js"></script>
        <!-- magnific popup -->
        <script src="plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
        <!-- slick slider -->
        <script src="plugins/slick/slick.min.js"></script>
        <!-- mixitup filter -->
        <script src="plugins/mixitup/mixitup.min.js"></script>
        <!-- Google Map -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script> -->
        <script  src="plugins/google-map/gmap.js"></script>
        <!-- Syo Timer -->
        <script src="plugins/syotimer/jquery.syotimer.js"></script>
        <!-- aos -->
        <script src="plugins/aos/aos.js"></script>
        <!-- Main Script -->
        <script src="js/script.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                // hide our element on page load
                $('#element-to-animate').css('opacity', 0);

                $('#element-to-animate').waypoint(function () {
                    $('#element-to-animate').addClass('fadeInLeft');
                }, {offset: '50%'});

            });
        </script>
    </body>

    <!-- Mirrored from demo.themefisher.com/themefisher/biztrox/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Oct 2018 04:48:33 GMT -->
</html>