<?php
ob_start();
if ($_POST) {
    include './shreeLib/DBAdapter.php';
    include './shreeLib/Controls.php';

    $cont = new Controls();
    $dba = new DBAdapter();
    $_POST['user_pass'] = md5($_POST['user_pass']);
    $msg;
    $data = $dba->getRow("system_user", array("*"), "user_name='" . $_POST['user_username'] . "' and user_pass='" . $_POST['user_pass'] . "'");
    if (!empty($data)) {
        if ($_POST['user_username'] === $data[0][1] && $_POST['user_pass'] === $data[0][2]) {
            session_start();
            $_SESSION['user_name'] = $data[0][1];
            $_SESSION['user_id'] = $data[0][0];
            unset($_POST['user_username']);
            unset($_POST['user_pass']);
            $_POST['ip_address'] = $cont->get_client_ip();
            $dba->setData("login", $_POST);
            header("Location:Dashboard.php");
        } else {
            $msg = "Authentication Fail!";
        }
    } else {
        $msg = "Authentication Fail!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="http://localhost/sgan/admin">

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SGAN</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Background -->
        <div class="account-pages"></div>
        <!-- Begin page -->
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="index.php" class="logo logo-admin"><img src="Images/sgan-logo.png" height="80" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Sign in to continue to SGAN</p>

                        <form class="form-horizontal m-t-30" action="" method="post">

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="user_username" placeholder="Enter username">
                            </div>

                            <div class="form-group">
                                <label for="userpassword">Password</label>
                                <input type="password" class="form-control" id="password" name="user_pass" placeholder="Enter password">
                            </div>

                            <div class="form-group ">                               
                                <div class="">
                                    <button class="btn btn-primary btn-block w-md waves-effect waves-light" type="submit">Log In</button>

                                </div>

                            </div>
                            <?php echo ($_POST) ? $msg : ''; ?>
                            <!--                            <div class="form-group m-t-10 mb-0 row">
                                                            <div class="col-12 m-t-20">
                                                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                                            </div>
                                                        </div>-->
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">                
                <p class="text-muted">Developed with <i class="mdi mdi-heart text-danger"></i> by LPK Technosoft </p>
            </div>

        </div>

        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

<!--        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

         App js 
        <script src="assets/js/app.js"></script>-->

    </body>

</html>