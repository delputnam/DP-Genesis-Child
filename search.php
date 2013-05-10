<?php
/*
Template Name: Search Page
*/

add_filter('body_class', 'body_class_stripes');
function body_class_stripes($classes) {

	// add 'class-name' to the $classes array
	$classes[] = 'chapters-page-search';

	// return the $classes array
	return $classes;
}



remove_action('genesis_header', 'genesis_do_header');
remove_action( 'genesis_post_title', 'genesis_do_post_title' );
remove_action( 'genesis_post_content', 'genesis_do_post_content' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'chapters_search_custom_loop' );
add_filter( 'genesis_post_info', '__dp_return_null' );
add_filter( 'genesis_post_meta', '__dp_return_null' );

//add_action( 'genesis_before_content', 'chapters_do_before_search_markup', 1, 0 );
add_action( 'genesis_post_content', 'chapters_do_search_content', 1, 0 );
//add_action( 'genesis_after_content', 'chapters_do_after_search_markup' );

function chapters_do_before_search_markup( $show = true ) {

	global $query_string;

	$query_args = explode("&", $query_string);
	$search_query = array();

	foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
	} // foreach

?>
	<div class="chapters-sub-page<?php echo ( $show ) ? ' chapters-expanded' : ''; ?>" id="chapters-sub-page-search">
		<div class="container">

			<div class="chapters-header-small">
				<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
				<div class="chapters-header-title">
					<h1>Search results for...</h1>
					<h1 class="chapters-header-script"><?php echo $search_query['s']; ?></h1>
				</div>
			</div>
<?php }

function chapters_do_search_content() {
	global $post;

	echo '<h1><a class="chapters-subpage-link" data-chapters-page-name="' . $post->post_name . '" href="' . get_permalink() .'">' . get_the_title() . '</a></h1>';
	//the_content();

	echo '<p>Content goes here.</p>';

	echo '<hr>';

/*
	if ( $wp_query->post_count == ($loop_counter + 1)) { ?>
			</div><!-- container -->
		</div><!-- chapters-sub-page-->
	<?php } else { ?>
		<hr>
	<?php }
*/
}

function chapters_do_after_search_markup() { ?>
			</div><!-- container -->
	</div><!-- chapters-sub-page-->
<?php }


/**
 * Chapters Search custom loop
 */
function chapters_search_custom_loop() {
	global $post, $wp_query, $query_string;

	$wp_query = new WP_Query( $query_string . '&nopaging=true' );

	if ( have_posts() ) :
		chapters_do_before_search_markup();
		while ( have_posts() ) : the_post();

			chapters_do_search_content();

		endwhile;
		chapters_do_after_search_markup();
		do_action( 'genesis_after_endwhile' );
	endif;

	wp_reset_query();
}

genesis();


/*
if ( isset($_REQUEST['content-only'] ) ) {
	global $loop_counter;
	$loop_counter = 0;
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		chapters_do_search_content( false );
		$loop_counter++;
	endwhile;
	endif;
} else {
	genesis();
}
*/
