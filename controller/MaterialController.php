<?php
session_start();
require('./database/connect.php');

// add material
if ($_POST['_method'] === 'POST') {
    if (empty($_POST['materialName'])) {
        header('Location: ../index.php');
    }
    $materialName = $_POST['materialName'];
    $sql_command = "INSERT INTO material(materialName) values ('$materialName')";
    mysqli_query($db, $sql_command);
    header('Location: ../material.php');
}

if ($_POST['_method'] === 'PUT') {
    if (empty($_POST['materialID']) || empty($_POST['materialName'])) {
        header('Location: ../index.php');
    }
    $materialID = $_POST['materialID'];
    $materialName = $_POST['materialName'];
    $sql_command = "UPDATE material set materialName = '$materialName' where materialID = $materialID";
    mysqli_query($db, $sql_command);
    header('Location: ../material.php');
}

if ($_POST['_method'] === 'DELETE') {
    if (empty($_POST['materialID'])) {
        header('Location: ../index.php');
    }
    $materialID = $_POST['materialID'];
    $sql_command = "DELETE FROM material where materialID = $materialID";
    mysqli_query($db, $sql_command);
    header('Location: ../material.php');
}
