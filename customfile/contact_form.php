<?php

include_once '../admin/shreeLib/DBAdapter.php';
include_once '../admin/shreeLib/dbconn.php';
include_once '../admin/shreeLib/Controls.php';

if ($_POST) {

    $email_to = "lpktechno02@gmail.com";
    //$email_to = "preetihirani2909@gmail.com";
    //echo $email_to;
    $name = $_POST["name"];

    $email = $_POST["email"];

    $fromemail = "talk@lpktechnosoft.com";
    // echo $fromemail;
    $email_subject = "Contact-us";

    $headers = "From:" . $fromemail . "\n";

    $headers .= "MIME-Version: 1.0\r\n";

    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $headers .= "Reply-To: " . $fromemail . "\n";
    $message = "<html>
	            <head>
		    <title>Email</title>
                    </head>
	            <body>
                            Name: " . $name . "<br>
                            Subject: " . $email_subject . "
                    </body>
                    </html>";
    //echo $message;

    $sent = mail($email_to, $email_subject, $message, $headers);
    echo $sent;
    if ($sent) {

        $responce = array("status" => TRUE, "msg" => "successfull");
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail" . $sent);
    }

   // $responce = array("status" => TRUE, "msg" => "successfull");


    echo json_encode($responce);
}
?>