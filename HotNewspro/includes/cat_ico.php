<?php if (get_option('swt_ico') == 'Display') { ?>
	<div class="cat_ico">
		<a href="<?php bloginfo('url'); ?>/category/<?php foreach((get_the_category()) as $cat){echo $cat->category_nicename;}?>" title="<?php foreach((get_the_category()) as $cat){echo $cat->cat_name;}?>">
		<img src="<?php bloginfo('template_url');?>/images/caticon/<?php foreach((get_the_category()) as $cat){echo $cat->category_nicename;}?>.gif" />
		</a>
	</div>
<?php } else { } ?>