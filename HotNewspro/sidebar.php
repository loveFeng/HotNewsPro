<div id="sidebar">

	<div class="tab">
		<ul id=drawer>
			<li><a href="#">最新文章</a>
			<div class="clear"></div>
				<ul>
					<ol id="newarticles">
						<?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
						<a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,32); ?></a>
						<?php endforeach; ?>
					</ol>
				</ul>
			<li><a href="#">热门文章</a>
			<div class="clear"></div>
				<ul>
					<ol id="hotarticles">
					<?php simple_get_most_viewed(); ?>
					</ol>
				</ul>		
			<li><a href="#">随机文章</a>
			<div class="clear"></div>
				<ul>
					<ol id="advice">
						<?php s_random_lists(); ?>
					</ol> 
				</ul>
			</li>
		</ul>
	</div>
	<!-- end: tab -->
	<div class="clear"></div>
	<?php if (get_option('swt_category_h') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/category_h.php'); } ?>

	<?php if (get_option('swt_search_g') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/search_g.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_recommend') == 'Display') { ?>
	<?php include('includes/s_cat.php'); ?>
	<?php { echo ''; } ?>
	<?php } else { } ?>

	<?php if (get_option('swt_wallreaders') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/top_comment.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具2') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_admin') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/admin.php'); } ?>

	<?php if (get_option('swt_rssblock') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/rssblock.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具3') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_category') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/s_category.php'); } ?>

	<div class="widget">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具4') ) : ?>
		<?php endif; ?>
	</div>

	<?php if (get_option('swt_ads') == 'Display') { ?>
		<?php include('includes/ads.php'); ?>
	<?php { echo ''; } ?>
	<?php } else { } ?>

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

	<?php if (get_option('swt_statistics') == 'Hide') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/statistics.php'); } ?>

	<div class="clear"></div>
	<!-- end: widget -->
	</div>