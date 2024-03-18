<?php
/*
 * Registering styles
 */
add_action('init', function () {
    wp_register_style("single-portfolio-styles", STYLES_PATH . "/single-portfolio.css", [], true);
});
