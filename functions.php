<?php
/**
 * Theme functions.
 *
 * @package the-loop
 */

/**
 * Enqueue styles.
 *
 * @global array $wp_scripts
 */
function the_loop_enqueue() {

	wp_enqueue_style( 'the-loop-style', get_stylesheet_uri(), null, '1.0' );

}

add_action( 'wp_enqueue_scripts', 'the_loop_enqueue' );