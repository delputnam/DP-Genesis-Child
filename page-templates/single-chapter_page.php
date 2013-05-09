<?php
/*
Template Name: WMAA Chapters Single Chapter Page
*/

add_filter('body_class', 'body_class_stripes');
function body_class_stripes($classes) {

	// add 'class-name' to the $classes array
	$classes[] = 'chapters-page-events';

	// return the $classes array
	return $classes;
}

remove_action('genesis_header', 'genesis_do_header');
remove_action( 'genesis_post_title', 'genesis_do_post_title' );
add_filter( 'genesis_post_info', '__dp_return_null' );
add_filter( 'genesis_post_meta', '__dp_return_null' );

remove_action( 'genesis_post_content', 'genesis_do_post_content' );
add_action( 'genesis_post_content', 'chapters_page_content', 1 );

genesis();