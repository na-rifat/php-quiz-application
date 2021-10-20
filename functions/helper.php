<?php

if ( ! function_exists( 'css_file' ) ) {
    /**
     * Echo link tag with css file name
     *
     * @param  string $file_name
     * @return void
     */
    function css_file( $file_name ) {
        printf(
            '<link rel="stylesheet" href="%s/assets/css/%s.css"',
            ABS_URL,
            $file_name
        );
    }
}

if ( ! function_exists( 'js_file' ) ) {
    /**
     * Echo script tag with file name
     *
     * @param  string $file_name
     * @return void
     */
    function js_file( $file_name ) {
        printf(
            '<script src="%s/assets/js/%s.js"></script>',
            ABS_URL,
            $file_name
        );
    }
}

if ( ! function_exists( 'quiz_header' ) ) {
    /**
     * Echo the header
     *
     * @return void
     */
    function quiz_header() {
        ob_start();
        include __DIR__ . '../templates/header.php';
        echo ob_get_clean();
    }
}

if ( ! function_exists( 'quiz_footer' ) ) {
    /**
     * Echo the footer
     *
     * @return void
     */
    function quiz_footer() {
        ob_start();
        include __DIR__ . '../templates/footer.php';
        echo ob_get_clean();
    }
}