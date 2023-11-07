<?php 
/**site settings page**/
function custom_theme_settings_page() {
    add_menu_page(
        'Site Settings',
        'Site Settings',
        'manage_options',
        'custom-theme-settings', //slug
        'custom_theme_settings_form',//form function
        'dashicons-admin-site-alt3', //icon
        99
    );
}
add_action('admin_menu', 'custom_theme_settings_page');

function custom_theme_settings_form() {
    ?>
    <div class="wrap">
        <h2>Site Settings</h2>
        <form method="post" action="options.php">
            <?php
            settings_fields('custom-theme-settings-group');
            do_settings_sections('custom-theme-settings-page');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function custom_theme_initialize_settings() {
    register_setting('custom-theme-settings-group', 'site_title');
    register_setting('custom-theme-settings-group', 'site_social_facebok');
    register_setting('custom-theme-settings-group', 'site_contact_phone');
    // Add more settings fields as needed
}
add_action('admin_init', 'custom_theme_initialize_settings');


function custom_theme_settings_fields() {
    add_settings_section('custom-theme-general', 'General Settings', 'custom_theme_general_section', 'custom-theme-settings-page');
    add_settings_field('site_title', 'Site Title', 'custom_theme_site_title_field', 'custom-theme-settings-page', 'custom-theme-general');
    add_settings_field('site_social_facebok', 'Social Facebook Link', 'custom_theme_site_social_facebok_field', 'custom-theme-settings-page', 'custom-theme-general');
    add_settings_field('site_contact_phone', 'Contact Person phone', 'custom_theme_site_contact_phone_field', 'custom-theme-settings-page', 'custom-theme-general');
    // Add more fields as needed
}
add_action('admin_init', 'custom_theme_settings_fields');

function custom_theme_general_section() {
    // Section description (if needed)
}

function custom_theme_site_title_field() {
    $site_title = get_option('site_title');
    echo '<input type="text" name="site_title" value="' . esc_attr($site_title) . '" />';
}

function custom_theme_site_contact_phone_field() {
    $site_contact_phone = get_option('site_contact_phone');
    echo '<input type="text" placeholder="Contact person phone" name="site_contact_phone" value="' . esc_attr($site_contact_phone) . '" />';
}

function custom_theme_site_social_facebok_field() {
    $site_social_facebok = get_option('site_social_facebok');
    echo '<input type="text" placeholder="Facebook Page Link" name="site_social_facebok" value="' . esc_attr($site_social_facebok) . '" />';
}

/***Get setting field data using below syntex****/
get_option('site_social_facebok'); //site_social_facebok is field name
