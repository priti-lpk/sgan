<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {

    unset($_POST['action']);
    unset($_POST['id']);
//      print_r($_POST);
    $dba->setData("admission_procedure", $_POST);
    echo "<script>alert('Successfully Inserted Admission Procedure');top.location='../admission_procedure.php';</script>";

//    header('location:../admission_procedure.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if ($dba->updateRow("admission_procedure", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited Admission Procedure');top.location='../admission_procedure.php';</script>";

//        header('location:../admission_procedure.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

