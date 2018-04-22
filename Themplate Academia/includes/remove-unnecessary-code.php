<?php
/*
Plugin Name: Удаление лишнего кода
Description: Плагин убирает из фрон-энда лишний код, генерируемый движком и некоторыми плагинами.
*/

add_action( 'wp_before_admin_bar_render', 'remove_item_admin_bar' );
add_filter( 'xmlrpc_enabled', '__return_false' );
add_filter( 'show_admin_bar', '__return_false' );

remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10 );
remove_action( 'wp_head', 'start_post_rel_link', 10 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( "wp_head", "rel_canonical" );
remove_filter( 'comment_text', 'make_clickable', 9 );
remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );


function remove_item_admin_bar() {
	/**
	 * @var WP_Admin_Bar $wp_admin_bar
	 */
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu( 'wp-logo' );
	$wp_admin_bar->remove_menu( 'view-site' );
	$wp_admin_bar->remove_menu( 'customize' );
	$wp_admin_bar->remove_menu( 'comments' );
}
