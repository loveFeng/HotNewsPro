<?php get_header(); ?>

<div id="content">
	 <!-- menu -->
	<div id="menu">
		<h2>阅读正文</h2>
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
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <!-- browse -->
	<p class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_category(', ') ?>＞正文<!-- <?php the_title();?> --></p>
	<div class="clear"></div>
	<!-- end: browse -->
	<div class="entry_title_box">
		<!-- 分类图标 -->
		<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
		<!-- end: 分类图标 -->
	<div class="entry_title"><?php the_title(); ?></div>
	<div class="archive_info">
		<span class="date">发表于：<?php the_time('Y年m月d日') ?></span>&nbsp
		<span class="category">分类：<?php the_category(', ') ?></span>&nbsp
		<span class="comment"><?php comments_popup_link('添加评论', '1条评论', '% 条评论'); ?></span>&nbsp
		<span class="count"><?php if(function_exists(the_views)) { the_views(' 次阅读', true);}?></span>&nbsp
		<span class="edit"><?php edit_post_link('编辑', ' [ ', ' ] '); ?></span>
	</div>
	</div>
	<!-- end: entry_title_box -->
	<div class="entry">
		<?php the_content('Read more...'); ?>
		<?php wp_link_pages( array( 'before' => '<p class="pages">' . __( '日志分页:'), 'after' => '</p>' ) ); ?>
		<div class="clear"></div>
		<!-- end: entrymeta -->
		<div class="entrymeta">
			<div class="authorbio">
				<div class="author_pic">
					<?php echo get_avatar( get_the_author_email(), '48' ); ?>
				</div>
				<div class="author_text">
					<h4>作者: <span><?php the_author_posts_link('namefl'); ?></span></h4>
				<?php the_author_description(); ?>
			</div>
		</div>
		<span class="copyright">
			该日志由 <?php the_author() ?> 于<?php the_time('Y年m月d日') ?>发表在<?php the_category(', ') ?>分类下，
			<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {?>
			你可以<a href="#respond">发表评论</a>，并在保留<a href="<?php the_permalink() ?>" rel="bookmark">原文地址</a>及作者的情况下<a href="<?php trackback_url(); ?>" rel="trackback">引用</a>到你的网站或博客。
			<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
			通告目前不可用，你可以至底部留下评论。
			<?php } ?><br/>
			转载请注明: <a href="<?php the_permalink() ?>" rel="bookmark" title="本文固定链接 <?php the_permalink() ?>"><?php the_title(); ?> | <?php bloginfo('name');?></a><br/>
			<span class="content_tag"><?php the_tags('标签: ', ', ', ''); ?></span>	
		</span>
		<div class="clear"></div>
		</div>
		<!-- end: entrymeta -->
	</div>
	<!-- end: entry -->
	<div class="spostinfo">			
		<?php previous_post_link('【上篇】%link') ?><br/><?php next_post_link('【下篇】%link') ?>
	</div>
	<!-- relatedposts -->
	<div class="entry_b">
	<?php include('includes/related.php'); ?>
	<?php include('includes/related_img.php'); ?>
	<div class="clear"></div>
	</div>
	<!-- end: relatedposts -->

	<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<!-- end: content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>