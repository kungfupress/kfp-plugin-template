<?php
/**
 * Acciones a realizar durante la activación del plugin
 *
 * @package kfp_plugin_name
 */

defined( 'ABSPATH' ) || die();

/**
 * Acciones para la activación del plugin
 *
 * @return void
 */
function kfp_plugin_name_activate() {
	// Guarda o actualiza la versión del plugin en las option de WordPress.
	update_option( 'kfp_plugin_name_plugin_version', KFP_PLUGIN_NAME_VERSION );
}
