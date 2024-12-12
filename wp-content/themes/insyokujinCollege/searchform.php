<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<input type="search" class="search-field" placeholder="keyword" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ico_search_bl.png" alt=""></button>
</form>