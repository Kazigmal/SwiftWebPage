<?php

/**
 * @author Tom Garland
 * @copyright 2012
 */

session_start();
//echo 'done';
//die();
session_destroy();

header( 'Location: ../index.php' ) ;


?>