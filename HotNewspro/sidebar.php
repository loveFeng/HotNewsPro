<div id="sidebar">

	<div class="tab">
		<ul id=drawer>
			<li><a href="#">最新文章</a>
				<ul>
					<ol id="newarticles">
						<?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,32); ?></a>
						<?php endforeach; ?>
					</ol>
				</ul>
			<li><a href="#">热门文章</a>
				<ul>
					<ol id="hotarticles">
						<?php $popular = new WP_Query('orderby=comment_count&caller_get_posts=4&posts_per_page=10'); ?>
						<?php while ($popular->have_posts()) : $popular->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php echo cut_str($post->post_title,32); ?></a>
						<?php endwhile; ?>
					</ol>
				</ul>		
			<li><a href="#">随机文章</a>
				<ul>
					<ol id="advice">
						<?php
							query_posts(array('orderby' => 'rand', 'showposts' => 10, 'caller_get_posts' => 4));
							if (have_posts()) :
							while (have_posts()) : the_post();?>
							<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo cut_str($post->post_title,32); ?></a></li>
						<?php endwhile;endif; ?>
					</ol> 
				</ul>
			</li>
		</ul>
	</div>
	<!-- end: tab -->
	<div class="clear"></div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
		<?php endif; ?>
	</div>
	<div id="top-comments-author">
		<?php if (get_theme_mod('avatar') == 'Yes') { ?>
			<?php include('includes/top_comment_a.php'); ?>
		<?php } else { ?>
			<?php include('includes/top_comment.php'); ?>
		<?php } ?>
	</div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具2') ) : ?>
		<?php endif; ?>
	</div>
	<?php include('includes/admin.php'); ?>
	<div class="rssblock"><?php include('includes/rssblock.php'); ?></div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具3') ) : ?>
		<?php endif; ?>
	</div>
	<div class="s_category"><?php include('includes/s_category.php'); ?></div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具4') ) : ?>
		<?php endif; ?>
	</div>
	<div class="ad"><?php include('includes/ads.php'); ?></div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具5') ) : ?>
		<?php endif; ?>
	</div>
	<div class="comments">
		<?php include('includes/r_comments.php'); ?>
	</div>
	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具6') ) : ?>
		<?php endif; ?>
	</div>
	<div class="clear"></div>
	<!-- end: widget -->
	</div>