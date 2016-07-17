<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get template and including the file.
 *
 * @access public
 * @param string $template_name
 * @param array $args (default: array())
 * @param string $template_path (default: '')
 * @param string $default_path (default: '')
 */
function bbalogistics_get_template( $template_name, $args = array(), $template_path = '', $default_path = '' ) {
	if ( $args && is_array( $args ) ) {
		extract( $args );
	}

	$located = bbalogistics_locate_template( $template_name, $template_path, $default_path );

	if ( ! file_exists( $located ) ) {
		return;
	}

	// Allow 3rd party plugin filter template file from their plugin.
	$located = apply_filters( 'bbalogistics_get_template', $located, $template_name, $args, $template_path, $default_path );

	do_action( 'bbalogistics_before_template_part', $template_name, $template_path, $located, $args );

	include( $located );

	do_action( 'bbalogistics_after_template_part', $template_name, $template_path, $located, $args );
}

/**
 * Locate a template and return the path for inclusion.
 *
 * @access public
 * @param string $template_name
 * @param string $template_path (default: '')
 * @param string $default_path (default: '')
 * @return string
 */
function bbalogistics_locate_template( $template_name, $template_path = '', $default_path = '' ) {
	if ( ! $template_path ) {
		$template_path = BBA()->template_path();
	}

	if ( ! $default_path ) {
		$default_path = BBA()->plugin_path() . '/templates/';
	}

	// Look within passed path within the theme - this is priority.
	$template = locate_template(
		array(
			trailingslashit( $template_path ) . $template_name,
			$template_name
		)
	);

	// Get default template
	if ( ! $template ) {
		$template = $default_path . $template_name;
	}

	// Return what we found.
	return apply_filters( 'bbalogistics_locate_template', $template, $template_name, $template_path );
}

/**
 * Shipping rules
 */
function bbalogistics_shipping_methods( $methods ) {
    array_push( $methods, 'BBALogistics_Shipping_Rules' );
    return $methods;
}

/**
 * Get shipping calculator template
 */
function bbalogistics_shipping_calculator() {
    bbalogistics_get_template( 'shipping/calculator.php' );
}
