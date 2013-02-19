<link href="css/screen.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

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

// Get product Info
$product = mysql_query("SELECT * FROM products");

$q1 = "select * FROM products WHERE productName = 'Swift Report Writer'";
$q15 = "select * FROM products WHERE productName = 'Swift Report Writer' AND expireDate > '$now'";
$q2 = "select * FROM products WHERE productName = 'Swift Residential'";
$q25 = "select * FROM products WHERE productName = 'Swift Residential' AND expireDate > '$now'";
$q3 = "select * FROM products WHERE productName = 'Swift Chimney'";
$q35 = "select * FROM products WHERE productName = 'Swift Chimney' AND expireDate > '$now'";
$q4 = "select * FROM products WHERE productName = 'Swift Commercial'";
$q45 = "select * FROM products WHERE productName = 'Swift Commercial' AND expireDate > '$now'";
	
	$result1 = mysql_query($q1);
	$SRW = mysql_num_rows($result1);
	
		$result15 = mysql_query($q15);
		$SRW_current = mysql_num_rows($result15);
	
	$result2 = mysql_query($q2);
	$SRL = mysql_num_rows($result2);
	
		$result25 = mysql_query($q25);
		$SRL_current = mysql_num_rows($result25);
	
	$result3 = mysql_query($q3);
	$SCL = mysql_num_rows($result3);
	
		$result35 = mysql_query($q35);
		$SCL_current = mysql_num_rows($result35);
	
	$result4 = mysql_query($q4);
	$SCM = mysql_num_rows($result4);
	
		$result45 = mysql_query($q45);
		$SCM_current = mysql_num_rows($result45);



?>
<div class="container">
	<?php include('css/src/admin_header.php'); ?>
	<?php include('admin_nav.php');
	echo "<br /><br /><br />";
		if(!isset($_SESSION['level'])) {
			//header( 'Location: scripts/admin_login.php' );
			echo "<div align='center'>";
			echo "<h1>You must be a system admin to view this page</h1><br>";
			echo "<a href='scripts/admin_login.php'>Login</a>";
			echo "</div>";
			include('css/src/footer.php');
			return false;
		}
	?>
    
    <div class="span-24">
    	<div align="center">
    		<table width="550"> 
        		<tr>
            		<td>
                		<span class="large"><?php echo $SRW; ?></span> Swift Report Writer Users<br />
                        	<span class="quiet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $SRW_current; ?> are current, <?php echo $SRW - $SRW_current; ?> are expired.<br /></span>
                    	<span class="large"><?php echo $SCL; ?></span> Swift Chimney Library Users<br />
                        	<span class="quiet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $SCL_current; ?> are current, <?php echo $SCL - $SCL_current; ?> are expired.<br /></span>
                	</td>
                	<td>
                		<span class="large"><?php echo $SRL; ?></span> Swift Residential Library Users<br />
                        	<span class="quiet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $SRL_current; ?> are current, <?php echo $SRL - $SRL_current; ?> are expired.<br /></span>
                    	<span class="large"><?php echo $SCM; ?></span> Swift Commercial Users<br />
                        	<span class="quiet">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $SCM_current; ?> are current, <?php echo $SCM - $SCM_current; ?> are expired.<br /></span>
                    </td>
            	</tr>
        	</table>
  		</div>
    </div>
		
	<?php include('css/src/footer.php'); ?>
</div>