<?php if (get_theme_mod('thumbnail') == 'Yes') { ?>
	<div class="thumbnail_t">
		<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
		<?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
		<?php else: ?>
	</div>
	<!-- 截图 -->
	<div class="thumbnail_a">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php get_thumbnail($post->ID, 'full'); ?>&amp;h=100&amp;w=140&amp;zc=1" alt="<?php the_title(); ?>" /></a>
	</div>
	<div class="thumbnail_b">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/random/tb<?php echo rand(1,20)?>.jpg" alt="<?php the_title(); ?>" /></a>
		<?php endif; ?>
	</div>
	<?php } else { ?>
	<div class="thumbnail_t">
		<?php if ( get_post_meta($post->ID, 'thumbnail', true) ) : ?>
		<?php $image = get_post_meta($post->ID, 'thumbnail', true); ?>
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
		<?php else: ?>
	</div>
	<!-- 截图 -->
	<div class="thumbnail">
		<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array('class' => 'home-thumb')); }
			else { ?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="home-thumb" src="<?php echo catch_first_image() ?>" width="140px" height="100px" alt="<?php the_title(); ?>"/></a>
		<?php } ?>
		<?php endif; ?>
	</div>
<?php } ?>