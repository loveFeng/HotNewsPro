<div id="gg"><div class="close"><a href="javascript:void(0)" onclick="$('#gg').slideUp('slow');" title="关闭">不想听你唠叨×</a></div>
	<div class="bulletin">
		<ul>
			<?php 
				$loop = new WP_Query( array( 'post_type' => 'bulletin', 'posts_per_page' => 3 ) );
				while ( $loop->have_posts() ) : $loop->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>" title="细看 <?php the_title(); ?>"><?php echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 100,"..."); ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>