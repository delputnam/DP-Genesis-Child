<?php
/*
Template Name: WMAA Chapters Home Page
*/

add_filter('body_class', 'body_class_stripes');
function body_class_stripes($classes) {
	// add 'class-name' to the $classes array
	$classes[] = 'chapters-page-nav';
	$classes[] = 'preload';
	// return the $classes array
	return $classes;
}

remove_action('genesis_header', 'genesis_do_header');
remove_action( 'genesis_post_title', 'genesis_do_post_title' );
remove_action( 'genesis_post_content', 'genesis_do_post_content' );

add_action( 'genesis_post_content', 'chapters_do_home_content', 1, 0 );
function chapters_do_home_content( $show = true ) { ?>

<div class="chapters-sub-page<?php echo ($show) ? ' chapters-expanded' : ''; ?>" id="chapters-sub-page-home">
	<div class="container">

		<div class="chapters-header">
			<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
			<div class="chapters-header-title">
				<h1 class="chapters-title">
					<div id="for">For</div>
					<div id="wherever" class="chapters-header-script">wherever</div>
					<div id="you-roam">you roam...</div>
				</h1>
			</div>
		</div>

		<div class="row home-nav-blocks">
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-map">
					<a class="chapters-subpage-link" data-chapters-page-name="map" href="map">
						<div class="inner-wrap">
							<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-map.png" >
						</div>
					</a>
					<h3 class="home-nav-title">Locate Chapters</h3>
					<p>Aenean eu leo quam. <a href="#">Pellentesque ornare sem</a> lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
				</div>
			</div>
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-events">
					<a class="chapters-subpage-link" data-chapters-page-name="events" href="events">
						<div class="inner-wrap">
							<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-calendar.png" >
						</div>
					</a>
					<h3 class="home-nav-title">Chapter Events</h3>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
			</div>
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-notes">
					<a class="chapters-subpage-link" data-chapters-page-name="notes" href="notes">
						<div class="inner-wrap">
							<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-book.png" >
						</div>
					</a>
					<h3 class="home-nav-title">Notes<br>from Kelly</h3>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. <a href="#">Nullam quis</a> risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<?php }

//add_action( 'genesis_post_content', 'chapters_sub_page_content', 2 );
function chapters_sub_page_content() { ?>

	<div class="chapters-sub-page" id="chapters-sub-page-map">
		<div class="chapters-sub-page-close icon-remove-sign icon-white"></div>
		<div class="container">
			<?php echo dp_demodata(); ?>
		</div>
	</div>

	<div class="chapters-sub-page" id="chapters-sub-page-events">
		<div class="chapters-sub-page-close icon-remove-sign icon-white"></div>
		<div class="container">
			<?php echo dp_demodata(); ?>
		</div>
	</div>

	<div class="chapters-sub-page" id="chapters-sub-page-notes">
		<div class="chapters-sub-page-close icon-remove-sign icon-white"></div>
		<div class="container">
			<?php echo dp_demodata(); ?>
		</div>
	</div>

<?php }

//add_action( 'genesis_footer', 'chapters_footer' );
function chapters_footer() { ?>
	<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
<?php }


if ( isset($_REQUEST['content-only'] ) ) {
	global $loop_counter;
	$loop_counter = 0;
	if ( have_posts() ) : while ( have_posts() ) : the_post();
		chapters_do_home_content( false );
		$loop_counter++;
	endwhile; /** end of one post **/
	endif; /** end loop **/
} else {
	genesis();
}
