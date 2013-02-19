<?php
	session_start();
	if(!isset($_SESSION['id'])) {
		header( 'Location: scripts/login.php' );
	}
	
	$id 	= $_SESSION['id'];
	$type 	= $_SESSION['type'];
	$name 	= $_SESSION['name'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">

	<head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta name=”description” content=”Swift Report Writer Home Inspection Software User Profiles”>
		<meta name=”keywords” content=”Swift Report Writer Home Inspection Software User Profiles”>
		<meta http-equiv=”Content-Type” content=”text/html; charset=ISO-8859-1″>
    
    	<title>SRW User Admin</title>

    		<!-- Framework CSS -->
		<link href="css/screen.css" rel="stylesheet" type="text/css">
    	<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

		<link rel="icon" 
			type="image/ico" 
			href="css/favicon.ico">
      
    		<!-- Import fancy-type plugin for the sample page. -->
    	<link rel="stylesheet" href="css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">

	</head>

	<body>
    
    <?php header('Location: scripts/admin_login.php'); ?>
		<!--<div class="container">
        	<?php include('css/src/header3.php'); ?>
            
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
                <div class="span-18">
					<h2>News</h2>
            	</div>
                
                <!-- COL THREE -->
                <div class="span-2 last">
					<table>
                    	<tr>
                        	<td>
								<a id="btn_home" href="index.php" title="Home"><span>Home</span></a>
                   	        
								<a id="btn_login" href="scripts/login.php" title="Login"><span>Login</span></a>
                                    
                                <a id="btn_logout" href="scripts/logout.php" title="Logout"><span>Logout</span></a>
                                
                                <a id="btn_view" href="profile.php?=<?php echo $id; ?>" title="View"><span>View</span></a>
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
		</div>-->
	</body>
</html>
