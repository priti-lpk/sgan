<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include_once '../admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();
    $field = array("*");
    $data = $dba->getRow("teaching_staff", $field, "dep_id=" . $id);
    $k = 1;
    $count = count($data);
    if ($count >= 1) {
        foreach ($data as $subData) {
            echo "<tr>";
            echo "<td scope='row'>" . $k++ . "</td>";
            echo "<td>" . $subData[2] . "</td>";
            echo "<td>" . $subData[3] . "</td>";
            echo "<td><img src='admin/Images/Teaching-Staff/" . $subData[4] . "' height='50px' width='50px'/>";
            echo "</tr>";
        }
    }
} elseif (isset($_GET['c_id'])) {
    $id = $_GET['c_id'];
    include_once '../admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();
    $field = array("*");
    $data = $dba->getRow("create_section", $field, "class_id=" . $id . " order by id asc");
    $count = count($data);
    $k = 1;
    $section_id = "";
    if ($count >= 1) {

        foreach ($data as $subData) {

            echo '<input id = "tab' . $subData[0] . '" name = "tab' . $k . '" type = "radio" class="tab" value=' . $subData[0] . ' onclick="getValue(this.id)">';
            echo '<label  for = "tab' . $subData[0] . '">' . $subData[1] . '</label>';$k++;
        }
        echo '<section class="content" id = "content1" class = "table-responsive"></section>';
    } else {
        ?>
        <table class = "table table-responsive">
            <thead>
                <tr>
                    <th scope = "col">Present Student</th>
                    <th scope = "col">Left Student</th>
                    <th scope = "col">No. of Student</th>
                    <th scope = "col">Enrolled</th>
                </tr>
            </thead>
            <tbody><?php
                $field = array("*");
                $data = $dba->getRow("section_enrollment", $field, "class_id=" . $id);
                $k = 1;
				 $count = count($data);
                if ($count >= 1) {
                foreach ($data as $subData) {
                    echo "<tr>";
                    echo "<td>" . $subData[3] . "</td>";
                    echo "<td>" . $subData[4] . "</td>";
                    echo "<td>" . ($subData[3] + $subData[4]) . "</td>";
                    echo "<td>" . $subData[5] . "</td>";
                    echo "</tr>";
                }
				}
                ?>
            </tbody>
        </table>

        <?php
    }
} elseif (isset($_GET['gr_value'])) {
    $id = $_GET['gr_value'];
    include_once '../admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();

    $field = array("*");
    $data = $dba->getRow("leaving_certificate", $field, "enrollment_no='" . $id . "'");
    foreach ($data as $subData) {
        echo "admin/Images/Leaving-Certificate/" . $subData[4];
//        echo ' <embed src="admin/Images/Leaving-Certificate/"' . $subData[4] . '" type="application/pdf" width="700px;" height="500px"/>';
    }
} elseif (isset($_GET['s_id'])) {
    $id = $_GET['s_id'];
    include_once '../admin/shreeLib/DBAdapter.php';
    $dba = new DBAdapter();
    ?>
    <table class = "table table-responsive">
        <thead>
            <tr>
                <th scope = "col">Present Student</th>
                <th scope = "col">Left Student</th>
                <th scope = "col">No. of Student</th>
                <th scope = "col">Enrolled</th>
            </tr>
        </thead>
        <tbody><?php
            $field = array("*");
            $data = $dba->getRow("section_enrollment", $field, "section_id=" . $id);
            $k = 1;
            $count1 = count($data);
            if ($count1 >= 1) {
                foreach ($data as $subData) {
                    echo "<tr>";
                    echo "<td>" . $subData[3] . "</td>";
                    echo "<td>" . $subData[4] . "</td>";
                    echo "<td>" . ($subData[3] + $subData[4]) . "</td>";
                    echo "<td>" . $subData[5] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
<?php }
?>

