<?php

namespace rafalo\quiz;

class Initializer {
    function __construct() {
        $this->define_constants();
        $this->manage_requests();
    }

    public function define_constants() {
        $parent_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        define( 'ABS_URL', $parent_url );
        define( 'ABS_PATH', $_SERVER['DOCUMENT_ROOT'] . '/quiz/' );

    }

    public function manage_requests() {
        new Request();
    }
}