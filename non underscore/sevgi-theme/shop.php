<?php /* Template Name: shop */ ?>
<?php
get_header();
?>
<section  class="col-md-10 shop-hedear-img">
            <img src="<?php echo get_template_directory_uri() .'/images/images/IMG_8449.png'?>" alt="" >
</section>
</div>
</section>

<!-- End NavBar -->
<section class="product-slider container-fluid bg-kerem-tire">
    <div class="container mb-4">
        <div class="row pt-5">
            <h2>جدیدترین‌ها</h2>
            <hr>
            <div class="owl-carousel owl-theme col-md-12">
                <div class="item rounded-40" style="background-image: url(http://bdel.ir/wp-content/uploads/2021/05/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="<?php echo get_the_permalink();  ?>">
                                    <?php
                                    $args = array(
                                        'posts_per_page'   => 1,
                                        'offset'           => 0,
                                        'category'         => '6',
                                        'category_name'    => '',
                                        'orderby'          => 'post_date',
                                        'order'            => 'DESC',
                                        'include'          => '',
                                        'exclude'          => '',
                                        'meta_key'         => '',
                                        'meta_value'       => '',
                                        'post_type'        => 'product',
                                        'post_mime_type'   => '',
                                        'post_parent'      => '',
                                        'post_status'      => 'publish',
                                        'suppress_filters' => true
                                    );




                                    $myposts = query_posts($args);
                                    foreach ($myposts as $post) :
                                    ?>

                                </a>


                            </div>

                                <a href="<?php echo get_the_permalink();  ?>" title="more">
                                    <div>
                                        <?= get_the_post_thumbnail($post_id,'medium'); ?>
                                        <h3>
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                            <a href="#">
                                                <i class="fas fa-shopping-cart"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fal fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>

                                </a>


                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
    </div>
    <div class="container pb-5">
        <div class="row pt-5">
            <h2>پرفروش‌ترین‌ها</h2>
            <hr>
            <div class="owl-carousel owl-theme col-md-12">
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="item rounded-40" style="background-image: url(images/home.picture1/New/IMG_8449.png)">
                    <div class="slider-item rounded-40">
                        <div class="slider-item-details">
                            <div class="slider-item-img rounded-40">
                                <a href="#01">
                                    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/New/IMG_8449.png' ?>" alt="" >
                                </a>
                                <div class="d-flex justify-content-center align-items-center flex-column flex-wrap text-white">
                                    <a href="#">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <a href="#01">
                                <h3>آینه و کنسول</h3>
                            </a>
                            <a href="#01">
                                <span>1,500,000 تومان</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer()
?>
