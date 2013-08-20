<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">必须输入密码，才能查看评论！</p>
			<?php
			return;
		}
	}

	/* This variable is for alternating comment background */
	$oddcomment = '';
?>
<!-- You can start editing here. -->
<?php if ($comments) : ?>
	<h2 id="comments"><?php the_title(); ?>：目前有<?php comments_number('', '1 条留言', '% 条留言' );?></h2>	
	<ol class="commentlist"><?php wp_list_comments('type=comment&callback=robin_comment&end-callback=robin_end_comment'); ?></ol>
	<div class="navigation_c">
		<div class="previous"><?php paginate_comments_links(); ?></div>
	</div>

 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">报歉!评论已关闭.</p>
	<?php endif; ?>
	<?php endif; ?>
	<?php if ('open' == $post->comment_status) : ?>
	<div id="respond_box">
	<div id="respond">
		<h3>给我留言</h3>	
		<div class="cancel-comment-reply">
			<small><?php cancel_comment_reply_link(); ?></small>
		</div>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p><?php print '您必须'; ?><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"> [ 登录 ] </a>才能发表留言！</p>
		<?php else : ?>
		<span class="set_avatar"><a title="如何申请一个自己的Gravatar全球通用头像" target="_blank" href="http://zmingcx.com/for-a-portrait-of-his-own-gravatar.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/tx.gif" /></a></span>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( $user_ID ) : ?>
		<p><div class="user_avatar"><?php echo get_avatar( get_the_author_email(), '32' ); ?></div><?php print '登录者：'; ?><a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a><br/>
			<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出"><?php print '[ 退出登录 ]'; ?></a>
			<?php elseif ( '' != $comment_author ): ?>
			<div class="author_avatar">			
				<?php echo get_avatar($comment_author_email, $size = '32');  ?>			
			</div>
			<div class="author"><?php printf(__('欢迎 <strong>%s</strong>'), $comment_author); ?> 再次光临
			<a href="javascript:toggleCommentAuthorInfo();" id="toggle-comment-author-info">[ 更改 ]</a></div>
			<script type="text/javascript" charset="utf-8">
				//<![CDATA[
				var changeMsg = "[ 更改 ]";
				var closeMsg = "[ 隐藏 ]";
				function toggleCommentAuthorInfo() {
					jQuery('#comment-author-info').slideToggle('slow', function(){
						if ( jQuery('#comment-author-info').css('display') == 'none' ) {
						jQuery('#toggle-comment-author-info').text(changeMsg);
						} else {
						jQuery('#toggle-comment-author-info').text(closeMsg);
						}
					});
				}
				jQuery(document).ready(function(){
					jQuery('#comment-author-info').hide();
				});
				//]]>
			</script>
		</p>
	<?php endif; ?>
	<?php if ( ! $user_ID ): ?>
	<div id="comment-author-info">
		<p>
			<input type="text" name="author" id="author" class="commenttext" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
			<label for="author">昵称<?php if ($req) echo " *"; ?></label>
		</p>
		<p>
			<input type="text" name="email" id="email" class="commenttext" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
			<label for="email">邮箱<?php if ($req) echo " *"; ?></label>
		</p>
		<p>
			<input type="text" name="url" id="url" class="commenttext" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
			<label for="url">网址</label>
		</p>
	</div>
      <?php endif; ?>
		<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <div class="clear"></div>
		<p><textarea name="comment" id="comment" tabindex="4"></textarea></p>
		<p>
			<?php if (get_option('swt_smiley') == 'Hide') { ?>
			<?php { echo ''; } ?>
			<?php } else { include(TEMPLATEPATH . '/includes/smiley.php'); } ?>
		</p>
		<p>
			<input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="提交留言" />
			<input class="reset" name="reset" type="reset" id="reset" tabindex="6" value="<?php esc_attr_e( '重写' ); ?>" />
			<?php comment_id_fields(); ?>
		</p>
		<script type="text/javascript">	//Crel+Enter
			$(document).keypress(function(e){
				if(e.ctrlKey && e.which == 13 || e.which == 10) { 
					$(".submit").click();
					document.body.focus();
				} else if (e.shiftKey && e.which==13 || e.which == 10) {
					$(".submit").click();
				}          
			})
		</script>
		<?php do_action('comment_form', $post->ID); ?>
	/ 快捷键：Ctrl+Enter
    </form>

	<div class="clear"></div>
    <?php endif; // If registration required and not logged in ?>
  </div>
	<b class="lt"></b>
	<b class="rt"></b>
  </div>
<div class="respond_b">
	<b class="lb"></b>
	<b class="rb"></b>	
</div>
  <?php endif; // if you delete this the sky will fall on your head ?>
