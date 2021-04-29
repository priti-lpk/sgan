<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("school_management", $_POST);
    echo "<script>alert('Successfully Inserted School Management');top.location='../school_management.php';</script>";

//    header('location:../school_management.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("school_management", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited School Management');top.location='../school_management.php';</script>";

//        header('location:../school_management.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>



