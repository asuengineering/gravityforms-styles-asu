<?php
/**
 * Plugin Name:     Gravity Forms - Styles for ASU
 * Plugin URI:      https://github.com/asuengineering/gravityforms-styles-asu  
 * Description:     A working stylesheet for Gravity Forms intended to look like the proposed styles in the <a href="https://unity.web.asu.edu/@asu-design-system/bootstrap4-theme/index.html?path=/story/components-form-fields--text-inputs" target="_blank>Universal Design System (UDS)</a> for ASU
 * Author:          Steve Ryan
 * Author URI:      https://engineering.asu.edu
 * Text Domain:     gravityforms-styles-asu
 * Version:         0.1.0
 *
 * @package         Gravityforms_Styles_Asu
 */


/* Enqueue scripts and stylesheets. */
add_action( 'wp_enqueue_scripts', 'gf_asu_style_enqueue_scripts' );
function gf_asu_style_enqueue_scripts() {
	wp_enqueue_script( 'gf-asu-scripts', plugin_dir_url( __FILE__ ) . '/js/custom.js', array('jquery'), null );
    wp_enqueue_style( 'gf-asu-styles', plugin_dir_url( __FILE__ ) . '/css/gf-asu-styles.css', array(), null );
}