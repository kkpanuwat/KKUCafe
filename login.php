<?php
$page_now = 0;
require('./common/midelware.php');
require('./common/header.php')
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <!-- write code thisv -->
    <form action="./controller/LoginController.php" method="post">
        <input type="text" name="username">
        <br />
        <input type="password" name="password" id="">
        <button type="submit">Login</button>
    </form>

    <div class="login-fail">
        <?php
        if (isset($_SESSION['loginfail'])) echo 'Username or Password is incorrect';
        ?>
    </div>
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>