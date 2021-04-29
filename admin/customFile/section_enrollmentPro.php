<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    unset($_POST['total_student']);
    $dba->setData("section_enrollment", $_POST);
    echo "<script>alert('Successfully Inserted Section Enrollment');top.location='../section_enrollment.php';</script>";

//    header('location:../section_enrollment.php');
} elseif ($_POST['action'] == 'edit') {
    unset($_POST['action']);
    $id = $_POST['id'];
    unset($_POST['total_student']);
    if ($dba->updateRow("section_enrollment", $_POST, "id=" . $id)) {
        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Section Enrollment');top.location='../section_enrollment.php';</script>";

//        header('location:../section_enrollment.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

