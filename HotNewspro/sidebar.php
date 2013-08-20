<div id="sidebar">

<div class="tab">
	<ul id=drawer>
  		<li><a href="">最新日志</a>
			<ul>
				<ol id="newarticles">
					<?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,32); ?></a>
					<?php endforeach; ?>
				</ol>
			</ul>

		<li><a href="">最热文章</a> 
			<ul>
				<ol id="hotarticles">
					<?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 10");
					foreach ($result as $post) {
					setup_postdata($post);
					$postid = $post->ID;
					$title = $post->post_title;
					$commentcount = $post->comment_count;
					if ($commentcount != 0) { ?>
					<li><a href="<?php echo get_permalink($postid); ?>" title="<?php echo $title ?>">
					<?php echo cut_str($post->post_title,32); ?></a> </li>
					<?php } } ?>
				</ol> 
			</ul>
		
		<li><a href="">推荐文章</a> 
			<ul>
				<ol id="advice">
					<?php $recent = new WP_Query("cat=".get_theme_mod('advice')."&offset=0&showposts=".get_theme_mod('list2')); while($recent->have_posts()) : $recent->the_post();?>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,32); ?></a>
					<?php endwhile; ?>
				</ol> 
			</ul>
		</li>
	</ul>
</div>
  <!-- end: tab -->
  
<div class="clear"></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget1') ) : ?>
    <?php endif; ?>
</div>	
<?php include('includes/admin.php'); ?>
<div class="rssblock"><?php include('includes/rssblock.php'); ?></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget2') ) : ?>
    <?php endif; ?>
</div>
<div class="s_category"><?php include('includes/s_category.php'); ?></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget3') ) : ?>
    <?php endif; ?>
</div>
<div class="ad"><?php include('includes/ads.php'); ?></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget4') ) : ?>
    <?php endif; ?>
</div>
<div class="comments"><?php include('includes/r_comments.php'); ?></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget5') ) : ?>
    <?php endif; ?>
</div>
<div class="clear"></div>
<div class="widget">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar Widget6') ) : ?>
    <?php endif; ?>
</div>
 <!-- end: widget -->
</div>