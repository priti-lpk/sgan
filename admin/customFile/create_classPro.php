<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("create_class", $_POST);

    echo "<script>alert('Successfully Inserted Class');top.location='../create_class.php';</script>";
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("create_class", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Class');top.location='../create_class.php';</script>";
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

