<?php get_header(); ?>
<div id="roll"><div id="roll_top"></div><div id="fall"></div></div>
<div id="content">
 <!-- menu -->
	<div id="menu">
		<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞搜索结果</div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
 	<!-- end: menu -->
    <div class="navigation"><?php kriesi_pagination($query_string); ?></div>
    <div class="clear"></div>
 	<!-- end: navigation_t -->
 	<!-- archive_box -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
				<span class="date">发表于：<?php the_time('Y年m月d日') ?></span>&nbsp
				<span class="category">分类：<?php the_category(', ') ?></span>&nbsp
				<span class="comment"><?php comments_popup_link('添加评论', '1条评论', '% 条评论'); ?></span>&nbsp
				<span class="count"><?php if(function_exists(the_views)) { the_views(' 次阅读', true);}?></span>&nbsp
				<span class="edit"><?php edit_post_link('编辑', ' [ ', ' ] '); ?></span>
			</div>
		</div>
 		<!-- end: archive_title_box -->
				<?php if (get_theme_mod('showimg') == 'Yes') { ?>
				<?php include('includes/thumbnail_a.php'); ?>
					<?php } else { ?>
				<?php include('includes/thumbnail.php'); ?>
				<?php } ?>
		<div class="archive">
			<?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 530,"..."); ?>
		</div>
		<div class="clear"></div>
		<span class="archive_more"><a href="<?php the_permalink() ?>" title="详细阅读 <?php the_title(); ?>" rel="bookmark" class="title">阅读全文</a></span>
		<div class="clear"></div>
	</div>
	<?php endwhile; else: ?>
	<h3 class="center">非常抱歉，无法搜索到与之相匹配的信息。</h3>
	<?php endif; ?>
 <!-- end: archive_box --> 
 	<!-- navigation_b -->
    <div class="navigation"><?php kriesi_pagination($query_string); ?></div>
 	<!-- end: navigation_b -->
<div class="clear"></div>	
  <!-- menu_b -->
	<div id="menu_b">
		<h2>网站地图</h2>
		<div id="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"title="Comments (RSS)">Comments (RSS)</a></div>	
	</div>
	<!-- end: menu_b -->
	<!-- bottom -->
	<div id="bottom">
		<?php if (get_theme_mod('map') == 'Yes') { ?>
		<!--  random -->
		<?php include('includes/random.php'); ?>
		<!-- end: random -->
		<div class="tag">
			<h2>热门标签</h2>
			<div class="tag_c"><?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=41');?></div>
		</div>
		<!-- end: tag -->
			<div class="clear"></div>
		<div class="link">
			<?php
				if(function_exists(’wp_dtree_get_links’)){
				wp_dtree_get_links();
				}else{
				wp_list_bookmarks('show_images=1');
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
<!-- end: content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>