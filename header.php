<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sevgi</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

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

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'my-theme' ); ?></a>

	<header id="masthead" class="site-header">

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

