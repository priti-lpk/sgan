<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    $image_name = "";

    $filename = $_FILES["t_image"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "teaching_staff", "1");

    $imgefolder = ($lastID + 1) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG allowed');top.location='../teaching_staff.php';</script>";
    } else {

        move_uploaded_file($_FILES['t_image']['tmp_name'], '../Images/Teaching-Staff/' . $imgefolder);

        if ($_FILES['t_image']['name']) {

            $_POST['t_image'] = $image_name;
        } else {

            $_POST['t_image'] = "images/noimage.png";
        }
    }

    unset($_POST['action']);
    unset($_POST['id']);
    $dba->setData("teaching_staff", $_POST);
    echo "<script>alert('Successfully Inserted Teaching Staff');top.location='../teaching_staff.php';</script>";

//    header('location:../teaching_staff.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    $image_name = "";
    $filename = $_FILES["t_image"]["name"];
    // echo $filename;
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    $imgefolder = ($id) . "." . $ext;

    $image_name = trim(($image_name . "," . $imgefolder), ',');

    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG allowed');top.location='teaching_staff.php';</script>";
    } else {

        move_uploaded_file($_FILES['t_image']['tmp_name'], '../Images/Teaching-Staff/' . $imgefolder);

        if ($_FILES['t_image']['name']) {

            $_POST['t_image'] = $image_name;
        } else {

            $_POST['t_image'] = "images/noimage.png";
        }
    }

    if ($dba->updateRow("teaching_staff", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Teaching Staff');top.location='../teaching_staff.php';</script>";

//        header('location:../teaching_staff.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

