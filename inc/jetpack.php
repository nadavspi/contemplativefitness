<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Contemplative Fitness
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function contemplative_fitness_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'contemplative_fitness_jetpack_setup' );
