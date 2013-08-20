<?php get_header(); ?>
<div id="content">
	<div id="menu">
		<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞未知页面</div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
 <!-- end: menu -->
 	<div class="error">
  <h2>对不起！您找的文章可能已删除!</h2>
 </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
