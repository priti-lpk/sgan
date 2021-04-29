<?php

include_once 'admin/shreeLib/DBAdapter.php';
$dba = new DBAdapter();
if (isset($_GET['grNo'])) {
    $field = array("*");
    $data = $dba->getRow("leaving_certificate", $field, "enrollment_no=" . $_GET['grNo']);
    if (!empty($data)) {
        header('location:admin/Images/Leaving-Certificate/'.$data[0][4]);
    }
}
?>  
