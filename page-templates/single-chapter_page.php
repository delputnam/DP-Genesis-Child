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
add_action( 'genesis_post_content', 'chapters_chapter_page_content', 1, 0 );

function chapters_chapter_page_content( $show = true ) {
	global $post;
?>
<div class="chapters-sub-page <?php echo ($show == true) ? ' chapters-expanded' : ''; ?>" id="chapters-sub-page-<?php echo $post->post_name; ?>">
	<div class="container">

		<div class="chapters-header-small">
			<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
			<div class="chapters-header-title">
				<h2>For wherever you roam...</h2>
				<h2 class="chapters-header-script">in <?php echo get_the_title(); ?></h2>
			</div>
		</div>

		<?php the_content(); ?>

	</div>
</div>

<?php }


if ( isset( $_REQUEST['content-only'] ) ) {
	global $loop_counter;
	$loop_counter = 0;
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		chapters_chapter_page_content( false );
		$loop_counter++;
	endwhile; /** end of one post **/
	endif; /** end loop **/
} else {
	genesis();
}
