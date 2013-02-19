<?php
	session_start();
	
    if(!isset($_SESSION['level'])) {
		header( 'Location: scripts/admin_login.php' );
	} else {
	   header( 'Location: admin_main.php' );
   	}

?>
