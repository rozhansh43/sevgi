<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
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
<div>
    <?php
    $args = array( 'post_type' => 'product', 'posts_per_page' => 80, 'product_cat' => 'profiler', 'orderby' => 'rand' );

    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        <div class="dvThumb col-xs-4 col-sm-3 col-md-3 profiler-select profiler<?php echo the_title(); ?>" data-profile="<?php echo $loop->post->ID; ?>">
            <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($loop->post->ID)); ?>
            <?php if($featured_image) { ?>
                <img src="<?php $featured_image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>">
            <?php } ?>
            <p><?php the_title(); ?></p>
            <span class="price"><?php echo $product->get_price_html(); ?></span>
        </div>
    <?php endwhile; ?>
</div>


    <!-- Newest & TopSales product -->

    <section class="product-slider container-fluid bg-kerem-tire">
    <div class="container mb-4">
        <div class="row pt-5">
            <h2>جدیدترین‌ها</h2>
            <hr>
            <div class="container owl-carousel second-carousel owl-theme">



                <?php

                $args = array('posts_per_page'=> 3, 'category' => '6', 'orderby' => 'post_date', 'order' => 'DESC','post_type'=> 'product', 'post_status'=> 'publish', 'suppress_filters' => true
                );
                $myposts = query_posts($args);

                foreach ($myposts as $post) :
                    ?>
                    <div class="item rounded-40" style="background-image: url('/wp-content/themes/mytheme/images/home.picture1/New/IMG_8449.png')">
                        <div class="slider-item rounded-40">

                            <a href="<?php echo get_the_permalink();  ?>" title="more">

                                <div class="homepage-prod-images ">
                                    <?= get_the_post_thumbnail($post_id,'medium');?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= get_the_title();?></h5>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>

        </div>
    </div>
    <div class="container pb-5">
        <div class="row pt-5">
            <h2>اخبار و مقالات</h2>
            <hr>
            <div class="container owl-carousel second-carousel owl-theme">
                <?php
                $args = array('posts_per_page'=> 3, 'offset'=> 0, 'category'=> '6', 'orderby'=> 'post_date', 'order'=> 'DESC', 'post_type'=> 'post', 'post_status'=> 'publish', 'suppress_filters' => true);

                $myposts = query_posts($args);

                foreach ($myposts as $post) :

                    ?>
                    <div class="item rounded-40" style="background-image: url('/wp-content/themes/mytheme/images/home.picture1/New/IMG_8449.png')">
                        <div class="slider-item rounded-40">

                            <a href="<?php echo get_the_permalink();  ?>" title="more">

                                <div class="homepage-prod-images ">
                                    <?= get_the_post_thumbnail($post_id,'medium');?>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= get_the_title();?></h5>
                                    </div>

                                </div>

                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>



            </div>

        </div>
    </div>
</section>
<!-- End Newest & TopSales product -->

<div class="container custom-product my-5 bg-white rounded-40 shadow-10 p-5 text-center">
    <div class="row bg-yellow-c rounded-40 shadow-12 mb-4 p-5">
        <div class="col-md-9 d-flex justify-content-center align-items-center my-4"><h3>انتخاب هر نوع رنگ چوب</h3></div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri() . '/images/images/IMG_08.jpg'?>" class="img-thumbnail rounded-circle" alt=""></div>
    </div>

    <div class="row bg-yellow-c rounded-40 shadow-12 mb-4 p-5">
        <div class="col-md-9 d-flex justify-content-center align-items-center my-4"><h3>انتخاب طرح و رنگ‌های متفاوت
            پارچه</h3></div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri() . '/images/images/IMG_08.jpg' ?>" class="img-thumbnail rounded-circle" alt=""></div>

    </div>
    <div class="row bg-yellow-c rounded-40 shadow-12 p-5">
        <div class="col-md-9 d-flex justify-content-center align-items-center my-4"><h3>منبت‌کاری و کار دست بودن سرویس
            خواب‌ها</h3></div>
        <div class="col-md-3"><img src="<?php echo get_template_directory_uri() . '/images/images/IMG_08.jpg'?>" class="img-thumbnail rounded-circle" alt=""></div>
    </div>
</div>

<div class="container taxi-reserve my-5 bg-white rounded-40 shadow-10 p-5">
    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center flex-column">
            <h4 class="my-5 text-center">به صورت رایگـــان از کـارخــانه محصولات سِوگی دیدن کنید</h4>
            <a name="" id="" class="btn btn-primary rounded-30 my-5" href="#" role="button">درخواست تاکسی اینترنتی</a>
        </div>
        <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/taxi.png'?>" class="img-fluid rounded-top" alt="">

        </div>
    </div>
</div>

<div class="container d-flex justify-content-center position-relative">
    <img src="<?php echo get_template_directory_uri() . '/images/home.picture1/Untitled-2.jpg4.png'?>" class="img-fluid rounded-top" alt="">

    <a name="" id="" class="btn btn-primary rounded-30 my-5 position-absolute bottom-0 end-50" href="#" role="button">تخفیفات</a>
</div>

<div class="container faq my-5 bg-white rounded-40 shadow-10 p-5">
    <h2>سوالات متداول</h2>
    <hr>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                    لورم ایپسوم متن ساختگی
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                    ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                    تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                    دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </div>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();
