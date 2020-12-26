<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Advanced Forms Pro ReplyTo',
        'icon'      => 'email-send',
        'color'     => '#00ACC1',
        'path'      => __FILE__,
    ]);
} );