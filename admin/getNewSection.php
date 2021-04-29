<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';

    if (!isset($_SESSION)) {
        session_start();
    }
   
    $dba = new DBAdapter();
    $last_id1 = $dba->getLastID("id", "create_Section", "1");
   // echo $last_id1;
    echo '<select style="width: 400px" name="section_id" id="create_section" class="change_item_dropdown_ajax chosen" required> ';
    echo '<option>Select Section</option>';
   
   
    $data = $dba->getRow("create_section", array("id", "section_name"), "1");

    foreach ($data as $subData) {

        echo" <option " . ($subData[0] == $last_id1 ? 'selected' : '') . " value='" . $subData[0] . "'>" . $subData[1] . "</option> ";
    }

    echo '</select>';
?>

<script type="text/javascript">
$(document).ready(function () {
        $('.chosen').select2();
    });

</script>