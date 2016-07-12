<?php
/**
 * Plugin Name: BBA Logistics
 * Plugin URI: https://bbalogistics.com.au/
 * Description: Multi Carrier Shipping and Logistics Technology able to seamlessly integrate into your Woo cart.
 * Version: 1.0.0
 * Author: BBA Logistics
 * Author URI: https://bbalogistics.com.au/
 *
 * @package BBALogistics
 * @category Core
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'BBALogistics' ) ) :

/**
 * Main Class.
 *
 * @class BBALogistics
 */
final class BBALogistics {

    /**
     * Plugin version.
     *
     * @var string
     */
    public $version = '1.0.0';

    /**
     * The single instance of the class.
     *
     * @var BBALogistics
     */
    protected static $_instance = null;

    /**
     * Main Instance.
     *
     * @return BBALogistics
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Constructor.
     */
    public function __construct() {
        $this->define_constants();
        $this->includes();
        $this->init_hooks();

        do_action( 'bbalogistics_loaded' );
    }

    /**
     * Define Constants.
     */
    private function define_constants() {
        $this->define( 'BBA_PLUGIN_FILE', __FILE__ );
        $this->define( 'BBA_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );
        $this->define( 'BBA_VERSION', $this->version );
    }

    /**
     * Define constant if not already set.
     *
     * @param  string $name
     * @param  string|bool $value
     */
    private function define( $name, $value ) {
        if ( ! defined( $name ) ) {
            define( $name, $value );
        }
    }

    /**
     * Include required core files used in admin and on the frontend.
     */
    public function includes() {
        include_once( 'includes/bba-functions.php' );
        include_once( 'includes/bba-hooks.php' );
        include_once( 'includes/class-bba-install.php' );
    }

    /**
     * Hook into actions and filters.
     */
    private function init_hooks() {
        add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
    }

    /**
     * After Wordpress plugins loaded.
     */
    public function plugins_loaded() {
        $plugins = get_option( 'active_plugins' );
        if ( in_array( 'woocommerce/woocommerce.php', $plugins ) ) {
            include_once( 'includes/class-bba-shipping-rules.php' );
        }
    }
}

endif;

/**
 * Main instance.
 *
 * Returns the main instance to prevent the need to use globals.
 * @return BBALogistics
 */
function BBA() {
    return BBALogistics::instance();
}

BBA();
