<?php
/**
 * Functions
 *
 * @package      DP_Genesis_Child
 * @since        1.0.0
 * @link         https://github.com/delputnam/DP-Genesis-Child
 * @author       Del Putnam <del@delputnam.com>
 * @copyright    Copyright (c) 2013, Del Putnam
 * @license      http://opensource.org/licenses/gpl-2.0.php GNU Public License
 *
 */


/**
 * Theme Setup
 * @since 1.0.0
 *
 * This setup function attaches all of the site-wide functions
 * to the correct hooks and filters. All the functions themselves
 * are defined below this setup function.
 *
 */

add_action('genesis_setup','child_theme_setup', 15);
function child_theme_setup() {
	global $wp_scripts;

	define( 'CHILD_THEME_VERSION', filemtime( get_stylesheet_directory() . '/style.css' ) );

	// ** Includes **
	include_once( CHILD_DIR . '/lib/functions/helpers.php' );
	include_once( CHILD_DIR . '/lib/functions/page-content.php' );

	// ** Backend **

	// Image Sizes
	// add_image_size( 'dp_featured', 400, 100, true );

	// Structural Wraps
	add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

	// Menus
	add_theme_support( 'genesis-menus', array( 'primary' => 'Primary Navigation Menu' ) );

	// Sidebars
	unregister_sidebar( 'sidebar-alt' );
	//genesis_register_sidebar( array( 'name' => 'Blog Sidebar', 'id' => 'blog-sidebar' ) );
	//add_theme_support( 'genesis-footer-widgets', 4 );

	// Remove Unused Page Layouts
	genesis_unregister_layout( 'content-sidebar-sidebar' );
	genesis_unregister_layout( 'sidebar-sidebar-content' );
	genesis_unregister_layout( 'sidebar-content-sidebar' );
	genesis_unregister_layout( 'sidebar-content' );
	genesis_unregister_layout( 'content-sidebar' );

	// Set Default Site Layout
	add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );
	add_filter( 'genesis_pre_get_option_append_description_home', '__dp_return_false' );
	add_filter( 'genesis_seo_description', '__dp_return_null' );

	// Remove Unused User Settings
	add_filter( 'user_contactmethods', 'dp_contactmethods' );
	remove_action( 'show_user_profile', 'genesis_user_options_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_options_fields' );
	remove_action( 'show_user_profile', 'genesis_user_archive_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_archive_fields' );
	remove_action( 'show_user_profile', 'genesis_user_seo_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_seo_fields' );
	remove_action( 'show_user_profile', 'genesis_user_layout_fields' );
	remove_action( 'edit_user_profile', 'genesis_user_layout_fields' );

	// Editor Styles
	add_editor_style( 'editor-style.css' );

	// Setup Theme Settings
	include_once( CHILD_DIR . '/lib/functions/child-theme-settings.php' );

	// Reposition Genesis Metaboxes
	remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );
	add_action( 'admin_menu', 'dp_add_inpost_seo_box' );
	remove_action( 'admin_menu', 'genesis_add_inpost_layout_box' );
	add_action( 'admin_menu', 'dp_add_inpost_layout_box' );

	// Remove Genesis Widgets
	add_action( 'widgets_init', 'dp_remove_genesis_widgets', 20 );

	// Remove Genesis Theme Settings Metaboxes
	add_action( 'genesis_theme_settings_metaboxes', 'dp_remove_genesis_metaboxes' );

	// Don't update theme
	add_filter( 'http_request_args', 'dp_dont_update_theme', 5, 2 );

	// ** Frontend **

	// Register Stylesheets
	//wp_register_style( 'dp-style', CHILD_URL . '/css/dp-style.css' );

	// Register Scripts
	//wp_deregister_script( 'jquery' );
	//wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, false, true );

	wp_register_script( 'content-script', CHILD_URL . '/js/bootstrap/content-functions.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-affix', CHILD_URL . '/js/bootstrap/bootstrap-affix.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-alert', CHILD_URL . '/js/bootstrap/bootstrap-alert.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-button', CHILD_URL . '/js/bootstrap/bootstrap-button.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-carousel', CHILD_URL . '/js/bootstrap/bootstrap-carousel.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-collapse', CHILD_URL . '/js/bootstrap/bootstrap-collapse.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-dropdown', CHILD_URL . '/js/bootstrap/bootstrap-dropdown.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-modal', CHILD_URL . '/js/bootstrap/bootstrap-modal.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-popover', CHILD_URL . '/js/bootstrap/bootstrap-popover.js', array( 'jquery', 'bootstrap-tooltip' ), false, true );
	wp_register_script( 'bootstrap-scrollspy', CHILD_URL . '/js/bootstrap/bootstrap-scrollspy.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-tab', CHILD_URL . '/jsbootstrap//bootstrap-tab.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-tooltip', CHILD_URL . '/js/bootstrap/bootstrap-tooltip.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-transition', CHILD_URL . '/js/bootstrap/bootstrap-transition.js', array( 'jquery' ), false, true );
	wp_register_script( 'bootstrap-typeahead', CHILD_URL . '/js/bootstrap/bootstrap-typeahead.js', array( 'jquery' ), false, true );

	wp_register_script( 'flat-jquery-ui', CHILD_URL . '/js/flat-ui/jquery-ui-1.10.0.custom.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-dropkick', CHILD_URL . '/js/flat-ui/jquery.dropkick-1.0.0.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-custom_checkbox_and_radio', CHILD_URL . '/js/flat-ui/custom_checkbox_and_radio.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-custom_radio', CHILD_URL . '/js/flat-ui/custom_radio.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-jquery.tagsinput', CHILD_URL . '/js/flat-ui/jquery.tagsinput.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-placeholder', CHILD_URL . '/js/flat-ui/jquery.placeholder.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-video-js', 'http://vjs.zencdn.net/c/video.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-application', CHILD_URL . '/js/flat-ui/application.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-icon-font-ie7', CHILD_URL . '/js/flat-ui/icon-font-ie7.js', array( 'jquery' ), false, true );
	wp_register_script( 'flat-lte-ie7-24', CHILD_URL . '/js/flat-ui/lte-ie7-24.js', array( 'jquery' ), false, true );

	wp_register_script( 'chapters', CHILD_URL . '/js/chapters.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'bootstrap-dropdown' );
	wp_enqueue_script( 'chapters' );

	// Remove Edit link
	add_filter( 'genesis_edit_post_link', '__return_false' );

	// Responsive Meta Tag
	add_action( 'genesis_meta', 'dp_viewport_meta_tag' );

	// Add Body Class for Bootstrap
	add_filter('body_class', 'body_class_container');

	//
	add_action( 'genesis_before_header', 'chapters_navbar' );

	// Footer
	remove_action( 'genesis_footer', 'genesis_do_footer' );
	add_action( 'genesis_footer', 'dp_footer' );
}

