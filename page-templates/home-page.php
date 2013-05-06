<?php
/*
Template Name: WMAA Chapters Home Page
*/

add_filter('body_class', 'body_class_stripes');
function body_class_stripes($classes) {
	// add 'class-name' to the $classes array
	$classes[] = 'background-stripes';
	$classes[] = 'chapters-page-nav';
	$classes[] = 'preload';
	// return the $classes array
	return $classes;
}

remove_action('genesis_header', 'genesis_do_header');
//add_action('genesis_header', 'chapters_do_header');
function chapters_do_header() { ?>
	<img class="home-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm-tagline.png" />
<?php }

remove_action( 'genesis_post_title', 'genesis_do_post_title' );

//wp_enqueue_script( 'flat-jquery-ui' );
//wp_enqueue_script( 'flat-dropkick' );
//wp_enqueue_script( 'flat-custom_checkbox_and_radio' );
//wp_enqueue_script( 'flat-custom_radio' );
//wp_enqueue_script( 'flat-jquery.tagsinput' );
//wp_enqueue_script( 'bootstrap-tooltip' );
//wp_enqueue_script( 'flat-placeholder' );
//wp_enqueue_script( 'flat-video-js' );
//wp_enqueue_script( 'flat-application' );
//wp_enqueue_script( 'flat-icon-font-ie7' );
//wp_enqueue_script( 'flat-icon-lte-ie7-24' );

wp_enqueue_script( 'bootstrap-dropdown' );

wp_enqueue_script( 'chapters' );

add_action( 'genesis_before_header', 'chapters_navbar' );
function chapters_navbar() { ?>
	<div id="chapters-navbar" class="container">
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<ul class="nav">
					<li class="active"><a class="chapters-subpage-link" data-chapters-page-name="nav" href="#">Regional W&M Alumni Chapters</a>
					<li><a class="chapters-subpage-link" data-chapters-page-name="map" href="#">Map</a>
					<li><a class="chapters-subpage-link" data-chapters-page-name="events" href="#">Events</a>
					<li><a class="chapters-subpage-link" data-chapters-page-name="notes" href="#">Notes</a>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Chapters
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu" role="menu">
							<li><a class="chapters-subpage-link" data-chapters-page-name="atlanta" href="#">Atlanta</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="baltimore-annapolis" href="#">Baltimore/Annapolis</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="boston" href="#">Boston</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="botetourt" href="#">Botetourt</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="charleston" href="#">Charleston</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="greater-charlotte" href="#">Greater Charlotte</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="charlottesville-highlands" href="#">Charlottesville-Highlands</a></li>
							<li><a class="chapters-subpage-link" data-chapters-page-name="chicago" href="#">Chicago</a></li>
						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-right">
				  <input type="text" class="search-query" placeholder="Search">
				</form>
			</div>
		</div>
	</div>
<?php }

add_action( 'genesis_post_content', 'chapters_do_home_content', 1 );
function chapters_do_home_content() { ?>

<div class="chapters-sub-page chapters-expanded" id="chapters-sub-page-nav">
	<div class="container">

		<div class="chapters-header">
			<img class="chapters-header-image" src="<?php echo CHILD_URL; ?>/images/flat-chapters-logo-wm.png" />
			<div class="chapters-header-title">
				<h1 class="chapters-title">
					<div id="for">For</div>
					<div id="wherever">wherever</div>
					<div id="you-roam">you roam...</div>
				</h1>
			</div>
		</div>

		<div class="row home-nav-blocks">
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-map">
					<div class="inner-wrap chapters-subpage-link"
						data-chapters-page-name="map">
						<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-map.png" >
					</div>
					<h3 class="home-nav-title">Locate Chapters</h3>
					<p>Aenean eu leo quam. <a href="#">Pellentesque ornare sem</a> lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
				</div>
			</div>
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-events">
					<div class="inner-wrap chapters-subpage-link"
						data-chapters-page-name="events">
						<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-calendar.png" >
					</div>
					<h3 class="home-nav-title">Chapter Events</h3>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
				</div>
			</div>
			<div class="outer-wrap span4">
				<div class="home-nav-block chapters-notes">
					<div class="inner-wrap chapters-subpage-link"
						data-chapters-page-name="notes">
						<img class="home-nav-icon" src="<?php echo CHILD_URL; ?>/images/icon-flat-book.png" >
					</div>
					<h3 class="home-nav-title">Notes<br>from Kelly</h3>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas faucibus mollis interdum. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. <a href="#">Nullam quis</a> risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
				</div>
			</div>
		</div>

	</div>
</div>

<?php }

add_action( 'genesis_post_content', 'chapters_sub_page_content', 2 );
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



genesis();