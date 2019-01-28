<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', false, '4.1.3', null);
		wp_enqueue_style('bootstrap');

		wp_register_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false, '1.8.1', null);

		wp_enqueue_style('slick-css');

		wp_register_style('slick-theme-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', false, '1.8.1', null);

		wp_enqueue_style('slick-theme-css');



		wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', false, '5.4.1', null);
		wp_enqueue_style('fontawesome5');

		wp_register_style('b4st', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
		wp_enqueue_style('b4st');

		wp_register_style('index', get_template_directory_uri() . '/theme/css/index.css', false, null);
		wp_enqueue_style('index');

		wp_register_style('header', get_template_directory_uri() . '/theme/css/header.css', false, null);
		wp_enqueue_style('header');

		// Scripts

		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, '1.14.3', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js', false, '4.1.3', true);
		wp_enqueue_script('bootstrap');

		wp_register_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', false, '1.8.1', true);
		wp_enqueue_script('slick-js');


		wp_register_script('b4st', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('b4st');

		wp_register_script('slider-js', get_template_directory_uri() . '/theme/js/slider.js', false, null, true);
		wp_enqueue_script('slider-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
