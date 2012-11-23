<?php if (is_archive()) $post_number = get_option('polished_archivenum_posts');
if (is_search()) $post_number = get_option('polished_searchnum_posts');
if (is_tag()) $post_number = get_option('polished_tagnum_posts'); ?>
<?php get_header(); ?>
	
	<?php global $query_string; query_posts($query_string . "&showposts=$post_number&paged=$paged"); ?>
	
	<div id="wrap">
	<!-- Main Content-->
		<img src="<?php bloginfo('stylesheet_directory');?>/images/content-top.gif" alt="content top" class="content-wrap" />
		<div id="content">
			<!-- Start Main Window -->
			<div id="main">
	
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php include(TEMPLATEPATH . '/includes/entry.php'); ?>

				<?php endwhile; ?>

					<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
					else { ?>
						<?php include(TEMPLATEPATH . '/includes/navigation.php'); ?>
					<?php } ?>

				<?php else : ?>
					<?php include(TEMPLATEPATH . '/includes/no-results.php'); ?>
				<?php endif; wp_reset_query(); ?>
			</div>
			<!-- End Main -->
			
<?php get_sidebar(); ?>
<?php get_footer(); ?>	
