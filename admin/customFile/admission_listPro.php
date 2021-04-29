<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    $dba->setData("admission_list", $_POST);
    echo "<script>alert('Successfully Inserted Admission');top.location='../admission_list.php';</script>";

//    header('location:../admission_list.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("admission_list", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Admission');top.location='../admission_list.php';</script>";

//        header('location:../admission_list.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

