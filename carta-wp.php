<?php

/**
 * Plugin Name: Carta Wp
 * Plugin URI: https://triplejota.com
 * Description: Añade una carta con filtrado a la página de tu restaurante o cafetería.
 * Version: 1.0
 * Author: Jesús Martínez
 * Author URI: https://triplejota.com
 * Text Domain: jmd_platos
 * License: GPL2
 */

if (!function_exists('jmd_install')) {
	function jmd_install() {
		// Acciones a ejecutar cuando instalamos el plugin
		//require_once 'Activador.php';
	}
}

if (!function_exists('jmd_deactivation')) {
	function jmd_deactivation() {
		// Acciones que se van a ejecutar cuando desactivemos el plugin

		// Borra los enlaces permanentes
		flush_rewrite_rules();

	}
}

/**
 * La desinstalación del plugin (Borrar) la podemos hacer mediante esta función o mediante uninstall.php
 * situado en el directorio raíz del plugin.
 */
if (!function_exists('jmd_desinstall')) {
	function jmd_desinstall() {
		//Acciones a realizar antes de borrar todos los datos que se encuentran en la cartepa del plugin


	}
}

// Seteamos el hook de activación para el plugin
register_activation_hook(__FILE__, 'jmd_install');
// Seteamos el hook de activación para el plugin
register_deactivation_hook(__FILE__, 'jmd_deactivation');
// Seteamos el hook de activación para el plugin
register_uninstall_hook(__FILE__, 'jmd_desinstall');

/* Encolamos archivos */
include plugin_dir_path(__FILE__) . 'includes/admin/functions.php';
include plugin_dir_path(__FILE__) . 'includes/public/functions.php';
include plugin_dir_path(__FILE__) . 'includes/schema/functions.php';

