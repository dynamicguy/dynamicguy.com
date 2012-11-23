<div id="wrap">
<!-- Main Content-->
	<img src="<?php bloginfo('stylesheet_directory');?>/images/content-top.gif" alt="content top" class="content-wrap" />
	<div id="content">
		<!-- Start Main Window -->
		<div id="main">
			
			<?php if (is_page()) { //if static homepage ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php include(TEMPLATEPATH . '/includes/homepage_content.php'); ?>
				<?php endwhile; endif; ?>
			<?php } else { ?>
				<?php include(TEMPLATEPATH . '/includes/default_home.php'); ?>
			
				
			<?php }; ?>
		
		</div>
		<!-- End Main -->

		<?php get_sidebar(); ?>