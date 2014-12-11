<?php

	require_once( 'inc/helpers.php' );
	require_once( 'inc/hooks.php' );

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'digitaltree' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'digitaltree' ),
		'before_widget' => '<div id="%1$s" class="widget well %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );


	function my_wpcf7_dropdown_form($html) {
		$text = 'Applying for?';
		$html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
		return $html;
	}
	add_filter('wpcf7_form_elements', 'my_wpcf7_dropdown_form');