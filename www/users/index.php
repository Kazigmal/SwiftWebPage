
<?php

/**
 * @author Tom Garland
 * @copyright 2012
 */

	session_start();
	/*
	if(!isset($_SESSION['id'])) {
		header( 'Location: scripts/login.php' );
	}*/
	
    include('../scripts/connect.php');
	
	$msg = "";
	
// Store login variables
$post_initials = $_POST['inputLogin'];
$post_password = $_POST['inputPwd'];

//Strip SQL Injection
$post_initials = mysql_real_escape_string($post_initials);
$post_password = mysql_real_escape_string($post_password);

	if ($post_initials&&$post_password) {
    
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
			$msg = $msg.'Could not find user in Database<br>';
		}
		$name = $array['name'];

		$fname = explode(" ", $name);
		$_SESSION['fname'] = $fname[0];
		
		$_SESSION['id'] = $array['id'];
		$_SESSION['name'] = $array['name'];
		$_SESSION['email'] = $array['email'];
		$_SESSION['type'] = $array['type'];
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


    	<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->


		<link rel="icon" 
            type="image/ico" 
            href="http://www.swiftreportingsoftware.com/favicon.ico">

      <link href="../css/screen.css" rel="stylesheet" type="text/css">
    		<!-- Import fancy-type plugin for the sample page. -->
    	<link rel="stylesheet" href="../css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
    	<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
	</head>

	<body>
	<a name = "top"> </a>
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
			
			<div class="span-24 white">
				<div class="span-24">
					<center><h2>Welcome to the Swift Reporting Software User Administration Page</h2></center>
                    <?php echo 'Fname: '.$fname[0]; ?>
				</div>
				<?php
					if($msg) { ?>
						<div class="span-24 last">
							<div class="box error">
								<?php echo $msg; ?>
							</div>
						</div> <?php
					}
					
					if($_SESSION['name']) { ?>
						<div class="span-24 last">
							<div class="box info">
								<table>
									<tr>
										<td width="49%">
											Welcome <?php echo $_SESSION['name']; ?>&nbsp;
                                        </td>
                                        <td width="49%">
											You have <a href="#">3 New Messages</a>
										</td>
										<td>
											<a href='scripts/logout.php'>Logout</a>
										</td>
									</tr>
								</table
							></div>
						</div> <?php
					}
				?>
				<div class="span-17 colborder">
					<div class="box">
                        <p><img src="images/user_profile.png" height="125" class="right" alt="profile">
                        <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin dictum mi eu mollis. Etiam et dui 
                        id orci facilisis fringilla. Cras sed tellus ligula. Vivamus dapibus molestie felis, sed facilisis felis pulvinar 
                        sed. In consectetur mi eget urna rutrum eget semper leo dignissim. In tempus ultrices consectetur. Cum sociis 
                        natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras et nulla ligula.</p>
                        <p>&nbsp;</p>
                        <p> <strong>In consectetur mi eget urna rutrum eget semper leo dignissim</strong></p>
                        <ul>
                          <li>Cras sed tellus ligula. Vivamus dapibus molestie felis.</li>
                          <li>Sed facilisis felis pulvinar 
                            sed. In consectetur mi eget urna rutrum .</li>
                          <li>Eget semper leo dignissim. In tempus ultrices consectetur. </li>
                          <li>Cum sociis 
                            natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras et nulla ligula.</li>
                        </ul>
                    </div>
				</div>
				<div class="span-5 notice last">
					<?php  ?>
				</div>
			</div>
			<div class="span-24">
					<?php include ('../design/footer3.php'); ?>
			</div>
		</div>
	</body>
</html>
