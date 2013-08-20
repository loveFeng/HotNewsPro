<div class="s_category">
	<h3>推荐栏目</h3>	
	<div class="categories">
		<div class="categories_c">
			<?php $display_categories = array(1,2,3); foreach ($display_categories as $category) { ?>
				<?php query_posts("showposts=1&cat=$category"); ?>
				<?php while (have_posts()) : the_post(); ?>
				<ul class="cat_h">
					<div class="ico"><?php include('cat_ico.php'); ?></div>
					<span class="cat_name_h">
						<a href="<?php echo get_category_link($category);?>" rel="bookmark" title="更多关于<?php single_cat_title(); ?>的文章"><?php single_cat_title(); ?></a>
						<span class="cat_description"><?php echo category_description( $categoryID ); ?></span>
					</span>
				</ul>
				<?php endwhile; ?>
			<?php } ?>
 		</div>
		<?php wp_reset_query();?>
		<div class="clear"></div>
	</div>
	<div class="box-bottom">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
</div>