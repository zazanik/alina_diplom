<form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
	<div>
		<input class="search-form-fix" type="text" value="<?php the_search_query(); ?>" name="s"/>
		<input class="art-button-fix" type="submit" name="search" value="Пошук"/>
	</div>
</form>

