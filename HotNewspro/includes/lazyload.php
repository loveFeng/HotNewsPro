<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/lazyload.js"></script>
<script type="text/javascript">
	$(function() {          
    	$("#post img,#content img,#images_content img").lazyload({
        	placeholder:"<?php bloginfo('template_url'); ?>/images/load.gif",
            effect:"fadeIn"
          });
    	});
</script>