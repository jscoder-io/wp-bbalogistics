<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * BBALogistics_Install Class.
 */
class BBALogistics_Install {

    /**
     * Hook in tabs.
     */
    public static function init() {
        add_filter( 'plugin_action_links_' . BBA_PLUGIN_BASENAME, array( __CLASS__, 'plugin_action_links' ) );
        add_filter( 'plugin_row_meta', array( __CLASS__, 'plugin_row_meta' ), 10, 2 );
    }

    /**
     * Show action links on the plugin screen.
     *
     * @param	mixed $links Plugin Action links
     * @return	array
     */
    public static function plugin_action_links( $links ) {
        $action_links = array(
            'settings' => '<a href="' . admin_url( 'admin.php?page=wc-settings&tab=shipping&section=bbalogistics_shipping_rules' ) . '" title="' . esc_attr( __( 'View Settings', 'bbalogistics' ) ) . '">' . __( 'Settings', 'bbalogistics' ) . '</a>',
        );

        return array_merge( $action_links, $links );
    }

    /**
     * Show row meta on the plugin screen.
     *
     * @param	mixed $links Plugin Row Meta
     * @param	mixed $file  Plugin Base file
     * @return	array
     */
    public static function plugin_row_meta( $links, $file ) {
        if ( $file == BBA_PLUGIN_BASENAME ) {
            $row_meta = array(
                'docs'    => '<a href="' . esc_url( apply_filters( 'bbalogistics_docs_url', 'https://bbalogistics.com.au/' ) ) . '" title="' . esc_attr( __( 'View Documentation', 'bbalogistics' ) ) . '">' . __( 'Docs', 'bbalogistics' ) . '</a>',
                'apidocs' => '<a href="' . esc_url( apply_filters( 'bbalogistics_apidocs_url', 'https://bbalogistics.com.au/' ) ) . '" title="' . esc_attr( __( 'View API Docs', 'bbalogistics' ) ) . '">' . __( 'API Docs', 'bbalogistics' ) . '</a>',
            );

            return array_merge( $links, $row_meta );
        }

        return (array) $links;
    }
}

BBALogistics_Install::init();
