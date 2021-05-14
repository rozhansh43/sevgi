<?php


get_header('simple');
?>

<div class="container back-to-home">
    <div class="row text-center">
        <img src="<?php echo get_template_directory_uri() . '/images/404.png' ?>" alt="">
        <h2>سایت در حال به‌روز‌رسانی می‌باشد</h2>
        <button onclick="location.href='https://bdel.ir';" type="button" class="my-4">بازگشت به صفحه اصلی</button>

    </div>
</div>





		<?php
		get_search_form(
			array(
				'label' => __( '404 not found', 'twentytwenty' ),
			)
		);
		?>



<?php
get_footer();
