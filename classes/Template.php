<?php

namespace rafalo\quiz;

defined( 'ABS_PATH' ) or exit;

/**
 * Template handler class
 */
class Template {
    /**
     * Class builder
     */
    function __construct() {

    }

    /**
     * Print a template
     *
     * @param  string $path
     * @return void
     */
    public static function get( $path ) {
        ob_start();
        include TEMPLATE_PATH . $path . '.php';
        echo ob_get_clean();
    }
}