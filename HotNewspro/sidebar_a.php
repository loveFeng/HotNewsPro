<div id="sidebar">

	<div class="clear"></div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
		<?php endif; ?>
	</div>

	<h3>最新文章</h3>
	<div class="box">
  		 <ul>
			<?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
			<li><a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,34); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="box-bottom">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具2') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_rssblock') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/rssblock.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具3') ) : ?>
		<?php endif; ?>
	</div>

	<h3>热门文章</h3>
	<div class="box">
  		 <ul>
			<?php $popular = new WP_Query('orderby=comment_count&caller_get_posts=4&posts_per_page=10'); ?>
			<?php while ($popular->have_posts()) : $popular->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php echo cut_str($post->post_title,34); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
	<div class="box-bottom">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>

	<div class="s_category"><?php include('includes/s_category.php'); ?></div>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具4') ) : ?>
		<?php endif; ?>
	</div>

	<h3>随机文章</h3>
	<div class="box">
  		 <ul>
			<?php
				query_posts(array('orderby' => 'rand', 'showposts' => 10, 'caller_get_posts' => 4));
				if (have_posts()) :
				while (have_posts()) : the_post();?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo cut_str($post->post_title,32); ?></a></li>
			<?php endwhile;endif; ?>
		</ul>
	</div>
	<div class="box-bottom">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
			

	<?php if (get_option('swt_ads') == 'Display') { ?>
		<?php include('includes/ads.php'); ?>
	<?php { echo ''; } ?>
	<?php } else { } ?>

	<?php if (get_option('swt_statistics') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/statistics.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具5') ) : ?>
		<?php endif; ?>
	</div>
	<div class="clear"></div>
	<!-- end: widget -->
	</div>