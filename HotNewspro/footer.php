<div class="clear"></div>
<div class="footer_top">
	<h2 class="blogtitle"><a href="<?php bloginfo('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>
</div>
<div class="footer_center">
	<div id="back_top"><a href="#" onclick="ZMJS.goTop();return false;"title="返回顶部"></a></div>
	<div class="footer_cat">
		<?php wp_list_categories('title_li=&orderby=id&sort_column=name&hierarchical=0&exclude='); ?>
	</div>
</div>
	<div class="footer_bottom">
		<p>Copyright &#169; <?php echo date('Y'); ?>&nbsp;&nbsp;<span class="url fn org"><?php bloginfo('name'); ?>&nbsp;&nbsp;保留所有权利.
	 	</span>&nbsp;Theme by <a href="http://zmingcx.com" title="http://zmingcx.com">Robin</a>&nbsp;&nbsp;
		基于 <a href="http://wordpress.org/" title="WordPress.org"> WordPress</a> 技术创建&nbsp;&nbsp;
		
		<?php if(get_theme_mod('track') == 'Yes') { ?>
		<?php echo stripslashes(get_theme_mod('track_code')); ?>		
		<?php } else { ?>
		<?php } ?>
		</p>
	</div>
  	<div class="clear"></div>
   <?php wp_footer(); ?>
</body></html>