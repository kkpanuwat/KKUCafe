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
                                    <input type="hidden" class="form-control" name="_method" value='POST' />
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
                                <th>การจัดการ</th>
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
                                    <td> <!-- Modal -->
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter<?= $row['unitID'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenterDelete<?= $row['unitID'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                            </svg>
                                        </button>
                                        <!-- edit modal -->
                                        <div class="modal fade" id="exampleModalCenter<?= $row['unitID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="./controller/UnitController.php" method="post">
                                                <input type="hidden" name="unitID" value="<?= $row['unitID'] ?>">
                                                <input type="hidden" name="_method" value="PUT">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">แก้ไขข้อมูล</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" class="form-control" name="unitName" placeholder="ml:มิลลิกรัม" value="<?= $row['unitName'] ?>" required />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="reset" class="btn btn-warning" data-dismiss="modal">ลบข้อมูล</button>
                                                            <button type="submit" class="btn btn-primary">บันทึกการแก้ไข</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- delete modal -->
                                        <div class="modal fade" id="exampleModalCenterDelete<?= $row['unitID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <form action="./controller/UnitController.php" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="unitID" value="<?= $row['unitID'] ?>">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">ลบข้อมูล</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <input type="text" class="form-control" name="unitName" placeholder="ml:มิลลิกรัม" value="<?= $row['unitName'] ?>" required readonly />
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal">ปิดหน้าต่าง</button>
                                                            <button type="submit" class="btn btn-danger">ลบข้อมูล</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Button trigger modal -->



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
        <!-- Button trigger modal -->

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