<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */
//die();

session_start();


require("connect.php");

// Store login variables
$post_email = $_POST['post_email'];
$post_password = $_POST['post_password'];

//Strip SQL Injection
$post_email = mysql_real_escape_string($post_email);
$post_password = mysql_real_escape_string($post_password);

if ($post_email&&$post_password) {
    
    if (strlen($post_email)>50||strlen($post_password)>15) {
        $err_messg = "Email or Password is too long!";
    } else {
		 //Convert password to md5
        $post_password = md5($post_password);
		
		//Query the Database preventing SQL Injection
        $login = sprintf("SELECT * FROM customers WHERE email='%s' AND password='%s'", mysql_real_escape_string($post_email), mysql_real_escape_string($post_password));
		
		$rowcount = mysql_num_rows(mysql_query($login));
        $array = mysql_fetch_assoc(mysql_query($login));
		
		$id = $array['id'];
		$name = $array['name'];
		$business = $array['business'];
		$email = $array['email'];
		$type = $array['type'];
		
        //echo $id;
        // Uncomment to test query functionality
        //echo $rowcount;
	}
}

?>
<html>
	<head>

	<link href="../css/screen.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
<body>

		<div class="container">
        
        	<?php 
				include("../css/src/header1.php"); 
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
            	<div class="span-8">
            		<?php
						if(!isset($_SESSION['id'])) { //No Session set yet
							echo "<h2>Please Log in</h2>";
						} else {
							echo "<h2>You are logged in as</h2>";
							echo $_SESSION['name'];
						}
					?>
            	</div>
            
            <!-- COL TWO -->
            	<div class="span-8">
					<div align="center">
                    	<form action="login.php" method="post">
							<table width="350">
            					<tr>
                					<td>
                    					<div align="right">Email:</div>
                    				</td>
                    				<td>
                    					<input type="text" name="post_email" />
                    				</td>
                				</tr>
                				<tr>
                					<td>
                    					<div align="right">Password:</div>
                    				</td>
                    				<td>
                    					<input type="password" name="post_password" />
                    				</td>
                				</tr>
                				<tr>
                					<td colspan="2">
                    					<div align="center"><input type="submit" name="submit" value="Submit" /></div>
                    				</td>
                				</tr>
            				</table>
                        </form>
            		</div>
            	</div>
                
            <!-- COL THREE -->
            	<div class="span-8 last">
            		
					<?php  // POST TEST
						if (isset($_POST['submit'])) {
							/*
							echo "Submited";
							echo "<br><br>";
							echo $post_email . "<br>";
							echo $post_password ."<br>";
							*/
							
							if($rowcount == 0) {
								echo "<div class='error'>";
								echo "<b>No matches were found!</b>";
								echo "</div>";;
							} elseif($rowcount == 1) {
								$_SESSION['email']=$email;
                				$_SESSION['id']=$id;
								$_SESSION['name']=$name;
								$_SESSION['business']=$business;
								$_SESSION['type']=$type;
								echo "<div class='success'>";
								echo $rowcount . " match was found!";
								echo "</div>"; ?>
                                <table>
                                	<tr>
                                    	<td>
                                        	<?php
												echo $name . " with<br>";
												echo $business;
											?>
                                        </td>
                                        <td>
                                        	<div align="right">
                                            	<a href="../profile.php?=<?php echo $id; ?>">View</a><br>
                                                <?php 
													if($type=="isAdmin") {
														echo "<a href='#'>Manage</a>";
													}
                                                 ?>                                      
                                            </div>
                                        </td>
                                    </tr>
                                </table>
								<?php
							}
						}
					?>
            	</div>
            	<?php include('../css/src/footer.php'); ?>
			</div>
            
		</div>
	</body>
</html>