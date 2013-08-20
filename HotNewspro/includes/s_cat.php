<h3>本站推荐</h3>
<div class="box">
	<div class="scat_img"></div>
	<div id="scat">
		<?php $recent = new WP_Query('meta_key=related&showposts=100&caller_get_posts=10'); while($recent->have_posts()) : $recent->the_post();?>
		<ul><li><a href="<?php the_permalink(); ?>" title="详细阅读<?php the_title(); ?>"><?php echo cut_str($post->post_title,32); ?></a></li></ul>
		<?php endwhile; ?>
	</div>
	<div class="clear"></div>
</div>
<div class="box-bottom">
	<b class="lb"></b>
	<b class="rb"></b>
</div>
<script>
var c,_=Function;
with(o=document.getElementById("scat")){ innerHTML+=innerHTML; onmouseover=_("c=1"); onmouseout=_("c=0");}
(F=_("if(#%26||!c)#++,#%=o.scrollHeight>>1;setTimeout(F,#%26?10:3500);".replace(/#/g,"o.scrollTop")))();
</script>