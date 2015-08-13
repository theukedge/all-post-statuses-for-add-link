<?php

/*
Plugin Name: All Post Statuses for Add Link
Plugin URI: https://github.com/theukedge/all-post-statuses-for-add-link
Description: Adds all post statuses to the "Add Link" modal in the WordPress editor, allowing you to link to future content, draft posts, private items etc.
Author: Dave Clements
Author URI: https://www.theukedge.com
Version: 1.1
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

/* ---------------------------------- *
 * constants
 * ---------------------------------- */

if ( !defined( 'APSFAL_PLUGIN_DIR' ) ) {
	define( 'APSFAL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
}
if ( !defined( 'APSFAL_PLUGIN_URL' ) ) {
	define( 'APSFAL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

/* ---------------------------------- *
 * includes
 * ---------------------------------- */

include( APSFAL_PLUGIN_DIR . 'includes/add-post-statuses.php' );
