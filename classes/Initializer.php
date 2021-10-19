<?php

namespace rafalo\quiz;

defined( 'ABS_PATH' ) or exit;

/**
 * Initial action handler class
 */
class Initializer {
    /**
     * Class builder
     */
    function __construct() {
        $this->define_constants();
        $this->manage_requests();
    }

    /**
     * Define neccessary constants
     *
     * @return void
     */
    public function define_constants() {
        $parent_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        define( 'ABS_URL', $parent_url );
        define( 'ABS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/quiz/' );

    }

    /**
     * Handle get and post requests
     *
     * @return void
     */
    public function manage_requests() {
        new Request();
    }
}