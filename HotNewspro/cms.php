<?php include('header_h.php'); ?>

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
		<div class="box_entry_title">
			<span class="cat_name"><?php the_category(', ') ?></span>
			<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<div class="info">
					<span class="date">发表于<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></span>
					<span class="category"> &#8260; <?php the_category(', ') ?></span>
					<?php include('includes/source.php'); ?>
					<span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论数 1', '评论数 %'); ?></span>
					<?php if(function_exists('the_views')) { print ' &#8260; 被围观 '; the_views(); print '+';  } ?>
					<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
				</div>
		</div>
			<div class="clear"></div>
			<div class="thumbnail_box">
				<?php include('includes/thumbnail.php'); ?>
				<span class="postdate"><?php the_time('Y年m月d日') ?></span>
			</div>
			<div class="cat_box">
				<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 160,"..."); ?>
			</div>
			<?php endwhile; ?>
			<div class="cat_post_box">
  				<?php
					query_posts( array(
						'showposts' => 5,
						'cat' => $category,
						'offset' => 1,
						'post__not_in' => $do_not_duplicate
						)
 					);
				?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="cat_post">
					<span class="hoem_date"><?php the_time('m/d') ?></span>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" 
					title="
						<?php if (has_excerpt())
						{ ?> 
							<?php the_excerpt() ?>
						<?php
						}
						else{
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 190,"...");
						}
						?>">
					<?php echo cut_str($post->post_title,38); ?></a></li>
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
<?php include('sidebar_h.php'); ?>
<?php get_footer(); ?>
