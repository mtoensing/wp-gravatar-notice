<?php

/*
Plugin Name: WP Gravatar Notice
Description: Displays a notice that this blog uses the gravatars service for user images in the comment section.
Plugin URI:  https://github.com/mtoensing/wp-gravatar-notice/
Version:     1.0
Text Domain: wp-gravatar-notice
Domain Path: /language
Author:      MarcDK
Author URI:  https://marc.tv
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'comment_form_defaults', 'wpgn_comment_form_defaults' );

function wpgn_comment_form_defaults( $defaults ) {

	$text                            = __( 'This website displays user images from %s.', 'wp-gravatar-notice' );
	$defaults['comment_notes_after'] = '<p class="comment-notes gravatar-notice">' . sprintf( $text, '<a rel="nofollow" href="https://gravatar.com">gravatar.com</a>' ) . '</p>';

	return $defaults;
}

add_action('plugins_loaded', 'wpgn_load_textdomain');

function wpgn_load_textdomain() {
	load_plugin_textdomain('wp-gravatar-notice', false, dirname(plugin_basename(__FILE__)) . '/language/');
}

?>