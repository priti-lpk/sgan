<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    
    $dba->setData("hostal_schedule", $_POST);
    echo "<script>alert('Successfully Inserted Hostel Schedule');top.location='../hostal_schedule.php';</script>";

//    header('location:../hostal_schedule.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("hostal_schedule", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Hostel Schedule');top.location='../hostal_schedule.php';</script>";
//        header('location:../hostal_schedule.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

