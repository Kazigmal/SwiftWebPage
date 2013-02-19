<?php

session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d H:i:s');
$acctAdmin = $_GET['id'];

if($_POST['addNewUser']) {
	
	$inputProdID = $_POST['inputProdID'];
	$inputAcct_id = $_POST['inputAcct_id'];
	$inputAddress = $_POST['inputAddress'];
	$editUserName = $_POST['editUserName'];
	$editEmail = $_POST['editEmail'];
	$inputBusiness = $_POST['inputBusiness'];
	$editPhone1 = $_POST['editPhone1'];
	$editPhone2 = $_POST['editPhone2'];
	$editPhone3 = $_POST['editPhone3'];
	//$editPassword = $_POST['editPassword'];
	$editPassword = md5($_POST['editPassword']);
	
	// Check if user exixts
	$u = "SELECT * FROM customers WHERE acnt_id = '$inputAcct_id' AND name = '$editUserName'";
	$resultz = mysql_query($u);
	$userExists = mysql_fetch_array($resultz);
	
	if(!$userExists) {
		
		//Add User Info
		$updateUser = mysql_query("INSERT INTO customers VALUES ('','$inputAcct_id','$editUserName','$inputAddress','$editEmail','$editPhone1','$editPhone2','$editPhone3','$inputBusiness','$editPassword','','isUser')") or die('Failed to Add User');
		
		$z = "SELECT * FROM customers WHERE acnt_id = '$inputAcct_id' AND name = '$editUserName'";
			$results = mysql_query($z);
			$findUserID = mysql_fetch_array($results);
			$newUserID = $findUserID['id'];
		
		//Update Product info
		$updateUser = mysql_query("UPDATE products SET userName = '$editUserName', user_id = '$newUserID', new = '0' WHERE id = '$inputProdID' ") or die('Added User, but failed to Update Product');
		//header( 'Location: admin_add_product_user.php?id='.$inputAcct_id );
		
		/* Test Block 
		echo 'User DOES NOT exists: <br />';
		echo 'Inserting into CUSTOMERS: <br />';
		echo 'id is blank<br />';
		echo 'acnt_id = '.$inputAcct_id.'<br />';
		echo 'name = '.$editUserName.'<br />';
		echo 'address = '.$inputAddress.'<br />';
		echo 'address = '.$editEmail.'<br />';
		echo 'address = '.$editPhone1.'<br />';
		echo 'address = '.$editPhone2.'<br />';
		echo 'address = '.$editPhone3.'<br />';
		echo 'address = '.$inputBusiness.'<br />';
		echo 'address = '.$editPassword.'<br />';
		echo 'security is blank<br />';
		echo 'type = isUser<br />';
		
		echo '<br />';
		
		echo 'User DOES NOT exist: <br />';
		echo '<br />';
		echo 'Variables being passed<br />';
		echo '$inputAcct_id = '.$inputAcct_id.'<br />';
		echo '$editUserName = '.$editUserName.'<br />';
		echo '<br />';
		echo 'Updating PRODUCTS: <br />';
		echo 'userName = '.$editUserName.'<br />';
		echo '<b>user_id = '.$newUserID.'</b><br />';
		echo 'new = 0<br />';
		echo 'WHERE id = '.$inputProdID.'<br />';
		die(); */
		
		
	}
	
	if($userExists) {
		//Add User Info
	$y = "SELECT * FROM customers WHERE acnt_id = '$inputAcct_id' AND name = '$editUserName'";
		$results = mysql_query($y);
		$findUserID = mysql_fetch_array($results);
		$newUserID = $findUserID['id'];
	
	//Update Product info
	$updateUser = mysql_query("UPDATE products SET userName = '$editUserName', user_id = '$newUserID', new = '0' WHERE id = '$inputProdID' ") or die('Added User, but failed to Update Product');
	
	/* Test Block 
		echo 'User DOES exist: <br />';
		echo '<br />';
		echo 'Variables being passed<br />';
		echo '$inputAcct_id = '.$inputAcct_id.'<br />';
		echo '$editUserName = '.$editUserName.'<br />';
		echo '<br />';
		echo 'Updating PRODUCTS: <br />';
		echo 'userName = '.$editUserName.'<br />';
		echo '<b>user_id = '.$newUserID.'</b><br />';
		echo 'new = 0<br />';
		echo 'WHERE id = '.$inputProdID.'<br />';
		die();*/
	
	}
	
	// Add Note to Account that License was added
	$code = $_POST['unlock'];
	$content = "Added license ". $code ." to users account";
	$addNote = mysql_query("INSERT INTO notes (id, customer_id, admin_id, content, date_add, date_mod, admin_init, sticky) VALUES('','$inputAcct_id','$admin_id','$content','$now','$now','$admin_init', '0')") or die(mysql_error());
	
	header( 'Location: admin_add_product_user.php?id='.$inputAcct_id );
}
	
