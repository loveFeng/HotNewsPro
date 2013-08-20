<?php include('header_a.php'); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="转到底部" id="fall"></div></div>
		<div class="browse_a">现在位置 ＞<a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞
			<?php if (have_posts()) : ?>                
			<?php $post = $posts[0]; ?>
			<?php if (is_category()) { ?>所有<?php single_cat_title(); ?>分类文章
			<?php } elseif( is_tag() ) { ?>所有关于<?php single_tag_title(); ?>的文章
			<?php } elseif (is_day()) { ?><?php the_time('Y年m月'); ?>发表的文章
			<?php } elseif (is_month()) { ?>所有<?php the_time('Y年m月'); ?>文章
			<?php } elseif (is_year()) { ?>Archive for <?php the_time('Y'); ?>
			<?php } elseif (is_author()) { ?>该作者所有文章
			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h1>Blog Archives</h1>
			<?php } ?>
		</div>

	<?php while ( have_posts() ) : the_post(); ?>
<div id="images_content">
	<div id="images_featured" class="clearfix">
		<div class="item grid">
			<div class="top_t">
				<?php if ( get_post_meta($post->ID, 'image', true) ) : ?>
				<?php $image = get_post_meta($post->ID, 'image', true); ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php echo $image; ?>" alt="<?php the_title(); ?>"/></a>
				<?php else: ?>
			</div>
			<!-- 截图 -->
			<?php if (get_theme_mod('thumbnail') == 'Yes') { ?>
			<div class="thumbnail_hot_a">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img src="<?php bloginfo('template_directory'); ?>/timthumb.php?src=<?php get_thumbnail($post->ID, 'full'); ?>&amp;h=155&amp;w=236&amp;zc=1" alt="<?php the_title(); ?>" /></a>
			</div>
			<?php } else { ?>
			<div class="thumbnail_hot">
				<?php if (has_post_thumbnail()) { the_post_thumbnail('home-thumb' ,array('class' => 'home-thumb')); }
				else { ?>
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><img class="home-thumb" src="<?php echo catch_first_image() ?>" width="236px" height="155px" alt="<?php the_title(); ?>"/></a>
				<?php } ?>
			</div>
			<?php } ?>
			<?php endif; ?>
			<div class="top_box"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">详细内容</a></div>
			<div class="boxCaption">
				<h2><a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>"><?php echo cut_str($post->post_title,30); ?></a></h2>
			</div>
		</div>
		<?php endwhile;?>
	</div>
	<?php endif; ?>
	<div class="clear"></div>
 	<!-- navigation -->
    <div class="navigation_b"><?php pagination($query_string); ?></div>
 	<!-- end: navigation -->
 	<div class="clear"></div>
</div>
<?php get_footer(); ?>
