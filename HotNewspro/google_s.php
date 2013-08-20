<?php
/*
Template Name: 谷歌搜索
*/
?>
<?php get_header(); ?>

	<div id="map_box">
		<div id="map_l">
			<div class="browse">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞搜索结果</div>
		</div>
		<div id="map_r">
			<div id="feed"><a href="<?php echo get_option('swt_rsssub'); ?>" title="RSS">RSS</a></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="entry_box_s_g">
			<div class="google">
			<!-- 自定义搜索代码 -->
				<div id="cse-search-results"></div>
				<script type="text/javascript">
					var googleSearchIframeName = "cse-search-results";
					var googleSearchFormName = "cse-search-box";
					var googleSearchFrameWidth = 800;
					var googleSearchDomain = "www.google.com";
					var googleSearchPath = "/cse";
				</script>
				<script type="text/javascript" src="http://www.google.com/afsonline/show_afs_search.js"></script>
			<!-- 自定义搜索代码结束 -->
			</div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb_l">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
<?php include('footer_a.php'); ?>
