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

$now	= date('Y-m-d H:i:s');
$productid = mysql_real_escape_string($_GET['id']);
$userid = mysql_real_escape_string($_GET['user']);
$error = $_GET['error'];

$product = mysql_query("SELECT * FROM products WHERE id = '$productid'");

	//$id	= $productid;
	$userName = $_POST['inputName'];
	$unlockCode = $_POST['inputCode'];
	$expireDate = $_POST['inputDate'];
	$active = $_POST['inputActive'];
	$users = $_POST['inputUsers'];

/*if($error){
	 //Define error messages here
}*/

if(isset($_POST['submit'])) {
	$id	= $productid;
	$userName = $_POST['inputName'];
	$unlockCode = $_POST['inputCode'];
	$expireDate = $_POST['inputDate'];
	$expDate = $_POST['inputField'];
	$active = $_POST['inputActive'];
	$users = $_POST['inputUsers'];
	
	$update = mysql_query("UPDATE products SET 
				userName = '$userName',
				unlockCode = '$unlockCode',
				expireDate = '$expireDate',
				active = '$active',
				users = '$users' 
				WHERE id = $id ") or die(mysql_error());
	header( "Location: admin_view.php?id=".$userid );
	
	echo $id."<br />";
	echo $userName."<br />";
	echo $unlockCode."<br />";
	echo $expireDate."<br />";
	echo $expDate."<br />";
	echo $active."<br />";
	echo $users."<br />";
	
}


//Pass User info to variables :: id set by $_GET[id] statement above
/*$q = "select * FROM notes WHERE id = $productid";
	$result = mysql_query($q);
	$product = mysql_fetch_array($result);*/
?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
        
		<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />        
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
            <div class="span-24 last">
            <span class="large">Edit User Product</span>
            </div>

            <table>
            	<tr>
                	<td><b>ID</b></td>
                    <td><b>User Name</b></td>
                    <td><b>Product Name</b></td>
                    <td><b>Unlock Code</b></td>
                    <td><b>Installs</b></td>
                    <td><b>Machines</b></td>
                    <td><b>Expire Date</b></td>
                    <td><b>Active</b></td>
                    <td><b>users</b></td>
                    <td><b>Delete</b></td>
                </tr>
                <form action="admin_edit_product.php?id=<?php echo $productid; ?>&user=<?php echo $userid; ?>" method="POST">
                <tr>
                <?php while($row = mysql_fetch_array($product)) { ?>
						 <td><?php echo $row['id']; ?></td>
                         <td><input type="text" name="inputName" value="<?php echo $row['userName']; ?>" /></td>
                         <td><?php echo $row['productName']; ?></td>
                         <td><input type="text" name="inputCode" value="<?php echo $row['unlockCode']; ?>" /></td>
                         <td><?php echo $row['activations']; ?></td>
                         <td><?php echo $row['machines']; ?></td>
                         <td>
                         	<input type="text" name="inputDate" value="<?php echo $row['expireDate']; ?>" id="inputField" size="8" />
                         </td>
                         <td>
                         	<?php if($row['active']==1) { ?>
                         		<select name="inputActive">
									<option selected="yes" value="1">Active</option>
									<option value="0">Disabled</option>
								</select>
                            <?php } else { ?>
                            	<select name="inputActive">
									<option value="1">Active</option>
									<option selected="yes" value="0">Disabled</option>
								</select>
                            <?php } ?>
                         </td>
                         <td><input type="text" name="inputUsers" size="1" value="<?php echo $row['users']; ?>" /></td>
                         <td><?php
                         echo '<a href="admin_delete_product.php?id=' . $row['id'] . '" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
						 ?>
				<?php } ?>
                </tr>
                <tr>
                	<td colspan="10"><div align="center"><input type="submit" name="submit" value="Submit" /></div></td>
                </tr>
                </form>
            </table>
          		
            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
