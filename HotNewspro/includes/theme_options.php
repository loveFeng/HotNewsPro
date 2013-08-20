<?php

$themename = "HotNews Pro";
$shortname = "swt";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}

$number_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10", "12","14", "16", "18", "20" );
$options = array (
 
array( "name" => $themename." Options",
       "type" => "title"),
//首页布局设置开始
    array( "name" => "首页布局设置",
           "type" => "section"),
    array( "type" => "open"),

	array(  "name" => "选择首页布局",
			"desc" => "默认BLOG布局。启用CMS杂志布局前，需打开cms.php和category_h.php,找到“array(1,2,3)”修改其中的数字为分类ID,显示更多的分类请用英文逗号把ID号隔开",
            "id" => $shortname."_home",
            "type" => "select",
            "std" => "CMS",
            "options" => array("BLOG", "CMS")),
        
	array(  "name" => "首页是否启用图片布局",
			"desc" => "默认不启用",
            "id" => $shortname."_bj",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

//最新日志设置开始

    array( "type" => "close"),
    array( "name" => "最新日志设置",
           "type" => "section"),
    array( "type" => "open"),

	array(  "name" => "是否显示最新日志",
			"desc" => "默认显示",
            "id" => $shortname."_new_p",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(	"name" => "显示的数量",
			"desc" => "默认显示1篇",
			"id" => $shortname."_new_post",
			"std" => "6",
			"type" => "select",
			"options" => $number_entries),

//顶部热点文章设置开始

    array( "type" => "close"),
    array( "name" => "顶部热点文章设置",
           "type" => "section"),
    array( "type" => "open"),

	array(  "name" => "是否显示热点文章",
			"desc" => "默认显示",
            "id" => $shortname."_hot",
            "type" => "select",
            "std" => "Display",
            "options" => array("Display", "Hide")),

	array(  "name" => "选择调用方法",
			"desc" => "默认显示4篇最新文章，选择Key是通过添加自定义栏目“hot”调用",
            "id" => $shortname."_hot_img",
            "type" => "select",
            "std" => "New",
            "options" => array("New", "Key")),

//各功能模块控制

    array( "type" => "close"),
    array( "name" => "其它功能模块设置",
           "type" => "section"),
    array( "type" => "open"),

	array(  "name" => "是否显示LOGO",
			"desc" => "默认显示",
            "id" => $shortname."_logo",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否开启IE浮雕特效",
			"desc" => "默认开启",
            "id" => $shortname."_ie",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示加载中特效",
			"desc" => "默认显示",
            "id" => $shortname."_loading",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示分类图标",
			"desc" => "默认不显示",
            "id" => $shortname."_ico",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(  "name" => "是否显示首页底部模块",
			"desc" => "默认显示",
            "id" => $shortname."_map",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边推荐栏目",
			"desc" => "默认显示",
            "id" => $shortname."_category_h",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边谷歌搜索",
			"desc" => "默认显示",
            "id" => $shortname."_search_g",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边读者墙",
			"desc" => "默认显示",
            "id" => $shortname."_wallreaders",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边管理面板",
			"desc" => "默认显示",
            "id" => $shortname."_admin",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边分类目录",
			"desc" => "默认显示",
            "id" => $shortname."_category",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示侧边网站统计",
			"desc" => "默认显示",
            "id" => $shortname."_statistics",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "是否显示表情",
			"desc" => "默认显示",
            "id" => $shortname."_smiley",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

	array(  "name" => "底部公告栏设置",
			"desc" => "默认显示",
            "id" => $shortname."_bulletin",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

//SEO设置
    array( "type" => "close"),
	array( "name" => "网站SEO设置及流量统计",
       "type" => "section"),
	array( "type" => "open"),

	array(	"name" => "描述（Description）",
			"desc" => "",
			"id" => $shortname."_description",
			"type" => "textarea",
            "std" => "输入你的网站描述，一般不超过200个字符"),

	array(	"name" => "关键词（KeyWords）",
            "desc" => "",
            "id" => $shortname."_keywords",
            "type" => "textarea",
            "std" => "输入你的网站关键字，一般不超过100个字符"),

	array("name" => "统计代码",
            "desc" => "",
            "id" => $shortname."_track_code",
            "type" => "textarea",
            "std" => ""),

//订阅
    array( "type" => "close"),
	array( "name" => "订阅",
			"type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示订阅",
			"desc" => "默认显示",
            "id" => $shortname."_rssblock",
            "type" => "select",
            "std" => "Hide",
            "options" => array("Display", "Hide")),

       array("name" => "输入你的Feed地址",
            "desc" => "",
            "id" => $shortname."_rsssub",
            "type" => "text",
            "std" => "http://feed.feedsky.com/zmingcx"),

       array("name" => "输入你的订阅HTML代码",
            "desc" => "",
            "id" => $shortname."_rss",
            "type" => "textarea",
            "std" => ""),

//"google自定义搜索
    array( "type" => "close"),
	array( "name" => "Google自定义搜索设置",
			"type" => "section"),
	array( "type" => "open"),

	array(	"name" => "搜索结果页面链接",
            "desc" => "输入你的搜索结果页面链接",
            "id" => $shortname."_search_link",
            "type" => "text",
            "std" => "http://zmingcx.com/search"),

	array(	"name" => "你的自定义搜索ID",
            "desc" => "输入你的自定义搜索ID",
            "id" => $shortname."_search_ID",
            "type" => "text",
            "std" => "005077649218303215363:ngrflw3nv8m"),


//广告
    array( "type" => "close"),
	array( "name" => "广告设置",
			"type" => "section"),
	array( "type" => "open"),

	array(  "name" => "是否显示侧边广告",
			"desc" => "默认不显示",
            "id" => $shortname."_ads",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入侧边广告代码",
            "desc" => "",
            "id" => $shortname."_adsc",
            "type" => "textarea",
            "std" => ""),

	array(  "name" => "是否显示正文底部广告",
			"desc" => "默认不显示",
            "id" => $shortname."_adt",
            "type" => "select",
            "std" => "Display",
            "options" => array("Hide", "Display")),

	array(	"name" => "输入广告代码",
            "desc" => "",
            "id" => $shortname."_adtc",
            "type" => "textarea",
            "std" => ""),

	array(	"type" => "close") 
);

function mytheme_add_admin() {

global $themename, $shortname, $options;

if ( $_GET['page'] == basename(__FILE__) ) {

	if ( 'save' == $_REQUEST['action'] ) {

		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

foreach ($options as $value) {
	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

	header("Location: admin.php?page=theme_options.php&saved=true");
die;

}
else if( 'reset' == $_REQUEST['action'] ) {

	foreach ($options as $value) {
		delete_option( $value['id'] ); }

	header("Location: admin.php?page=theme_options.php&reset=true");
die;

}
}
 
add_theme_page($themename." Options", "当前主题设置", 'edit_themes', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/includes/options/options.css", false, "1.0", "all");
wp_enqueue_script("rm_script", $file_dir."/includes/options/rm_script.js", false, "1.0");
}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题设置已保存</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' 主题已重新设置</strong></p></div>';
 
?>
<div class="wrap rm_wrap">
<h2><?php echo $themename; ?> 设置</h2>
<p>当前使用主题: HotNewspro 2.4版 | 设计者:<a href="http://zmingcx.com" target="_blank"> Robin</a> | <a href="http://zmingcx.com/hotnews-pro-theme-24.html" target="_blank">查看主题更新</a></p>
<div class="rm_opts">
<form method="post">
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>

 
<?php break;
 
case 'text':
?>

<div class="rm_input rm_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="rm_input rm_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="rm_input rm_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;
 
case "checkbox":
?>

<div class="rm_input rm_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="rm_section">
<div class="rm_title"><h3><img src="<?php bloginfo('template_directory')?>/includes/options/clear.png" class="inactive" alt="""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="保存设置" />
</span><div class="clearfix"></div></div>
<div class="rm_options">

 
<?php break;
 
}
}
?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="恢复默认" />
<input type="hidden" name="action" value="reset" />
</p>
</form>
 </div> 
 <div class="kg"></div>
<?php
}
?>
<?php
add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>