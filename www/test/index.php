<?php 

/**
 * @author Tom Garland
 * @copyright 2012
 */

session_start ();

if($_POST['submit']) {
	$_SESSION['data'] = $_POST['input'];
	header("Location: output.php");
}

?>

<form method="POST" action="../users/output.php">
	Input Data:<br />
    <input type="text" name="input" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>