<?php
$original = get_post_meta($post->ID, 'original', true);
if(!empty($original)){
echo '&#8260; '."<a href=".$reprinted.">知更鸟</a>";
}
?>
<?php 
$reprinted = get_post_meta($post->ID, 'reprinted', true);
if(!empty($reprinted)){
echo '&#8260; '."<a href=".$reprinted.">作者原文</a>";
}
?>