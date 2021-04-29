<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {
    unset($_POST['action']);
    unset($_POST['id']);

    $dba->setData("video_list", $_POST);
    echo "<script>alert('Successfully Inserted Video');top.location='../video_list.php';</script>";
//    header('location:../video_list.php');
}
?>

