  <div class="top_hot">
		<?php $recent = new WP_Query("cat=".get_theme_mod('top_hot')."&showposts=4"); while($recent->have_posts()) : $recent->the_post();?>
		<div class="top_thumbnail">
			<?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
			<?php $image = get_post_meta($post->ID, 'image', true); ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
			<?php else: ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/random_t/top_img<?php echo rand(1,8)?>.jpg" alt="<?php the_title(); ?>" /></a>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
  </div>