<!-- New Post-->
<div class="new_post">
	<h2><?php the_title(); ?></h2>
	<div class="postcontent">
		<?php global $more;   
			  $more = 0; 
		the_content(""); ?>
		<span class="readmore_b"><a class="readmore" href="<?php the_permalink(); ?>"><?php _e('Read More','Polished'); ?></a></span>
		<div class="clear"></div>
	</div>	<!-- end .postcontent -->
</div>