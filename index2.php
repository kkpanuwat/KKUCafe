<?php
session_start();
$page_now = 0;
require('./common/header.php');
echo $_SESSION['x'];
exit();
if (empty($_SESSION['x'])) {
?>
    <script>
        window.location.href = './login.php'
    </script>
<?php }
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <!-- write code thisv -->
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>