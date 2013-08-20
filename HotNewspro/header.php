<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_single() || is_page() || is_archive()) { ?><?php wp_title('',true); ?> | <?php } bloginfo('name'); ?> </title>
<?php include('includes/seo.php'); ?>	
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
<?php if (function_exists('wp_enqueue_script') && function_exists('is_singular')) : ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php endif; ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js" ></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.hoveraccordion.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/top_page.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/ymword.js"></script>
<!-- TAB -->
<script type="text/javascript">
$(document).ready(function(){
	$('#drawer').hoverAccordion({
		activateitem: '1',
		speed: 'fast'
	});
	$('#drawer').children('li:first').addClass('firstitem');
	$('#drawer').children('li:last').addClass('lastitem');
});
</script>

<!--[if lt IE 7]>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/DD_belatedPNG.js"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('.logo, #topnav,blockquote,#back_top a,.top_thumbnail img,.thumbnail img  '); 
</script>
<![endif]-->
<!-- IMG -->
<?php include('includes/lazyload.php'); ?>
<!-- PNG -->
<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("menu").getElementsByTagName("li");

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}	
	var sfEls = document.getElementById("topnav").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
</head>
<body>
<div id="wrapper">
<div id="top">
  <div id='topnav'>
    <div class="left_top ">
      <div class="home"><a href="<?php echo bloginfo('url'); ?>" title="首  页" class="home"></a></div>
      <?php wp_list_pages('depth=2&sort_column=menu_order&title_li='); ?>
   		<li><a href="http://zmingcx.com/" title="网站地图" target="_blank ">相关链接</a></li>
		<li><a href="http://www.wopus.org/" title="中文平台" target="_blank ">中文平台</a>			
			<ul><li><a href="http://themes.wopus.org/" title="wopus主题站" target="_blank ">wopus主题站</a></li> 
				<li><a href="http://bbs.wopus.org/" title="wopus中文社区" target="_blank ">wopus中文社区</a></li> 
				<li><a href="http://idc.wopus.org/" title="博客主机" target="_blank ">博客主机</a></li> 
			</ul>		
		</li>  
    </div>
    <!-- end: left_top --> 
			<div id="searchbar">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<input type="text" value="搜索" onclick="this.value='';" name="s" id="s" class="swap_value" />					
					<input type="image" src="<?php bloginfo('template_directory'); ?>/images/go.gif" id="go" alt="Search" title="搜索" />					
				</form>
			</div>
    <!-- end: searchbar -->
	</div>
<!-- end: topnav -->
</div>
<!-- end: top -->
<div id="header">
	<div class="header_c">
		<?php if (get_theme_mod('showlogo') == 'Yes') { ?>
		<a href="<?php bloginfo('siteurl'); ?>"title="<?php bloginfo(’name’); ?>"><div class="logo"></div></a>
		<?php } else { ?>	
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>	<br/><span  class="blog-title"><?php bloginfo('description'); ?></span ></h1>
		<?php } ?>
		<div class="login_t">	
			<span class="login">
			<?php if (get_option('login_form') == "yes" || get_option('login_form') == "") { ?>	
			<?php global $user_ID; if ( $user_ID ) : ?> 		
			<?php global $current_user; get_currentuserinfo(); ?>		
			<?php _e('欢迎回来:&nbsp;','cp'); ?><?php echo $current_user->user_login; ?></a> <?php wp_loginout(); ?>
       		<?php else : ?> 	   
			<?php _e('您还没有登录,是位游客!','cp'); ?>&nbsp;&nbsp[ <a href="<?php echo get_option('home'); ?>/wp-login.php?action=register"><?php _e('注册','cp'); ?></a> | <a href="<?php echo get_option('home'); ?>/wp-login.php"><?php _e('登录','cp'); ?></a> ]
			<?php endif; ?>
			<?php } ?>			
			</span>
			<span class="date_t"><?php print date('Y年m月d日'); ?></span>
		</div>
	</div>
	<div class="clear"></div>
  <!-- end: header_c -->
</div>
<!-- end: header -->
<?php include('includes/top_hot.php'); ?>