<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
 <!-- menu -->
	<div id="map">
		<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞搜索结果</div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
 	<!-- end: menu -->
    <div class="navigation"><?php pagination($query_string); ?></div>
    <div class="clear"></div>
 	<!-- end: navigation_t -->
 	<!-- archive_box -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="entry_box">
		<div class="archive_box">
			<!-- end: archive_title_box -->
			<div class="archive_title_box">
				<!-- 分类图标 -->
				<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
				<!-- end: 分类图标 -->
				<div class="archive_title">
					<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				</div> 
				<div class="archive_info">
					<span class="date">发表于<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></span>
					<span class="category"> &#8260; <?php the_category(', ') ?></span>
					<span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论数 1', '评论数 %'); ?></span>
					<?php if(function_exists('the_views')) { print ' &#8260; 被围观 '; the_views(); print '+';  } ?>
					<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
				</div>
			</div>
			<!-- end: archive_title_box -->
			<div class="thumbnail_box">
				<?php include('includes/thumbnail.php'); ?>
				<span class="postdate"><?php the_time('Y年m月d日') ?></span>
			</div>
			<div class="archive">
				<?php if (has_excerpt())
				{ ?> 
					<?php the_excerpt() ?>
				<?php
				}
				else{
					echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 480,"...");
				} 
				?>
			</div>
			<div class="clear"></div>
			<span class="posttag"><?php the_tags('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ', ', ', ''); ?></span><span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
			<div class="clear"></div>
		</div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_box_b">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<?php endwhile; else: ?>
	<div class="entry_box">
		<b class="lt"></b>
		<b class="rt"></b>
	<h3 class="center">抱歉!无法搜索到与之相匹配的信息。</h3>
	</div>
	<div class="entry_box_b">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<?php endif; ?>
	<!-- end: archive_box --> 
 	<!-- navigation_b -->
    <div class="navigation_b"><?php pagination($query_string); ?></div>
 	<!-- end: navigation_b -->
	<div class="clear"></div>	
	<div id="bottom">
		<?php if (get_theme_mod('map') == 'Yes') { ?>
		<div id="map_b">
			<h2>网站地图</h2>
			<div id="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"title="Comments (RSS)">Comments (RSS)</a></div>
		</div>	
		<!-- end: menu_b -->
		<!--  random -->
		<?php include('includes/random.php'); ?>
		<!-- end: random -->
		<div class="tag">
			<h2>热门标签</h2>
			<div class="tag_c"><?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=45');?></div>
		</div>
		<!-- end: tag -->
			<div class="clear"></div>
		<?php } ?>
	</div>
	<!-- end: bottom -->
<div class="clear"></div>
</div>
<!-- end: content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>