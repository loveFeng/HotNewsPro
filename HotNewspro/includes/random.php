	<div class="random">
		<h2>随机文章</h2>
		<div class="random_c">
			<ol type="A">
				<?php
					query_posts(array('orderby' => 'rand', 'showposts' => 8));
					if (have_posts()) :
					while (have_posts()) : the_post();?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php echo cut_str($post->post_title,70); ?></a></li>
					<?php endwhile;endif; ?>
			</ol>
		</div>
	</div>