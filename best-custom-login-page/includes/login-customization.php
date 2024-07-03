<?php
// Security check
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Customize login page
function bclp_customize_login_page() {
    $background_image = get_option('bclp_background_image');
    $background_color = get_option('bclp_background_color');
    $logo_url = get_option('bclp_logo_url');
    echo '<style>';
    echo 'body.login { background-image: url("' . esc_url($background_image) . '"); background-color: ' . esc_attr($background_color) . '; background-size: ' . 'cover' . '; }';
    echo 'body.login h1 a { background-image: url("' . esc_url($logo_url) . '"); }';
    echo '</style>';
}
add_action('login_enqueue_scripts', 'bclp_customize_login_page');

// Customize login form
function bclp_customize_login_form() {
    $form_background_color = get_option('bclp_form_background_color');
    $form_text_color = get_option('bclp_form_text_color');
    $form_border_color = get_option('bclp_form_border_color');
    $form_border_radius = get_option('bclp_form_border_radius');
    echo '<style>';
    echo 'body.login form { background-color: ' . esc_attr($form_background_color) . '; color: ' . esc_attr($form_text_color) . '; }';
    echo 'body.login form input[type="text"], body.login form input[type="password"] { border: 1px solid ' . esc_attr($form_border_color) . '; border-radius: ' . esc_attr($form_border_radius) . 'px; }';
    echo '</style>';
}
add_action('login_enqueue_scripts', 'bclp_customize_login_page');
add_action('login_enqueue_scripts', 'bclp_customize_login_form');
?>


