<?php

function chapters_page_content( $show = true ) {
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

function home_page_content( $show = true ) { ?>

<div class="chapters-sub-page<?php echo ($show) ? ' chapters-expanded' : ''; ?>" id="chapters-sub-page-nav">
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
