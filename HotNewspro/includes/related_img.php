<div class="related_img">
	<?php
	$backup = $post; 
	$tags = wp_get_post_tags($post->ID);
	$tagIDs = array();
	if ($tags) {
		echo '<ul>';
		$tagcount = count($tags);
		for ($i = 0; $i < $tagcount; $i++) {
		$tagIDs[$i] = $tags[$i]->term_id;
		}
		$args=array(
			'tag__in' => $tagIDs,
			'post__not_in' => array($post->ID),
			'showposts'=>4,
			'orderby'=>rand,
			'caller_get_posts'=>1
		);
		$my_query = new WP_Query($args);
		if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?> 
			<div class="related_img_box">
				<?php include('thumbnail.php'); ?>	
			</div>
			<?php endwhile;
			echo '</ul>';
		} else { ?>
			<!-- 没有相关文章显示随机文章 -->
	<ul>
		<?php
		query_posts(array('orderby' => 'rand', 'showposts' => 4, 'caller_get_posts' => 4));
		if (have_posts()) :
		while (have_posts()) : the_post();?>
		<div class="related_img_box">
			<?php include('thumbnail.php'); ?>	
		</div>
		<?php endwhile;endif; ?>
	</ul>
	<?php }
	}
	$post = $backup;
	wp_reset_query();
	?>
</div>