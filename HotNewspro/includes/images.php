<?php
/*
Template Name: 图片模板
*/
?>
<?php include('header_a.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div class="browse_a">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_title(); ?></div>
    <div class="clear"></div>
<div id="images_content">
	<div id="images_featured">
		<?php $recent = new WP_Query('cat=8&orderby=rand&showposts=16&caller_get_posts=4'); while($recent->have_posts()) : $recent->the_post();?>
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
		<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
