<?php
require('./common/midelware.php');
$page_now = 0;
require('./common/header.php')
?>
<!-- MAIN CONTENT-->
<div class="main-content container">
    <!-- write code thisv -->
    <div class="row products">
        <?php
        for ($i = 0; $i < 20; $i++) {
        ?>
            <div  class="col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="product-item" style="background-image: url('https://www.bkkmenu.com/files/2021/02/Coffeecontext-10.jpg'); padding: 1rem;">
                    <!-- <img class="img-item" src="https://www.bkkmenu.com/files/2021/02/Coffeecontext-10.jpg" alt="" srcset=""> -->
                    <div class="product-name">
                        <h3 style="color: white;">Coffee</h3>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, totam.
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <!-- end your code thisv -->
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<?php require('./common/tail.php') ?>