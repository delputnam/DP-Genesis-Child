<?php
/*
Template Name: WMAA Chapters Map Page
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

remove_action( 'genesis_post_content', 'genesis_do_post_content' );
add_action( 'genesis_post_content', 'chapters_do_map_content', 1, 0 );
function chapters_do_map_content( $show = true ) { ?>

<div class="chapters-sub-page<?php echo ($show) ? ' chapters-expanded' : ''; ?>" id="chapters-sub-page-map">
	<div class="container">

		<div class="chapters-header-small">
			<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
			<div class="chapters-header-title">
				<h2>For wherever you roam...</h2>
				<h1 class="chapters-header-script">in America</h1>
			</div>
		</div>

		<?php the_content(); ?>

	</div>
</div>

<?php }


if ( isset($_REQUEST['content-only'] ) ) {
	global $loop_counter;
	$loop_counter = 0;
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		chapters_do_map_content( false );
		$loop_counter++;
	endwhile; /** end of one post **/
	endif; /** end loop **/
} else {
	genesis();
}
