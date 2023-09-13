<?php

/**
 * nReach Livechat
 *
 * Plugin Name: nReach Livechat
 * Version: 1.0.2
 * Plugin URI: http://www.nreach.tech/
 * Description: Simple plugin to install the nReach Livechat widget onto any Wordpress site.
 * Author: Nishtha
 * Author URI: http://www.nishtha.biz/
 * Requires at least: 4.9
 * Requires PHP: 5.6 or later
 * License: GPLv3
 * License Url: https://www.gnu.org/licenses/gpl-3.0.html
 *
 */

if (!defined('ABSPATH')) {
    die('Invalid request.');
}

function inject_nreach_script()
{
    if (\Elementor\Plugin::$instance->preview->is_preview_mode()) return;
    echo '<script type="module" defer src="https://lc.nreach.tech/chatwidget.js"></script>';
}

add_action('wp_head', 'inject_nreach_script');
