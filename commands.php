<?php

class wpcspc_commands extends WP_CLI_Command {

	function check_posts( $args, $assoc_args ) {

		global $wpdb;
		$now = gmdate( 'Y-m-d H:i:00' );

		WP_CLI::line( 'GMT/UTC time is: ' . $now );

		$args       = array(
			'public'              => true,
			'exclude_from_search' => false,
			'_builtin'            => false
		);
		$post_types = get_post_types( $args, 'names', 'and' );
		$str        = implode( "','", $post_types );
		$post_types = $str ? "('post','page','{$str}')" : "('post','page')";

		WP_CLI::line( 'Checking post types: ' . $post_types );

		$sql = "Select ID from {$wpdb->posts} WHERE post_type in {$post_types} AND post_status='future' AND post_date_gmt<'{$now}'";

		$results = $wpdb->get_results($sql);

		if($results) {
			foreach( $results as $post ) {
				WP_CLI::line( 'Scheduled post ID: ' . $post->ID);
			}
		} else {
			WP_CLI::line( 'No posts are scheduled.' );
		}

	}


}

WP_CLI::add_command( 'wpcspc', 'wpcspc_commands' );
