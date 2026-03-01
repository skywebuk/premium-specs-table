<?php
/**
 * Plugin Name: Premium Specs Table for Elementor
 * Description: A fully customizable premium specifications table widget for Elementor with drag & drop reordering, icon selection, visibility controls, and shortcode support.
 * Version: 1.0.0
 * Author: Sky Web Design
 * Author URI: https://skywebdesign.co.uk
 * Text Domain: premium-specs-table
 * Requires Plugins: elementor
 */

if (!defined('ABSPATH')) {
    exit;
}

define('PREMIUM_SPECS_TABLE_VERSION', '1.0.0');
define('PREMIUM_SPECS_TABLE_PATH', plugin_dir_path(__FILE__));
define('PREMIUM_SPECS_TABLE_URL', plugin_dir_url(__FILE__));

/**
 * Main Plugin Class
 */
final class Premium_Specs_Table {

    private static $_instance = null;

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __construct() {
        add_action('plugins_loaded', [$this, 'init']);
    }

    private function __clone() {}

    public function __wakeup() {
        throw new \Exception('Cannot unserialize a singleton.');
    }

    public function init() {
        load_plugin_textdomain('premium-specs-table', false, dirname(plugin_basename(__FILE__)) . '/languages/');

        // Check if Elementor is installed and activated
        if (!did_action('elementor/loaded')) {
            add_action('admin_notices', [$this, 'admin_notice_missing_elementor']);
            return;
        }

        // Register widget
        add_action('elementor/widgets/register', [$this, 'register_widgets']);
        
        // Enqueue styles
        add_action('elementor/frontend/after_enqueue_styles', [$this, 'frontend_styles']);
        add_action('elementor/editor/after_enqueue_styles', [$this, 'editor_styles']);
    }

    public function admin_notice_missing_elementor() {
        $message = sprintf(
            esc_html__('"%1$s" requires "%2$s" to be installed and activated.', 'premium-specs-table'),
            '<strong>Premium Specs Table</strong>',
            '<strong>Elementor</strong>'
        );
        printf('<div class="notice notice-warning is-dismissible"><p>%1$s</p></div>', $message);
    }

    public function register_widgets($widgets_manager) {
        require_once(PREMIUM_SPECS_TABLE_PATH . 'widgets/specs-table-widget.php');
        $widgets_manager->register(new \Premium_Specs_Table_Widget());

        require_once(PREMIUM_SPECS_TABLE_PATH . 'widgets/specs-table-luxury-widget.php');
        $widgets_manager->register(new \Premium_Specs_Table_Luxury_Widget());
    }

    public function frontend_styles() {
        wp_enqueue_style(
            'premium-specs-table',
            PREMIUM_SPECS_TABLE_URL . 'assets/css/frontend.css',
            [],
            PREMIUM_SPECS_TABLE_VERSION
        );
        wp_enqueue_style(
            'premium-specs-table-luxury',
            PREMIUM_SPECS_TABLE_URL . 'assets/css/frontend-luxury.css',
            [],
            PREMIUM_SPECS_TABLE_VERSION
        );
    }

    public function editor_styles() {
        wp_enqueue_style(
            'premium-specs-table-editor',
            PREMIUM_SPECS_TABLE_URL . 'assets/css/editor.css',
            [],
            PREMIUM_SPECS_TABLE_VERSION
        );
        wp_enqueue_style(
            'premium-specs-table-luxury-editor',
            PREMIUM_SPECS_TABLE_URL . 'assets/css/editor-luxury.css',
            [],
            PREMIUM_SPECS_TABLE_VERSION
        );
    }
}

Premium_Specs_Table::instance();
