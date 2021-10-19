<?php

namespace rafalo\quiz;

class Request {
    function __construct() {
        if ( ! isset( $_REQUEST['action'] ) ) {
            return;
        }
    }

    public function manage_get() {

    }

    public function manage_post() {

    }
}