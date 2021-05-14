<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

get_header('');
?>

    <section  class="col-md-10 shop-hedear-img">
        <img src="<?php echo get_template_directory_uri() .'/images/images/IMG_8449.png'?>" alt="" >
    </section>
    </div>
    </section>
   
     
    <div class="container article-archive">

        <div class="row">

<?php

$args = array('posts_per_page' => 8, 'category' => '6', 'orderby' => 'post_date', 'order'=> 'DESC', 'post_type' => 'post', 'post_status'=> 'publish', 'suppress_filters' => true
);
$myposts = query_posts($args);

foreach ($myposts as $post) :
    ?>
            <div class="col-md-3">

                    <a href="<?php echo get_the_permalink();  ?>" title="more">

                        <div class="card">
                            <div class="card-img-top">
                                <?= get_the_post_thumbnail($post_id,'medium');?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= get_the_title();?></h5>
                                <p class="card-text">
                                    <?= get_the_content();?>
                                </p>
                                <p class="card-text"><small class="text-muted">تاریخ انتشار:<?= get_the_date();?></small></p>
                            </div>
                        </div>

                    </a>

            </div>
<?php endforeach; ?>
        </div>
</div>


        <?php
        while ( have_posts() ) :
            the_post();



            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    

<?php

get_footer();
