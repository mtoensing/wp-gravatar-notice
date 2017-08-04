<?php

/*
Plugin Name: WP Gravatar Notice
Description: Displays a notice that this blog uses the gravatars service for user images in the comment section.
Plugin URI:  https://github.com/mtoensing/wp-gravatar-notice/
Version:     0.1
Text Domain: wp-gravatar-notice
Domain Path: /language
Author:      MarcDK
Author URI:  http://marc.tv
License URI: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

add_filter( 'comment_form_defaults', 'wpgn_comment_form_defaults' );

function wpgn_comment_form_defaults( $defaults ) {

	$text                            = __( 'This website displays user images from %s.', 'wp-gravatar-notice' );
	$defaults['comment_notes_after'] = '<p class="comment-notes">' . sprintf( $text, '<a rel="nofollow" href="https://gravatar.com">gravatar.com</a>' ) . '</p>';

	return $defaults;
}
?>