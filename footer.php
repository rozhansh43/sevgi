<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my_theme
 */

?>

<footer class="container-fluid pt-5 text-white">
    <div class="row">
        <div class="col-md-4 py-3 py-sm-0 d-flex justify-content-center align-items-center">
            <img src="<?php echo get_template_directory_uri() . '/images/logo/namad.png' ?>" class="img-fluid rounded" alt="">

            <img src="<?php echo get_template_directory_uri() . '/images/logo/rasaneh.png' ?>" class="img-fluid rounded" alt="">
        </div>
        <div class="col-md-4 py-3 py-sm-0 d-flex justify-content-center align-items-center flex-column">
            <img src="<?php echo get_template_directory_uri() . '/images/logo/sevgi150.png' ?>" class="img-fluid rounded-top" alt="">

            <div class="social-logo my-4 d-flex justify-content-around w-100">
                <a href="#" class="text-white"><i class="far fa-envelope fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-whatsapp fa-2x"></i></a>
                <a href="#" class="text-white"><i class="fab fa-telegram-plane fa-2x"></i></a>
            </div>
        </div>
        <div class="col-md-4 py-3 py-sm-0 d-flex justify-content-center align-items-center flex-column">
            <div class="call m-2"><i class="fas fa-phone fa-lg"></i> 09129347641</div>
            <div class="call m-2"><i class="fas fa-phone fa-lg"></i> 09122230752</div>
            <div class="call m-2"><i class="fas fa-phone-office fa-lg"></i> 02176213567</div>
            <div class="call m-2"><i class="fas fa-phone-office fa-lg"></i> 02176219195</div>
        </div>
    </div>
    <div class="copyright p-2 d-flex justify-content-center align-items-center rounded-top">
        <p class="m-0">
            © 2019 Copyright ©
            کلیه حقوق برای «سوگی» محفوظ است. دیجیتال مارکتینگ جامع و تخصصی توسط:
            <a href="#">
                نوکارتو
            </a>
        </p>
    </div>
</footer>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'my-theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'my-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'my-theme' ), 'my-theme', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
