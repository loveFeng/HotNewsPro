<?php include('header_a.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
<?php while ( have_posts() ) : the_post(); ?>
<div id="images_content">
	<div id="images_featured">
		<div class="item grid">
			<div class="top_t">
				<?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'image', true); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
				<?php else: ?>
			</div>
			<!-- 截图 -->
			<div class="thumbnail_hot">
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array('class' => 'home-thumb')); }
				else { ?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="home-thumb" src="<?php echo catch_first_image() ?>" width="236px" height="155px" alt="<?php the_title(); ?>"/></a>
				<?php } ?>
				<?php endif; ?>
			</div>
			<div class="top_box"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">详细内容</a></div>
			<div class="boxCaption">
				<h2><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a></h2>
			</div>
		</div>
		<?php endwhile;?>
	</div>
	<div class="clear"></div>
 	<!-- navigation -->
    <div class="navigation_b"><?php pagination($query_string); ?></div>
 	<!-- end: navigation -->
 	<div class="clear"></div>
</div>
<?php include('footer_img.php'); ?>