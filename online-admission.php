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
        <style>
            .profileImage {

                display: block;
            }
            .file-upload {
                opacity: 0;
                position: absolute;
                left: 0;
                top: 0;
            }
            .table_input_box{
                font-family: none;
                border-bottom: 1px dotted gray;
            }
            
        </style>
    </head>

    <body>

        <?php include_once './header.php';
        ?>


        <section class="section pb-0 bg-gray pt-3">
            <div class="container">
                <div class="row col-md-12">

                    <form action="customfile/add_admission.php" method="post" enctype="multipart/form-data" class="row online-form">
                        <div class="col-lg-12 text-center">
                            <h3>Online Admission Form</h3>
                        </div>
                        <div class="col-lg-12">
                            <span class="float-right">
                                <div class="square mb-4">
                                    <img src="images/photo-upload.png" alt="user" id="profileImage" class="user-profile shadow mx-auto mt-n5" width="120" height="140"/>
                                </div>
                                <input id="imageUpload" class="file-upload" type="file" name="student_photo" placeholder="Photo" required="" capture>
                            </span>
                        </div>

                        <div class="col-lg-12 text-left input-wrapper mt-5 mb-4">

                            <span class='sub-heading-print'><lable>CLASS to which admission sought: </lable><input type="text" name="admission_class" id="admission_class" class="" placeholder="" required> Session:<input type="text" name="admission_session" id="admission_session" class="" placeholder="" required></span>
                        </div>
                        <h4 class="pl-3 heading-print bottom-hr mb-4"><i class="ti-arrow-right"></i> PERSONAL DETAILS:</h4> 

                        <div class="col-lg-12 text-left input-wrapper mb-1 sub-heading-print">
                            <ul>
                                <li> Name: </li>
                                <li class="col-md-8"><input type="text" id="student_name" name="student_name" class="w-100" placeholder="" required></li>
                            </ul>
                        </div>


                        <div class="col-lg-12 mb-0 text-left input-wrapper checkbox-admission sub-heading-print">
                            <ul><p>
                                <li class="mr-1 mt-1"> Gender:  &nbsp; &nbsp; Male</li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="student_gender" id="male" value="male"><label for="male"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">Female </li>
                                <li class="mr-4">  
                                    <div class="form-group"><input type="checkbox" name="student_gender" id="female" value="female"><label for="female"></label>
                                    </div>
                                </li>
                                <li class="mr-1 mt-1">Any Other </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="student_gender" id="other" value="other"><label for="other"></label>
                                    </div> 
                                </li></p>
                            </ul>
                        </div>
                        <div class="col-lg-12 mb-4 text-left input-wrapper sub-heading-print">
                            <span> Date of Birth: <input type="date" id="date_of_birth" name="date_of_birth" class="" placeholder="" required onChange="dateinword();">(In date/month/year format)</span>
                        </div>
                        <div class="col-lg-12 text-left input-wrapper mb-4 sub-heading-print">
                            <span>In Words: <input type="text" id="date_of_birth_in_word" name="date_of_birth_in_word" class="w-75" placeholder="" required></span>
                        </div>
                        <div class="col-lg-12 text-left input-wrapper mb-4 sub-heading-print">
                            <span> Place of Birth: <input type="text" id="place_of_birth" name="place_of_birth" class="w-50" placeholder="" required></span>
                        </div>

                        <!-- table -->
                        <h4 class="pl-3 heading-print"><i class="ti-arrow-right"></i> Details of Parents:</h4> 
                        <div class="table-responsive mb-3">
                            <table class="table table-admission table-bordered sub-heading-print ml-3">
                                <thead>
                                    <tr class="text-center">
                                        <th class="" width="10">Details</th>
                                        <th class="" width="40">Mother</th>
                                        <th class="" width="40">Father/Guardian</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">Name</td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" required/></td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id="" required/></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Residential Address</td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id=""/></td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id=""/></td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Mobile No.</td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id=""/></td>
                                        <td class="text-center"><input type="text" class="table_input_box" name="parents_detail[]" id=""/></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- end of table -->
                        <div class="col-lg-12 mb-0 input-wrapper checkbox-admission text-left sub-heading-print">
                            <ul>
                                <li class="mr-1 mt-1"> Category:  &nbsp; &nbsp; General</li>
                                <!-- <li class="mt-1"> Category: &nbsp;</li>
                                <li class="mr-1 mt-1">General</li> -->
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="category" id="General" value="General"><label for="General"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">SC </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="category" id="SC" value="SC"><label for="SC"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">ST </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="category" id="ST" value="ST"><label for="ST"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">OBC </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="category" id="OBC" value="OBC"><label for="OBC"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">EWS </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="category" id="EWS" value="EWS"><label for="EWS"></label>
                                    </div>  
                                </li>
                            </ul>
                        </div>
                        <div id="smsg"></div>


                        <div class="col-lg-12 text-left input-wrapper mb-4 sub-heading-print">
                            <span> Name & Address of the last attended school: <input type="text" id="last_school_name_address" name="last_school_name_address" class="w-50" placeholder="" required></span>
                        </div>  
                        <div class="col-lg-12 text-left input-wrapper mb-4 sub-heading-print">
                            <span> Class Last Attended: <input type="text" id="last_school_attend" name="last_school_attend" class="w-50" placeholder="" required></span>
                        </div>  
                        <div class="col-lg-12 text-left input-wrapper sub-heading-print">
                            <span> Last School Affiliated is:</span>
                            <ul class="checkbox-admission mt-3">

                                <li class="mr-1 mt-1">CBSE </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="CBSE" value="CBSE"><label for="CBSE"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">ICSE </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="ICSE" value="ICSE"><label for="ICSE"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">IB </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="IB" value="IB"><label for="IB"></label>
                                    </div> 
                                </li>
                                <li class="mr-1 mt-1">State Board </li>
                                <li class="mr-4">
                                    <div class="form-group"><input type="checkbox" name="last_school_affiliated" id="State Board" value="State Board"><label for="State Board"></label>
                                    </div> 
                                </li>


                            </ul>
                            <ol class="mb-4">

                                <li class="mr-4 col-md-12 p-0">Any Other (Please Specify) <input type="text" id="last_school_affiliated" name="last_school_affiliated1" value='' class="w-75" placeholder=""></li>
                            </ol><br>
                        </div> 



                        <h4 class="pl-3 heading-print"><i class="ti-arrow-right"></i> Enclosures(all documents are mandatory at the time of admission):</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered sub-heading-print ml-3" id="tabledata">
                                <tbody>
                                    <tr>
                                        <td class="text-left" width="20">Birth Certificate</td>

                                        <td class="text-center" width="80">
                                            <div class="input-file-container">  
                                                <input class="input-file" id="my-file" name="birth_certificate" type="file" required="">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20">Caste Certificate</td>

                                        <td class="text-center" width="80">
                                            <div class="input-file-container">  
                                                <input class="input-file" id="my-file" name="case_certificate" type="file">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20">Report Card</td>

                                        <td class="text-center" width="80">
                                            <div class="input-file-container">  
                                                <input class="input-file" id="my-file" name="report_card" type="file">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20">Marksheet of 10th board</td>

                                        <td class="text-center" width="80">
                                            <div class="input-file-container">  
                                                <input class="input-file" id="my-file" name="tenth_marksheet" type="file">

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left" width="20">Transfer Certificate</td>

                                        <td class="text-center" width="80">
                                            <div class="input-file-container">  
                                                <input class="input-file" id="my-file" name="transfer_certificate" type="file" required="">

                                            </div>

                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class='col-md-12'>
                            <center><button class="btn btn-primary m-2 mt-5 mb-5 col-md-3" id="btn_save" type="submit" value="action" name="action" class = 'btn btn-default btn-sm'></i>SUBMIT</button></center>
                        </div>
                    </form>

                </div>
            </div>
        </section>



        <!-- footer -->
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
        <script>
                                $(':checkbox').on('change', function () {
                                    var th = $(this), name = th.attr('name');
                                    if (th.is(':checked')) {
                                        $(':checkbox[name="' + name + '"]').not(th).prop('checked', false);
                                    }
                                });
                                $('input#imageUpload').bind('change', function () {

                                    var maxSizeKB = 300; //Size in KB
                                    var minSizeKB = 50;//Size in KB
                                    var maxSize = maxSizeKB * 1024; //File size is returned in Bytes

                                    var minSize = minSizeKB * 1024; //File size is returned in Bytes
                                    if (this.files[0].size < minSize) {
                                        $(this).val("");
                                        alert("Min size exceeded");
                                        return false;
                                    }
                                });
                                $('input#my-file').bind('change', function () {

                                    var minSizeKB = 50;//Size in KB
                                    var minSize = minSizeKB * 1024; //File size is returned in Bytes
                                    if (this.files[0].size < minSize) {
                                        $(this).val("");
                                        alert("Min size exceeded");
                                        return false;
                                    }
                                });

        </script>
        <script>
            // Convert numbers to words
            // copyright 25th July 2006, by Stephen Chapman http://javascript.about.com
            // permission to use this Javascript on your web page is granted
            // provided that all of the code (including this copyright notice) is
            // used exactly as shown (you can change the numbering system if you wish)

            // American Numbering System
            var th = ['', 'thousand', 'million', 'billion', 'trillion'];
            // uncomment this line for English Number System
            // var th = ['','thousand','million', 'milliard','billion'];

            var dg = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
            var tn = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];
            var tw = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];
            function toWords(s) {
                s = s.toString();
                s = s.replace(/[\, ]/g, '');
                if (s != parseFloat(s))
                    return 'not a number';
                var x = s.indexOf('.');
                if (x == -1)
                    x = s.length;
                if (x > 15)
                    return 'too big';
                var n = s.split('');
                var str = '';
                var sk = 0;
                for (var i = 0; i < x; i++) {
                    if ((x - i) % 3 == 2) {
                        if (n[i] == '1') {
                            str += tn[Number(n[i + 1])] + ' ';
                            i++;
                            sk = 1;
                        } else if (n[i] != 0) {
                            str += tw[n[i] - 2] + ' ';
                            sk = 1;
                        }
                    } else if (n[i] != 0) {
                        str += dg[n[i]] + ' ';
                        if ((x - i) % 3 == 0)
                            str += 'hundred ';
                        sk = 1;
                    }
                    if ((x - i) % 3 == 1) {
                        if (sk)
                            str += th[(x - i - 1) / 3] + ' ';
                        sk = 0;
                    }
                }
                if (x != s.length) {
                    var y = s.length;
                    str += 'point ';
                    for (var i = x + 1; i < y; i++)
                        str += dg[n[i]] + ' ';
                }
                return str.replace(/\s+/g, ' ');
            }
            function dateinword() {

                var stu = $("#date_of_birth").val().split('-');
                var wMonths = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december']

                var final = toWords(stu[0]) + " " + wMonths[parseInt(stu[1]) - 1] + " " + toWords(stu[2])

                $('#date_of_birth_in_word').val(final);
            }
            ;




            //upload Image
            $("#profileImage").click(function (e) {

                $("#imageUpload").click();
            });
            function fasterPreview(uploader) {
                if (uploader.files && uploader.files[0]) {
                    $('#profileImage').attr('src',
                            window.URL.createObjectURL(uploader.files[0]));
                }
                var image = $('#imageUpload').prop('files')[0];
            }
            $("#imageUpload").change(function () {

                fasterPreview(this);
            });

            function myFunction() {
                var x = document.getElementById("bDate");
                var defaultVal = x.defaultValue;
                var currentVal = x.value;

                if (defaultVal == currentVal) {
                    document.getElementById("demo").innerHTML = "Default value and current value is the same: "
                            + x.defaultValue + " and " + x.value
                            + "<br>Change the value of the date field to see the difference!";
                } else {
                    document.getElementById("demo").innerHTML = "The default value was: " + defaultVal
                            + "<br>The new, current value is: " + currentVal;
                }
            }

        </script>
        <?php include_once './footer.php'; ?>
    </body>


</html>