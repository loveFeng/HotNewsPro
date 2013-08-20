<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
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
	<ol class="commentlist">
		<?php wp_list_comments('avatar_size=48'); ?>
	</ol>
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
	<div id="respond">
		<h3>给我留言</h3>
		<div class="cancel-comment-reply">
		<small><?php cancel_comment_reply_link(); ?></small>
     </div>
	<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
	<p><?php print 'You must be'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"><?php print 'Logged in'; ?></a> <?php print 'to post comment'; ?>.</p>
    <?php else : ?>
    <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
      <?php if ( $user_ID ) : ?>
      <p><?php print '登录者：'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>&nbsp;&nbsp;<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出"><?php print '[ 退出 ]'; ?></a></p>
      <?php else : ?>
      <p>
        <input type="text" name="author" id="author" class="commenttext" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
        <label for="author"><small>
        <?php if ($req) echo "您的昵称 [必须]"; ?>
        </small></label>
      </p>
      <p>
        <input type="text" name="email" id="email" class="commenttext" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
        <label for="email"><small>您的邮箱 [不会公开]
        <?php if ($req) echo " (必须)"; ?>
        </small></label>
      </p>
      <p>
        <input type="text" name="url" id="url" class="commenttext" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
        <label for="url"><small>您的网址 [可选]</small></label>
      </p>
      <?php endif; ?>
      <!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
      <p>
        <textarea name="comment" id="comment" tabindex="4"></textarea>
      </p>
		<p><?php include(TEMPLATEPATH . '/includes/smiley.php'); ?></p>
      <p>
        <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="提交留言" />
		<input class="reset" name="reset" type="reset" id="reset" tabindex="6" value="<?php esc_attr_e( 'Reset' ); ?>" />
        <?php comment_id_fields(); ?>
      </p>
		快捷键：Ctrl+Enter
<script type="text/javascript">	//Crel+Enter
	$(document).keypress(function(e){
        if(e.ctrlKey && e.which == 13 || e.which == 10) { 
                $("#submit").click();
                document.body.focus();
        } else if (e.shiftKey && e.which==13 || e.which == 10) {
                $("#submit").click();
        }          
 })
</script>
		<p><a title="查看如何申请一个自己的Gravatar全球通用头像" target="_blank" href="http://zmingcx.com/for-a-portrait-of-his-own-gravatar.html">留言没头像？这里教你设置头像！</a></p>
      <?php do_action('comment_form', $post->ID); ?>
    </form>
    <?php endif; // If registration required and not logged in ?>
  </div>
  <?php endif; // if you delete this the sky will fall on your head ?>
