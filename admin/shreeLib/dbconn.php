<?php

$db_user = "root";
    $db_password = "";
$db_host = "localhost";
$db_name = "sgan";
$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$con) {
   echo "can not connect to database " . mysql_error();
} else {

}
?>
