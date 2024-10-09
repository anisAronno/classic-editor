<?php

/**
 * Plugin Name: Classic Editor
 * Plugin URI: https://wordpress.org/plugins/classic-editor/
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version: 1.0.4
 * Requires at least: 4.9
 * Requires PHP: 5.6
 * Tested up to: 5.2
 * Requires: 3.8
 * Author: WordPress Contributors
*/


require __DIR__ . '/vendor/autoload.php';

/**
 * Initialize the plugin tracker
 *
 * @return void
 */
function appsero_init_tracker_classic_editor() {

    if ( ! class_exists( 'Appsero\Client' ) ) {
      require_once __DIR__ . '/appsero/src/Client.php';
    }

    $client = new Appsero\Client( '50e315f2-af2a-4c70-b609-79bcd8da9d6a', 'Classic Editor', __FILE__ );

    // Active insights
    $client->insights()->init();

}

appsero_init_tracker_classic_editor();

