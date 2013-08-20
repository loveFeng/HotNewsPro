<div id="bottom">
	<div id="map_b">
		<h2>网站地图</h2>
		<div id="rss"><a href="<?php bloginfo('comments_rss2_url'); ?>"title="Comments (RSS)">Comments (RSS)</a></div>
	</div>	
	<!-- end: menu_b -->
	<!--  random -->
	<?php include('random.php'); ?>
	<!-- end: random -->
	<div class="tag">
		<h2>热门标签</h2>
		<div class="tag_c"><?php wp_tag_cloud('smallest=12&largest=12&unit=px&number=45');?></div>
	</div>
	<!-- end: tag -->
	<div class="clear"></div>
</div>
<!-- end: bottom -->
<div class="clear"></div>