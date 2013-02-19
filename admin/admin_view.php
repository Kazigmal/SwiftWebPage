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

if ($error) {
	$err_messg = "User already exists in the Database";
}

//$user = mysql_query("SELECT * FROM customers WHERE id = '$id'");
//$user = mysql_fetch_assoc($user);

$q = "select * FROM customers WHERE id = $userid";
	$result = mysql_query($q);
	$customer = mysql_fetch_array($result);

//Pass User info to variables :: id set by $_GET[id] statement above
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

// Notes Look-up
$notes = mysql_query("SELECT * FROM notes WHERE customer_id = '$userid' ORDER BY sticky DESC, date_add DESC");


//ADD Admin Test here for Products Look-Up
if($type == 'isAdmin') {
	$products = mysql_query("SELECT * FROM products WHERE account_id = '$userid' ORDER BY expireDate ASC");
} else {
	$products = mysql_query("SELECT * FROM products WHERE user_id = '$userid' ORDER BY expireDate ASC");
	//$products = mysql_fetch_assoc($products);
}



?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
        
        
	</head>
	
    <body>
	<script type="text/JavaScript">
 
	FUNCTION confirmDelete(){
	VAR agree=CONFIRM("Are you sure you want to delete this file?");
		IF (agree)
     		RETURN TRUE ;
		ELSE
     		RETURN FALSE ;
		}
	</script>
    
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
                	<span class="large">Customer Profile</span>&nbsp;&nbsp;<a href="admin_edit_user.php?id=<?php echo $userid; ?>">Edit</a>
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
                            <td>Security Phrase:</td>
                            <td class="shout">
								<?php 
										echo $getAdmin['security']; 
									//echo $acnt_id; 
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
                        		<a href="mailto:<?php echo $customer['email']; ?>"><?php echo $customer['email']; ?></a>
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                            <td>&nbsp;
                            	
                            </td>
                        </tr>
                    </table>
                    
<!-------------------------------------------------------------------- Products Section ------------------------------------------------------------------------------------------->                    
                    
                    <span class="large">Products</span>&nbsp;&nbsp;<a href='admin_add_product.php?id=<?php echo $userid; ?>'>Add</a>
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
                            	<div align="center">
                            		Machines
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
                                ?>
                                    <tr>
                                        <td>
                                            <a href="admin_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['userName']; ?></a>
                                        </td>
                                        <td>
                                        	<a href="admin_edit_product.php?id=<?php echo $row['id']; ?>&user=<?php echo $userid; ?>">
                                            <?php 
												if($row['active'] == 0) {
													echo "<font color='#999999'><em>".$row['productName']."</em></font>";
												} else {
													echo $row['productName']; 
												}
											?>
                                            </a>
                                        </td>
                                        <td>
                                            <?php 
												if($row['active'] == 0) {
													echo "<font color='#999999'><em>".$row['unlockCode']."</em></font>";
												} else {
													echo $row['unlockCode']; 
												} 
											?>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <?php
													if($row['active'] == 0) {
														echo "<font color='#999999'><em>".$row['activations']."</em></font>";
													} else {
														echo $row['activations']; 
													}
												?>
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <?php 
													if($row['active'] == 0) {
														echo "<font color='#999999'><em>".$row['machines']."</em></font>";
													} else {
														echo $row['machines']; 
													}
												?>
                                            </div>
                                        </td>
                                        <td>
                                            <?php //echo $row['expireDate']; ?>
                                            <?php 
                                                $time = strtotime( $row['expireDate'] );
													if($row['active'] == 0) { 
														echo "<font color='#999999'><em>".date('M d, Y', $time)."</em></font>";
													} else {
														if($row['expireDate'] < $now) {
															echo "<font color='#FF0000'>".date('M d, Y', $time)."</font>";
														} else {
                                                			echo date('M d, Y', $time);
														}
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
                            //}
                        ?>
                    </table>

<!-------------------------------------------------------------------- Notes Section ------------------------------------------------------------------------------------------->

                    <span class="large">Notes</span>&nbsp;&nbsp;<a href='admin_add_note.php?id=<?php echo $userid; ?>'>Add</a><!--&nbsp;<a href='#'>Edit</a>-->
						<table>
                        	<tr>
                            	<td width="10%"><b>Date</b></td>
                                <td width="5%"><b><div align="center">Admin</div></b></td>
                                <td><b>Note</b></td>
                                <td width="10%"><b>Modified</b></td>
                                <?php 
									if($admin_level == 'superadmin') {
										echo "<td width='5%'><b><div align='center'>Delete</div></b></td>";
									}
								?>
                            </tr>
                            <?php
								while($row2 = mysql_fetch_array($notes)) { ?>
							<tr>
								<td>
                                	<div align="center">
									<?php 
                                        $time2 = strtotime( $row2['date_add'] );
										echo date('M d, Y', $time2)."<br />";
										echo date('H:m', $time2);
									?>
                                    </div>
								</td>
								<td>
                                	<?php
										if($admin_level == 'superadmin') {
											echo "<a href='admin_edit_note.php?id=".$row2['id']."&user=".$userid."'><div align='center'>".$row2['admin_init']."</div></a>";
										} elseif($admin_init == $row2['admin_init']) {
												echo "<a href='admin_edit_note.php?id=".$row2['id']."&user=".$userid."'><div align='center'>".$row2['admin_init']."</div></a>";
										} else {
											echo "<div align='center'>".$row2['admin_init']."</div>";
										}
                                    ?>
								</td>
								<td>
									<?php echo $row2['content']; ?>
								</td>
                                <td>
                                	<div align="center">
									<?php
										if($row2['date_add']==$row2['date_mod']) {
											echo "&nbsp;";
										} else {
                                        	$time2 = strtotime( $row2['date_mod'] );
											echo "<span class='quiet'><i>".date('M d, Y', $time2)."<br />";
											echo date('H:m', $time2)."</i></span>";
										}
									?>
                                    </div>
								</td>
                                <?php 
									if($admin_level == 'superadmin') {
										echo "<td><div align='center'>";
                                        echo '<a href="admin_delete_note.php?id=' . $row2['id'] . '&user='.$userid.'" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
                                        echo "</div></td>";
									}
								?>
							</tr>
							<?php } ?>
						</table>
                    
            	</div>

            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
