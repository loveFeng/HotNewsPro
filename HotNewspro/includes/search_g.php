<div class="sg">
<h3>搜索</h3>
	<div class="box">
		<div class="search">
		<form action="<?php echo get_option('swt_search_link'); ?>" id="cse-search-box">
			<div>
			<input type="hidden" name="cx" value="<?php echo get_option('swt_search_ID'); ?>" />
			<input type="hidden" name="cof" value="FORID:10" />
			<input type="text" onclick="this.value='';" name="q" id="q" size="26" class="swap_value" />
			<input type="image" src="<?php bloginfo('template_directory'); ?>/images/go.gif" id="go" alt="Search" title="搜索" />
		</div>
		</form>
		<script type="text/javascript" src="http://www.google.com/cse/brand?form=cse-search-box&lang=zh-Hans"></script>
		</div>
	</div>
<div class="box-bottom">
	<b class="lb"></b>
	<b class="rb"></b>
</div>
</div>