// ** Backend Functions ** //

/**
 * Customize Contact Methods
 * @since 1.0.0
 *
 * @author Del Putnam
 * @link http://sillybean.net/2010/01/creating-a-user-directory-part-1-changing-user-contact-fields/
 *
 * @param array $contactmethods
 * @return array
 */
function dp_contactmethods( $contactmethods ) {
	unset( $contactmethods['aim'] );
	unset( $contactmethods['yim'] );
	unset( $contactmethods['jabber'] );

	return $contactmethods;
}

/**
 * Register a new meta box to the post / page edit screen, so that the user can
 * set SEO options on a per-post or per-page basis.
 *
 * @category Genesis
 * @package Admin
 * @subpackage Inpost-Metaboxes
 *
 * @since 0.1.3
 *
 * @see genesis_inpost_seo_box() Generates the content in the meta box
 */
function dp_add_inpost_seo_box() {

	if ( genesis_detect_seo_plugins() )
		return;

	foreach ( (array) get_post_types( array( 'public' => true ) ) as $type ) {
		if ( post_type_supports( $type, 'genesis-seo' ) )
			add_meta_box( 'genesis_inpost_seo_box', __( 'Theme SEO Settings', 'genesis' ), 'genesis_inpost_seo_box', $type, 'normal', 'default' );
	}

}

/**
 * Register a new meta box to the post / page edit screen, so that the user can
 * set layout options on a per-post or per-page basis.
 *
 * @category Genesis
 * @package Admin
 * @subpackage Inpost-Metaboxes
 *
 * @since 0.2.2
 *
 * @see genesis_inpost_layout_box() Generates the content in the boxes
 *
 * @return null Returns null if Genesis layouts are not supported
 */
function dp_add_inpost_layout_box() {

	if ( ! current_theme_supports( 'genesis-inpost-layouts' ) )
		return;

	foreach ( (array) get_post_types( array( 'public' => true ) ) as $type ) {
		if ( post_type_supports( $type, 'genesis-layouts' ) )
			add_meta_box( 'genesis_inpost_layout_box', __( 'Layout Settings', 'genesis' ), 'genesis_inpost_layout_box', $type, 'normal', 'default' );
	}

}

/**
 * Remove Genesis widgets
 *
 * @since 1.0.0
 */
function dp_remove_genesis_widgets() {
    unregister_widget( 'Genesis_eNews_Updates'          );
    unregister_widget( 'Genesis_Featured_Page'          );
    unregister_widget( 'Genesis_Featured_Post'          );
    unregister_widget( 'Genesis_Latest_Tweets_Widget'   );
    unregister_widget( 'Genesis_User_Profile_Widget'    );
}

/**
 * Remove Genesis Theme Settings Metaboxes
 *
 * @since 1.0.0
 * @param string $_genesis_theme_settings_pagehook
 */
