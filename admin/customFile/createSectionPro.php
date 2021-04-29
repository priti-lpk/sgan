<?php

ob_start();
include '../shreeLib/DBAdapter.php';
include_once '../shreeLib/dbconn.php';
include_once '../shreeLib/Controls.php';
$dba = new DBAdapter();
if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    $result = $dba->setData("create_section", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }

    echo json_encode($responce);

    unset($_POST);
} elseif ($_POST['action'] == 'cadd') {

    unset($_POST['action']);
    unset($_POST['id']);

    $result = $dba->setData("create_section", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }
    echo "<script>alert('Successfully Inserted Section');top.location='../create_section.php';</script>";
//    header('location:../create_section.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("create_section", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Section');top.location='../create_section.php';</script>";
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

