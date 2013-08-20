<div id="top-comments-author">
	<h3>最活跃的读者</h3>
	<div class="box">
		<div class="box_comment">
			<?php
				$query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 1 MONTH ) AND user_id='0' AND comment_author_email != '' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 10";
				$wall = $wpdb->get_results($query);
				foreach ($wall as $comment)
				{
					if( $comment->comment_author_url )
					$url = $comment->comment_author_url;
					else $url="#";
					$r="rel='external nofollow'";
					$imgsize="32";
					$tmp = "<a target='_blank' href='".$url."' title='".$comment->comment_author." (留下".$comment->cnt."个脚印)'><img width='".$imgsize ."' height='".$imgsize ."' src='http://www.gravatar.com/avatar.php?gravatar_id=".md5( strtolower($comment->comment_author_email) )."&size=".$imgsize ."&d=identicon&r=G' alt='".$comment->comment_author."(留下".$comment->cnt."个脚印)' /></a>";
					$output .= $tmp;
				}
				echo $output ;
			?>
		</div>
		<div class="clear"></div>
	</div>
	<div class="box-bottom">
		<b class="lb"></b>
		<b class="rb"></b>
	</div>
</div>