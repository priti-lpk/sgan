<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';

if (!isset($_SESSION)) {
    session_start();
}

$dba = new DBAdapter();
$last_id1 = $dba->getLastID("id", "create_class", "1");
// echo $last_id1;
echo '<select style="width: 400px" name="class_id" id="create_class" class="change_item_dropdown_ajax chosen" required> ';
echo '<option>Select Class</option>';


$data = $dba->getRow("create_class", array("id", "class_name"), "1");

foreach ($data as $subData) {

    echo" <option " . ($subData[0] == $last_id1 ? 'selected' : '') . " value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
}

echo '</select>';
if (isset($_GET['c_id'])) {
    //$last_id1 = $dba->getLastID("id", "create_class", "id=" . $_GET['c_id']);
// echo $last_id1;
    echo '<select style="width: 400px" name="class_id" id="create_class" class="change_item_dropdown_ajax chosen" required> ';
    echo '<option>Select Class</option>';


    $data = $dba->getRow("create_class", array("id", "class_name"), "1");

    foreach ($data as $subData) {

        echo" <option " . ($subData[0] == $_GET['c_id'] ? 'selected' : '') . " value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
    }

    echo '</select>';
}
?>

<script type="text/javascript">

    $(document).ready(function () {
        $('.chosen').select2();
    });

</script>