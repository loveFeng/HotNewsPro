<?php
/*
Template Name: 友情链接
*/
?>
 
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	
	<div id="map_box">
		<div id="map_l">
			<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_title(); ?></div>
		</div>
		<div id="map_r">	
			<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="entry_box_s_l">
		<div class="link_page">
			<h2>不分先后，随机排序</h2>
			<?php
				if(function_exists(’wp_dtree_get_links’)){
				wp_dtree_get_links();
				}else{
				my_list_bookmarks('title_li=&categorize=1&category=&orderby=rand&show_images=1');
				}
			?>
			<div class="clear"></div>
		</div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb_l">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<div class="entry_box_s_l">
		<div class="links_m">
				<h2>自助交换链接</h2>
			<div class="page" id="post-<?php the_ID(); ?>">
				<?php the_content('More &raquo;'); ?><span class="edit">
				<div class="clear"></div>
			</div>
		</div>
			<div class="clear"></div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb_l">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php include('footer_a.php'); ?>