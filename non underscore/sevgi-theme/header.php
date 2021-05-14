<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>صفحه اصلی</title>
    <?php
    wp_head();
    ?>
    <!--<link rel="stylesheet" href="css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="style.css">-->
    <!-- OWL Slider -->
    <!--<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">-->
</head>
<body <?php body_class(); ?>>
<!-- Desktop Header -->

<header class="container-fluid responsive-menu mb-5 d-block  d-md-none">

        <div class="row">

            <nav>

                <div class="col-4">

                    <div class="openMenu"><i class="fa fa-bars"></i></div>

                </div>

                <div class="col-4 header-responsive-logo">

                    <div class="logo"><img src="<?php echo get_template_directory_uri() . '/images/logo.png2.png' ?>" alt=""></div>

                    <ul class="mainMenu">

                        <li><a href="#">خانه</a></li>

                        <li><a href="#">محصولات</a></li>

                        <li><a href="#">گالری تصاویر</a></li>

                        <li><a href="#">جشنواره ها</a></li>

                        <li><a href="#">مقالات</a></li>

                        <li><a href="#">درباره ما</a></li>

                        <li><a href="#">تماس با ما</a></li>

                        <div class="closeMenu"><i class="fa fa-times"></i></div>



                    </ul>

                </div>

                <div class="col-4 register-header">

                    <div class="col-md-1 d-flex justify-content-center">

                        <a href="#" class="Circle bg-kerem d-flex justify-content-center align-items-center">

                            <i class="fas fa-user fa-lg"></i>

                        </a>

                    </div>

                </div>

            </nav>

        </div>

    <div class="row py-3 brown-border">

        <div class="col-8">

            <form action="" class="header-search">

                <div class="input-group pt-2 pb-2">

                    <div class="input-group-prepend mx-2">

                        <button class="btn" type="button" id="button-addon1"><i class="far fa-search fa-lg"></i>

                        </button>

                    </div>

                    <input type="text" class="form-control" placeholder="جستجوی محصولات"

                           aria-label="Example text with button addon" aria-describedby="button-addon1">

                </div>

            </form>

        </div>

        <div class="col-2">

            <div class=" d-flex justify-content-center">

                <a href="#" class="Circle bg-olive d-flex justify-content-center align-items-center">

                    <i class="fas fa-shopping-cart fa-lg"></i>

                </a>

            </div>



        </div>

        <div class="col-2">

            <div class="d-flex justify-content-center">

                <a href="#" class="Circle bg-kerem d-flex justify-content-center align-items-center">

                    <i class="fal fa-heart fa-lg"></i>

                </a>

            </div>

        </div>



    </div>

</header>

<header class="container mb-5 d-none d-md-block">
    <div class="row mt-4 d-flex align-items-center">
        <div class="col-md-2 d-flex justify-content-center" id="logo">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() . '/images/logo/sevgi150.png' ?>" alt="">
            </a>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
            <a href="#" class="Circle bg-olive d-flex justify-content-center align-items-center">
                <i class="fas fa-home fa-lg"></i>
            </a>
        </div>
        <div class="col-md-6 px-5">
            <form action="" class="header-search">
                <div class="input-group pt-2 pb-2">
                    <div class="input-group-prepend mx-2">
                        <button class="btn" type="button" id="button-addon1"><i class="far fa-search fa-lg"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="جستجوی محصولات"
                           aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
            </form>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
            <a href="#" class="Circle bg-olive d-flex justify-content-center align-items-center">
                <i class="fas fa-shopping-cart fa-lg"></i>
            </a>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
            <a href="#" class="Circle bg-kerem d-flex justify-content-center align-items-center">
                <i class="fal fa-heart fa-lg"></i>
            </a>
        </div>
        <div class="col-md-1 d-flex justify-content-center">
            <a href="#" class="Circle bg-kerem d-flex justify-content-center align-items-center">
                <i class="fas fa-user fa-lg"></i>
            </a>
        </div>
    </div>
</header>
<!-- End Desktop Header -->

<!-- NavBar -->
<section class="container mb-5">
    <div class="row">
        <nav class="col-md-2 menu-right d-none d-md-block">
            <?php
            echo str_replace( '<li class="', '<li class="rounded-40',
                wp_nav_menu(
                    array(
                        'menu'    => 'Main Menu',
                        'theme_location'    => 'main_menu',
                        'container'         => false,
                        'items_wrap'        => '<ul>%3$s</ul>',
                        'depth'             => 1,
                        'echo'              => false
                    )
                )
            );
            ?>
        </nav>
