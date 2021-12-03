<?php
// Función para cargar los shortcodes al iniciar WP
function jmd_init_shortcodes(){
	// Shortcode para mostrar todos los platos
	function jmd_create_shortcode_platos_post_type(){
		ob_start();
        require plugin_dir_path(__FILE__).'mostrar_carta.php';
		$out = ob_get_clean();
		return $out;
	}
	add_shortcode('wp-mostrar-carta', 'jmd_create_shortcode_platos_post_type');
}
add_action('init', 'jmd_init_shortcodes');

