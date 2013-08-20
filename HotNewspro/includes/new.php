<?php
$t1=$post->post_date;
$t2=date("Y-m-d H:i:s");
$diff=(strtotime($t2)-strtotime($t1))/3600;
if($diff<24){echo "<img src='http://img2.pict.com/19/1b/47/3289945/0/new.gif' alt='最新'>";}
?>