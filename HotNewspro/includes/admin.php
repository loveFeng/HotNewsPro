<?php if (get_theme_mod('showadmin') == 'Yes') { ?>
<?php
	global $user_identity,$user_level;
	get_currentuserinfo();
	if ($user_identity) { ?>			
	<h3>管理站点</h3>
	<div class="admin">
		<ul class="admin_bar">
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/" title="<?php _e('View the blog\'s summary'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_dashboard.png" alt="<?php _e('Dashboard'); ?>" title="<?php _e('View the blog\'s summary'); ?>" /><?php _e('&nbsp;&nbsp;管理'); ?></a></li>
			<?php if ($user_level >= 1) { ?>
			<?php // Get comments awaiting moderation
			$numcomments = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'");
			?>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/post-new.php" title="<?php _e('Create a new post'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_new.png" alt="<?php _e('New Entry'); ?>" title="<?php _e('Create a new post'); ?>" /><?php _e('&nbsp;&nbsp;文章'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/page-new.php" title="<?php _e('Create a new page'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_page_new.png" alt="<?php _e('New Page'); ?>" title="<?php _e('Create a new page'); ?>" /><?php _e('&nbsp;&nbsp;页面'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/widgets.php" title="<?php _e('Administer the Widgets'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_post_manage.png" alt="<?php _e('Manage Entries'); ?>" title="<?php _e('Administer the Widgets'); ?>" /><?php _e('&nbsp;&nbsp;小工具'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/link-manager.php" title="<?php _e('Administer the links'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_link_manage.png" alt="<?php _e('Links'); ?>" title="<?php _e('Administer the links'); ?>" /><?php _e('&nbsp;&nbsp;链接'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/upload.php" title="<?php _e('Administer the Media'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_uploads_manage.png" alt="<?php _e('Media'); ?>" title="<?php _e('Administer the Media'); ?>" /><?php _e('&nbsp;&nbsp;媒体'); ?></a></li>
			<?php } ?>
		</ul>
		<ul class="admin_bar">
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/moderation.php" title="<?php _e('Administer the comments'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_comments.png" alt="<?php _e('Comments'); ?>" title="<?php _e('Administer the comments'); ?>" /><?php _e('&nbsp;&nbsp;评论'); ?> <?php if ( $numcomments ) : ?> (<strong><?php echo number_format($numcomments); ?></strong>)<?php endif; ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/themes.php" title="<?php _e('Change the blog\'s look and feel'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_presentation.png" alt="<?php _e('Design'); ?>" title="<?php _e('Change the blog\'s look and feel'); ?>" /><?php _e('&nbsp;&nbsp;主题'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/plugins.php" title="<?php _e('Administer the plugins'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_plugins.png" alt="<?php _e('Plugins'); ?>" title="<?php _e('Administer the plugins'); ?>" /><?php _e('&nbsp;&nbsp;插件'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/options-general.php" title="<?php _e('Change the blog\'s options'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_options.png" alt="<?php _e('Options'); ?>" title="<?php _e('Change the blog\'s options'); ?>" /><?php _e('&nbsp;&nbsp;设置'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-admin/users.php" title="<?php _e('Administer the users'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_users.png" alt="<?php _e('Users'); ?>" title="<?php _e('Administer the users'); ?>" /><?php _e('&nbsp;&nbsp;用户'); ?></a></li>
			<li><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/adminbar/icon_logout.png" alt="<?php _e('Logout'); ?>" title="<?php _e('Logout of Wordpress'); ?>" /><?php _e('&nbsp;&nbsp;退出'); ?></a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="admin-bottom"></div>
	<?php } ?>
<?php } else { ?>
<?php } ?>