<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>
    <section id="main-title" class="col-md-10">
        <div class="row bg-kerem-tire rounded-40 d-flex align-items-center p-5 my-4 mx-0">
            <div class="col-md-9 text-center text-white">
                <h1>سرویس خواب سِوگی</h1>
            </div>
            <div class="col-md-3 text-center">
                <img src="<?php echo get_template_directory_uri() . '/images/logo/sevgi150.png' ?>"  alt="" class="img-fluid">
            </div>
        </div>
        <div class="row d-flex align-items-center gallery">
            <div class="col-md-3 text-center"><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/home.picture1/01/IMG_1.png' ?>" alt=""
                                                               class="img-fluid mb-2 rounded-40"></a></div>

            <div class="col-md-3 text-center"><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/home.picture1/01/IMG_2.png' ?>" alt=""
                                                               class="img-fluid mb-2 rounded-40"></a></div>

            <div class="col-md-3 text-center"><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/home.picture1/01/IMG_3.png' ?>" alt=""
                                                               class="img-fluid mb-2 rounded-40"></a></div>

            <div class="col-md-3 text-center"><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/home.picture1/01/IMG_4.png' ?>" alt=""
                                                               class="img-fluid mb-2 rounded-40"></a></div>

        </div>
    </section>
    </div>
    </section>

    <!-- End NavBar -->

<?php
/* Start the Loop */
while ( have_posts() ) :
    the_post();
    get_template_part( 'template-parts/content/content-page' );

    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
endwhile; // End of the loop.

get_footer();
