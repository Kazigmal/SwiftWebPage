<?php

session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d');
$error = '';
$submitted = '';

//Pass User info to variables :: id set by $_GET[id] statement above
if($_POST['submit']) {
	
	$name = $_POST['inputName'];
	$address = $_POST['inputAddress'];
	$email = $_POST['inputEmail'];
	$phone1 = $_POST['inputPhone1'];
	$phone2 = $_POST['inputPhone2'];
	$phone3 = $_POST['inputPhone3'];
	$business = $_POST['inputBusiness'];
	$password = $_POST['inputPassword'];
	$password2 = $_POST['inputConfirmPassword'];
	$security = $_POST['inputSecurity'];
	$type = 'isAdmin';
	
	//Check for Name
	if(!$name) {
		$error = $error."Name Required<br />";
	}

	//Check for email
	if(!$email) {
		$error = $error."Email Required<br />";
	}
	
	//Check if email is valid
	if($email) {
		if (!preg_match('|^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$|i', $email)) {
			$error = $error."Email not valid<br />";
		}	
	}
	
	//Check to see if user exists in DB
	$q = mysql_query("SELECT * FROM customers WHERE email = '$email'");
	$results = mysql_num_rows($q);
	
	//If customer exists throw error and take admin to view user
	if ($results == 1) {
        $error = $error."User Exists<br />";
		$customer = mysql_fetch_array($q);
		header( 'Location: admin_view.php?id='.$customer['id'].'&error=exists' );
    }
	
	//Check for Password
	if(!$password) {
		$error = $error."Password Required<br />";
	}
	
	//Check for Password Confirmation
	if(!$password2) {
		$error = $error."Password2 Required<br />";
	}
	
	//Check if passwords match then encrypt
	if($password==$password2) {
		$password = md5($password);
	} else {
		$error = $error."Passwords do not match<br />"; 	
	}
	
	if(!$error) {
		
		//Add User to DB
		$addUser = mysql_query("INSERT INTO customers VALUES ('','','$name','$address','$email','$phone1','$phone2','$phone3','$business','$password','$security','$type')") or die('Failed to Add User');
		
		// find user again
		$x = mysql_query("SELECT * FROM customers WHERE email = '$email' LIMIT 1");
		$account = mysql_fetch_array($x);
		
		//get id and assign to Account ID
		$acnt_id = $account['id'];
		
		//Update user with Account ID
		$updateUser = mysql_query("UPDATE customers SET acnt_id = '$acnt_id' WHERE email = '$email'") or die('Added User, but failed to Update Product');
				
		//Display ew user in view
		header( 'Location: admin_view.php?id='.$account['id'] );
		
	}
	
}

?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body>

	  <div class="container">
      		<?php include('css/src/admin_header.php'); ?>
            <?php include('admin_nav.php'); 
				if(!isset($_SESSION['id'])) {
					echo "<h1>You MUST be logged in as an administrator!</h1>";
					include('css/src/footer.php');
					return false;
				}
			
			?>
            
            <div class="span-24 last">
            	<?php 
					if($err_messg) {
						?>
							<div class='error'>
            					<?php echo $err_messg; ?>
                			</div>
						<?php 
					} else {
						echo "&nbsp;";
					}
				?>
            </div>
            	<!-- COL ONE -->
                <div class="span-17">
                	<span class="large">New Customer Profile</span>
            		<table width="100%">
                    	<form action="index.php" method="POST">
                        <tr>
                        	<td class="span-2">
                            	Name: 
                            </td>
                            <td class="span-8">
                            	<input class="span-8" type="text" name="inputName" autofocus />
                            </td>
                            <td class="span-3">
                            	Security Phrase: 
                            </td>
                            <td class="span-4">
                            	<input class="span-4" type="text" name="inputSecurity"  />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Company: 
                            </td>
                            <td>
                            	<input class="span-8" type="text" name="inputBusiness"  />
                            </td>
                            <td>
                            	Password:<br />
                                Confirm Password:
                            </td>
                            <td>
                            	<input class="span-4" type="password" name="inputPassword"  /><br />
                                <input class="span-4" type="password" name="inputConfirmPassword"  />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Address: 
                            </td>
                            <td>
                            	<textarea class="span-8" rows=4 name="inputAddress"></textarea>
                            </td>
                            <td>
                            	Phone1: <br><br>
                                Phone2: <br><br>
                                Phone3: 
                            </td>
                            <td>
                            	<input class="span-4" type="text" name="inputPhone1" /><br>
                                <input class="span-4" type="text" name="inputPhone2" /><br>
                                <input class="span-4" type="text" name="inputPhone3" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Email: 
                            </td>
                            <td>
                        		<input class="span-8" type="text" name="inputEmail" />
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	<input class="span-4" type="submit" name="submit" value="Add New User" />
                            </td>
                        </tr>
                        </form>
                    </table>
            	</div>
                <div class="span-7 last">
                	<span class="large">Message Area</span>
                    <br />
                    <br />
                		<?php 
							if($error) {
								echo '<div class="error" align="center">';
								echo $error;
								echo '</div>';
							}
						?>
                 </div>
           	 <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
