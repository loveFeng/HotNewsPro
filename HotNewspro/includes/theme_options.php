<?php
$settings = 'mods_'.get_current_theme();
$defaults = array(
		'ads' => '',
		'adt' => '',
		'description' => '',
		'keywords' => '',
		'rss' => '',
		'rsssub' => '',
		'cut' => '',
		'list2' => '10',
		'logo' => 'No',
		'img' => 'Yes',
		'track' => 'No',
		'showico' => 'No',
		'showcount' => 'Yes',
		'showie' => 'No',
		'showlazy' => 'Yes',
		'showadmin' => 'Yes',
		'showseo' => 'Yes',
		'map' => 'Yes',
		'showads' => 'No',
		'showadt' => 'No',
		'showadb' => 'No',
		'showrss' => 'Yes',
		'showlogo' => 'No',
		'showrsssub' => 'No',
		'showcatico' => 'No',
		'showr_img' => 'Yes',
		'avatar' => 'No',
		'thumbnail' => 'No',
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
  <h2><?php echo get_current_theme() . '主题设置 '; ?></h2>
  <form method="post" action="options.php">
    <?php settings_fields($settings); ?>
    <?php // 第一列开始 ?>
    <div class="metabox-holder">
     <div class="postbox">
        <h3>
          缩略图设置
        </h3>
        <div class="inside">
          <p>
            是否开启自动截图?（不支持外链）
            <br />
            <select name="<?php echo $settings; ?>[thumbnail]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('thumbnail')); ?><?php selected('Yes', get_theme_mod('thumbnail')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('thumbnail')); ?><?php selected('No', get_theme_mod('thumbnail')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认缩略图支持外链
            </span> 
           <p>
            <span style="margin-left:10px; color: #ff0000;">
            注：自动截图可能不适合所有主机空间！
            </span> </p> 
          </p>
        </div>
      </div>
      <!--end: thumbnail--> 
      <!--logo-->
      <div class="postbox">
        <h3>
          LOGO
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
          分类图标
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
          首页底部默认模块
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
          </p>
        </div>
      </div>
      <!--end: map--> 
      <!--showcount-->
      <div class="postbox">
        <h3>
          侧边读者墙
        </h3>
        <div class="inside">
          <p>
            是否显示最活跃的读者?
            <br />
            <select name="<?php echo $settings; ?>[showcount]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showcount')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showcount')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认显示
            </span>
          </p>
        </div>
      </div>
      <!--end: showcount -->
      <!--ie-->
      <div class="postbox">
        <h3>
          IE浮雕效果
        </h3>
        <div class="inside">
          <p>
            是否开启导航菜单IE浮雕效果?
            <br />
            <select name="<?php echo $settings; ?>[showie]">
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showie')); ?>>No</option>
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showie')); ?>>Yes</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不开启
            </span>
           <p>
            <span style="margin-left:10px; color: #ff0000;">
            注：如果导航菜单上文字较多请不要启！
            </span> </p> 
          </p>
        </div>
      </div>
      <!--end: ie -->
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
            默认开启.</span>
			<p><span style="margin-left:10px; color: #ff0000;">
			注：一定要添写下面内容，否则可能会影响博客SEO！
            </span></p>  
          </p>
          <p>
            你的首页描述
            :<br />
            <textarea name="<?php echo $settings; ?>[description]" cols=38 rows=4><?php echo stripslashes(get_theme_mod('description')); ?></textarea>
          </p>
          <p>
            你首页关键字
            :<br />
            <textarea name="<?php echo $settings; ?>[keywords]" cols=38 rows=6><?php echo stripslashes(get_theme_mod('keywords')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: seo-->
    </div>
    <?php // 结束第一列 ?>
    <?php // 第二列开始 ?>
    <div class="metabox-holder">
      <!--admin-->
      <div class="postbox">
        <h3>
          侧边管理面板
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
      <!--ico-->
      <div class="postbox">
        <h3>
          表情
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
            默认显示
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
            <textarea name="<?php echo $settings; ?>[rss]" cols=38 rows=3><?php echo stripslashes(get_theme_mod('rss')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: rss-->
      <!--adt-->
      <div class="postbox">
        <h3>
          正文底部广告
        </h3>
        <div class="inside">
          <p>
            是否显示正文底部广告？
            <br />
            <select name="<?php echo $settings; ?>[showadt]">
              <option style="padding-right:10px;" value="Yes" <?php selected('Yes', get_theme_mod('showadt')); ?>>Yes</option>
              <option style="padding-right:10px;" value="No" <?php selected('No', get_theme_mod('showadt')); ?>>No</option>
            </select>
			<span style="margin-left:10px; color: #999999;">
            默认不显示
            </span>  
          </p>
          <p>
            输入你的广告代码
            :<br />
            <textarea name="<?php echo $settings; ?>[adt]" cols=38 rows=4><?php echo stripslashes(get_theme_mod('adt')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: ads-->
      <!--ads-->
      <div class="postbox">
        <h3>
          侧边广告
        </h3>
        <div class="inside">
          <p>
            是否显示侧边广告?
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
            <textarea name="<?php echo $settings; ?>[ads]" cols=38 rows=4><?php echo stripslashes(get_theme_mod('ads')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: ads-->
      <!--track-->
      <div class="postbox">
        <h3>
          统计代码
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
            <textarea name="<?php echo $settings; ?>[track_code]" cols=38 rows=4><?php echo stripslashes(get_theme_mod('track_code')); ?></textarea>
          </p>
        </div>
      </div>
      <!--end: tracking-->
      <p class="submit">
        <input type="submit" class="button-primary" value="保存设置" />
        <input type="submit" class="button-highlighted" name="<?php echo $settings; ?>[reset]" value="重新设置" />
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
