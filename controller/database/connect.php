<?php
require('./database/configuration.php');

$db = new mysqli($host_name, $user_name, $password, $db_name);
if ($db->connect_errno) {
    echo "error";
    exit;
}
mysqli_set_charset($db, "utf8");
