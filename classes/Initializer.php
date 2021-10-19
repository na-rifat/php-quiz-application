<?php

namespace rafalo\quiz;

class Initializer {
    function __construct() {
        $this->define_constants();
        $this->manage_requests();
    }

    public function define_constants() {
        // define( 'ABS_URL', basename( $_SERVER['REQUEST_URI'] ) );
        define( 'ABSPATH', __DIR__ . '/../' );
    }

    public function manage_requests() {
        new Request();
    }
}