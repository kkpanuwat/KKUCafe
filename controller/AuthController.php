<?php
session_start();
require('./database/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_command = "SELECT * From user where userID = '$username' and password = '$password'";
    $sql_query = mysqli_query($db, $sql_command);
    if (mysqli_num_rows($sql_query) > 0) {
        unset($_SESSION['loginfail']);
        while ($item = mysqli_fetch_assoc($sql_query)) {
            unset($item['password']);
            $_SESSION['loginfail'] = true;
            foreach ($item as $key => $value) {
                $_SESSION['userinfo'][$key] = $value;
            }
            header('Location: ../dashboard.php');
        }
    } else {
        $_SESSION['loginfail'] = true;
        header('Location: ../login.php');
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_destroy();
    header('Location: ../index.php');
}
