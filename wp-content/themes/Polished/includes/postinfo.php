<div class="post_info">

	<?php if (!(is_single())) { ?>
		
		<?php _e('Posted','Polished'); ?> <?php if (in_array('author', get_option('polished_postinfo1'))) { ?> <?php _e('by','Polished'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('polished_postinfo1'))) { ?> <?php _e('on','Polished'); ?> <?php the_time(get_option('polished_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('polished_postinfo1'))) { ?> <?php _e('in','Polished'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('polished_postinfo1'))) { ?> | <img src="<?php bloginfo('stylesheet_directory'); ?>/images/comments.png" width="20" height="18" alt="Comments"/> <?php comments_popup_link(__('0 comments','Polished'), __('1 comment','Polished'), '% '.__('comments','Polished')); ?><?php }; ?>
		
	<?php } elseif (is_single()) { ?>

		<?php _e('Posted','Polished'); ?> <?php if (in_array('author', get_option('polished_postinfo2'))) { ?> <?php _e('by','Polished'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('date', get_option('polished_postinfo2'))) { ?> <?php _e('on','Polished'); ?> <?php the_time(get_option('polished_date_format')) ?><?php }; ?><?php if (in_array('categories', get_option('polished_postinfo2'))) { ?> <?php _e('in','Polished'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('polished_postinfo2'))) { ?> | <img src="<?php bloginfo('stylesheet_directory'); ?>/images/comments.png" width="20" height="18" alt="Comments"/> <?php comments_popup_link(__('0 comments','Polished'), __('1 comment','Polished'), '% '.__('comments','Polished')); ?><?php }; ?>

	<?php }; ?>
</div>