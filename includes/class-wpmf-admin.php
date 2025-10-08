<?php
class WPMF_Admin {
    public function __construct() {
        add_action('admin_menu', [$this, 'register_page']);
    }
    public function register_page() {
        add_management_page(
            __('Media Fixer', 'wp-media-fixer'),
            __('Media Fixer', 'wp-media-fixer'),
            'manage_options',
            'wp-media-fixer',
            [$this, 'render_page']
        );
    }
    public function render_page() {
        echo '<div class="wrap"><h1>WP Media Fixer</h1>';
        echo '<p>Run a quick scan to find and fix incorrect media URLs.</p>';
        echo '<p><code>Coming soon: bulk repair & preview interface.</code></p>';
        echo '</div>';
    }
}
new WPMF_Admin();
