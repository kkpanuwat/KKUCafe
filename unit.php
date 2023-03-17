<?php
require('./common/midelware.php');
$page_now = 2;
require('./common/header.php');
?>
<!-- MAIN CONTENT-->
<div class="main-content container">
    <!-- write code thisv -->
    <!-- btn add unit -->
    <div class="section__content section__content">

        <div class="header-wrap">
            <div class="header-button">
                <div class="account-wrap">
                    <div class="btn-add-unit clearfix js-item-menu">
                        <button class="btn btn-primary">เพิ่มหน่วยปริมาณ</button>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image d-flex align-items-center justify-content-center">
                                    <div class="user-image d-flex justify-content-center align-items-center user-image-popup"><?= ucfirst(substr($_SESSION['userinfo']['fname'], 0, 1)) ?></div>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#"><?= $_SESSION['userinfo']['fname'] ?> <?= $_SESSION['userinfo']['lname'] ?></a>
                                    </h5>
                                    <span class="email"><?= $_SESSION['userinfo']['userID'] ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="./controller/AuthController.php">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        // $sql_command = "SELECT * from unit";
        // $sql_query = mysqli_query($db,$sql_command);
    ?>
    <div class="row m-t-30">
        <div class="col-md-12">
            <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                <table class="table table-borderless table-data3">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อหน่วย</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2018-09-29 05:57</td>
                            <td>Mobile</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE-->
        </div>
    </div>
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>