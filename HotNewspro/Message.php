<?php
/*
Template Name: 留言板
*/
?>
<?php get_header(); ?>
<div id="roll"><div title="回到顶部" id="roll_top"></div><div title="查看评论" id="ct"></div><div title="转到底部" id="fall"></div></div>
<div id="content">
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>	
	<!-- menu -->
	<div id="map">
		<div class="browse"> 现在的位置: <a title="返回首页" href="<?php echo get_settings('Home'); ?>/">首页</a> ＞<?php the_title(); ?></div>
		<div id="feed"><a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a></div>
	</div>
	<!-- end: menu -->
	<div class="entry_box_s">
		<!-- entry -->
		<div class="entry">
			<div class="page" id="post-<?php the_ID(); ?>">
				<?php the_content('More &raquo;'); ?>
				<div class="clear"></div>
			<div class="message_comment">
				<?php
					$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 32";
					$wall = $wpdb->get_results($query);
					foreach ($wall as $comment)
					{
						if( $comment->comment_author_url )
						$url = $comment->comment_author_url;
						else $url="#";
						$r="rel='external nofollow'";
						$tmp = "<a href='".$url."' '".$r."' title='".$comment->comment_author." (留下".$comment->cnt."个脚印)'>".get_avatar($comment->comment_author_email, 32)."</a>";
						$output .= $tmp;
					}    
					echo $output ;
				?>
				<div class="clear"></div>
			</div>
				<span class="edit"><?php edit_post_link('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '  ', '  '); ?></span>
			</div>
		</div>
		<!-- end: entry -->
		<div class="message">
			<ul>
				<?php
					global $wpdb;
					$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,comment_author_email, SUBSTRING(comment_content,1,52) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' ORDER BY comment_date_gmt DESC LIMIT 16";
					$comments = $wpdb->get_results($sql);
					$output = $pre_HTML;
					foreach ($comments as $comment) {$output .= "\n<li>".get_avatar(get_comment_author_email(), 32).strip_tags($comment->comment_author).":<br />" . " <a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"查看 " .$comment->post_title . "\">" . strip_tags($comment->com_excerpt)."</a></li>";}
					$output .= $post_HTML;
					echo $output;
				?> 
			</ul>
		</div>
		<b class="lt"></b>
		<b class="rt"></b>
	</div>
	<div class="entry_sb">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
	<div class="ct"></div>
	<?php comments_template(); ?>
	<?php endwhile; ?><?php else : ?>
 
	<p class="center">非常抱歉，无与之相匹配的信息。</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
	<?php endif; ?>
</div>
<!-- end: content -->
<?php include('sidebar_a.php'); ?>
<?php get_footer(); ?>
