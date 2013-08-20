<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	 <!-- menu -->
		<div id="map">
			<div class="browse">现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_category(', ') ?>＞正文<!-- <?php the_title();?> --></div>
			<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
		</div>
		<!-- end: menu -->
		<div class="entry_box_s">
			<div class="context">
				<div class="context_t">
					<?php previous_post_link('%link', '上一篇', TRUE); ?> 
					<?php next_post_link('%link', '下一篇', TRUE); ?>
				</div>
			</div>
			<div class="entry_title_box">
				<!-- 分类图标 -->
				<div class="ico"><?php include('includes/cat_ico.php'); ?></div>
				<!-- end: 分类图标 -->
				<div class="entry_title"><?php the_title(); ?></div>
				<div class="archive_info">
					<span class="date">发表于<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . '前'; ?></span>
					<span class="category"> &#8260; <?php the_category(', ') ?></span>&nbsp
					<span class="comment"> &#8260; <?php comments_popup_link('暂无评论', '评论数1', '评论数%'); ?></span>
					<?php if(function_exists('the_views')) { print ' &#8260; 被围观 '; the_views('次', true); print '+';  } ?>
					<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
				</div>
			</div>
			<!-- end: entry_title_box -->
			<div class="entry">
				<?php the_content('Read more...'); ?>
				<?php wp_link_pages( array( 'before' => '<p class="pages">' . __( '日志分页:'), 'after' => '</p>' ) ); ?>
				<div class="clear"></div>
				<div class="links">固定链接: <a href="<?php the_permalink() ?>" rel="bookmark" title="本文固定链接 <?php the_permalink() ?>"><?php the_title(); ?> | <?php bloginfo('name');?></a>
				<span class="copy_code"><a href="#" onclick="copy_code('<?php the_permalink() ?> | <?php bloginfo('name');?>'); return false;"> +复制链接</a></span></div>
				<?php include('includes/adt.php'); ?>
				<div class="clear"></div>
			</div>
			<!-- end: entry -->
			<b class="lt"></b>
			<b class="rt"></b>
		</div>
		<div class="entry_sb">
			<b class="lb"></b>
			<b class="rb"></b>
		</div>
		<!-- entrymeta -->
		<div class="entrymeta">
			<div class="authorbio">
				<div class="author_pic">
					<?php echo get_avatar( get_the_author_email(), '48' ); ?>
				</div>
				<div class="clear"></div>
				<div class="author_text">
					<h4>作者: <span><?php the_author_posts_link('namefl'); ?></span></h4>
					<?php the_author_description(); ?>
				</div>
			</div>
			<span class="spostinfo">
				该日志由 <?php the_author() ?> 于<?php the_time('Y年m月d日') ?>发表在<?php the_category(', ') ?>分类下，
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {?>
				你可以<a href="#respond">发表评论</a>，并在保留<a href="<?php the_permalink() ?>" rel="bookmark">原文地址</a>及作者的情况下<a href="<?php trackback_url(); ?>" rel="trackback">引用</a>到你的网站或博客。
				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
				通告目前不可用，你可以至底部留下评论。
				<?php } ?><br/>
				原创文章转载请注明: <a href="<?php the_permalink() ?>" rel="bookmark" title="本文固定链接 <?php the_permalink() ?>"><?php the_title(); ?> | <?php bloginfo('name');?></a><br/>
				<span class="content_tag"><?php the_tags('关键字: ', ', ', ''); ?></span>
			</span>
			<b class="lt"></b>
			<b class="rt"></b>
			<div class="clear"></div>
		</div>
		<div class="entry_sb">
			<b class="lb"></b>
			<b class="rb"></b>
		</div>
		<!-- end: entrymeta -->
	<div class="context_b">
		<?php previous_post_link('【上篇】%link') ?><br/><?php next_post_link('【下篇】%link') ?>
		<b class="lt"></b>
		<b class="rt"></b>
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<!-- relatedposts -->
	<div class="entry_b">
	<?php include('includes/related.php'); ?>
	<?php include('includes/related_img.php'); ?>
	<div class="clear"></div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<div class="ct"></div>
	<!-- end: relatedposts -->

	<?php comments_template(); ?>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div>
<!-- end: content -->
<?php get_sidebar(); ?>
<?php include('footer_a.php'); ?>