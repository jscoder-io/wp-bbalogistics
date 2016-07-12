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

return $settings;
