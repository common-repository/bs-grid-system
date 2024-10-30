<?php
/**
 * Plugin Name:       Bs grid system
 * Description:       Bootstrap grid system for Guttenberg block editor.
 * Requires at least: 5.8
 * Tested up to:      6.0
 * Requires PHP:      7.0
 * Version:           0.4.0
 * Author:            Roman Nechaiev
 * License:           GPLv2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       bs-grid-system
 *
 */

function bs_grid_block_init()
{
    register_block_type(__DIR__ . '/build/Row');
    register_block_type(__DIR__ . '/build/Column');
     
    wp_set_script_translations('bs-grid-system-editor', 'bs-grid-system');
}
add_action('init', 'bs_grid_block_init');

function bs_grid_language()
{
    load_plugin_textdomain('bs-grid-system', false, dirname(plugin_basename(__FILE__)));
}
add_action('plugins_loaded', 'bs_grid_language');
