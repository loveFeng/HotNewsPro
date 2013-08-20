<?php
	get_currentuserinfo();
	global $current_user, $user_ID, $user_identity;
	if( !$user_ID || '' == $user_ID ) {
?>            
	<!-- if not logged -->
	<form action="<?php echo wp_login_url( get_permalink() ); ?>" method="post" id="loginform">
		<div class="loginblock">
			<p class="lefted"><button value="Submit" id="submit" type="submit" tabindex="13"></button></p>
			<p class="password"><input type="password" name="pwd" id="pwd"  size="10" tabindex="12" /></p>
			<p class="login"><input type="text" name="log" id="log" size="10" tabindex="11" /></p>
		</div>
		<input type="hidden" name="redirect_to" value="<?php echo $_SERVER[ 'REQUEST_URI' ]; ?>" />
		<input type="checkbox" name="rememberme" id="modlogn_remember" value="yes"  checked="checked" alt="Remember Me" />
	</form>
	<!-- end if not logged -->
	<?php
		} else {
	?>
	<div class="loginblock">
		<span class="loginx">您已经登录：<?php echo $user_identity; ?> / <?php wp_register('', ''); ?><a href="<?php echo wp_logout_url( get_bloginfo('url') ); ?>" title="">  / 退出</a></span>
	</div>
<?php
}
?>