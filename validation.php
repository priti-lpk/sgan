<?php
ob_start();
include_once 'admin/shreeLib/DBAdapter.php';
include_once 'admin/shreeLib/dbconn.php';
$dba = new DBAdapter();
if (isset($_GET['gr-no'])) {
    $sql = "SELECT enrollment_no FROM leaving_certificate WHERE enrollment_no = '" . $_GET['gr-no'] . "'";
    $select = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($select)) {
        $data = $row['enrollment_no'];
    }
    $get_rows = mysqli_affected_rows($con);
    if ($get_rows >= 1) {
        echo "1";
    } else {
        echo "0";
    }
} elseif (isset($_GET['dob'])) {
    $sql = "SELECT stu_dob FROM leaving_certificate WHERE stu_dob = '" . $_GET['dob'] . "' and enrollment_no = '" . $_GET['en_no'] . "'";
//    echo $sql;
    $select = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($select)) {
        $data = $row['stu_dob'];
    }
    $get_rows = mysqli_affected_rows($con);
    if ($get_rows >= 1) {
        echo "1";
    } else {
        echo "0";
    }
} 
?>
