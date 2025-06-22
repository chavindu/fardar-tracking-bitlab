<?php
/**
 * Plugin Name: Fardar Tracking by BitLab for WooCommerce 
 * Description: Add FDE Domestic courier tracking support via shortcode and direct URL. Supports WooCommerce Shipment Tracking plugin with custom provider.
 * Version: 1.1.1
 * Author: BitLab (Pvt) Ltd
 * Author URI: https://bitlab.lk/
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: fardar-tracking-bitlab
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class BitLab_Fardar_Tracking {

    public function __construct() {
        add_shortcode( 'bitlab_fardar_tracking', [ $this, 'tracking_shortcode' ] );
        add_action( 'admin_menu', [ $this, 'register_settings_page' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
        add_action( 'template_redirect', [ $this, 'handle_direct_url_tracking' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_bootstrap' ] );
        add_filter( 'wc_shipment_tracking_get_providers', [ $this, 'register_fardar_tracking_provider' ] );
        add_filter( 'woocommerce_shipment_tracking_default_provider', [ $this, 'set_default_fardar_provider' ] );
    }

    public function enqueue_bootstrap() {
        wp_enqueue_style(
            'bitlab-bootstrap',
            plugin_dir_url( __FILE__ ) . 'assets/css/bootstrap.min.css',
            [],
            '5.3.3'
        );
    }

    public function tracking_shortcode() {
        ob_start();
        $tracking_id = isset($_GET['trackingno']) ? sanitize_text_field( wp_unslash( $_GET['trackingno'] ) ) : '';
        $nonce_valid = isset($_GET['bitlab_tracking_nonce']) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['bitlab_tracking_nonce'] ) ), 'bitlab_tracking_action' );
        ?>
        <div class="bitlab-custom-class-tracking container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h4 class="card-title mb-4"><?php esc_html_e( 'Track Your Shipment', 'fardar-tracking-bitlab' ); ?></h4>
                            <form method="get" class="row g-3 align-items-center">
                                <?php wp_nonce_field( 'bitlab_tracking_action', 'bitlab_tracking_nonce' ); ?>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="trackingno" placeholder="<?php esc_attr_e( 'Enter Tracking Number', 'fardar-tracking-bitlab' ); ?>" required value="<?php echo esc_attr( $tracking_id ); ?>">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary w-100"><?php esc_html_e( 'Track', 'fardar-tracking-bitlab' ); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if ( $tracking_id && $nonce_valid ): ?>
                        <div class="bitlab-custom-class-tracking-result mt-4">
                            <?php echo wp_kses_post( $this->get_tracking_info( $tracking_id ) ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php wp_nonce_field('bitlab_tracking_action', 'bitlab_tracking_nonce'); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const urlParams = new URLSearchParams(window.location.search);
    const trackingInput = document.querySelector('input[name="trackingno"]');
    const nonceInput = document.querySelector('input[name="bitlab_tracking_nonce"]');

    if (urlParams.has('trackingno') && !urlParams.has('bitlab_tracking_nonce')) {
        // Populate the form field
        trackingInput.value = urlParams.get('trackingno');

        // Create a new form and submit it with nonce
        const form = trackingInput.closest('form');
        form.submit();
    }
});
</script>
        <?php
        return ob_get_clean();
    }

    public function get_tracking_info($track_id) {
        $url = "https://www.fdedomestic.com/track.php?track_number=" . urlencode($track_id);
        $response = wp_remote_get($url);

        if (is_wp_error($response)) {
            return '<div class="alert alert-danger">' . esc_html__( 'Unable to fetch tracking data. Please try again later.', 'fardar-tracking-bitlab' ) . '</div>';
        }

        $body = wp_remote_retrieve_body($response);
        if (!$body) {
            return '<div class="alert alert-warning">' . esc_html__( 'No response received from tracking server.', 'fardar-tracking-bitlab' ) . '</div>';
        }

        return '<div class="card mt-3"><div class="card-body">' . wp_kses_post($body) . '</div></div>';
    }

    public function register_settings_page() {
        add_options_page(
            'Fardar Tracking Settings',
            'Fardar Tracking',
            'manage_options',
            'bitlab-fardar-tracking',
            [ $this, 'settings_page_html' ]
        );
    }

    public function register_settings() {
        register_setting(
            'bitlab_fardar_tracking',
            'bitlab_tracking_page',
            [
                'sanitize_callback' => 'absint',
                'default' => 0,
            ]
        );

        add_settings_section('bitlab_section', 'Settings', null, 'bitlab-fardar-tracking');
        add_settings_field('bitlab_tracking_page', 'Tracking Page', [$this, 'tracking_page_dropdown'], 'bitlab-fardar-tracking', 'bitlab_section');
    }

    public function tracking_page_dropdown() {
        $pages = get_pages();
        $selected = get_option('bitlab_tracking_page');
        echo '<select name="bitlab_tracking_page">';
        foreach ($pages as $page) {
            echo '<option value="' . esc_attr($page->ID) . '" ' . selected($selected, $page->ID, false) . '>' . esc_html($page->post_title) . '</option>';
        }
        echo '</select>';
    }

    public function settings_page_html() {
        $tracking_page_id = get_option('bitlab_tracking_page');
        $tracking_page_url = $tracking_page_id ? get_permalink($tracking_page_id) : '';
        ?>
        <div class="wrap">
            <h1><?php esc_html_e( 'Fardar Tracking for WooCommerce', 'fardar-tracking-bitlab' ); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields('bitlab_fardar_tracking');
                do_settings_sections('bitlab-fardar-tracking');
                submit_button();
                ?>
            </form>

            <h2><?php esc_html_e( 'Instructions', 'fardar-tracking-bitlab' ); ?></h2>
            <p><?php esc_html_e( 'Use the shortcode', 'fardar-tracking-bitlab' ); ?> <code>[bitlab_fardar_tracking]</code> <?php esc_html_e( 'on any page to embed the tracking form.', 'fardar-tracking-bitlab' ); ?></p>
            <p><?php esc_html_e( 'Once a tracking page is selected above, you can use a direct tracking URL like:', 'fardar-tracking-bitlab' ); ?></p>
            <?php if ($tracking_page_url): ?>
                <code><?php echo esc_url(add_query_arg('trackingno', 'IND234089', $tracking_page_url)); ?></code>
            <?php else: ?>
                <code><?php echo esc_url( home_url( '/tracking-page?trackingno=IND234089' ) ); ?></code>
            <?php endif; ?>
            <p>&copy; <?php echo esc_html( gmdate('Y') ); ?> <a href="https://bitlab.lk" target="_blank" rel="noopener noreferrer">BitLab (Pvt) Ltd</a></p>
        </div>
        <?php
    }

    public function handle_direct_url_tracking() {
        $selected_page = get_option('bitlab_tracking_page');
        if (     !is_page($selected_page) ||     !isset($_GET['trackingno']) ||     !isset($_GET['bitlab_tracking_nonce']) ||     !wp_verify_nonce( sanitize_text_field( wp_unslash( $_GET['bitlab_tracking_nonce'] ) ), 'bitlab_tracking_action' ) ) {     return; }

        add_filter('the_content', function($content) {
            return $this->tracking_shortcode();
        });
    }

    public function register_fardar_tracking_provider( $providers ) {
        $tracking_page_id = get_option('bitlab_tracking_page');
        $tracking_page_url = $tracking_page_id ? get_permalink($tracking_page_id) : '';
        if ( $tracking_page_url ) {
            $providers['Custom']['Fardar'] = $tracking_page_url . '?trackingno=%1$s';
        }
        return $providers;
    }

    public function set_default_fardar_provider( $default_provider ) {
        return 'Fardar';
    }
}

new BitLab_Fardar_Tracking();
