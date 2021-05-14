<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('simple'); ?>


	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
<div class="col-md-7 px-5 py-5 mt-5">
                <div class="row">
                    <h1>
                        <?= get_the_title(); ?>
                    </h1>
                    <p>8.000.000 میلیون تومان
                    </p>
                    <p>ابعاد محصول
                    </p>
                    <p>150-250</p>
                </div>
                <div class="row shop-quantity">
                    <button class="favorites"><i class="fas fa-heart"></i></button>
                    <div class="input-group rounded-40 mx-3">
                        <span class="input-group-prepend">
                            <button type="button" class="btn-number" disabled="disabled" data-type="minus"
                                data-field="quant[1]">
                                <span class="fa fa-minus"></span>
                            </button>
                        </span>
                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                        <span class="input-group-append">
                            <button type="button" class=" btn-number" data-type="plus" data-field="quant[1]">
                                <span class="fa fa-plus"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="row add-to-mycart mt-3">
                    <button>
                        <span>
                            افزودن به سبد خرید
                        </span>
                        <i class="fas fa-cart-plus">
                        </i>

                    </button>
                </div>
                <div class="row prod-colors mt-4">
                    <div class="colors">
                        <ul>
                            <li>
                                <label>
                                    <input type="radio" name="color" value="black">
                                    <span class="swatch" style="background-color:#222"></span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="color" value="cream">
                                    <span class="swatch" style="background-color:#aa9b91"></span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="radio" name="color" value="green">
                                    <span class="swatch" style="background-color:#285c3c"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container about-our-product  my-5 rounded-40">
        <div class="row">
                <h2 class="mb-3">
                    توضیحات محصول
                </h2>
                <p class="lineheight-1 p-fontsize">
                    <?= get_the_content(); ?>
                </p>
        </div>
    </div>

    <div class="container comment-section my-5">
        <div class="row pb-3">
            <h3>نظر خود را در مورد محصول بنویسید</h3>
        </div>
        <div class="row prod-comment-box mt-2 rounded-40">
            <div class="row mt-3 mb-3">
                <label for="name">نام شما *</label>
                <input class="rounded-40 mt-3 yourname" type="text" required>
            </div>
            <div class="row mt-3 mb-3">
                <label for="yourcomment">نظر شما *</label>
                <textarea class="rounded-40 mt-3" name="yourcomment" id="" cols="30" rows="10" required></textarea>
            </div>
        </div>
        <div class="row mt-4">
            <!-- Button trigger modal -->
            <button type="button" class="opinion-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ثبت نظر
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <p>
                                نظر شما با موفقیت ثبت گردید
                            </p>
                            <p>
                                پس از بررسی در سایت قرار خواهد گرفت
                            </p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn" data-bs-dismiss="modal"><i
                                    class="far fa-times-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3>محصولات مشابه</h3>
        </div>
        <div class="row">
            <div class="owl-carousel product-carousel owl-theme pt-5">
                <div class="item">

                  
            </div>
        </div>
    </div>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
