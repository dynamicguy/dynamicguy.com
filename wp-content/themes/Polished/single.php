<?php get_header(); ?>
	
	<div id="wrap">
	<!-- Main Content-->
		<img src="<?php bloginfo('stylesheet_directory');?>/images/content-top.gif" alt="content top" class="content-wrap" />
		<div id="content">
			<!-- Start Main Window -->
			<div id="main">
			<?php the_post(); ?>
			
				<?php if (get_option('polished_integration_single_top') <> '' && get_option('polished_integrate_singletop_enable') == 'on') echo(get_option('polished_integration_single_top')); ?>
					<div class="new_post entry clearfix">

						<h1 id="post-title"><?php the_title(); ?></h1>

						<?php if (get_option('polished_postinfo2') <> '') include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
						
						<div class="postcontent">
						
							<?php if (get_option('polished_thumbnails') == 'on') { ?>
								<?php $thumb = '';
			  
									  $width = get_option('polished_thumbnail_width_posts');
									  $height = get_option('polished_thumbnail_height_posts');
									  $classtext = 'post_img';
									  $titletext = get_the_title();
									  
									  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
									  $thumb = $thumbnail["thumb"]; ?>
									  
								<?php if($thumb <> '') print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
								
							<?php }; ?>

							<?php the_content(); ?>

							<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','Polished').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
							
							<?php edit_post_link(__('Edit this page','Polished')); ?>

							<?php if (get_option('polished_integration_single_bottom') <> '' && get_option('polished_integrate_singlebottom_enable') == 'on') echo(get_option('polished_integration_single_bottom')); ?>
							<?php if (get_option('polished_468_enable') == 'on') { ?>
								<?php if(get_option('polished_468_adsense') <> '') echo(get_option('polished_468_adsense'));
								else { ?>
									<a href="<?php echo(get_option('polished_468_url')); ?>"><img src="<?php echo(get_option('polished_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
								<?php } ?>	
							<?php } ?>

							<?php if (get_option('polished_show_postcomments') == 'on') comments_template('', true); ?>
						</div> 
					</div>
			</div>
			<!-- End Main -->
			
<!-- This is a hidden link to show you where this theme come from, remove or leave it is Optional. up 2 u -->
<noscript><a href="http://www.free-premium-wordpress-themes.com">premium wordpress themes</a></noscript>
<!-- END -->			

<?php get_sidebar(); ?>
<?php get_footer(); ?>