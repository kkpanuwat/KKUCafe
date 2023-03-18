<?php
session_start();
require('./database/connect.php');

// add unit
if ($_POST['_method'] === 'POST') {
    if (empty($_POST['unitName'])) {
        header('Location: ../index.php');
    }
    $unitName = $_POST['unitName'];
    $sql_command = "INSERT INTO unit(unitName) values ('$unitName')";
    mysqli_query($db, $sql_command);
    header('Location: ../unit.php');
}

if ($_POST['_method'] === 'PUT') {
    if (empty($_POST['unitID']) || empty($_POST['unitName'])) {
        header('Location: ../index.php');
    }
    $unitID = $_POST['unitID'];
    $unitName = $_POST['unitName'];
    $sql_command = "UPDATE unit set unitName = '$unitName' where unitID = $unitID";
    mysqli_query($db, $sql_command);
    header('Location: ../unit.php');
}

if ($_POST['_method'] === 'DELETE') {
    if (empty($_POST['unitID'])) {
        header('Location: ../index.php');
    }
    $unitID = $_POST['unitID'];
    $sql_command = "DELETE FROM unit where unitID = $unitID";
    mysqli_query($db, $sql_command);
    header('Location: ../unit.php');
}