$q = "select * FROM customers WHERE id = $acctAdmin";
	$result = mysql_query($q);
	$customer = mysql_fetch_array($result);

//Pass Account Holder info to variables :: id set by $_GET[id] statement above
$name = $customer['name'];
$acnt_id = $customer['id'];
$address = $customer['address'];
$email = $customer['email'];
$phone1 = $customer['phone1'];
$phone2 = $customer['phone2'];
$phone3 = $customer['phone3'];
$business = $customer['business'];
$password = $customer['password'];
$security = $customer['security'];
$type = $customer['type'];

//Get all Produst associated with Account Holder
$products = mysql_query("SELECT * FROM products WHERE account_id = '$acctAdmin' AND new='1' LIMIT 1");


$newUser = "Unassigned";
$prodTypeLong = $_POST['inputProduct'];
$licNum = $random_chars;
$numUsers = $_POST['numUsers'];

?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body>

	  <div class="container">
      		<?php include('css/src/admin_header.php'); ?>
            <?php include('admin_nav.php'); ?>
            
            <div class="span-24 last">
          		<?php 
					if($type != 'isAdmin') {
						echo "<br /><span class='large'>This User is not an Administrator</span><br /><br />";
					} else { ?>
						<span class="large"><?php echo $name; ?>'s Products</span>&nbsp;&nbsp;<a href='admin_add_product.php?id=<?php echo $acctAdmin; ?>'>Add</a>
                    	<table width="100%">
                            <form action="admin_add_product_user.php?id=<?php echo $acctAdmin; ?>" method="POST">
                            <!--<form action="test-add.php?id=<?php echo $acnt_id; ?>" method="POST">-->
                                                       
                    		<tr>
                        		<td><b>Name</b></td>
                            	<td width="12%"><b>License</b></td>
                                <td><b>Email</b></td>
                            	<td>Phone 1</td>
                            	<td>Phone 2</td>
                            	<td>Phone 3</td>
                            	<td>Password</td>
                                <td><b>Add New</b></td>
                        	</tr>
                        
                        	<?php while($row = mysql_fetch_array($products)) { 
                            		$prodID = $row['id'];
                                    ?>
                            <input type="hidden" name="unlock" value="<?php echo $row['unlockCode']; ?>" />        
                            <input type="hidden" name="inputAcct_id" value="<?php echo $acnt_id; ?>" />
                            <input type="hidden" name="inputAddress" value="<?php echo $address; ?>" />
                            <input type="hidden" name="inputProdID" value="<?php echo $prodID; ?>" />
                            <input type="hidden" name="inputBusiness" value="<?php echo $business; ?>" />
                            <tr>
                              	<td>
                                  	<input type="text" name="editUserName" value="<?php echo $row['userName']; ?>" size="15" />
                                </td>
                             	<td>
                                 	<?php echo $row['id'] . '&nbsp;' . $row['unlockCode']; ?>
                              	</td>
                                <td>
                                  	<input type="text" name="editEmail" size="20" />
                              	</td>
                               	<td>
                                    <input type="text" name="editPhone1" size="12" />
                             	</td>
                              	<td>
                               		<input type="text" name="editPhone2" size="12" />
                              	</td>
                              	<td>
                                	<input type="text" name="editPhone3" size="12" />
                              	</td>
                              	<td>
                                 	<input type="text" name="editPassword" size="12" />
                             	</td>
                                <td>
                                    <input type="submit" name="addNewUser" value="Add" />
                                </td>
                          	</tr>
                            
                 	<?php 
                            }
                    ?>
                    </form>
                    </table>
                <?php
					}
				?>
            </div>
            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
