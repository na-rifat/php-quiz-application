<?php

use rafalo\quiz\Template;

quiz_header()?>
<?php
$template = isset( $_GET['template'] ) ? $_GET['template'] : '';
switch ( $template ) {
    default:
        Template::get( 'admin-login' );
        break;
}
?>
<?php quiz_footer()?>