<?php
$menu_array = array(
    array(
        "icon" => "fas fa-tachometer-alt",
        "title" => "เมนูเครื่องดื่ม",
        "link" => "./product.php",
        "number" => 0
    ),
    array(
        "icon" => "fas fa-table",
        "title" => "ประเภทเครื่องดื่ม",
        "link" => "./productType.php",
        "number" => 1
    ),
    array(
        "icon" => "fas fa-table",
        "title" => "วัตถุดิบ",
        "link" => "./material.php",
        "number" => 2
    ),
    array(
        "icon" => "fas fa-table",
        "title" => "หน่วย / ปริมาตร",
        "link" => "./unit.php",
        "number" => 3
    ),
    array(
        "icon" => "far fa-check-square",
        "title" => "ผู้ใช้งาน",
        "link" => "./user.php",
        "number" => 4
    ),
    array(
        "icon" => "far fa-check-square",
        "title" => "test page",
        "link" => "./test.php",
        "number" => 5
    ),

);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>KKU Cafe</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/index.css" rel="stylesheet" media="all">
    <link href="css/unit.css" rel="stylesheet" media="all">
    <link href="css/product.css" rel="stylesheet" media="all">



</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <div class="text-logo">KKU Cafe</div>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">

                        <?php
                        foreach ($menu_array as $item) {
                        ?>
                            <li class="has-sub <?php echo $page_now == $item['number'] ? 'active' : '' ?>">
                                <a class="js-arrow" href="<?= $item['link'] ?>">
                                    <i class="<?= $item['icon'] ?>"></i><?= $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <div class="text-logo">KKU Cafe</div>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">

                        <?php
                        foreach ($menu_array as $item) {
                        ?>
                            <li class="has-sub <?php echo $page_now == $item['number'] ? 'active' : '' ?>">
                                <a class="js-arrow" href="<?= $item['link'] ?>">
                                    <i class="<?= $item['icon'] ?>"></i><?= $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!-- <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                            <div class="user-image d-flex justify-content-center align-items-center"><?= ucfirst(substr($_SESSION['userinfo']['fname'], 0, 1)) ?></div>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= $_SESSION['userinfo']['fname'] ?></a>
                                        </div>
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
                </div>
            </header>
            <!-- HEADER DESKTOP-->