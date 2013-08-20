<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
	<div id="map">
		<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞未知页面</div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
	<!-- end: menu -->
	<div class="entry_box_s">
		 <div class="entry">
 			<div class="error">
 				 <h2>对不起！您找的文章可能已删除!</h2>
 			</div>
 		  </div>
		<div class="clear"></div>
		<!-- end: entry -->
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
