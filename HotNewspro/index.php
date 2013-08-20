<?php get_header(); ?>

<div id="post">
	<!-- menu -->
	<div id="menu">
		<div class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a></div>	
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
	<!-- end: menu -->
	<!-- navigation -->	
	<div class="navigation"><?php kriesi_pagination($query_string); ?></div>
	<div class="clear"></div>
	<!-- end: navigation -->
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>"><?php if (is_sticky()) {echo '<div class="sticky-post"></div>';} ?>
			<div class="box_entry">
				<div class="box_entry_title">
					<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<div class="info">
						<span class="date"><?php the_time('Y年m月j日') ?></span>&nbsp
						<span class="category">分类：<?php the_category(', ') ?></span>&nbsp
						<span class="comment"><?php comments_popup_link('添加评论', '1条评论', '% 条评论'); ?></span>&nbsp
						<?php if(function_exists(the_views)) { the_views(' 次阅读', true);}?>&nbsp
						<span class="edit"><?php edit_post_link('编辑', ' [ ', ' ] '); ?></span>
					</div>
				</div>
				<div class="new"><?php include('includes/new.php'); ?></div>
				<div class="clear"></div>
				<?php if (get_theme_mod('showimg') == 'Yes') { ?>
				<?php include('includes/thumbnail.php'); ?>
					<?php } else { ?>
				<?php include('includes/thumbnail_a.php'); ?>
				<?php } ?>
				<div class="post_entry">
					<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 530,"..."); ?>
					<div class="clear"></div>
					<span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	<div class="navigation"><?php kriesi_pagination($query_string); ?></div>
	<div class="clear"></div>
	<div id="menu_b">
		<h2>网站地图</h2>
		<div id="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"title="Comments (RSS)">Comments (RSS)</a></div>
	</div>	
	<!-- end: menu_b -->
	<div id="bottom">
		<?php if (get_theme_mod('map') == 'Yes') { ?>
		<!--  random -->
		<?php include('includes/random.php'); ?>
		<!-- end: random -->
		<div class="tag">
			<h2>热门标签</h2>
			<div class="tag_c"><?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=45');?></div>
		</div>
		<!-- end: tag -->
			<div class="clear"></div>
		<div class="link">
			<?php
				if(function_exists(’wp_dtree_get_links’)){
				wp_dtree_get_links();
				}else{
				wp_list_bookmarks('categorize=0&show_images=0');
				}
			?>
		</div>
		<!-- end: link -->
		<?php } else { ?>
		<div class="bottom_widget">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home bottom') ) : ?>
    		<?php endif; ?>
		</div>
		<?php } ?>
	</div>
	<!-- end: bottom -->
<div class="clear"></div>
</div>
<!-- end: post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
