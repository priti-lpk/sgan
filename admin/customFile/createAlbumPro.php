<?php

ob_start();
include '../shreeLib/DBAdapter.php';
include_once '../shreeLib/dbconn.php';
include_once '../shreeLib/Controls.php';
$dba = new DBAdapter();
if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    $result = $dba->setData("album_list", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
        echo "<script>alert('Successfully Inserted Album');top.location='../create_album.php';</script>";
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }

    echo json_encode($responce);

    unset($_POST);
} else
if ($_POST['action'] == 'aadd') {

    unset($_POST['action']);
    unset($_POST['id']);
    $result = $dba->setData("album_list", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }

    echo json_encode($responce);

    unset($_POST);
    echo "<script>alert('Successfully Inserted Album');top.location='../create_album.php';</script>";

//    header('location:../create_album.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("album_list", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Album');top.location='../create_album.php';</script>";
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

