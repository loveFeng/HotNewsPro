<?php
/*
Template Name: Message
*/
?>
<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	
 <!-- menu -->
	<div id="menu">
		<div class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_title(); ?></div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
 <!-- end: menu -->
 <!-- entry -->
  <div class="entry">
    <div class="post" id="post-<?php the_ID(); ?>">
      <?php the_content('More &raquo;'); ?>
      	<div class="clear"></div>
      <?php edit_post_link('编辑', '[ ', ' ]'); ?>
    </div>
  </div>
 <!-- end: entry -->
<div class="message">
   <ul>
		<?php
			global $wpdb;
			$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,comment_author_email, SUBSTRING(comment_content,1,60) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' ORDER BY comment_date_gmt DESC LIMIT 8";
			$comments = $wpdb->get_results($sql);
			$output = $pre_HTML;
			foreach ($comments as $comment) {$output .= "\n<li>".get_avatar(get_comment_author_email(), 32).strip_tags($comment->comment_author).":<br />" . " <a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"on " .$comment->post_title . "\">" . strip_tags($comment->com_excerpt)."</a></li>";}
			$output .= $post_HTML;
			echo $output;
		?> 
   </ul>
</div>

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
