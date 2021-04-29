<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
    
    $dba->setData("co_curricular", $_POST);
    echo "<script>alert('Successfully Inserted Co Curricular');top.location='../co_curricular.php';</script>";

//    header('location:../co_curricular.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("co_curricular", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Currilar');top.location='../co_curricular.php';</script>";

//        header('location:../co_curricular.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

