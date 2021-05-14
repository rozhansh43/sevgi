<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
        <div class="container">
            <div class="row">
                <?php
                if ( is_singular() ) :
                    the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;


                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'my-theme') . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'my-theme') . '</span> <span class="nav-title">%title</span>',
                    )
                );

                if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <?php
                        my_theme_posted_on();
                        my_theme_posted_by();
                        ?>
                    </div><!-- .entry-meta -->
                <?php endif; ?>
            </div>
        </div>


	</header><!-- .entry-header -->

    <div class="single-article-img text-center my-5 mx-5">
        <?php the_post_thumbnail('large'); ?>
    </div>


	<div class="entry-content">
        <div class="container">
            <div class="row text-justify">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'my-theme' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );
                my_theme_entry_footer();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'my-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>

            </div>
        </div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <div class="container">
            <div class="row">

            </div>
        </div>


	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
