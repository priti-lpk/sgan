<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['id']);
    $image_name = "";

    $filename = $_FILES["notice_image"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "cbs_circular", "1");

    $imgefolder = ($lastID + 1) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG allowed');top.location='../cbse_circular.php';</script>";
    } else {

        move_uploaded_file($_FILES['notice_image']['tmp_name'], '../Images/CBS-Notice/' . $imgefolder);

        if ($_FILES['notice_image']['name']) {

            $_POST['notice_image'] = $image_name;
        } else {

            $_POST['notice_image'] = "images/noimage.png";
        }
    }

    unset($_POST['action']);

    $dba->setData("cbs_circular", $_POST);
    echo "<script>alert('Successfully Inserted CBSE Curricular');top.location='../cbse_circular.php';</script>";

//    header('location:../cbse_circular.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];
    //echo $id;
    $image_name = "";

    $filename = $_FILES["notice_image"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $imgefolder = ($id) . "." . $ext;
    //echo $imgefolder;
    $image_name = trim(($image_name . "," . $imgefolder), ',');

    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG allowed');top.location='cbse_circular.php';</script>";
    } else {

        move_uploaded_file($_FILES['notice_image']['tmp_name'], '../Images/CBS-Notice/' . $imgefolder);

        if ($_FILES['notice_image']['name']) {

            $_POST['notice_image'] = $image_name;
        } else {

            $_POST['notice_image'] = "images/noimage.png";
        }
    }

    if ($dba->updateRow("cbs_circular", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited CBSE Curricular');top.location='../cbse_circular.php';</script>";

//        header('location:../cbse_circular.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

