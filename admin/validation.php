<?php

ob_start();
include_once 'shreeLib/DBAdapter.php';
include_once 'shreeLib/dbconn.php';
$dba = new DBAdapter();
if (isset($_GET['add-question'])) {
    $id = $_GET['main-cat'];
    //echo $id;
    if ($id == '1' || $id == '2') {
        $sql = "SELECT question FROM question_master WHERE question = '" . $_GET['add-question'] . "'";
        $select = mysqli_query($con, $sql);
//        echo $sql;
        while ($row = mysqli_fetch_array($select)) {
            $data = $row['question'];
            //print_r($data);
        }
        $get_rows = mysqli_affected_rows($con);
        if ($get_rows >= 1) {
            echo "0";
        } else {
            echo "1";
        }
    } else {
        $sql = "SELECT question FROM question_master WHERE question = '" . $_GET['add-question'] . "'";
        $select = mysqli_query($con, $sql);
       // echo $sql;
        while ($row = mysqli_fetch_array($select)) {
            $data = $row['question'];
            //print_r($data);
        }
        $get_rows = mysqli_affected_rows($con);
        if ($get_rows >= 1) {
            echo "1";
        } else {
            echo "0";
        }
    }
   
}
?>

