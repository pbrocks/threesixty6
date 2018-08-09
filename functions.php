<?php
/**
 * Child theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage parent-strap
 * @since 1.0
 */


/**
 * As a child theme, let's make sure we enqueue scripts and styles from the parent theme.
 */
function enqueue_parent_theme_style() {
	wp_register_style( 'parent-style', esc_url( trailingslashit( get_template_directory_uri() ) . 'style.css' ) );
	wp_enqueue_style( 'parent-style' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );

