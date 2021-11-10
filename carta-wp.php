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

$version_plugin = '1.0';

// Cargamos los estilos del front-end
if (!function_exists('jmd_enqueue_styles_front')) {
	function jmd_enqueue_styles_front() {
		// hoja de estilos front
		wp_enqueue_style(
			'public_styles',
			plugins_url('public/css/carta_wp-public.min.css',__FILE__),
			array(),
			$version_plugin,
			'all'
		);
		// hoja de estilos bootstrap
		wp_enqueue_style(
			'bootstrap_public_styles',
			plugins_url('helpers/bootstrap/css/bootstrap.min.css',__FILE__),
			array(),
			$version_plugin,
			'all'
		);
		// hoja de estilos del plugin de filtrar jQuery
		wp_enqueue_style(
			'filtro_cwp_public_styles',
			plugins_url('helpers/filtro_cwp/css/filtro_cwp.min.css',__FILE__),
			array(),
			$version_plugin,
			'all'
		);

		// scripts del front
		wp_enqueue_script(
			'public_scripts',
			plugins_url('public/js/carta_wp-public.js',__FILE__),
			array(),
			$version_plugin,
			true
		);
		// scripts de bootstrap
		wp_enqueue_script(
			'bootstrap_scripts',
			plugins_url('helpers/bootstrap/js/bootstrap.bundle.min.js',__FILE__),
			array(),
			$version_plugin,
			true
		);
		// scripts del plugin de filtrar jQuery
		wp_enqueue_script(
			'filtro_cwp_public_scripts',
			plugins_url('helpers/filtro_cwp/js/filtro_cwp.min.js',__FILE__),
			array( 'jquery' ), // Encolamos después de cargar jquery
			$version_plugin,
			true
		);


	}
	add_action('wp_enqueue_scripts', 'jmd_enqueue_styles_front');
}

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

