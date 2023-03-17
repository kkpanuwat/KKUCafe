<?php

require('../common/midelware.php');
require('./database/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql_command = "SELECT * From user where userID = '$username' and password = '$password'";
    $sql_query = mysqli_query($db, $sql_command);
    if (mysqli_num_rows($sql_query) > 0) {
        unset($_SESSION['loginfail']);
        $_SESSION['x'] = 'success';
        // while ($item = mysqli_fetch_assoc($sql_query)) {
        //     unset($item['password']);
        //     $_SESSION['loginfail'] = 'huhiuhiuh';
        //     // echo $_SESSION['userinfo'];

        //     header('Location: ../index.php');
        // }
        header('Location: ../index.php');
    } else {
        $_SESSION['loginfail'] = true;
        header('Location: ../login.php');
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    header('Location: ../index.php');
}
