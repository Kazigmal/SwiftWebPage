<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */


session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d');
$userid = mysql_real_escape_string($_GET['id']);
$error = $_GET['error'];

if($error){
	if($error=='noPassword') {
		$err_messg = "You must enter a password.";
	}
	
	if($error=='noPassword2') {
		$err_messg = "You must reenter your password.";
	}
	
	if($error=='noMatch') {
		$err_messg = "Passwords do not match.";
	}
}



$user = mysql_query("SELECT * FROM customers WHERE id = '$userid'");
$user = mysql_fetch_assoc($user);

if(isset($_POST['submit'])) {
	$id				= $userid;
	$name			= mysql_real_escape_string($_POST['inputName']);
	$address		= mysql_real_escape_string($_POST['inputAddress']);
	$email			= mysql_real_escape_string($_POST['inputEmail']);
	$phone1			= mysql_real_escape_string($_POST['inputPhone1']);
	$phone2			= mysql_real_escape_string($_POST['inputPhone2']);
	$phone3			= mysql_real_escape_string($_POST['inputPhone3']);
	$business		= mysql_real_escape_string($_POST['inputBusiness']);
	$security		= mysql_real_escape_string($_POST['inputSecurity']);
	
	/*echo "
			ID: ".$userid."<br />
			Name: ".$name."<br />
			Address: ".$address."<br />
			Email: ".$email."<br />
			Phone1: ".$phone1."<br />
			Phone2: ".$phone2."<br />
			Phone3: ".$phone3."<br />
			Business: ".$business."<br />
			Security: ".$security;*/
			
	mysql_query("UPDATE customers SET 
				security = '$security', 
				name = '$name',
				address = '$address',
				email = '$email', 
				phone1 = '$phone1', 
				phone2 = '$phone2', 
				phone3 = '$phone3',
				business = '$business' 
				WHERE id = '$userid'") or die(mysql_error());
	header( 'Location: admin_view.php?id='.$userid );
	
}

if(isset($_POST['passSubmit'])) {
	
	$password		= $_POST['inputPassword'];
	$password2		= $_POST['inputRepeatPassword'];
		
	if(!$_POST['inputPassword']) {
		//echo "You must submit a password";
		header( 'Location: admin_edit_user.php?id='.$userid.'&error=noPassword' );
	}
		
	if(!$_POST['inputRepeatPassword']) {
		//echo "You must submit a password";
		header( 'Location: admin_edit_user.php?id='.$userid.'&error=noPassword2' );
	}
		
	if($password==$password2) {
		/*echo "
			Password1: ".$password."<br />
			Password2: ".$password2;*/
			
			$password = md5($password);
			
			mysql_query("UPDATE customers SET 
				password = '$password' 
				WHERE id = '$userid'") or die(mysql_error());
			
			header( 'Location: admin_view.php?id='.$userid );
	} else {
		header( 'Location: admin_edit_user.php?id='.$userid.'&error=noMatch' );
	}
	
}

//Pass User info to variables :: id set by $_GET[id] statement above
$q = "select * FROM customers WHERE id = $userid";
	$result = mysql_query($q);
	$customer = mysql_fetch_array($result);

$name = $customer['name'];
$acnt_id = $customer['acnt_id'];
$address = $customer['address'];
$email = $customer['email'];
$phone1 = $customer['phone1'];
$phone2 = $customer['phone2'];
$phone3 = $customer['phone3'];
$business = $customer['business'];
$password = $customer['password'];
$security = $customer['security'];
$type = $customer['type'];

?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body onLoad="MM_preloadImages('css/src/btn_home_2.jpg')">

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
                <div class="span-24">
                	<!--<span class="large">Customer Profile</span>&nbsp;&nbsp;<a href="#">Edit</a>
            		<table width="100%">
                    	<tr>
                        	<td width="15%">
                            	Name: 
                            </td>
                            <td class="shout">
                        		<?php echo $customer['name']; ?>
                            </td>
                            <td width="15%">
										Type:
                            </td>
                            <td class="shout">
                            	<?php 
									$z = "SELECT * FROM customers WHERE id = '$acnt_id'";
										$results = mysql_query($z);
										$getAdmin = mysql_fetch_array($results); ?>
								
								<?php echo $customer['type']; ?> on <a href="admin_view.php?id=<?php echo $getAdmin['id']; ?>"><?php echo $getAdmin['name']; ?>'s</a> account
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Company: 
                            </td>
                            <td class="shout">
                        		<?php echo $customer['business']; ?>
                            </td>
                            <td>Pass Code:</td>
                            <td class="shout">
								<?php 
										echo $getAdmin['security']; 
									echo $acnt_id; 
								?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Address: 
                            </td>
                            <td>
                            	<textarea class="shout" cols=40 rows=4 readonly><?php echo $customer['address']; ?></textarea>
                        		<?php //echo $user['address']; ?>
                            </td>
                            <td>
                            	Phone1: <br>
                                Phone2: <br>
                                Phone3: 
                            </td>
                            <td class="shout">
                            	<?php echo $customer['phone1']; ?><br>
                                <?php echo $customer['phone2']; ?><br>
                                <?php echo $customer['phone3']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Email: 
                            </td>
                            <td class="shout">
                        		<?php echo $customer['email']; ?>
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                        </tr>
                    </table>-->
                    <span class="large">Customer Profile</span>
            		<table width="100%">
                    	<form action="admin_edit_user.php?id=<?php echo $userid; ?>" method="POST">
                        	<input type="hidden" name="inputId" value="<?php echo $id; ?>">
                    	<tr>
                        	<td width="15%">
                            	Name: 
                            </td>
                            <td class="shout">
                            	<input type="text" class="span-8" name="inputName" value="<?php echo $user['name']; ?>" />
                            </td>
                            <td width="15%">
                            	Pass Code: 
                            </td>
                            <td class="shout">
                            	<?php 
									if($user['type']=='isUser') {
										echo 'Is a User...';
									} else { 
								?>
										<input type="text" name="inputSecurity" value="<?php echo $user['security']; ?>" />
								<?php 
									}
								?>
                            	
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Company: 
                            </td>
                            <td class="shout">
                            	<input type="text" class="span-8" name="inputBusiness" value="<?php echo $user['business']; ?>" />
                            </td>
                            <td>
                            	Type Password<br /><br />
                                Repeat Password                           	
                            </td>
                            <td>
                            	<input type="text" name="inputPassword" /><br />
                                <input type="text" name="inputRepeatPassword" /> <input type="submit" name="passSubmit" onclick="return confirm('CHANGE PASSWORD???')" value="Change" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Address: 
                            </td>
                            <td>
                            	<textarea class="shout" cols=34 rows=4 name="inputAddress"><?php echo $user['address']; ?></textarea>
                            	<!--<textarea class="shout" cols=20 rows=4 readonly><?php //echo $user['address']; ?></textarea>-->
                            </td>
                            <td>
                            	Phone1: <br>
                                Phone2: <br>
                                Phone3: 
                            </td>
                            <td class="shout">
                            	<input type="text" name="inputPhone1" value="<?php echo $user['phone1']; ?>" /><br>
                                <input type="text" name="inputPhone2" value="<?php echo $user['phone2']; ?>" /><br>
                                <input type="text" name="inputPhone3" value="<?php echo $user['phone3']; ?>" />
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Email: 
                            </td>
                            <td class="shout">
                        		<input type="text" class="span-8" name="inputEmail" value="<?php echo $user['email']; ?>" />
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	<input type="submit" name="submit" value="Submit changes to Profile" />
                            </td>
                        </tr>
                        </form>
                    </table>
            	</div>

            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
