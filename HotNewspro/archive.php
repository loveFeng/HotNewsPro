<?php include('header_b.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
	<!-- menu -->
	<div id="map">
		<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞
			<?php if (have_posts()) : ?>                
			<?php $post = $posts[0]; ?>
			<?php if (is_category()) { ?>所有属于<?php single_cat_title(); ?>分类文章
			<?php } elseif( is_tag() ) { ?>所有关于<?php single_tag_title(); ?>的文章
			<?php } elseif (is_day()) { ?><?php the_time('Y年m月'); ?>发表的文章
			<?php } elseif (is_month()) { ?>所有<?php the_time('Y年m月'); ?>文章
			<?php } elseif (is_year()) { ?>Archive for <?php the_time('Y'); ?>
			<?php } elseif (is_author()) { ?>该作者所有文章
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>
		</div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
	<!-- end: menu -->
    <div class="navigation"><?php pagination($query_string); ?></div>
    <div class="clear"></div>
 	<!-- end: navigation -->
 	<!-- archive_box -->
	<?php while ( have_posts() ) : the_post(); ?>
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
			<!-- thumbnail -->
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
 		<!-- end: archive_box --> 
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_box_b">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
 	<!-- end: box_archive --> 
	<?php endwhile; else: ?>
	<?php endif; ?>

 	<!-- navigation -->
    <div class="navigation_b"><?php pagination($query_string); ?></div>
 	<!-- end: navigation -->
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
