<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */
	
	$id = $_GET['id'];

    include_once("scripts/connect.php");
    
	/*echo "Note ".$id." Deleted";
	echo "Thank you, $fname has been Deleted";*/
    
	mysql_query("DELETE FROM products WHERE id = $_GET[id]") or die(mysql_error());
    header ('Location: admin_main.php');
	
	
	
?>