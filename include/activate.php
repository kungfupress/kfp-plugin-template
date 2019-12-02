<?php
/**
 * Acciones a realizar durante la activación del plugin:
 * - grabar parámetros en la tabla options de WordPress
 * - crear tablas personalizadas
 * - crear registros iniciales en tablas personalizadas
 *
 * @package kfp_plugin_name
 */

defined( 'ABSPATH' ) || die();

register_activation_hook( KFP_PLUGIN_NAME_PLUGIN_FILE, 'kfp_plugin_name_create_options' );
/**
 * Crea o actualiza parámetros en la tabla options
 *
 * @return void
 */
function kfp_plugin_name_activate() {
	// Graba o actualiza la versión del plugin en las option de WordPress.
	update_option( 'kfp_plugin_name_plugin_version', KFP_PLUGIN_NAME_VERSION );
	// Utiliza un array para contener el resto de opciones si son sencillas.
	$kfp_plugin_name_options = array(
		'el_mejor_plugin_del_mundo' => true,
	);
	update_option( 'kfp_plugin_name_options', $kfp_plugin_name_options );
}

register_activation_hook( KFP_PLUGIN_NAME_PLUGIN_FILE, 'kfp_plugin_name_create_custom_tables' );
/**
 * Crea tablas personalizadas si son necesarias
 *
 * @return void
 */
function kfp_plugin_name_create_custom_tables() {
	global $wpdb;
	$sql             = array();
	$tabla_1         = $wpdb->prefix . 'tabla_1';
	$tabla_2         = $wpdb->prefix . 'tabla_2';
	$charset_collate = $wpdb->get_charset_collate();

	// Consultas para crear las tablas:
	// si la tabla ya existe no la crea sino que la modifica
	// con los posibles cambios y sin pérdida de datos.
	$sql[] = "
		CREATE TABLE $tabla_1 (
        		id mediumint(9) NOT NULL AUTO_INCREMENT,
        		campo_1 varchar(100) NOT NULL,
			PRIMARY KEY (id)
        	) $charset_collate
		";
	$sql[] = "
		CREATE TABLE $tabla_2 (
        		id mediumint(9) NOT NULL AUTO_INCREMENT,
        		campo_1 varchar(100) NOT NULL,
			PRIMARY KEY (id)
        	) $charset_collate
		";

		include_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}
