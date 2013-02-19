<?php 

/**
 * @author Tom Garland
 * @copyright 2012
 */

	session_start ();
	
	include('../scripts/connect.php');
	
	$msg = "";
	
	// Store login variables
	$post_initials = $_POST['inputLogin'];
	$post_password = $_POST['inputPwd'];

	//Strip SQL Injection
	$post_initials = mysql_real_escape_string($post_initials);
	$post_password = mysql_real_escape_string($post_password);

	if($post_initials&&$post_password) {
    
		//if (strlen($post_initials)>3||strlen($post_password)>15) {
        //$msg = $msg."Login Initials or Password is too long!<br>";
		//} else {
		 //Convert password to md5
        $post_password = md5($post_password);
		
		//Query the Database preventing SQL Injection
        $login = sprintf("SELECT * FROM customers WHERE email='%s' AND password='%s'", mysql_real_escape_string($post_initials), mysql_real_escape_string($post_password));
		
		
		$rowcount = mysql_num_rows(mysql_query($login));
        $array = mysql_fetch_assoc(mysql_query($login));
		
		if($rowcount!=1) {
			header("Location: profile.php?error=2");
		}
		$name = $array['name'];

		$fname = explode(" ", $name);
		$_SESSION['fname'] = $fname[0];
		
		$_SESSION['id'] = $array['id'];
		$_SESSION['name'] = $array['name'];
		$_SESSION['email'] = $array['email'];
		$_SESSION['type'] = $array['type'];
		$_SESSION['test'] = "test";
		$_SESSION ['abc'] = "It Worked";
		
		/*Test Block
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
		echo 'abe: '.$_SESSION ['abc'].'<br>';
		echo 'TYPE; '.$_SESSION['type'].'<br>';
	
	die();*/
	}


	$id 	= $_SESSION['id'];
	$type 	= $_SESSION['type'];
	$name 	= $_SESSION['name'];
	$now	= date('Y-m-d');
	
	$user = mysql_query("SELECT * FROM customers WHERE id = '$id'");
	$user=mysql_fetch_assoc($user);
	
	//ADD Admin Test here
	if($type == 'isAdmin') {
		$products = mysql_query("SELECT * FROM products WHERE account_id = '$id'");
	} else {
		$products = mysql_query("SELECT * FROM products WHERE user_id = '$id'");
		//$products = mysql_fetch_assoc($products);
	}
	
	$error = $_GET['error'];
	$err_messg = "";
	if($error==1) {
		$err_messg = "<center>Sorry, this feature has not been added yet. <a href='profile.php'>Click Here</a> to dismiss this message</center>";	
	}
	if($error==2) {
		$err_messg = "<center>Sorry, It would appear that login is incorrect. Please try again.</center>";	
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name=”description” content=”Affordable Home Inspection Software”>
		<meta name=”keywords” content=”Home, Inspection, Software, Keith Swift, Report Writer, Reporting Software”>
		<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″>
		
		<title>Swift Reporting Software</title>

			<!-- Framework CSS -->
		<link href="../css/screen.css" rel="stylesheet" type="text/css">
			<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

		<link rel="icon" 
			type="image/ico" 
			href="../favicon.ico">
		  
		<!-- Import fancy-type plugin for the sample page. -->
		<link rel="stylesheet" href="../css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">

	<!-- dd menu -->
	<script type="text/javascript">
		<!--
		var timeout         = 500;
		var closetimer		= 0;
		var ddmenuitem      = 0;

		// open hidden layer
		function mopen(id) {	
			// cancel close timer
			mcancelclosetime();

			// close old layer
			if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

			// get new layer and show it
			ddmenuitem = document.getElementById(id);
			ddmenuitem.style.visibility = 'visible';
		}
		
		// close showed layer
		function mclose() {
			if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
		}

		// go close timer
		function mclosetime() {
			closetimer = window.setTimeout(mclose, timeout);
		}

		// cancel close timer
		function mcancelclosetime() {
			if(closetimer) {
				window.clearTimeout(closetimer);
				closetimer = null;
			}
		}

		// close layer when click-out
		document.onclick = mclose; 
		// -->
	</script>
	   
		<link rel="icon" 
		  type="image/png" 
		  href="http://www.swiftreportingsoftware.com/favicon.png">

	</head>

<body><a name = "top"> </a>
	<br />
	<div class="container">
		<div class="span-24">
        	<table align="center">
				<tr>
					<td>
						<center><?php include ('../design/nav_bar.html'); ?></center>
					</td>
				</tr>
            </table>
        </div>
		<?php include ('../design/header3.php'); ?>
        <img src="../images/line.jpg" width="950" height="12" alt="header"><br />
        
<!----------------------------------------------  BODY  ------------------------------------------------------------>

		<div class="span-24 white">
			<?php 
				if($err_messg) { ?>
					<div class='error'>
            			<?php echo $err_messg; ?>
                	</div> <?php 
				} else {
					echo "&nbsp;";
				}
			?>
			
			<!-- MENU BAR  -->
			<?php include('css/nav_menu.html'); ?>
			
			<!-- COL ONE -->
                <div class="span-5">
                	<img src="images/user_profile.png" width="190">
                    <br>
					<div class="box">
						<span class="small">
							Any information changed here will be pushed to your software Company Information Page.
                            <br>
							<br>
							If you have questions or concerns, Please feel free to contact <strong>Customer Support</strong> at 
						    <strong>(909) 747-9438</strong>, or by email at <a href="mailto:support@swiftreportingsoftware.com">support@swiftreportingsoftware.com</a>
						</span>
					</div>
            	</div>
			
			<!-- COL TWO -->
                <div class="span-19 last">
                  <form method="post" action="profile.php?error=1">
                   	<span class="big">Customer Profile</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	<input type="submit" name="submit" value="Edit" />
                    </form>
            		<table width="100%">
                    	<tr>
                        	<td width="140" align="right">
                            	Name: 
                            </td>
                            <td class="shout">
                        		<?php echo $user['name']; ?>
                            </td>
                            <td colspan="2" align="center" class="loud">Inspector Picture&nbsp;&nbsp;<a href="profile.php?error=1">Upload</a></td>
                        </tr>
                        <tr>
                        	<td align="right">
                            	Company: 
                            </td>
                            <td class="shout">
                        		<?php echo $user['business']; ?>
                            </td>
                            <td colspan="2" rowspan="3" align="center" valign="top" bgcolor="#CCCCCC">
                            Test
                          	</td>
                        </tr>
                        <tr>
                          <td align="right">Tag Line:</td>
                          <td class="shout"><?php echo $user['tagLine']; ?></td>
                        </tr>
                        <tr>
                        	<td align="right" valign="middle">
                            	<strong>Address</strong><br />
                           	  	<span class="quiet">Street:<br /><br />
                           		City State Zip:</span></td>
                            <td class="shout">
                            	<textarea rows="2"><?php echo $user['street']; ?></textarea><br />
                        		<?php echo $user['city']; ?>, <?php echo $user['state']; ?>&nbsp;<?php echo $user['zip']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td align="right">
                            	Email: 
                            </td>
                            <td class="shout">
                            <a href="mailto:<?php echo $user['email']; ?>"><?php echo $user['email']; ?></a>
                            </td>
                            <td align="right"><?php 
									if($type == "isAdmin") {
										echo "<strong>Security Phrase:</strong>";
									}
								?>
                            </td>
                            <td><span class="shout">
                              <?php 
									if($type == "isAdmin") {
										echo '<strong>"'.$user['security'].'"</strong>'; 
									}
								?>
                            </span>
                            	
                            </td>
                        </tr>
                        <tr>
                          <td align="right">Website:</td>
                          <td class="shout"><a href="http://<?php echo $user['website']; ?>" target="_blank"><?php echo $user['website']; ?></a></td>
                          <td align="right">Phone1: </td>
                          <td><span class="shout"><?php echo $user['phone1']; ?></span></td>
                        </tr>
                        <tr>
                          <td align="left">Custom 1: <span class="shout"><?php echo $user['custom1Head']; ?></span></td>
                          <td class="shout"><?php echo $user['custom1Value']; ?></td>
                          <td align="right">Phone2: </td>
                          <td><span class="shout"><?php echo $user['phone2']; ?></span></td>
                        </tr>
                        <tr>
                          <td align="left">Custom 2<span class="shout">: <?php echo $user['custom2Head']; ?></span></td>
                          <td class="shout"><?php echo $user['custom2Value']; ?></td>
                          <td align="right">Phone3:</td>
                          <td><span class="shout"><?php echo $user['phone3']; ?> </span></td>
                        </tr>
                    </table>
                    	<br>
						<?php 
							$count = mysql_query("SELECT * FROM products WHERE account_id = '$id'");
							$num_rows = mysql_num_rows($count);
						?>
							<?php if($num_rows>0) { ?>
								<form method="post" action="profile.php?error=1">
								<span class="big">Products</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<input type="submit" name="submit" value="Edit" />
								</form>
							<?php	} else { ?>
								<span class="big">Products</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<?php	} 
						if($num_rows>0) { ?>
                    <table width="100%">
                    	<tr>
                        	<th align="left">
                            	<strong>Name</strong>
                            </th>
                            <th align="left">
                            	<strong>Product</strong>
                            </th>
                            <th align="left">
                            	<strong>Unlock Code</strong>
                            </th>
                            <th align="left">
                            	<strong>Installs</strong>
                            </th>
                            <th align="left">
                            	<strong>Expire Date</strong>
                            </th>
                            <th align="left">
                            	<strong>Active</strong>
                            </th>
                        </tr>
                        
                        <?php 
                            while($row = mysql_fetch_array($products)) {
                                if($row['active'] == 0) {
                                    echo "<tr>";
                                        echo "<td>";
                                            echo $row['userName'];
                                        echo "</td>";
										echo "<td>";
                                            echo "<font color='#999999'><em>".$row['productName']."</em></font>";
                                        echo "</td>";
                                        echo "<td colspan='4'>";
                                            echo "<font color='#999999'><em>Your software has been disabled by your Administrator</em></font>";
                                        echo "</td>";
                                    echo "</tr>";
                                } else { ?>
                         
                                    <tr>
                                        <td>
                                            <?php echo $row['userName']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['productName']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['unlockCode']; ?>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <?php echo $row['activations']; ?>
                                            </div>
                                        </td>
                                        <!--<td>
                                            <div align="center">
                                                <?php //echo $row['machines']; ?>
                                            </div>
                                        </td>-->
                                        <td>
                                            <?php //echo $row['expireDate']; ?>
                                            <?php 
                                                $time = strtotime( $row['expireDate'] );
													if($row['expireDate'] < $now) {
														echo "<font color='#FF0000'>".date('M d, Y', $time)."</font>";
													} else {
                                                		echo date('M d, Y', $time);
													}
                                            ?>

                                        </td>
                                        <td>
                                            <?php
                                                if($row['active'] == 1) {
                                                    echo "<font color='#006600'>Active</font>";
                                                } else {
                                                    echo "<font color='#999999'><em>Disabled</em></font>";
                                                }
                                            ?>
                                        </td>
                                    </tr>
                        <?php 
                                }
                            }
                        ?>
                    </table>
					<?php } else { ?>
						<form method="POST" action="http://www.swiftreportingsoftware.com/swiftcart/">
							<input type="submit" name="Buy" value="Click here" /> to purchase a software license
						</form>
					<?php } ?>
					
            	</div>
		</div>
		

<!---------------------------------------------  Footer  ----------------------------------------------------------->
		<?php include ('../design/footer3.php'); ?>
    </div>
</body>
</html>