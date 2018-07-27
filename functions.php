<?php
/**
 * On Sale This Weekend - GeneratePress child theme functions and definitions.
 *
 * Add your custom PHP in this file. 
 * Only edit this file if you have direct access to it on your server (to fix errors if they happen).
 */

function cgvt_enqueue_scripts() {
	if ( is_rtl() ) {
		wp_enqueue_style( 'generatepress-rtl', trailingslashit( get_template_directory_uri() ) . 'rtl.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'cgvt_enqueue_scripts', 100 );

/**
 * Enqueue Font Awesome.
 */
function cgvt_load_font_awesome() {
	wp_enqueue_style( 'font-awesome', '//pro.fontawesome.com/releases/v5.2.0/css/all.css', array(), '5.1.0' );
}
add_action( 'wp_enqueue_scripts', 'cgvt_load_font_awesome' );