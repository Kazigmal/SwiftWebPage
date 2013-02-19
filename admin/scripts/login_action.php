<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */
//die();

//session_start();

require("connect.php");


?>



<?php

// Store login variables
$post_email = $_POST['email'];
$post_password = $_POST['password'];

// Uncomment line below to test Functionality
//echo $post_username . "<br />" . $post_password;

if ($post_email&&$post_password) {
    
    if (strlen($post_email)>50||strlen($post_password)>15) {
        die ("email or Password is too long!");
    } else {
        
        //Convert password to md5
        $post_password = md5($post_password);
        // Uncomment to test md5 functionality
        //echo $post_password; 
        
        //Query the Database preventing SQL Injection
        $login = sprintf("SELECT * FROM customers WHERE email='%s' AND password='%s'", mysql_real_escape_string($post_email), mysql_real_escape_string($post_password));
                
        $rowcount = mysql_num_rows(mysql_query($login));
        $fieldarray = mysql_fetch_assoc(mysql_query($login));
        
        $id = $fieldarray['id'];
		$name = $fieldarray['email'];
        //echo $id;
        // Uncomment to test query functionality
        //echo $rowcount;
        
            if ($rowcount==1) {
                //Log the user in
                
                //These lines will echo out the user's username
                //$_SESSION['user']=$post_username;
                //echo $post_username;
                
                //$_SESSION['user']=$post_username;
                $_SESSION['id']=$id;
				$_SESSION['name']=$name;
                
				//echo "Welcome ".$_SESSION['user']. ", you have been logged in! <a href='index.php'>Return</a> to the main page.";
				//echo "Welcome ".$_SESSION['fname']. ", you have been logged in! <a href='index.php'>Return</a> to the main page.";
                header( 'Location: index.php' );
                
            } else {
                //die("Incorrect username and/or password!");
				$err_messg = "Incorrect username and/or password!";
            }
        
          
    }
    
} else {
    //die ("Username and Password Required...");
	$err_messg = "Please Log in:";
}

?>
<html>
	<head>

	<link href="../css/screen.css" rel="stylesheet" type="text/css" />
	</head>
	
    <body>

		<div class="container">
			<h1>Login Page</h1>
            <?php 
			
				if(!isset($_SESSION)) {
					echo "<h3>Please Log in</h3>";
				}
			 	
				if($err_messg) {
					echo $err_messg;
				}
			?>

	<body>
</html>
