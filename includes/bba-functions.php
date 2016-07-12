<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Shipping rules
 */
function bbalogistics_shipping_methods( $methods ) {
    array_push( $methods, 'BBALogistics_Shipping_Rules' );
    return $methods;
}