function dp_remove_genesis_metaboxes( $_genesis_theme_settings_pagehook ) {
	//remove_meta_box( 'genesis-theme-settings-version',      $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-style-selector',      $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-feeds',      $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-layout',      $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-header',     $_genesis_theme_settings_pagehook, 'main' );
	remove_meta_box( 'genesis-theme-settings-nav',        $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-breadcrumb', $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-comments',   $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-posts',      $_genesis_theme_settings_pagehook, 'main' );
	remove_meta_box( 'genesis-theme-settings-blogpage',   $_genesis_theme_settings_pagehook, 'main' );
	//remove_meta_box( 'genesis-theme-settings-scripts',    $_genesis_theme_settings_pagehook, 'main' );
}

/**
 * Don't Update Theme
 * @since 1.0.0
 *
 * If there is a theme in the repo with the same name,
 * this prevents WP from prompting an update.
 *
 * @author Mark Jaquith
 * @link http://markjaquith.wordpress.com/2009/12/14/excluding-your-plugin-or-theme-from-update-checks/
 *
 * @param array $r, request arguments
 * @param string $url, request url
 * @return array request arguments
 */

function dp_dont_update_theme( $r, $url ) {
	if ( 0 !== strpos( $url, 'http://api.wordpress.org/themes/update-check' ) )
		return $r; // Not a theme update request. Bail immediately.
	$themes = unserialize( $r['body']['themes'] );
	unset( $themes[ get_option( 'template' ) ] );
	unset( $themes[ get_option( 'stylesheet' ) ] );
	$r['body']['themes'] = serialize( $themes );
	return $r;
}

// ** Frontend Functions ** //

/**
 * Viewport Meta Tag for Mobile Browsers
 *
 * @author Del Putnam
 */
function dp_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
	//echo '<base target="_parent" />';
}

/**
 * Add body class for Bootstrap
 *
 * @author Del Putnam
 */
function body_class_container($classes) {
	// add 'class-name' to the $classes array
	$classes[] = 'container';
	$classes[] = 'no-js';
	// return the $classes array
	return $classes;
}

function chapters_navbar() {
	global $post;

	$current_post = $post->ID;

?>
	<div id="chapters-navbar">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner container">
				<ul class="nav">
<?php

	$args = array(
		'post_type' => 'page',
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'nopaging' => true
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	while ( $query->have_posts() ) :
		$query->the_post();

		$menu_item = '<li';
		if ( $current_post == $post->ID ) {
			$menu_item .= ' class="active"';
		}

		$permalink = is_front_page() ? 'home' : basename( get_permalink() );

		$menu_item .= '><a class="chapters-subpage-link" data-chapters-page-name="' . $post->post_name . '" href="';
		$menu_item .= get_permalink();
		$menu_item .= '">' . get_the_title() . '</a></li>';

		echo $menu_item;

	endwhile;

	// Restore original Post Data
	wp_reset_postdata();

?>
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			Chapters
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu" role="menu">
<?php

	$args = array(
		'post_type' => 'chapter_page',
		'orderby' => 'title',
		'order' => 'ASC',
		'nopaging' => true
	);

	// The Query
	$query = new WP_Query( $args );

	// The Loop
	while ( $query->have_posts() ) :
		$query->the_post();

		$menu_item = '<li';
		if ( $current_post == $post->ID ) {
			$menu_item .= ' class="active"';
		}

		$menu_item .= '><a class="chapters-subpage-link" data-chapters-page-name="' . $post->post_name . '" href="';
		$menu_item .= get_permalink();
		$menu_item .= '">' . get_the_title() . '</a></li>';

		echo $menu_item;

	endwhile;

	// Restore original Post Data
	wp_reset_postdata();


?>


						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-right" id="searchform" action="<?php echo home_url( '/' ); ?>">
				  <input type="text" class="search-query" placeholder="Search" value="" name="s" id="s">
				</form>
			</div>
		</div>
	</div>



<?php
}

/**
 * Footer
 *
 */
function dp_footer() {
	echo '<div class="one-half first" id="footer-left">' . wpautop( genesis_get_option( 'footer-left', 'child-settings' ) ) . '</div>';
	echo '<div class="one-half" id="footer-right">' . wpautop( genesis_get_option( 'footer-right', 'child-settings' ) ) . '</div>';
}

/**
 * Include Chapter Page Template
 *
 */
add_filter( 'template_include', 'include_chapter_page_template' );
function include_chapter_page_template( $template ) {

	if ( get_post_type() == 'chapter_page' ) {
		if ( is_single() ) {
			if ( isset( $_REQUEST['content-only'] ) ) {
				$template = CHILD_DIR . '/page-templates/content-only-chapter_page.php';
			} else {
				$template = CHILD_DIR . '/page-templates/single-chapter_page.php';
			}
		}
	} elseif ( isset( $_REQUEST['content-only'] ) ) {
		$template = CHILD_DIR . '/page-templates/content-only-chapter_page.php';
	}

	return $template;
}
