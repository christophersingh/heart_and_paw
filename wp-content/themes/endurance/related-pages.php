<?php
wp_reset_postdata();
$parent_id = $post->post_parent;

if ($parent_id == 0) {
	$child_of = $post->ID;
	$widget_title = the_title('','',false);
} // if no parent
else {
	$child_of = $parent_id;
	$widget_title = get_the_title($parent_id);
	$pagelink = get_page_link( $parent_id );
}

$children_pages = get_pages( array( 'parent' => absint($child_of), 'child_of' => absint($child_of), 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
$children_pages_count = count($children_pages);

if ($children_pages_count <= 1 && $parent_id != 0) {
	unset($children_pages);
	$child_of = wp_get_post_parent_id($parent_id);
	if ($child_of != 0) {
		$children_pages = get_pages( array( 'parent' => absint($child_of), 'child_of' => absint($child_of), 'sort_column' => 'menu_order', 'sort_order' => 'ASC' ) );
		$children_pages_count = count($children_pages);
	}
} 

if ( isset($children_pages_count) && $children_pages_count > 1 ) {

	echo '<div class="widget widget_nav_menu widget-ilovewp-related-pages">';

	echo '<div class="related-pages-wrapper clearfix">';
	echo '<p class="widget-title">';
	if (isset($pagelink)) {
		echo '<a href="' . esc_url($pagelink) . '">' . esc_html($widget_title) . '</a>';
	} else {
		echo $widget_title;
	}
	echo '</p>';
	
	echo '<ul class="ilovewp-related-pages clearfix">';
	
	foreach ($children_pages as $page) {
		echo'<li class="menu-item ilovewp-related-page';
		if ( $page->ID == $post->ID ) { echo ' current-menu-item'; }
		echo'"><a href="' . esc_url(get_page_link( $page->ID )) . '">' . esc_html($page->post_title) . '</a>';
		echo'</li><!-- .ilovewp-related-page -->';
	} // foreach
	
	echo '</ul><!-- .ilovewp-related-pages .clearfix -->
	</div><!-- .related-pages-wrapper .clearfix --></div><!-- .widget .widget_nav_menu .widget-ilovewp-related-pages -->';
}

wp_reset_postdata();
?>