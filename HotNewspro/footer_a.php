<div class="clear"></div>
<div class="footer_top">
	<div id="menu">
		<?php 
			$catNav = '';
			if (function_exists('wp_nav_menu')) {
				$catNav = wp_nav_menu( array( 'theme_location' => 'footer-menu',  'echo' => false, 'fallback_cb' => '' ) );};
			if ($catNav == '') { ?>
				<ul id="cat-nav" class="nav">
					<?php wp_list_pages('depth=1&sort_column=menu_order&title_li='); ?>
				</ul>
		<?php } else echo($catNav); ?>
	</div>
	<h2 class="blogtitle">
	<a href="<?php bloginfo('home'); ?>/" title="<?php bloginfo('name'); ?>">返回首页</a></h2>
	<big class="lt"></big>
	<big class="rt"></big>
</div>
	<div class="footer_bottom_a">
		Copyright <?php echo comicpress_copyright(); ?> <?php bloginfo('name'); ?>&nbsp;&nbsp;保留所有权利.
	 	</span>&nbsp;Theme by <a href="http://zmingcx.com" title="http://zmingcx.com">Robin</a>&nbsp;&nbsp;
		基于<a href="http://wordpress.org/" title="WordPress.org"> WordPress</a> 技术创建&nbsp;&nbsp;
		
		<?php if(get_theme_mod('track') == 'Yes') { ?>
		<?php echo stripslashes(get_theme_mod('track_code')); ?>
		<?php } else { ?>
		<?php } ?>
		<big class="lb"></big>
		<big class="rb"></big>
	</div>
  	<div class="clear"></div>
<?php wp_footer(); ?>
</body></html>