# WP Check Scheduled Posts with WP-CLI

This plugin is based on the [scheduled-post-trigger plugin](https://wordpress.org/plugins/scheduled-post-trigger/) but uses [wp-cli](https://wp-cli.org/) commands rather than running each time a user hits the site.

## Commands

There is only one command.

    php wp-cli.phar wpcspc check_posts

This checks for posts that have publish status set to 'future' with a past publishing time.

If any posts are found they will be transitioned to the 'publish' state.