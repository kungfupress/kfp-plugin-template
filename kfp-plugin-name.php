<?php

/**
 * Plugin Name
 *
 * @category Categoría
 * @package  kfp_plugin_name
 * @author   Juanan Ruiz <kungfupress@gmail.com>
 * @license  GPLv2 http://www.gnu.org/licenses/gpl-2.0.txt
 * @link     https://github.com/kungfupress/plugin-name
 *
 * @wordpress-plugin
 * Plugin Name:  KFP Plugin Name
 * Plugin URI:   https://github.com/kungfupress/plugin-name
 * Description:  Descripción del plugin.
 * Version:      0.0.1
 * Author:       Juanan Ruiz
 * Author URI:   https://kungfupress.com/
 * PHP Version:  5.6
 */

if ( ! defined( 'KFP_PLUGIN_NAME_DIR' ) ) {
	define( 'KFP_PLUGIN_NAME_DIR', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'KFP_PLUGIN_NAME_URL' ) ) {
	define( 'KFP_PLUGIN_NAME_URL', plugin_dir_url( __FILE__ ) );
}
$default_headers = array( 'Version' => 'Version' );
$plugin_data     = get_file_data( __FILE__, $default_headers, 'plugin' );
if ( ! defined( 'KFP_PLUGIN_NAME_VERSION' ) ){
	define( 'KFP_PLUGIN_NAME_VERSION', $plugin_data['Version'] );
}
