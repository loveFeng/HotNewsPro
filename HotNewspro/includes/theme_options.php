<?php
/*
NOTE: this file requires WordPress 2.7+ to function
*/
$settings = 'mods_'.get_current_theme(); 

$defaults = array(
		'top_hot' => '1',
		'advice' => '1',
		'ads' => '',
		'rss' => '',
		'rsssub' => '',
		'cut' => '',
		'list2' => '10',
		'logo' => 'No',
		'img' => 'Yes',
		'track' => 'No',
		'showico' => 'No',
		'showlazy' => 'Yes',
		'showadmin' => 'Yes',
		'showseo' => 'No',
		'showimg' => 'Yes',
		'map' => 'Yes',
		'showads' => 'No',
		'showrss' => 'No',
		'showlogo' => 'No',
		'showrsssub' => 'No',
		'showcatico' => 'No',
		'showr_img' => 'Yes',
);

add_option($settings, $defaults, '', 'yes');
add_action('admin_init', 'register_theme_settings');
function register_theme_settings() {
	global $settings;
	register_setting($settings, $settings);
}
add_action('admin_menu', 'add_theme_options_menu');
function add_theme_options_menu() {
	add_submenu_page('themes.php', __('Theme Options', ''), __('当前主题设置', ''), 8, 'theme-options', 'theme_settings_admin');
}
function theme_settings_admin() { ?>
<?php theme_options_css_js(); ?>

<div class="wrap">
  <?php
	global $settings, $defaults;
	if(get_theme_mod('reset')) {
		echo '<div class="updated fade" id="message"><p>'.__('主题已', '').' <strong>'.__('重新设置', '').'</strong></p></div>';
		update_option($settings, $defaults);
	} elseif($_REQUEST['updated'] == 'true') {
		echo '<div class="updated fade" id="message"><p>'.__('主题设置', '').' <strong>'.__('已保存', '').'</strong></p></div>';
	}
	screen_icon('options-general');
?>
  <h2><?php echo get_current_theme() . ' '; _e('主题设置', ''); ?></h2>
  <form method="post" action="options.php">
    <?php settings_fields($settings); ?>
    <?php // 第一列开始 ?>
    <div class="metabox-holder">
      <div class="postbox">
        <h3>顶部热点文章设置</h3>
        <div class="inside">
          <p>
            选择分类
            <br/>
            <?php wp_dropdown_categories(array('selected' => get_theme_mod('top_hot'), 'name' => $settings.'[top_hot]', 'orderby' => 'Name' , 'hierarchical' => 1, 'hide_empty' => '0' )); ?>
          </p>
        </div>
      </div>
      <!--end: featured news--> 
      <div class="postbox">
        <h3>侧边推荐文章设置</h3>
        <div class="inside"> 
 		  <p>
            选择分类
            <br/>
            <?php wp_dropdown_categories(array('selected' => get_theme_mod('advice'), 'name' => $settings.'[advice]', 'orderby' => 'Name' , 'hierarchical' => 1, 'hide_empty' => '0' )); ?>
          </p>
          <p>
            分类文章数目:
            <br/>
            <select name="<?php echo $settings; ?>[list2]">
              <option style="padding-right:10px;" value="1" <?php selected('1', get_theme_mod('list2')); ?>>1</option>
              <option style="padding-right:10px;" value="2" <?php selected('2', get_theme_mod('list2')); ?>>2</option>
              <option style="padding-right:10px;" value="3" <?php selected('3', get_theme_mod('list2')); ?>>3</option>
              <option style="padding-right:10px;" value="4" <?php selected('4', get_theme_mod('list2')); ?>>4</option>
              <option style="padding-right:10px;" value="5" <?php selected('5', get_theme_mod('list2')); ?>>5</option>
              <option style="padding-right:10px;" value="6" <?php selected('6', get_theme_mod('list2')); ?>>6</option>
              <option style="padding-right:10px;" value="7" <?php selected('7', get_theme_mod('list2')); ?>>7</option>
              <option style="padding-right:10px;" value="8" <?php selected('8', get_theme_mod('list2')); ?>>8</option>
              <option style="padding-right:10px;" value="9" <?php selected('9', get_theme_mod('list2')); ?>>9</option>
			  <option style="padding-right:10px;" value="10" <?php selected('10', get_theme_mod('list2')); ?>>10</option> 
            </select>
            <span style="margin-left:10px; color: #999999;">
            默认: 10
            </span> </p> 
        </div>
      </div>
      <!--end: content middle--> 
     <div class="postbox">
        <h3>
          缩略图设置
        </h3>
        <div class="inside">
          <p>
            是否显示缩略图?
            <br />
            <select name="<?php echo $settings; ?>[showimg]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showimg')); ?><?php selected('No', get_theme_mod('showimg')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showimg')); ?><?php selected('No', get_theme_mod('showimg')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认显示缩略图
            </span> 
           <p>
            <span style="margin-left:10px; color: #999999;">
            注：如果不显示缩略图将关闭文章截断，首页显示全文
            </span> </p> 
          </p>
        </div>
      </div>
      <!--end: img--> 
      <!--logo-->
      <div class="postbox">
        <h3>
          LOGO设置
        </h3>
        <div class="inside">
          <p>
            是否显示LOGO?
            <br />
            <select name="<?php echo $settings; ?>[showlogo]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showlogo')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showlogo')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示LOGO
            </span>  
          </p>
        </div>
      </div>
      <!--end: logo -->
      <!--catico-->
      <div class="postbox">
        <h3>
          分类图标设置
        </h3>
        <div class="inside">
          <p>
            是否显示分类图标?
            <br />
            <select name="<?php echo $settings; ?>[showcatico]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showcatico')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showcatico')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>  
          </p>
        </div>
      </div>
      <!--end: catico-->
     <div class="postbox">
        <h3>
          首页底部默认模块设置
        </h3>
        <div class="inside">
          <p>
            是否显示默认模块?
            <br />
            <select name="<?php echo $settings; ?>[map]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('map')); ?><?php selected('No', get_theme_mod('map')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('map')); ?><?php selected('No', get_theme_mod('map')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认显示
            </span> 
           <p>
            <span style="margin-left:10px; color: #999999;">
            注：如果不显示默认模块，切换到小工具“home bottom”
            </span> </p> 
          </p>
        </div>
      </div>
      <!--end: map--> 
      <!--related_img-->
      <div class="postbox">
        <h3>
          相关日志缩略图设置
        </h3>
        <div class="inside">
          <p>
            是否显示相关日志缩略图?
            <br />
            <select name="<?php echo $settings; ?>[showr_img]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showr_img')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showr_img')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认显示
            </span>  
          </p>
        </div>
      </div>
      <!--end: related_img-->
      <!--admin-->
      <div class="postbox">
        <h3>
          侧边管理面板设置
        </h3>
        <div class="inside">
          <p>
            是否登录后显示管理面板?
            <br />
            <select name="<?php echo $settings; ?>[showadmin]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showadmin')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showadmin')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认显示
            </span>  
          </p>
        </div>
      </div>
      <!--end: admin -->
      <!--lazy-->
      <div class="postbox">
        <h3>
          图片延迟加载
        </h3>
        <div class="inside">
          <p>
            是否开启图片延迟加载?
            <br />
            <select name="<?php echo $settings; ?>[showlazy]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showlazy')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showlazy')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认开启
            </span>
          </p>
        </div>
      </div>
      <!--end: lazy-->
    </div>
    <?php // 结束第一列 ?>
    <?php // 第二列开始 ?>
    <div class="metabox-holder">
      <!--seo-->
      <div class="postbox">
        <h3>
          SEO设置
        </h3>
        <div class="inside">
          <p>
            是否设置SEO?
            <br />
            <select name="<?php echo $settings; ?>[showseo]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showseo')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showseo')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>
			<p><span style="margin-left:10px; color: #999999;">
            注：这一功能还需手动修改"includes/seo.php"文件.
            </span></p>  
          </p>
        </div>
      </div>
      <!--end: seo-->
      <!--ico-->
      <div class="postbox">
        <h3>
          表情设置
        </h3>
        <div class="inside">
          <p>
            是否显示表情?
            <br />
            <select name="<?php echo $settings; ?>[showico]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showico')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showico')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示表情
            </span>
          </p>
        </div>
      </div>
      <!--end: ico -->
      <!-- rss -->
      <div class="postbox">
        <h3>
          订阅本站
        </h3>
        <div class="inside">
          <p>
            是否显示订阅?
            <br />
            <select name="<?php echo $settings; ?>[showrss]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showrss')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showrss')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>  
          </p>
          <p>
            输入你的Feed地址
            :<br />
            <textarea name="<?php echo $settings; ?>[rsssub]" cols=38 rows=1><?php echo stripslashes(get_theme_mod('rsssub')); ?></textarea>
          </p>
          <p>
            输入你的订阅HTML代码
            :<br />
            <textarea name="<?php echo $settings; ?>[rss]" cols=38 rows=5><?php echo stripslashes(get_theme_mod('rss')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: rss-->
      <!--ads-->
      <div class="postbox">
        <h3>
          侧边广告设置
        </h3>
        <div class="inside">
          <p>
            是否显示广告?
            <br />
            <select name="<?php echo $settings; ?>[showads]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showads')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showads')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>  
          </p>
          <p>
            输入你的广告代码
            :<br />
            <textarea name="<?php echo $settings; ?>[ads]" cols=38 rows=5><?php echo stripslashes(get_theme_mod('ads')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: ads-->
      <!--track-->
      <div class="postbox">
        <h3>
          统计代码设置
        </h3>
        <div class="inside">
          <p>
            是否开启博客统计?
            <br />
            <select name="<?php echo $settings; ?>[track]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('track')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('track')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>  
            <br />
            输入你的统计代码
            :<br />
            <textarea name="<?php echo $settings; ?>[track_code]" cols=38 rows=5><?php echo stripslashes(get_theme_mod('track_code')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: tracking-->
      <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e('保存设置', '') ?>" />
        <input type="submit" class="button-highlighted" name="<?php echo $settings; ?>[reset]" value="<?php _e('重新设置', ''); ?>" />
      </p>
    </div>
    <!--end: second column-->
  </form>
</div>
<?php }

// add CSS and JS if necessary
function theme_options_css_js() {
echo <<<CSS

<style type="text/css">
	.metabox-holder { 
		width: 350px; float: left;
		margin: 0; padding: 0 10px 0 0;
	}
	.metabox-holder .postbox .inside {
		padding: 0 10px;
	}
	input, textarea, select {
		margin: 5px 0 5px 0;
		padding: 1px;
	}
</style>

CSS;
echo <<<JS

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".fade").fadeIn(1000).fadeTo(1000, 1).fadeOut(1000);
});
</script>

JS;
}
?>
