<?php
/**
 * Plugin Name: Check Scheduled Posts with WP-CLI
 * Description: Checks if any posts are scheduled.
 * Version: 1.0.0
 * Author: Robert Went / Matt Radford
 * Author URI: https://www.robertwent.com
 * License: GPL3
 */

if (defined( 'WP_CLI' ) && WP_CLI) {
	include 'commands.php';
}
