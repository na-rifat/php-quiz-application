<?php

namespace rafalo\quiz;

use mysqli;

defined( 'ABS_PATH' ) or exit;

class Db {
    function __construct() {

    }

    public static function db() {
        static $connected = false;

        if ( ! $connected ) {
            $connected = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
        }

        return $connected;
    }

    public static function insert_row() {

    }

    public static function get_rows() {

    }

    public static function query( $query ) {
        return self::db()->query( $query );
    }
}