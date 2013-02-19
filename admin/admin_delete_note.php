<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */
	
	$id = $_GET['id'];
	$userid = $_GET['user'];

    include_once("scripts/connect.php");
    
	/*echo "Note ".$id." Deleted";
	echo "Thank you, $fname has been Deleted";*/
    
	mysql_query("DELETE FROM notes WHERE id = $_GET[id]") or die(mysql_error());
    //header ('Location: admin_main.php');
	header( 'Location: admin_view.php?id='.$userid );
	
	
	
?>