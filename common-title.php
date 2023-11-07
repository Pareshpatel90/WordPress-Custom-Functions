<?php 
//add this code in function file
add_filter('get_the_archive_title', function ($title) {
    if(is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }elseif(is_search()) {
        $title = 'Search for: '.get_search_query();
    }
	else{
		$title = get_the_title();
	}
    return $title;
});

//add this code for print title
the_archive_title();
