<?php
// Security check
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
// Add menu item in the admin panel
add_action('admin_menu', 'bclp_menu');
function bclp_menu() {
    add_submenu_page('options-general.php', 'BCLP Settings', 'BCLP Settings', 'manage_options', 'bclp-settings', 'bclp_settings_page');
}
// Create settings page
function bclp_settings_page() {
    ?>
    <div class="wrap">
        <h2>Best Custom Login Page Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('bclp_settings');
            do_settings_sections('bclp_settings');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}
// Register settings and fields
add_action('admin_init', 'bclp_register_settings');
function bclp_register_settings() {
    register_setting('bclp_settings', 'bclp_background_image');
    register_setting('bclp_settings', 'bclp_background_color');
    register_setting('bclp_settings', 'bclp_logo_url');
    add_settings_section('bclp_general_section', 'General Settings', 'bclp_general_section_callback', 'bclp_settings');
    add_settings_field('bclp_background_image', 'Background Image URL', 'bclp_background_image_callback', 'bclp_settings', 'bclp_general_section');
    add_settings_field('bclp_background_color', 'Background Color', 'bclp_background_color_callback', 'bclp_settings', 'bclp_general_section');
    add_settings_field('bclp_logo_url', 'Logo URL', 'bclp_logo_url_callback', 'bclp_settings', 'bclp_general_section');
}

// Callbacks for settings fields
function bclp_general_section_callback() {
    echo 'Customize the login page appearance.';
}
function bclp_background_image_callback() {
    $value = get_option('bclp_background_image');
    echo '<input type="text" name="bclp_background_image" value="' . esc_attr($value) . '" />';
}
function bclp_background_color_callback() {
    $value = get_option('bclp_background_color');
    echo '<input type="text" name="bclp_background_color" value="' . esc_attr($value) . '" />';
}
function bclp_logo_url_callback() {
    $value = get_option('bclp_logo_url');
    echo '<input type="text" name="bclp_logo_url" value="' . esc_attr($value) . '" />';
}

// Register settings and fields for form customization
add_action('admin_init', 'bclp_register_form_settings');
function bclp_register_form_settings() {
    register_setting('bclp_settings', 'bclp_form_background_color');
    register_setting('bclp_settings', 'bclp_form_text_color');
    register_setting('bclp_settings', 'bclp_form_border_color');
    register_setting('bclp_settings', 'bclp_form_border_radius');
    add_settings_section('bclp_form_section', 'Login Form Settings', 'bclp_form_section_callback', 'bclp_settings');
    add_settings_field('bclp_form_background_color', 'Form Background Color', 'bclp_form_background_color_callback', 'bclp_settings', 'bclp_form_section');
    add_settings_field('bclp_form_text_color', 'Form Text Color', 'bclp_form_text_color_callback', 'bclp_settings', 'bclp_form_section');
    add_settings_field('bclp_form_border_color', 'Form Border Color', 'bclp_form_border_color_callback', 'bclp_settings', 'bclp_form_section');
    add_settings_field('bclp_form_border_radius', 'Form Border Radius', 'bclp_form_border_radius_callback', 'bclp_settings', 'bclp_form_section');
}

// Callbacks for form settings fields
function bclp_form_section_callback() {
    echo 'Customize the login form appearance.';
}
function bclp_form_background_color_callback() {
    $value = get_option('bclp_form_background_color');
    echo '<input type="text" name="bclp_form_background_color" value="' . esc_attr($value) . '" />';
}
function bclp_form_text_color_callback() {
    $value = get_option('bclp_form_text_color');
    echo '<input type="text" name="bclp_form_text_color" value="' . esc_attr($value) . '" />';
}
function bclp_form_border_color_callback() {
    $value = get_option('bclp_form_border_color');
    echo '<input type="text" name="bclp_form_border_color" value="' . esc_attr($value) . '" />';
}
function bclp_form_border_radius_callback() {
    $value = get_option('bclp_form_border_radius');
    echo '<input type="number" name="bclp_form_border_radius" value="' . esc_attr($value) . '" />';
}

?>


