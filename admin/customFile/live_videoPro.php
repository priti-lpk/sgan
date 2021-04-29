<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("live_video", $_POST);
    echo "<script>alert('Successfully Inserted Live video);top.location='../live_video.php';</script>";

//    header('location:../live_video.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("live_video", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Live Video);top.location='../live_video.php';</script>";

//        header('location:../live_video.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

