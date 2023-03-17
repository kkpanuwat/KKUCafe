<?php
session_start();
require('./database/connect.php');

// add unit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['unitName'])) {
        header('Location: ../index.php');
    }
    $unitName = $_POST['unitName'];
    $sql_command = "INSERT INTO unit(unitName) values ('$unitName')";
    mysqli_query($db, $sql_command);
    header('Location: ../unit.php');
}
