<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';

$dba = new DBAdapter();
$data = $dba->getRow("create_section", array("id", "section_name"), "class_id='" . $_GET['class_id'] . "'");

echo ' <select name="section_id" id="create_section" class = "form-control chosen" required> ';
echo '<option>Select Section</option>';

foreach ($data as $subData) {

    echo "<option value=" . $subData[0] . ">" . $subData[1] . "</option>";
}

echo '</select>';
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.chosen').select2();
    });
</script>

