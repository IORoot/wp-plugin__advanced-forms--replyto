<?php
/*
Plugin Name: _ANDYP - Advanced Forms Pro - Add Reply-to Header
Plugin URI: https://londonparkour.com
Description: <strong>🧬FILTER</strong> | Emails from Advanced Forms Pro do not have the reply-to header by default.
Version: 1.0.0
Author: Andy Pearson
Author URI: https://londonparkour.com
*/

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


function filter_email_headers( $headers, $email, $form, $fields ) {

    // Add new header from the 'email' field.
    $headers[] = 'Reply-To: '.$fields[2]['value'];
    
    return $headers;
}

add_filter( 'af/form/email/headers', 'filter_email_headers', 10, 4 );