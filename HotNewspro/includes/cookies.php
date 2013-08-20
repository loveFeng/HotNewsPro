 <?php if($_COOKIE["comment_author_" . COOKIEHASH]!=""): ?>
 <script type="text/javascript">
 document.title = "<?php printf(__('欢迎回来: %s ★ '), $_COOKIE["comment_author_" . COOKIEHASH]) ?>" + document.title
 </script>
 <?php endif; ?>