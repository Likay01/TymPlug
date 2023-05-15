<?php

/*
 * Plugin Name: TymPlug
 * Description: Description: A simple plugin to display the current time.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Lindokuhle Mgoqi
 */

 function sa_time_shortcode() {
    date_default_timezone_set('Africa/Johannesburg');
    $current_time = date('h:i:s A');
    return '<p> Site Achieved at : ' . $current_time . ' TymPlug</p>';
}
add_shortcode('tym', 'sa_time_shortcode');
 
add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'TymPlug',
        'TymPlug',
        'manage_options',
        'wporg',
        'wporg_options_page_html',
        'dashicons-share-alt',
        20
    );
}
function wporg_options_page_html () {
    echo '<h1>TymPlug</h1>';
    echo '<p>A simple plugin to display the current time.</p>';
}
