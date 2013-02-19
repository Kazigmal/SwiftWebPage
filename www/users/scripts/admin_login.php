<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */
//die();

session_start();
	
	if(isset($_SESSION['level'])) {
		header( 'Location: ../admin_main.php' );
	}


require("connect.php");

// Store login variables
$post_initials = $_POST['post_initials'];
$post_password = $_POST['post_password'];

//Strip SQL Injection
$post_initials = mysql_real_escape_string($post_initials);
$post_password = mysql_real_escape_string($post_password);

if ($post_initials&&$post_password) {
    
    if (strlen($post_initials)>3||strlen($post_password)>15) {
        $err_messg = "Login Initials or Password is too long!";
    } else {
		 //Convert password to md5
        $post_password = md5($post_password);
		
		//Query the Database preventing SQL Injection
        $login = sprintf("SELECT * FROM admins WHERE initials='%s' AND password='%s'", mysql_real_escape_string($post_initials), mysql_real_escape_string($post_password));
		
		$rowcount = mysql_num_rows(mysql_query($login));
        $array = mysql_fetch_assoc(mysql_query($login));
		
		$id = $array['id'];
		$name = $array['name'];
		$initials = $array['initials'];
		$level = $array['level'];
		
        //echo $id;
        // Uncomment to test query functionality
        //echo $rowcount;
		//die();
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
						if(!isset($_SESSION['name'])) { //No Session set yet
							echo "<h2>Please Log in</h2>";
						} else {
							echo "<h2>Logged in as</h2>";
							echo $name."<br>";
							echo $level;
						}
					?>
            	</div>
            
            <!-- COL TWO -->
            	<div class="span-8">
					<div align="center">
                    	<form action="admin_login.php" method="post">
							<table width="350">
            					<tr>
                					<td>
                    					<div align="right">Username:</div>
                    				</td>
                    				<td>
                    					<input type="text" name="post_initials" />
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
                				$_SESSION['id']=$id;
								$_SESSION['name']=$name;
								$_SESSION['level']=$level;
								$_SESSION['initials']=$initials;
								
								header( 'Location: ../admin_main.php' );
								
								?>
                                <table>
                                	<tr>
                                    	<td>
                                        	<?php
												echo $name . "<br>";
												echo $level;
											?>
                                        </td>
                                        <td>
                                        	<div align="right">
                                            	<a href="#">Search for user</a><br>
                                                <a href="#">Add a user</a><br>
                                                <a href="#">Database reports</a><br>
                                                <?php 
													if($level=="superadmin") {
														echo "<a href='#'>Add Admin</a>";
													}
                                                 ?> 
                                                <br>
												<br>
												<a href="admin_logout.php">Log out</a><br>                                     
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