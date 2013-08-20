<?php if (get_theme_mod('showlazy') == 'Yes') { ?>	
<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/lazyload.js"></script>
<script type="text/javascript">
	$(function() {          
    	$("#post img,#content img,#images_content img").lazyload({
        	placeholder:"<?php bloginfo('template_url'); ?>/images/image-pending.gif",
            effect:"fadeIn"
          });
    	});
</script>
<?php } else { ?>
<?php } ?>