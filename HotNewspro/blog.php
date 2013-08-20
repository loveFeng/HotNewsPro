<?php include('header_b.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="post">
	<!-- menu -->
	<div id="map">
		<div class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a></div>	
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
	<!-- end: menu -->
	<!-- navigation -->	
	<div class="navigation"><?php pagination($query_string); ?></div>
	<div class="clear"></div>
	<!-- end: navigation -->
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<div class="entry_box">
				<div class="box_entry">
					<div class="box_entry_title">
						<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
						<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="info">
							<span class="date">发表于<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></span>
							<span class="category"> &#8260; <?php the_category(', ') ?></span>&nbsp
							<span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论数1', '评论数%'); ?></span>
							<?php if(function_exists('the_views')) { print ' &#8260; 被围观 '; the_views(); print '+';  } ?>
							<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
						</div>
					</div>
					<div class="new"><?php include('includes/new.php'); ?></div>
					<?php if (is_sticky()) {echo '<div class="sticky-post"></div>';} ?>
					<div class="clear"></div>
					<!-- thumbnail -->
					<div class="thumbnail_box">
						<?php include('includes/thumbnail.php'); ?>
						<span class="postdate"><?php the_time('Y年m月d日') ?></span>
					</div>
					<div class="post_entry">
						<?php if (has_excerpt())
						{ ?> 
							<?php the_excerpt() ?>
						<?php
						}
						else{
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 480,"...");
						} 
						?>
						<div class="clear"></div>
						<span class="posttag"><?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span><span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
						<div class="clear"></div>
					</div>
				</div>
				<b class="lt"></b>
				<b class="rt"></b>
			</div>	
			<div class="entry_box_b">
				<b class="lb"></b>
				<b class="rb"></b>
			</div>
		<!-- end: entry_box -->
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	<div class="navigation_b"><?php pagination($query_string); ?></div>
	<div class="clear"></div>
	<?php if (get_option('swt_map') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/map.php'); } ?>
</div>
<!-- end: post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
