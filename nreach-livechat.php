<?php

/**
 * nReach Livechat
 *
 * Plugin Name: nReach Livechat
 * Version: 1.0.0
 * Plugin URI: http://www.nreach.tech/
 * Description: Simple plugin to install the nReach Livechat widget onto any Wordpress site.
 * Version:     1.0.0
 * Author: Nishtha
 * Author URI: http://www.nishtha.biz/
 * Requires at least: 4.9
 * Requires PHP: 5.6 or later
 *
 */

if (!defined('ABSPATH')) {
    die('Invalid request.');
}

function inject_nreach_script()
{
    echo '<script type="module" defer src="https://lc.nreach.tech/chatwidget.js"></script>';
}

add_action('wp_head', 'inject_nreach_script');
