<?php

ob_start();
include '../shreeLib/DBAdapter.php';
include_once '../shreeLib/dbconn.php';
include_once '../shreeLib/Controls.php';
$dba = new DBAdapter();
if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    $result = $dba->setData("department_list", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
        echo "<script>alert('Successfully Inserted Department');top.location='../create_department.php';</script>";
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }

    echo json_encode($responce);

    unset($_POST);
} elseif ($_POST['action'] == 'dadd') {

    unset($_POST['action']);
    unset($_POST['id']);

    $result = $dba->setData("department_list", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }
    echo "<script>alert('Successfully Inserted Department');top.location='../create_department.php';</script>";
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("department_list", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Department');top.location='../create_department.php';</script>";
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

