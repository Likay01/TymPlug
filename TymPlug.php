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
    return '<p>Current time in South Africa is: ' . $current_time . '</p>';
}
add_shortcode('sa_time', 'sa_time_shortcode');
