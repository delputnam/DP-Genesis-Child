<?php
/*
Template Name: WMAA Chapters Events Page
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
add_action( 'genesis_post_content', 'chapters_do_home_content', 1 );
function chapters_do_home_content() { ?>

<div class="chapters-sub-page chapters-expanded" id="chapters-sub-page-nav">
	<div class="container">

		<div class="chapters-header-small">
			<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
			<div class="chapters-header-title">
				<h2>Fill your calendar...</h2>
				<h1 class="chapters-header-script">with events</h1>
			</div>
		</div>

		<?php the_content(); ?>

	</div>
</div>

<?php }


genesis();