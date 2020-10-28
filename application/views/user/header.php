<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php base_url('asset/user/img/favicon.png'); ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/gijgo.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/slicknav.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/user/css/style.css'); ?>">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <a href="#">
                                    <img src="<?php echo base_url('asset/user/img/logo1.png'); ?>" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                        <li><a href="<?php echo base_url('user/berita'); ?>">Berita</a></li>
                                        <li><a href="<?php echo base_url('user/artikel'); ?>">Artikel</a></li>
                                        <li><a href="<?php echo base_url('user/donasi'); ?>">Donasi</a></li>
                                        <li><a href="<?php echo base_url('user/kalendar'); ?>">Kalendar Kesuburan</a></li>
                                        <li><a href="<?php echo base_url('user/diskusi'); ?>">Diskusi</a></li>
                                        <!-- <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="#">course details</a></li>
                                                <li><a href="#">elements</a></li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    <?php  if (!isset($_SESSION['user'])) : ?>

                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="<?php echo base_url('login'); ?>">
                                        <i class="flaticon-user"></i>
                                        <span>Log In</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endif;

                    if (isset($_SESSION['user'])) : ?>

                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <div class="live_chat_btn">
                                    <a class="boxed_btn_orange" href="<?php echo base_url('user/logout'); ?>">
                                        <i class="fa fa-sign-out"></i>
                                        <span>Log Out</span>
                                    </a>
                                </div>
                            </div>
                        </div>    

                    <?php endif ?>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->