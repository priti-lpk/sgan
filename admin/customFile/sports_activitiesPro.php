<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("sports_activities", $_POST);
    echo "<script>alert('Successfully Inserted Sports Activities');top.location='../sports_activities.php';</script>";

//   header('location:../sports_activities.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("sports_activities", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Sports Activities');top.location='../sports_activities.php';</script>";

//        header('location:../sports_activities.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>



