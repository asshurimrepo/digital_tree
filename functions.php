<?php

	require_once( 'inc/helpers.php' );
	require_once( 'inc/hooks.php' );

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'digitaltree' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Main sidebar that appears on the left.', 'digitaltree' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );


