<?php
/*
Template Name: WMAA Chapters Single Chapter Page - content-only
*/

//remove_action( 'genesis_post_content', 'genesis_do_post_content' );
//add_action( 'genesis_post_content', 'chapters_page_content', 1 );

global $loop_counter;
$loop_counter = 0;
if ( have_posts() ) : while ( have_posts() ) : the_post();
	//do_action( 'genesis_post_content' );
	chapters_page_content( false );
	$loop_counter++;
endwhile; /** end of one post **/
endif; /** end loop **/
