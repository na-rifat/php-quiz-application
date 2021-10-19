<?php

namespace rafalo\quiz;

defined( 'ABS_PATH' ) or exit;

/**
 * GET|POST request handler class
 */
class Request {
    /**
     * Classs builder function
     */
    function __construct() {
        if ( ! isset( $_REQUEST['action'] ) ) {
            return;
        }
    }

    /**
     * Manage get requests
     *
     * @return void
     */
    public function manage_get() {

    }

    /**
     * Manage post requests
     *
     * @return void
     */
    public function manage_post() {

    }
}