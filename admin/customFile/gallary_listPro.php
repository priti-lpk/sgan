<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {
    unset($_POST['action']);
    unset($_POST['id']);
    $image_name = "";
    $k = 1;
    foreach ($_FILES["image_name"]["error"]as $key => $error) {

        $filename = $_FILES["image_name"]["name"][$key];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $lastID = $dba->getLastID("id", "gallary_list", "1");
         $get_year = $dba->getLastID("year_name", "`year_list` INNER JOIN album_list ON year_list.id=album_list.year_id", "album_list.id=" . $_POST['album_id']);

        $_POST['gallary_year'] = $get_year;
        $imgefolder = $get_year . "-" . $_POST['album_id'] . "-" . ($lastID + 1) . "(" . $k . ').' . $ext;
//        echo $imgefolder;
        // $image_name = trim(($image_name . "," . $imgefolder), ',');
        // echo $image_name;
       $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf","PDF");

        if (!in_array($ext, $file)) {

            echo "<script>alert('Only JPG ,PNG, JPEG allowed');top.location='gallary_list.php';</script>";
        } else {

            move_uploaded_file($_FILES['image_name']['tmp_name'][$key], '../Images/Gallary/' . $imgefolder);

            if ($_FILES['image_name']['name'][$key]) {

                $_POST['image_name'] = $imgefolder;
               // print_r($_POST);
                $dba->setData("gallary_list", $_POST);
            } else {

                $_POST['image_name'] = "images/noimage.png";
            }
        }
        $k++;
    }
    echo "<script>alert('Successfully Inserted Gallery Images');top.location='../gallary_list.php';</script>";
//    header('location:../gallary_list.php');
} 

?>

