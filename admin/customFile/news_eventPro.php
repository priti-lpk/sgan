<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {
    unset($_POST['action']);
    unset($_POST['id']);
    $image_name = "";
    $k = 1;

    $filename = $_FILES["ne_image"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "news_event", "1");
    $imgefolder = ($lastID + 1) . "." . $ext;
    // $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "jpeg", "png");
    move_uploaded_file($_FILES['ne_image']['tmp_name'], '../Images/News-Evants/' . $imgefolder);
    if ($_FILES['ne_image']['name']) {

        $_POST['ne_image'] = $imgefolder;
    } else {

        $_POST['ne_image'] = "logo.png";
    }
    $dba->setData("news_event", $_POST);

    echo "<script>alert('Successfully Inserted News Event);top.location='../news_event.php';</script>";
    header('location:../news_event.php');
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];
    //echo $id;
    $image_name = "";
    $k = 1;
    $filename = $_FILES["ne_image"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $imgefolder = ($id) . "." . $ext;
    // $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "jpeg", "png");
    move_uploaded_file($_FILES['ne_image']['tmp_name'], '../Images/News-Evants/' . $imgefolder);
    if ($_FILES['ne_image']['name']) {

        $_POST['ne_image'] = $imgefolder;
    } else {

        $_POST['ne_image'] = "logo.png";
    }
    if ($dba->updateRow("news_event", $_POST, "id=" . $id)) {

        $msg = " Edit Successfully";
        echo "<script>alert('Successfully Edited News Event);top.location='../news_event.php';</script>";

//        header('location:../news_event.php');
    } else {

        $msg = "Edit Fail Try Again";
    }
}
?>

