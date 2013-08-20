<?php get_header(); ?>

<div id="content">
	<div id="menu">
		<h2>未知页面</h2>
		<div class="menu_left">
			<div class="menu">
				<li><a href="#">全部分类</a>
					<ul><?php wp_list_categories('sorderby=name&depth=4&title_li=&exclude='); ?></ul>
				</li>
			</div>	
		</div>
		<div class="menu_right"><div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div></div>
	</div>
 <!-- end: menu -->
 	<div class="error">
  <h2>对不起！您找的文章可能已删除!</h2>
 </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
