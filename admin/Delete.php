<?php

ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';
include_once 'shreeLib/dbconn.php';
$edba = new DBAdapter();
// delete from gallary_list.php
if ($_GET['type'] == 'gallary_list') {
    $id = $_GET['id'];
//    echo $id;
    $sql = "select * from gallary_list where FIND_IN_SET (id,'$id')";

    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $image_name = $row['image_name'];
        $file = "Images/Gallary/" . $image_name;
        $sql1 = "DELETE FROM `gallary_list` WHERE FIND_IN_SET(`id`,'$id')";
        if (mysqli_query($con, $sql1)) {
            unlink($file);
            echo "<script>alert('successfully Detail deleted!');top.location='gallary_list.php';</script>";
        } else {
            echo "<script>alert('Oops, Could not delete the Image\nTry Again!');</script>";
        }
    }



    // delete from admission_list.php
} elseif ($_GET['type'] == 'admission') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `admission_list` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:admission_list.php');
    // delete from admission_procedure.php
} elseif ($_GET['type'] == 'admission_p') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `admission_procedure` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:admission_procedure.php');
    // delete from hostal_schedule.php
} elseif ($_GET['type'] == 'hostal_sc') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `hostal_schedule` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:hostal_schedule.php');
    // delete from co_curricular.php
} elseif ($_GET['type'] == 'cirricular') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `co_curricular` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:co_curricular.php');
    // delete from sports_activities.php
} elseif ($_GET['type'] == 's_activities') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `sports_activities` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:sports_activities.php');
    // delete from extra_circular.php
} elseif ($_GET['type'] == 'extra_cir') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `extra_circular` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:extra_circular.php');
    // delete from school_management.php
} elseif ($_GET['type'] == 's_magnt') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `school_management` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:school_management.php');
    // delete from teaching_staff.php
} elseif ($_GET['type'] == 'teac_staff') {
    $id = $_GET['id'];
    $sql = "select *from teaching_staff where id=" . $id;
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    $image_name = $row['t_image'];
    $file = "Images/Teaching-Staff/" . $image_name;

    $sql1 = "DELETE FROM `teaching_staff` WHERE `id`=" . $id;
    if (mysqli_query($con, $sql1)) {
        unlink($file);
        echo "<script>alert('successfully  Detail deleted!');top.location='teaching_staff.php';</script>";
    } else {
        echo "<script>alert('Oops, Could not delete the Image\nTry Again!');</script>";
    }
// delete from cbs_circular.php
} elseif ($_GET['type'] == 'cbs_circular') {
    $id = $_GET['id'];
    $sql = "select *from cbs_circular where id=" . $id;
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    $image_name = $row['notice_image'];
    $file = "Images/CBS-Notice/" . $image_name;

    $sql1 = "DELETE FROM `cbs_circular` WHERE `id`=" . $id;
    if (mysqli_query($con, $sql1)) {
        unlink($file);
        echo "<script>alert('successfully Detail deleted!');top.location='cbse_circular.php';</script>";
    } else {
        echo "<script>alert('Oops, Could not delete the Image\nTry Again!');</script>";
    }
// delete from section_enrollment.php
} elseif ($_GET['type'] == 'section_enrol') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `section_enrollment` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:section_enrollment.php');
    // delete from leaving_certificate.php
} elseif ($_GET['type'] == 'leaving_cert') {
    $id = $_GET['id'];
    $sql = "select *from leaving_certificate where id=" . $id;
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    $image_name = $row['l_document'];
    $file = "Images/Leaving-Certificate/" . $image_name;

    $sql1 = "DELETE FROM `leaving_certificate` WHERE `id`=" . $id;
    if (mysqli_query($con, $sql1)) {
        unlink($file);
        echo "<script>alert('successfully  Detail deleted!');top.location='leaving_certificate.php';</script>";
    } else {
        echo "<script>alert('Oops, Could not delete the Image\nTry Again!');</script>";
    }
// delete from eduction_trip.php
} elseif ($_GET['type'] == 'ed_trip') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `eduction_trip` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:eduction_trip.php');
    // delete from news_event.php
} elseif ($_GET['type'] == 'news_enents') {
    $id = $_GET['id'];
    $sql = "select *from news_event where id=" . $id;
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);
    $image_name = $row['ne_image'];
    $file = "Images/News-Evants/" . $image_name;

    $sql1 = "DELETE FROM `news_event` WHERE `id`=" . $id;
    if (mysqli_query($con, $sql1)) {
        unlink($file);
        echo "<script>alert('successfully  Detail deleted!');top.location='news_event.php';</script>";
    } else {
        echo "<script>alert('Oops, Could not delete the Image\nTry Again!');</script>";
    }
    // delete from create_class.php
} elseif ($_GET['type'] == 'create_class') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `create_class` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:create_class.php');
// delete from create_section.php
} elseif ($_GET['type'] == 'create_section') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `create_section` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:create_section.php');
// delete from create_album.php
} elseif ($_GET['type'] == 'create_album') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `album_list` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:create_album.php');
// delete from video_list.php
} elseif ($_GET['type'] == 'video_list') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `video_list` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:video_list.php');
// delete from live_video.php
} elseif ($_GET['type'] == 'live_video') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `live_video` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:live_video.php');
// delete from create_department.php
} elseif ($_GET['type'] == 'create_dep') {
    $id = $_GET['id'];

    $sql1 = "DELETE FROM `department_list` WHERE `id`=" . $id;
    mysqli_query($con, $sql1);
    header('location:create_department.php');
}
?>

