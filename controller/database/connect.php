<?php
$db = new mysqli('localhost', 'root', '', 'kkucafe');
if ($db->connect_errno) {
    echo "error";
    exit;
}
mysqli_set_charset($db, "utf8");
