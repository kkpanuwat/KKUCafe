<?php
    session_start();
    $page_now = 2;
    require('./common/header.php')
?>
<!-- MAIN CONTENT-->
<div class="main-content">
    <?php echo $_SESSION['x']?>
    <!-- write code thisv -->
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>