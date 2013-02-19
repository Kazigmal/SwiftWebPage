<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */


session_start();

require 'scripts/connect.php';

$id 	= $_SESSION['id'];
$type 	= $_SESSION['type'];
$name 	= $_SESSION['name'];
$now	= date('Y-m-d');

//$name = $_GET['name'];

$user = mysql_query("SELECT * FROM customers WHERE id = '$id'");
$user=mysql_fetch_assoc($user);

//ADD Admin Test here
if($type == 'isAdmin') {
	$products = mysql_query("SELECT * FROM products WHERE account_id = '$id'");
} else {
	$products = mysql_query("SELECT * FROM products WHERE user_id = '$id'");
	//$products = mysql_fetch_assoc($products);
}

?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body onLoad="MM_preloadImages('css/src/btn_home_2.jpg')">

	  <div class="container">
      		<?php include('css/src/header2.php'); ?>
            
            <div class="span-24 white last">
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
                <div class="span-4">
            		<?php
						if(!isset($_SESSION['id'])) { //No Session set yet
							echo "Please Log in <a href='scripts/login.php'>HERE</a>";
						} else {
							echo "<h3>Logged in as</h3>";
							if($_SESSION['type'] == "isAdmin") {
								echo $_SESSION['name']."<br>";
								echo "Account Administrator";
							} else {
								echo $_SESSION['name']."<br>";
								echo "Basic User";
							}
						}
					?>
                    <br>
                    <br>
                    <span class="small">
                   		<p>If you have questions or concerns, Please feel free to contact <strong>Customer Support</strong> at 
                    	<strong>(877) 810-5635</strong>, or by email at <a href="mailto:support@pvsoftware.com">support@pvsoftware.com</a></p>
                  	</span>
            	</div>
                
                <!-- COL TWO -->
                <div class="span-17">
                	<h3>Customer Profile</h3>
            		<table width="100%">
                    	<tr>
                        	<td width="15%">
                            	Name: 
                            </td>
                            <td class="shout">
                        		<?php echo $user['name']; ?>
                            </td>
                            <td width="15%">
                            	<?php 
									if($type == "isAdmin") {
										echo "Pass Code:";
									}
								?>
                            </td>
                            <td class="shout">
                            	<?php 
									if($type == "isAdmin") {
										echo '"'.$user['security'].'"'; 
									}
								?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Company: 
                            </td>
                            <td class="shout">
                        		<?php echo $user['business']; ?>
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Address: 
                            </td>
                            <td>
                            	<textarea class="shout" cols=30 rows=4 readonly><?php echo $user['address']; ?></textarea>
                        		<?php //echo $user['address']; ?>
                            </td>
                            <td>
                            	Phone1: <br>
                                Phone2: <br>
                                Phone3: 
                            </td>
                            <td class="shout">
                            	<?php echo $user['phone1']; ?><br>
                                <?php echo $user['phone2']; ?><br>
                                <?php echo $user['phone3']; ?>
                            </td>
                        </tr>
                        <tr>
                        	<td>
                            	Email: 
                            </td>
                            <td class="shout">
                        		<?php echo $user['email']; ?>
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                        </tr>
                    </table>
                    <h3>Products</h3>
                    <table width="100%">
                    	<tr>
                        	<th>
                            	Name
                            </th>
                            <th>
                            	Product
                            </th>
                            <th>
                            	Unlock Code
                            </th>
                            <th>
                            	<div align="center">
                            		Installs
                                </div>
                            </th>
                            <th>
                            	Expire Date
                            </th>
                            <th>
                            	Active
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
            	</div>
                
                <!-- COL THREE -->
                <div class="span-3 last">
					<table>
                    	<tr>
                        	<td>
								<a id="btn_home" href="index.php" title="Home"><span>Home</span></a>
                   	        
								<a id="btn_login" href="scripts/login.php" title="Login"><span>Login</span></a>
                                    
                                <a id="btn_logout" href="scripts/logout.php" title="Logout"><span>Logout</span></a>
                                <?php
									if($type == 'isAdmin') {
										echo "
											<a id='btn_manage' href='manage.php?=$id' title='Manage'><span>Manage</span></a>
										";
									} else {
										echo "
											<a id='btn_update' href='manage2.php?=$id' title='Update'><span>Update</span></a>
										";
									}
								?>
                            </td>
                        </tr>
                    </table>
            	</div>
            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
