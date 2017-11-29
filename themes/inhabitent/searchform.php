<?php
/*
Template Name: Search Page
*/
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
<a id="nav-toggle" class="nav-toggle">
				<i class="fa fa-search"></i>
				</a>
				
		<label>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>


			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
</form>
