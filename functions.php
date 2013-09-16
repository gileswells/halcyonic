<?php

function halcyonic_setup() {
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );

	register_nav_menu( 'primary', __( 'Navigation Menu', 'halcyonic' ) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 70, 70, true );
	add_image_size( 'homepage-hero', 568, 191, true );
	add_image_size( 'banner-image', 300, 100, true );
}
add_action( 'after_setup_theme', 'halcyonic_setup' );
