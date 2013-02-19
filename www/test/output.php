<?php 

/**
 * @author Tom Garland
 * @copyright 2012
 */

session_start ();

$output = $_SESSION['data'];

echo 'Output';
echo $output.'<br>';
echo '<a href="index.php">Back</a>';