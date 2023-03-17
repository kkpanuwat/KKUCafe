<?php
require('./common/midelware.php');
$page_now = 0;
require('./common/header.php');
if (empty($_SESSION['userinfo'])) {
?>
    <script>
        window.location.href = './login.php'
    </script>
<?php }
?>

<!-- MAIN CONTENT-->
<div class="main-content container">
    <!-- write code thisv -->
    Hi!!! <?= $_SESSION['userinfo']['fname']?>
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>