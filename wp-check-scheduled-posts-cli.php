<?php
/**
 * Plugin Name: Check Scheduled Posts with WP-CLI
 * Description: Checks if any posts have missed their publishing time and publishes them.
 * Version: 1.0
 * Author: Robert Went
 * Author URI: https://www.robertwent.com
 * License: GPL3
 */

if (defined( 'WP_CLI' ) && WP_CLI) {
	include 'commands.php';
}