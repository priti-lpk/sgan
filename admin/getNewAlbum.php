<?php
ob_start();
require_once "shreeLib/session_info.php";
include_once 'shreeLib/DBAdapter.php';

if (!isset($_SESSION)) {
    session_start();
}

$dba = new DBAdapter();
$last_id1 = $dba->getLastID("id", "album_list", "1");
// echo $last_id1;
echo '<select style="width: 400px" name="album_id" id="album_list" class="change_item_dropdown_ajax chosen" required> ';
echo '<option>Select Album</option>';


$data = $dba->getRow("album_list", array("id", "album_name"), "1");

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