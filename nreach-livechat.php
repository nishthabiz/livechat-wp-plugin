<?php

/**
 * nReach Livechat
 *
 * Plugin Name: nReach Livechat
 * Version: 1.0.7
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

function nreach_lc_inject_script()
{
    if (class_exists("Elementor\Plugin") && \Elementor\Plugin::$instance->preview->is_preview_mode()) return;
    wp_enqueue_script(
        "nreach-livechat-widget",
        "https://wc.nreach.tech/chatwidget.js",
        [],
        false,
        ["strategy" => "async", "in_footer" => true]
    );
}

add_action('wp_head', 'nreach_lc_inject_script');


add_filter('script_loader_tag', function ($tag, $handle) {
    if ($handle === 'nreach-livechat-widget') {
        return str_replace(
            '<script ',
            '<script type="module" ',
            $tag
        );
    }
    return $tag;
}, 10, 2);
