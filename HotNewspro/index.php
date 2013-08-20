<?php if (get_option('swt_home') == 'CMS') { ?>
<?php include('cms.php'); ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/blog.php'); } ?>
