<?php
session_start();
require('./database/connect.php');

// add productType
if ($_POST['_method'] === 'POST') {
    if (empty($_POST['productTypeName'])) {
        header('Location: ../index.php');
    }
    $productTypeName = $_POST['productTypeName'];
    $sql_command = "INSERT INTO productType(productTypeName) values ('$productTypeName')";
    mysqli_query($db, $sql_command);
    header('Location: ../productType.php');
}

if ($_POST['_method'] === 'PUT') {
    if (empty($_POST['productTypeID']) || empty($_POST['productTypeName'])) {
        header('Location: ../index.php');
    }
    $productTypeID = $_POST['productTypeID'];
    $productTypeName = $_POST['productTypeName'];
    $sql_command = "UPDATE productType set productTypeName = '$productTypeName' where productTypeID = $productTypeID";
    mysqli_query($db, $sql_command);
    header('Location: ../productType.php');
}

if ($_POST['_method'] === 'DELETE') {
    if (empty($_POST['productTypeID'])) {
        header('Location: ../index.php');
    }
    $productTypeID = $_POST['productTypeID'];
    $sql_command = "DELETE FROM productType where productTypeID = $productTypeID";
    mysqli_query($db, $sql_command);
    header('Location: ../productType.php');
}
