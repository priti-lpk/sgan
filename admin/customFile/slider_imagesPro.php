<?php

include_once '../shreeLib/DBAdapter.php';

include_once '../shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action'] == 'add') {
    $lastID = $dba->getLastID("id", "slider_images", "1");
    if (is_array($_FILES)) {
        $file = $_FILES['image']['tmp_name'];
        $sourceProperties = getimagesize($file);
        $fileNewName = ($lastID + 1);
        $folderPath = "../Images/Slider-Images/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];
        $imgefolder = ($lastID + 1) . "." . $ext;

        switch ($imageType) {

            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagepng($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagegif($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;

            case IMAGETYPE_JPG:
                $imageResourceId = imagecreatefromjpeg($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;

            default:
                echo "Invalid Image type.";
                exit;
                break;
        }
        move_uploaded_file($imgefolder, $folderPath );
        $_POST['image'] = $imgefolder;
    }
    unset($_POST['action']);
    unset($_POST['id']);
    $dba->setData("slider_images", $_POST);
    echo "<script>alert('Successfully Inserted Slider Images');top.location='../slider_images.php';</script>";
} elseif ($_POST['action'] == 'edit') {

    unset($_POST['action']);
    $id = $_POST['id'];

    if (is_array($_FILES)) {

        $file = $_FILES['image']['tmp_name'];
        $sourceProperties = getimagesize($file);
        // $fileNewName = time();
        $fileNewName = $id;
        $folderPath = "../Images/Slider-Images/";
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $imageType = $sourceProperties[2];
        $imgefolder = ($id) . "." . $ext;

        switch ($imageType) {


            case IMAGETYPE_PNG:
                $imageResourceId = imagecreatefrompng($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagepng($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;


            case IMAGETYPE_GIF:
                $imageResourceId = imagecreatefromgif($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagegif($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;


            case IMAGETYPE_JPEG:
                $imageResourceId = imagecreatefromjpeg($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;

            case IMAGETYPE_JPG:
                $imageResourceId = imagecreatefromjpeg($file);
                $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1]);
                imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
                break;

            default:
                echo "Invalid Image type.";
                exit;
                break;
        }

        move_uploaded_file($imgefolder, $folderPath );
        
        $_POST['image'] = $imgefolder;
        if ($dba->updateRow("slider_images", $_POST, "id=" . $id)) {
            $msg = " Edit Successfully";
            echo "<script>alert('Successfully Edited Slider Images');top.location='../slider_images.php';</script>";
        } else {
            $msg = "Edit Fail Try Again";
        }
    }
}

function imageResize($imageResourceId, $width, $height) {


    $targetWidth = 1550;
    $targetHeight = 600;


    $targetLayer = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);


    return $targetLayer;
}
?>

