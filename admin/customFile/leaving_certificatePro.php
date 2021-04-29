<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    $image_name = "";

    $filename = $_FILES["l_document"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "leaving_certificate", "1");

    $imgefolder = ($lastID + 1) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG, PDF allowed');top.location='../leaving_certificate.php';</script>";
    } else {

        move_uploaded_file($_FILES['l_document']['tmp_name'], '../Images/Leaving-Certificate/' . $imgefolder);

        if ($_FILES['l_document']['name']) {

            $_POST['l_document'] = $image_name;
        } else {

            $_POST['l_document'] = "images/noimage.png";
        }
    }


    unset($_POST['action']);
    unset($_POST['id']);
    $dba->setData("leaving_certificate", $_POST);
    // print_r($_POST);
    echo "<script>alert('Successfully Inserted Leaving Ceritificate');top.location='../leaving_certificate.php';</script>";

//    header('location:../leaving_certificate.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    $image_name = "";

    $filename = $_FILES["l_document"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $imgefolder = ($id) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');

    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG, PDF allowed');top.location='leaving_certificate.php';</script>";
    } else {

        move_uploaded_file($_FILES['l_document']['tmp_name'], '../Images/Leaving-Certificate/' . $imgefolder);

        if ($_FILES['l_document']['name']) {

            $_POST['l_document'] = $image_name;
        } else {

            $_POST['l_document'] = "images/noimage.png";
        }
    }

    if ($dba->updateRow("leaving_certificate", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Leaving Certificate');top.location='../leaving_certificate.php';</script>";
//        header('location:../leaving_certificate.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>


