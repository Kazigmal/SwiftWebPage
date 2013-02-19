<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */

session_start();

//echo "Goodbye ".$_SESSION['user']. ", you have been logged out! <a href='index.php'>Return</a> to the main page.";

session_destroy();

header( 'Location: ../admin.php' ) ;

?>