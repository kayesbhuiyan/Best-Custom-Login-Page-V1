<?php
/*
Plugin Name: Best Custom Login Page
Description: The Best Custom Login Page plugin allows WordPress site owners to effortlessly personalize their login pages, providing a unique and branded user experience. Customize background images, colors, logo placement, and login form styling with ease.
Version: 1.0
Author: Kayesh Bhuiyan
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: best-custom-login-page
*/

// Security check
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Define plugin constants
define('BCLP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('BCLP_PLUGIN_URL', plugin_dir_url(__FILE__));
// Include necessary files
require_once BCLP_PLUGIN_DIR . 'includes/admin-settings.php';
require_once BCLP_PLUGIN_DIR . 'includes/login-customization.php';

// Activation and deactivation hooks
register_activation_hook(__FILE__, 'bclp_activate');
register_deactivation_hook(__FILE__, 'bclp_deactivate');

// Activation function
function bclp_activate() {
    // Add activation tasks if needed
}

// Deactivation function
function bclp_deactivate() {
    // Add deactivation tasks if needed
}
?>


