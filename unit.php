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
                            <form action="./controller/UnitController.php" method="post">
                                <div class="add-unit-blog">
                                    <div class="text-title">
                                        ชื่อหน่วยที่ต้องการเพิ่ม
                                    </div>
                                    <hr />
                                    <input type="text" class="form-control" name="unitName" placeholder="ml:มิลลิกรัม" required />
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex justify-content-end">
                                            <button type="reset" class="btn btn-danger btn-add-unit-dropdown">ลบข้อมูล</button>
                                        </div>
                                        <div class="col-6 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success btn-add-unit-dropdown">บันทึกข้อมูล</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $sql_command = "SELECT * from unit";
    $sql_query = mysqli_query($db, $sql_command);
    // loop unit element if unit > 0
    if (mysqli_num_rows($sql_query) > 0) {
    ?>
        <!-- DATA TABLE-->
        <div class="row m-t-30">
            <div class="col-md-12">
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                            <tr>
                                <th>ลำดับ</th>
                                <th>ชื่อหน่วย</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $index = 1;
                            while ($row = mysqli_fetch_array($sql_query)) {
                            ?>
                                <tr>
                                    <td><?= $index ?></td>
                                    <td><?= $row['unitName'] ?></td>
                                </tr>
                            <?php
                                $index++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END DATA TABLE-->
    <?php
    } else {
    ?>
        <div class="empty-icon d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="10rem" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
            </svg>
        </div>
        <h3 class="text-empty">ไม่มีข้อมูล</h3>


    <?php
    }
    ?>
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>