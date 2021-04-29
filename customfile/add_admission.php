<?php

include_once '../admin/shreeLib/DBAdapter.php';

include_once '../admin/shreeLib/dbconn.php';

$dba = new DBAdapter();

if ($_POST['action']) {

    unset($_POST['action']);
    unset($_POST['id']);
    $image_name = "";
    //student_photo
    $filename = $_FILES["student_photo"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "admission_master", "1");

    $imgefolder = ($lastID + 1) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF", "doc");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG,pdf,doc allowed');top.location='../admission_master.php';</script>";
    } else {

        move_uploaded_file($_FILES['student_photo']['tmp_name'], '../Images/Admission_stu_photo/' . $imgefolder);

        if ($_FILES['student_photo']['name']) {

            $student_photo = $image_name;
        } else {

            $student_photo = "images/Admission_stu_photo/noimage.png";
        }
    }
    // birth_certificate
    $image_name = "";
    $filename = $_FILES["birth_certificate"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "admission_master", "1");

    $imgefolder = ('birth-' . ($lastID + 1)) . "." . $ext;

    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF", "doc");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG,pdf,doc allowed');top.location='../admission_master.php';</script>";
    } else {

        move_uploaded_file($_FILES['birth_certificate']['tmp_name'], '../Images/Admission_doc/' . $imgefolder);

        if ($_FILES['birth_certificate']['name']) {

            $birth_certificate = $image_name;
        } else {

            $birth_certificate = "images/Admission_doc/noimage.png";
        }
    }

    //case_certificate
    $image_name = "";
    $filename = $_FILES["case_certificate"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "admission_master", "1");

    $imgefolder = ('case-' . ($lastID + 1)) . "." . $ext;

    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF", "doc");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG,pdf,doc allowed');top.location='../admission_master.php';</script>";
    } else {

        move_uploaded_file($_FILES['case_certificate']['tmp_name'], '../Images/Admission_doc/' . $imgefolder);

        if ($_FILES['case_certificate']['name']) {

            $case_certificate = $image_name;
        } else {

            $case_certificate = "images/Admission_doc/noimage.png";
        }
    }


    //report_card
    $image_name = "";
    $filename = $_FILES["report_card"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "admission_master", "1");

    $imgefolder = ('report-' . ($lastID + 1)) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF", "doc");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG,pdf,doc allowed');top.location='../admission_master.php';</script>";
    } else {

        move_uploaded_file($_FILES['report_card']['tmp_name'], '../Images/Admission_doc/' . $imgefolder);

        if ($_FILES['report_card']['name']) {

            $report_card = $image_name;
        } else {

            $report_card = "images/Admission_doc/noimage.png";
        }
    }


    //transfer_certificate
    $image_name = "";
    $filename = $_FILES["transfer_certificate"]["name"];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $lastID = $dba->getLastID("id", "admission_master", "1");

    $imgefolder = ('transfer-' . ($lastID + 1)) . "." . $ext;
    $image_name = trim(($image_name . "," . $imgefolder), ',');
    $file = array("jpg", "png", "jpeg", "JPG", "JPEG", "PNG", "pdf", "PDF", "doc");

    if (!in_array($ext, $file)) {

        echo "<script>alert('Only JPG ,PNG, JPEG,pdf,doc allowed');top.location='../admission_master.php';</script>";
    } else {

        move_uploaded_file($_FILES['transfer_certificate']['tmp_name'], '../Images/Admission_doc/' . $imgefolder);

        if ($_FILES['transfer_certificate']['name']) {

            $transfer_certificate = $image_name;
        } else {

            $transfer_certificate = "images/Admission_doc/noimage.png";
        }
    }
    $json_parents_detail = json_encode($_POST['parents_detail']);
    $parents_detail = $json_parents_detail;
    if ($_POST['last_school_affiliated1'] == '') {
        $last_school_affiliated = $_POST['last_school_affiliated'];
    }else{
        $last_school_affiliated = $_POST['last_school_affiliated1'];
    }
    $sql = "INSERT INTO admission_master (admission_class, admission_session, student_name, student_photo, student_gender,date_of_birth,date_of_birth_in_word,place_of_birth,parents_detail,category,last_school_name_address,last_school_attend,last_school_affiliated,birth_certificate,case_certificate,report_card,transfer_certificate) VALUES ('" . $_POST['admission_class'] . "','" . $_POST['admission_session'] . "','" . $_POST['student_name'] . "','" . $student_photo . "','" . $_POST['student_gender'] . "','" . $_POST['date_of_birth'] . "','" . $_POST['date_of_birth_in_word'] . "','" . $_POST['place_of_birth'] . "','" . $parents_detail . "','" . $_POST['category'] . "','" . $_POST['last_school_name_address'] . "','" . $_POST['last_school_attend'] . "','" . $last_school_affiliated . "','" . $birth_certificate . "','" . $case_certificate . "','" . $report_card . "','" . $transfer_certificate . "')";
    $result = mysqli_query($con, $sql);
    if ($result) {

//        $last_id = $dba->getLastID("id", "admission_master", "1");
//        $totalrow = count($_POST['subject']);
//
//        $sql = array();
//        for ($i = 0; $i < $totalrow; $i++) {
//            $sql1 = "INSERT INTO admission_result_list (admission_id, subject, maximum_marks, marks_obtained, percent,remark) VALUES ('" . $last_id . "','" . $_POST['subject'][$i] . "','" . $_POST['maximum_marks'][$i] . "','" . $_POST['marks_obtained'][$i] . "','" . $_POST['percent'][$i] . "','" . $_POST['remark'][$i] . "')";
//            mysqli_query($con, $sql1);
//        }
        echo "<script>alert('Successfully Inserted Admission');top.location='../online-admission.php';</script>";
    } else {
        echo "<script>alert('Soemthing Wrong!');top.location='../online-admission.php';</script>";
    }

//    header('location:../online-admission.php');
}
?>