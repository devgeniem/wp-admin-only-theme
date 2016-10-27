<?php

// Bail if wp-cli is used
if ( defined('WP_CLI') and WP_CLI) { return; }

// Redirect non logged in users to wp-login.php
add_action( 'init', function(){
    if ( ! is_user_logged_in() ) {
        wp_redirect( wp_login_url() );
    }
});

// Load translations
add_action( 'after_setup_theme', function() {
    load_theme_textdomain( 'wp-admin-only-theme', get_template_directory() . '/lang' );
});
