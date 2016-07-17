<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$settings['enabled'] = array(
    'title'   => __( 'Enable', 'bbalogistics' ),
    'type'    => 'checkbox',
    'label'   => __( 'Enable BBA Logistics shipping rules', 'bbalogistics' ),
    'default' => 'no',
);

$settings['api_credentials'] = array(
    'title'   => __( 'API Credentials', 'bbalogistics' ),
    'type'    => 'title',
);

$settings['acc_username'] = array(
    'title' 		=> __( 'Username', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
    'description' 	=> __( 'BBA Logistics account username.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['acc_password'] = array(
    'title' 		=> __( 'Password', 'bbalogistics' ),
    'type' 			=> 'password',
    'default'		=> '',
    'description' 	=> __( 'BBA Logistics account password.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['client_id'] = array(
    'title' 		=> __( 'Application ID', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
    'description' 	=> __( 'Application ID is provided by BBA Logistics.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['client_secret'] = array(
    'title' 		=> __( 'Application Secret Key', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
    'description' 	=> __( 'Application secret key is provided by BBA Logistics.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['auth_code'] = array(
    'title' 		=> __( 'Authorization Code', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
    'description' 	=> __( 'Authorization code is provided by BBA Logistics.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['package_settings'] = array(
    'title'   => __( 'Default Package Settings', 'bbalogistics' ),
    'type'    => 'title',
);

$settings['default_length'] = array(
    'title' 		=> __( 'Length', 'bbalogistics' ),
    'type' 			=> 'decimal',
    'default'		=> '',
    'description' 	=> __( 'Default package length.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['default_width'] = array(
    'title' 		=> __( 'Width', 'bbalogistics' ),
    'type' 			=> 'decimal',
    'default'		=> '',
    'description' 	=> __( 'Default package width.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['default_height'] = array(
    'title' 		=> __( 'Height', 'bbalogistics' ),
    'type' 			=> 'decimal',
    'default'		=> '',
    'description' 	=> __( 'Default package height.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['default_weight'] = array(
    'title' 		=> __( 'Weight', 'bbalogistics' ),
    'type' 			=> 'decimal',
    'default'		=> '',
    'description' 	=> __( 'Default package weight.', 'bbalogistics' ),
    'desc_tip'		=> true,
);

$settings['warehouse_details'] = array(
    'title'   => __( 'Warehouse Details', 'bbalogistics' ),
    'type'    => 'title',
);

$settings['country'] = array(
    'title' 		=> __( 'Country', 'bbalogistics' ),
    'type' 			=> 'country',
    'class'         => 'wc-enhanced-select',
    'css'           => 'min-width:350px;',
    'placeholder'   => 'Choose a country',
    'options'       => WC()->countries->get_countries()
);

$settings['postcode'] = array(
    'title' 		=> __( 'Postcode', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
);

$settings['city'] = array(
    'title' 		=> __( 'City', 'bbalogistics' ),
    'type' 			=> 'text',
    'default'		=> '',
);

$settings['shipping_calculator'] = array(
    'title'   => __( 'Shipping Calculator', 'bbalogistics' ),
    'type'    => 'title',
);

$settings['prod_calculator'] = array(
    'title' 		=> __( 'Enable', 'bbalogistics' ),
    'type' 			=> 'checkbox',
    'label' 		=> __( 'Enable shipping calculator in product page', 'bbalogistics' ),
    'default' 		=> 'no',
);

return $settings;
