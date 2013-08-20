<?php include('header_h.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="post">
	<?php include (TEMPLATEPATH . '/includes/slider.php'); ?>
	<!-- end: menu -->
	<div class="clear12"></div>
	<?php if (get_option('swt_new_p') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/new_post.php'); } ?>
	<?php $display_categories = array(1,2,3); foreach ($display_categories as $category) { ?>
	<?php
		query_posts( array(
			'showposts' => 1,
			'cat' => $category,
			'post__not_in' => $do_not_duplicate
			)
		);
	?>
		<div class="entry_box_h">
			<?php while (have_posts()) : the_post(); ?>
			<div class="ico_name">
				<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
				<span class="cat_name"><a href="<?php echo get_category_link($category);?>" rel="bookmark" title="更多关于<?php single_cat_title(); ?>的文章"><?php single_cat_title(); ?></a></span>
			<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="thumbnail_box">
				<?php include('includes/thumbnail.php'); ?>
				<span class="postdate"><?php the_time('Y年m月d日') ?></span>
			</div>
			<?php endwhile; ?>
			<div class="cat_post_box">
  				<?php
					query_posts( array(
						'showposts' => 5,
						'cat' => $category,
						'post__not_in' => $do_not_duplicate
						)
 					);
				?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="cat_post">
					<span class="hoem_date"><?php the_time('m/d') ?></span>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读<?php the_title(); ?>"><?php echo cut_str($post->post_title,64); ?></a> <span class="comments_h"> <?php comments_popup_link('+0', '+1', '+%'); ?></span></li>
				</div>	
				<?php endwhile; ?>
			</div>
			<div class="ption">
				<span class="description"><?php echo category_description( $categoryID ); ?></span>
				<span class="archive_more"><a href="<?php echo get_category_link($category);?>" rel="bookmark" title="更多<?php single_cat_title(); ?>的文章">更  多</a></span>
			</div>
			<div class="clear"></div>
			<b class="lt"></b>
			<b class="rt"></b>
		</div>
		<div class="entry_box_b">
			<b class="lb"></b>
			<b class="rb"></b>
		</div>
	<?php } ?> 
		<!-- end: entry_box -->
	<div class="clear"></div>
	<?php if (get_option('swt_map') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/map.php'); } ?>
</div>
<!-- end: post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
