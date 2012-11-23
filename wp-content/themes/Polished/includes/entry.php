<?php $thumb = '';
  	  
	$width = get_option('polished_thumbnail_width_usual');
	$height = get_option('polished_thumbnail_height_usual');
	$classtext = 'post_img';
	$titletext = get_the_title();
	
	$thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
	$thumb = $thumbnail["thumb"]; ?>

<!-- New Post-->
<div class="new_post">
	<h2 class="title"><a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Polished'), $titletext) ?>"><?php the_title(); ?></a></h2>
	
	<?php if (get_option('polished_postinfo1') <> '') include(TEMPLATEPATH . '/includes/postinfo.php'); ?>
	
	<div class="postcontent">
		<?php if($thumb <> '') { ?>
			<a href="<?php the_permalink() ?>" title="<?php printf(__ ('Permanent Link to %s', 'Polished'), $titletext) ?>">
				<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
			</a>
		<?php }; ?>
		
		<?php if (get_option('polished_blog_style') == 'false') { ?>
			<p><?php truncate_post(445); ?></p>
		<?php } else { ?>
			<?php the_content(''); ?>
		<?php }; ?>
  
		<span class="readmore_b"><a class="readmore" href="<?php the_permalink(); ?>"><?php _e('Read More','Polished'); ?></a></span>
		<div class="clear"></div>
	</div>	<!-- end .postcontent -->
</div>
<!-- End Post -->	