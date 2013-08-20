<?php if (get_theme_mod('showseo') == 'Yes') { ?>	
<?if (is_home()){
    $description ="你的首页描述";
    $keywords ="你首页关键字";
} elseif (is_single()){
    if ($post->post_excerpt) {
        $description = $post->post_excerpt;
    } else {
        $description = substr(strip_tags($post->post_content),0,180);
    } 
    $keywords = "";       
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {
        $keywords = $keywords . $tag->name . ", ";
    }
} elseif(is_category()){
foreach((get_the_category()) as $category) {
$catname = $category->category_nicename;
$description  = $category->category_description;
}
    $keywords = "";       
    $tags = wp_get_post_tags($post->ID);
    foreach ($tags as $tag ) {
    $keywords = $keywords . $tag->name . ", ";
    }
}

?>
<meta name="description" content="<?=$description?>" />
<meta name="keywords" content="<?=$keywords?>" />
<?php } else { ?>
<?php } ?>