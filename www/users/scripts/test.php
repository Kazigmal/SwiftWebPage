<?php 

/**
 * @author Tom Garland
 * @copyright 2012
 */

	session_start();
	
    include('scripts/connect.php');
	

		
		/*Test Block*/
		echo '<h2>Index Page</h2>';
		echo 'POST DATA<br>';
		echo $post_initials.'<br>';
		echo $post_password.'<br><br>';
		echo 'DATABASE RETURN<br>';
		echo 'rowcount: '.$rowcount.'<br>';
		echo 'ID: '.$array['id'].'<br>';
		echo 'NAME: '.$array['name'].'<br>';
		echo 'EMAIL: '.$array['email'].'<br>';
		echo 'TYPE: '.$array['type'].'<br><br>';
		echo 'SESSION DATA<br>';
		echo 'ID: '.$_SESSION['id'].'<br>';
		echo 'NAME: '.$_SESSION['name'].'<br>';
		echo 'EMAIL: '.$_SESSION['email'].'<br>';
		echo 'TYPE; '.$_SESSION['type'];
		return false;
		
		//header("Location: users/profile.php")
?>