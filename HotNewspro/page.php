<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	
 <!-- menu -->
	<div id="menu">
		<h2><?php the_title(); ?></h2>
		<div class="menu_left">
			<div class="menu">
				<li><a href="#">全部分类</a>
					<ul><?php wp_list_categories('sorderby=name&depth=4&title_li=&exclude='); ?></ul>
				</li>
			</div>	
		</div>
		<div class="menu_right"><div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div></div>
	</div>
 <!-- end: menu -->
 	<p class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞
	<?php the_title(); ?>
	</p>
 <!-- entry -->
		<div class="clear"></div>
  <div class="entry">
    <div class="post" id="post-<?php the_ID(); ?>">
      <?php the_content('More &raquo;'); ?>
      	<div class="clear"></div>
      <?php the_tags('标签: ', ', ', ' '); ?>
      <?php edit_post_link('编辑', '[ ', ' ]'); ?>
    </div>
  </div>
	<div class="clear"></div>
 <!-- end: entry -->
  <?php comments_template(); ?>
  <?php endwhile; ?><?php else : ?>
 
  <h2 class="center">Not Found</h2>
  <p class="center">Sorry, but you are looking for something that isn't here.</p>
  <?php include (TEMPLATEPATH . "/searchform.php"); ?>
  <?php endif; ?>
</div>
<!-- end: content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
