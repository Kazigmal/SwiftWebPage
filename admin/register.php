<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */

session_start();

//include ('../GarlandComputing/design/header.php');
require ('../GarlandComputing/connect.php');

//if (!isset($_POST['Submit']) || ($_POST['Submit'])) {
if (!isset($_POST['Submit']) || ($_POST['Submit'] != 'Register')) {
//if ($_POST['submit']) {
//if (!isset($_POST['Submit'])) {
	
    //grab submitted data
    $error =            "";
    $submitted =        "";
    $firstname =        $_POST['firstname'];
    $lastname =         $_POST['lastname'];
    $username =         $_POST['username'];
    $password =         $_POST['password'];
    $password_repeat =  $_POST['password_repeat'];
    $email =            $_POST['email'];
    //$picture =          $_POST['picture'];
    
     /**
     * 
     * Form Validation
     * 
     **/
    
    // Check for first name
    if (!$firstname) {
        $error = $error."(Missing first name)<br />";
    }
        
    //check for last name
    if (!$lastname) {
        $error = $error."(Missing last name)<br />";
    }
    
    //check Names length
    if (strlen($firstname)<3 || strlen($firstname)>25 || strlen($lastname)<3 || strlen($lastname)>25) {
        $error = $error."(First/last names must be between 3 and 25 characters)<br />";
    }
        
    //check for username
    if (!$username) {
        $error = $error."(Missing username)<br />";
    }
    
    $query = mysql_query("SELECT * FROM users WHERE username='$username' LIMIT 1");
    if (mysql_num_rows($query)==1) {
        $error = $error."(That username is already taken)<br />";
    }
    
    //check username min length
    if (strlen($username)<6 || strlen($username)>25) {
        $error = $error."(Username must be between 6 and 25 characters)<br />";
    }
               
    //check for password
    if (!$password) {
        $error = $error."(Missing password)<br />";
    }
        
    //check for repeated password
    if (!$password_repeat) {
        $error = $error."(Missing repeated password)<br />";
    }
    
    //check password min length
    if (strlen($password)<6 || strlen($password)>25) {
        $error = $error."(Password must be between 6 and 25 characters)<br />";
    }
    
          
    //Check cor matching passwords
    if ($password != $password_repeat) {
        $error = $error."(Passwords do not match)<br />";
    }
    
    if ($error == "") {
        $submitted = 1;
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Registration page</title>

    <!-- Framework CSS -->
<link href="../GarlandComputing/blueprint/screen.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 8]><link rel="stylesheet" href="../../blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

<link rel="icon" 
      type="image/ico" 
      href="../GarlandComputing/favicon.ico">
      
    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="../GarlandComputing/blueprint/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">

  </head>
  <body>
    <div class="container">
    	<img src="../GarlandComputing/images/header.jpg" width="950" height="139" alt="header">
		<hr>

      <div class="span-24 last">
        <h2>Welcome to the <span class='alt'>Registration Page.</span></h2>
        <?php 
				if (isset($_SESSION['user'])) {
        ?>
        				<h6>It would appear you are already logged in.</h6>
                        <p class="incr">Please select from the following options.<br />
						<a href='#'>View your domain</a><br />
						<a href='#'>Request a change</a><br />
						<a href='#'>Upload art to your account</a></p>
		<?php
				} else {                                
       	?>
						<p class='incr'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        				Ut enim ad minim veniam, quis nostrud exercitation ullamco 
        				laboris nisi ut aliquip.</p>
		<?php
				}
		?>
      </div>
      <hr>
      <hr class="space">
      <div class="span-15 prepend-1 colborder">
      	<table width="100%">
        	<form action="../GarlandComputing/register.php" method="POST">
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">First Name:</font>
                        </td>
                        <td>
                            <input type="text" name="firstname" value="<?php echo $firstname; ?>" maxlength="25" />
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">Last Name:</font>
                        </td>
                        <td>
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" maxlength="25" />
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">User Name:</font>
                        </td>
                        <td>
                            <input type="text" name="username" value="<?php echo $username; ?>" maxlength="25" />
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">Email:</font>
                        </td>
                        <td>
                            <input type="text" name="email" value="<?php echo $email; ?>" maxlength="50" />
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">Password:</font>
                        </td>
                        <td>
                            <input type="password" name="password" value="<?php echo $password; ?>"maxlength="25" />
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">Repeat Password:</font>
                        </td>
                        <td>
                            <input type="password" name="password_repeat" value="<?php echo $password_repeat ?>" maxlength="25" />
                        </td>
                    </tr>
                    <!--<tr>
                        <td width="40%" align="right">
                            <font size="2" face="arial">Upload Picture:</font>
                        </td>
                        <td>
                            <input type="text" name="picture" />
                        </td>
                    </tr>  -->
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Register" value="Register" /></td>
                    </tr>
                    </form>
                </table>
		
        <hr>
        <div class="span-7 colborder">
          <h6>This is a nested column</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="span-7 last">
          <h6>This is another nested column</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <div class="span-7 last">
        <?php 
                
                    if ($error) {
                        echo "<font color='red' face='verdana' style='font-weight: bold;' size='1'>$error</font>";
                    } else {
                        if ($submitted) {
                            echo "<font color='#33cc00' face='verdana' style='font-weight: bold;' size='3'>User data submitted.</font>";
                            echo "
                                <p>
                                <font color='blue' face='verdana' size='1'>
                                    Thank you for registering! You have been added to our database. You can login in using the input area at 
                                    the top. 
                
                                    <p>Integer pulvinar ipsum eu sem congue tincidunt. Praesent imperdiet mollis volutpat. 
                                    Integer auctor neque a tortor blandit pellentesque. Mauris semper, nulla in pharetra elementum, 
                                    felis magna fringilla libero, eu euismod leo purus id augue. Donec feugiat, nisl ac luctus placerat, 
                                    velit leo vehicula nisl, sit amet viverra massa lorem nec elit.
                                </font>        
                            ";
                            
                            $password_db = md5($password);
                            $register = mysql_query("INSERT INTO users VALUES ('','$firstname','$lastname','$username','$password_db','','$email')");
							
							/******* MAKE USER DIRECTORIES AND COPY FILES *******/
							/* Step 1. Pass the Username to a Directory Name*/ 
							
							$userdir = $username; 

							/* Step 2. From this folder, I want to create a subfolder with the users username.  Also, I want to try and make this folder world-writable (CHMOD 0777).  Need error checking...... */ 
							
							mkdir("store/$userdir", 0777);
							mkdir("store/$userdir/website", 0777);
							mkdir("store/$userdir/upload", 0777);
							mkdir("store/$userdir/download", 0777);
							mkdir("store/$userdir/download/datastore", 0777);
							mkdir("store/$userdir/download/datastore/dlf", 0777);
							
							//Step 3. I want to copy the Index file to the proper users website */
								
								// copy Website files
								$source = "archive/new.php";
								$destin = "store/" . $userdir . "/website/index.php";
							
								copy($source,$destin);
								
								// copy /download files.
								copy("download/about.php",
									 "store/".$userdir."/download/about.php");
								copy("download/index.php",
									 "store/".$userdir."/download/index.php");
								copy("download/login.php",
									 "store/".$userdir."/download/login.php");
								
								//copy download/datastore files
								copy("download/datastore/index.php",
									 "store/".$userdir."/download/datastore/index.php");
								copy("download/datastore/Sample File.txt",
									 "store/".$userdir."/download/datastore/Sample File.txt");
								
								//copy download/datastore/dlf files
								copy("download/datastore/dlf/styles.css",
									 "store/".$userdir."/download/datastore/dlf/styles.css");
								
								copy("download/datastore/dlf/Thumbs.db",
									 "store/".$userdir."/download/datastore/dlf/Thumbs.db");
								
								copy("download/datastore/dlf/bg.gif",
									 "store/".$userdir."/download/datastore/dlf/bg.gif");
								
								copy("download/datastore/dlf/doc.gif",
									 "store/".$userdir."/download/datastore/dlf/doc.gif");
								
								copy("download/datastore/dlf/eps.gif",
									 "store/".$userdir."/download/datastore/dlf/eps.gif");
								
								copy("download/datastore/dlf/exe.gif",
									 "store/".$userdir."/download/datastore/dlf/exe.gif");
								
								copy("download/datastore/dlf/fh10.gif",
									 "store/".$userdir."/download/datastore/dlf/fh10.gif");
								
								copy("download/datastore/dlf/fla.gif",
									 "store/".$userdir."/download/datastore/dlf/fla.gif");
								
								copy("download/datastore/dlf/gif.gif",
									 "store/".$userdir."/download/datastore/dlf/gif.gif");
								
								copy("download/datastore/dlf/html.gif",
									 "store/".$userdir."/download/datastore/dlf/html.gif");
								
								copy("download/datastore/dlf/jpg.gif",
									 "store/".$userdir."/download/datastore/dlf/jpg.gif");
								
								copy("download/datastore/dlf/pdf.gif",
									 "store/".$userdir."/download/datastore/dlf/pdf.gif");
								
								copy("download/datastore/dlf/psd.gif",
									 "store/".$userdir."/download/datastore/dlf/psd.gif");
								
								copy("download/datastore/dlf/real.gif",
									 "store/".$userdir."/download/datastore/dlf/real.gif");
								
								copy("download/datastore/dlf/setup.gif",
									 "store/".$userdir."/download/datastore/dlf/setup.gif");
								
								copy("download/datastore/dlf/sig.gif",
									 "store/".$userdir."/download/datastore/dlf/sig.gif");
								
								copy("download/datastore/dlf/swf.gif",
									 "store/".$userdir."/download/datastore/dlf/swf.gif");
								
								copy("download/datastore/dlf/trans.gif",
									 "store/".$userdir."/download/datastore/dlf/trans.gif");
								
								copy("download/datastore/dlf/video.gif",
									 "store/".$userdir."/download/datastore/dlf/video.gif");
								
								copy("download/datastore/dlf/video2.gif",
									 "store/".$userdir."/download/datastore/dlf/video2.gif");
								
								copy("download/datastore/dlf/xls.gif",
									 "store/".$userdir."/download/datastore/dlf/xls.gif");
								
								copy("download/datastore/dlf/i.php",
									 "store/".$userdir."/download/datastore/dlf/i.php");
								
								copy("download/datastore/dlf/archive.png",
									 "store/".$userdir."/download/datastore/dlf/archive.png");
								
								copy("download/datastore/dlf/binary.png",
									 "store/".$userdir."/download/datastore/dlf/binary.png");
								
								copy("download/datastore/dlf/dirup.png",
									 "store/".$userdir."/download/datastore/dlf/dirup.png");
								
								copy("download/datastore/dlf/folder.png",
									 "store/".$userdir."/download/datastore/dlf/folder.png");
								
								copy("download/datastore/dlf/html.png",
									 "store/".$userdir."/download/datastore/dlf/html.png");
								
								copy("download/datastore/dlf/text.png",
									 "store/".$userdir."/download/datastore/dlf/text.png");
								
								copy("download/datastore/dlf/unknown.png",
									 "store/".$userdir."/download/datastore/dlf/unknown.png");
                         
								
                        } else {
                            //echo "<font color='#33cc00' face='verdana' style='font-weight: bold;' size='3'>Welcome to the registration page.</font>";
                            echo "
                                <p>
                                <font color='black' face='verdana' size='1'>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut nisi vitae dui 
                                    iaculis vulputate. Donec egestas, neque eu rhoncus accumsan, mauris enim adipiscing nisi, 
                                    at aliquam ligula turpis vitae ante. Praesent fringilla tristique felis non vulputate. 
                
                                    <p>Integer pulvinar ipsum eu sem congue tincidunt. Praesent imperdiet mollis volutpat. 
                                    Integer auctor neque a tortor blandit pellentesque. Mauris semper, nulla in pharetra elementum, 
                                    felis magna fringilla libero, eu euismod leo purus id augue. Donec feugiat, nisl ac luctus placerat, 
                                    velit leo vehicula nisl, sit amet viverra massa lorem nec elit.
                                </font>        
                            ";
                        }
                    }    
                ?>
        <!--<p class="incr">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras ornare mattis nunc. Mauris venenatis, pede sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue. sed aliquet vehicula, lectus tellus pulvinar neque, non cursus sem nisi vel augue.</p>-->
      </div>
      <hr>
      <h2 class="alt">You may pick and choose amongst these and many more features, so be bold.</h2>
      <hr>
        <!--<a href="http://validator.w3.org/check?uri=referer">
          <img src="valid.png" alt="Valid HTML 4.01 Strict" height="31" width="88" class="top">
        </a>-->
        <?php include ('../GarlandComputing/design/footer.php'); ?>
    </div>
  </body>
</html>
