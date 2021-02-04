<?php
/**
 * Plugin Name: WP Rocket | Remove Admin Notices
 * Description: Remove admin notices on managed hosts (like GoDaddy) that disable WP Rocket's page caching, and use their own instead.
 * Plugin URI:  https://github.com/bhadaway/wp-rocket-remove-admin-notices
 * Author:      WP Rocket Support Team
 * Author URI:  https://wp-rocket.me/
 * License:     GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * © 2021 SAS WP MEDIA
 */

// WP Rocket namespace
namespace WP_Rocket\Helpers\remove_admin_notices;

// Deny direct access to this file
defined( 'ABSPATH' ) or die();

// Remove admin notices
add_action( 'wp_rocket_loaded', function() {
	remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions' );
	remove_action( 'admin_notices', 'rocket_warning_advanced_cache_permissions' );
	remove_action( 'admin_notices', 'rocket_warning_advanced_cache_not_ours' );
} );