
<?php
ob_start();
include '../shreeLib/DBAdapter.php';
include_once '../shreeLib/dbconn.php';
include_once '../shreeLib/Controls.php';
if ($_POST['action'] == 'add') {

    $dba = new DBAdapter();

    unset($_POST['action']);
  
    $result = $dba->setData("create_class", $_POST);

    $responce = array();

    if ($result) {

        $responce = array("status" => TRUE, "msg" => "Operation Successful!");
        
    } else {

        $responce = array("status" => FALSE, "msg" => "Oops Operation Fail");
    }

    echo json_encode($responce);

    unset($_POST);
}
?>

