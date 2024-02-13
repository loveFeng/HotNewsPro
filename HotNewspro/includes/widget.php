<?php
// 最新文章
class news extends WP_Widget{
	function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的最新文章');
		parent::__construct( false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;最新文章',$widget_options );
	}
	function widget($args, $instance){
		include("widget/newarticles.php");
	}
}
add_action('widgets_init',function() {register_widget("news");});

// 年度排行
class hot extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的年度排行');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;年度排行',$widget_options);
	}
	function widget($args, $instance){
		include("widget/hotarticles.php");
	}
}
add_action('widgets_init',function() {register_widget("hot");});

// 随机文章
class random extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的随机文章');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;随机文章',$widget_options);
	}
	function widget($args, $instance){
		include("widget/random.php");
	}
}
add_action('widgets_init',function() {register_widget("random");});

// 最新评论
class comments extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的最新评论');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;最新评论',$widget_options);
	}
	function widget($args, $instance){
		include("widget/r_comments.php");
	}
}
add_action('widgets_init',function() {register_widget("comments");});

// 推荐文章
class recommend extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'添加后需到主题设置中添加分类ID');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;推荐文章',$widget_options);
	}
	function widget($args, $instance){
		include("widget/s_cat.php");
	}
}
add_action('widgets_init',function() {register_widget("recommend");});

// 全部分类
class categories_s extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的全部分类');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;全部分类',$widget_options);
	}
	function widget($args, $instance){
		include("widget/s_category.php");
	}
}
add_action('widgets_init',function() {register_widget("categories_s");});

// 推荐栏目
class rcategory extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的推荐栏目，添加后需到主题设置中添加分类ID');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;推荐栏目',$widget_options);
	}
	function widget($args, $instance){
		include("widget/category_h.php");
	}
}
add_action('widgets_init',function() {register_widget("rcategory");});

// 侧边广告
class ads extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的侧边广告，添加后需到主题设置中添加广告代码');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;侧边广告',$widget_options);
	}
	function widget($args, $instance){
		include("widget/ads.php");
	}
}
add_action('widgets_init',function(){register_widget("ads");});

// 热门标签
class tags extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的热门标签');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;热门标签',$widget_options);
	}
	function widget($args, $instance){
		include("widget/s_tag.php");
	}
}
add_action('widgets_init',function(){register_widget("tags");});

// 侧边图片
class mimgs extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的最新图片,不支持添加自定义栏目图像');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;最新图片',$widget_options);
	}
	function widget($args, $instance){
		include("widget/mimgs.php");
	}
}
add_action('widgets_init',function(){register_widget("mimgs");});

// 搜索
class search_g extends WP_Widget{
    function __construct()
	{
		$widget_options = array('classname'=>'set_contact','description'=>'主题自带的百度站内搜索');
		parent::__construct(false,'主题小工具&nbsp;&nbsp;&nbsp;&nbsp;搜索',$widget_options);
    }
	function widget($args, $instance){
		include("widget/search_g.php");
	}
}
add_action('widgets_init',function(){register_widget("search_g");});
?>