<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Shipping rules
 */
add_filter( 'woocommerce_shipping_methods', 'bbalogistics_shipping_methods' );

/**
 * Shipping calculator
 */
add_action( 'woocommerce_single_product_summary', 'bbalogistics_shipping_calculator', 100 );
