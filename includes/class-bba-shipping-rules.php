<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * BBALogistics_Shipping_Rules Class.
 */
class BBALogistics_Shipping_Rules extends WC_Shipping_Method {

    /**
     * Constructor.
     */
    public function __construct() {

        $this->id                 = 'bbalogistics_rules';
        $this->title              = __( 'BBA Logistics', 'bbalogistics' );
        $this->method_title       = __( 'BBA Logistics', 'bbalogistics' );
        $this->method_description = __( 'Multi Carrier Shipping and Logistics Technology able to seamlessly integrate into your Woo cart.', 'bbalogistics' );
        $this->init();

        add_action( 'woocommerce_update_options_shipping_' . $this->id, array( $this, 'process_admin_options' ) );
    }

    /**
     * Initialize.
     */
    public function init() {
        $this->init_form_fields();
        $this->init_settings();
    }

    /**
     * Initialize settings form fields.
     */
    public function init_form_fields() {
        $this->form_fields = include( 'settings/bbalogistics-rules.php' );
    }
}
