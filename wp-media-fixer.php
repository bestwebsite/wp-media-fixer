<?php
/**
 * Plugin Name: WP Media Fixer
 * Description: Scans and repairs incorrect or insecure media URLs in the WordPress database after migrations or SSL changes.
 * Version: 1.0.0
 * Author: Best Website
 * Author URI: https://bestwebsite.com/
 * License: GPL-2.0+
 * Text Domain: wp-media-fixer
 */

if (!defined('ABSPATH')) exit;

define('WPMF_VERSION', '1.0.0');
define('WPMF_PATH', plugin_dir_path(__FILE__));
define('WPMF_URL', plugin_dir_url(__FILE__));

require_once WPMF_PATH . 'includes/class-wpmf-core.php';
require_once WPMF_PATH . 'includes/class-wpmf-admin.php';

if (defined('WP_CLI') && WP_CLI) {
    require_once WPMF_PATH . 'includes/class-wpmf-cli.php';
}
