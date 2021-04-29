<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("extra_circular", $_POST);
    echo "<script>alert('Successfully Inserted Extra Circular');top.location='../extra_circular.php';</script>";

//    header('location:../extra_circular.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("extra_circular", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Extra Circular');top.location='../extra_circular.php';</script>";

//        header('location:../extra_circular.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>



