<?php

session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d');
//$userid = $_POST['userid'];
$userid = $_GET['id'];

//$user = mysql_query("SELECT * FROM customers WHERE id = '$id'");
//$user = mysql_fetch_assoc($user);
	
//$q = "select * FROM customers WHERE id = $_GET[id]";
$q = "select * FROM customers WHERE id = $userid";
	$result = mysql_query($q);
	$customer = mysql_fetch_array($result);

//Pass User info to variables :: id set by $_GET[id] statement above
$name = $customer['name'];
//$acnt_id = $customer['acnt_id'];
//$address = $customer['address'];
//$email = $customer['email'];
//$phone1 = $customer['phone1'];
//$phone2 = $customer['phone2'];
//$phone3 = $customer['phone3'];
//$business = $customer['business'];
//$password = $customer['password'];
//$security = $customer['security'];
$type = $customer['type'];

//ADD Admin Test here for Products Look-Up
if($type == 'isAdmin') {
	$products = mysql_query("SELECT * FROM products WHERE account_id = '$userid'");
} else {
	$products = mysql_query("SELECT * FROM products WHERE user_id = '$userid'");
	//$products = mysql_fetch_assoc($products);
}

// Generate a Random 5 Character Key
if($_POST['submit']) {
	//removed number 0, capital o, number 1 and small L
	//Total: keys = 32, elements = 33
	$characters = array(
	"A","B","C","D","E","F","G","H","J","K","L","M",
	"N","P","Q","R","S","T","U","V","W","X","Y","Z",
	"1","2","3","4","5","6","7","8","9");

	//make an "empty container" or array for our keys
	$keys = array();

	//first count of $keys is empty so "1", remaining count is 1-6 = total 7 times
	while(count($keys) < 8) {
    	//"0" because we use this to FIND ARRAY KEYS which has a 0 value
    	//"-1" because were only concerned of number of keys which is 32 not 33
    	//count($characters) = 33
    	$x = mt_rand(0, count($characters)-1);
    	if(!in_array($x, $keys)) {
       		$keys[] = $x;
    	}
	}

	foreach($keys as $key){
   		$random_chars .= $characters[$key];
	}
}

$newUser = "Unassigned";
$prodTypeLong = $_POST['inputProduct'];
$licNum = $random_chars;
$numUsers = $_POST['numUsers'];

// current date
$currentDate = date("Y-m-d");
//Add one year to current date
//$expiresOn = strtotime(date("Y-m-d", strtotime($currentDate)) . " +1 year");
$expiresOn = strtotime ( '+1 year' , strtotime ( $currentDate ) ) ;
$expiresOn = date ( 'Y-m-j' , $expiresOn );

// Abbreviate Product name for License
if($_POST['inputProduct'] == "Swift Report Writer" ) {$prodType = "SRW";}
if($_POST['inputProduct'] == "Swift Residential" ) {$prodType = "RES";}
if($_POST['inputProduct'] == "Swift Chimney" ) {$prodType = "CHM";}
if($_POST['inputProduct'] == "Swift Commercial" ) {$prodType = "COM";}

// Create License Construct
$construct = $prodType."-".$licNum."-".$numUsers;



// Insert $newUser into customers


// Insert $construct into products

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
					} else {
				?>
            	<form action="admin_add_product.php?id=<?php echo $userid; ?>" method="POST">
                <span class="large">Adding User/Product to: <?php echo $name; ?>'s Account</span><br />
                <select name="inputProduct">
                	<option>Swift Report Writer</option>
                    <option>Swift Residential</option>
                    <option>Swift Chimney</option>
                    <option>Swift Commercial</option>
                </select>
                Users:&nbsp;
                <input type="text" name="numUsers" />&nbsp;
                <input type="hidden" name="inputAccount" value="<?php echo $userid ?>" />
                <input type="hidden" name="inputEmp" value="<?php echo $userid ?>" />
                <input type="hidden" name="inputExpires" value="<?php echo $expiresOn ?>" />
                <input type="submit" name="submit" value="Generate" />
                
                	
                </form>
					<?php 
						if($_POST['submit']) {
							/*if(empty($_POST['inputUser'])) {
								echo "<br /><span class='error'>Please enter a User Name</span><br /><br />";
								include('css/src/footer.php');
								return false;
								
							}*/
							
							if(empty($_POST['numUsers'])) {
								echo "<br /><span class='error'>Please enter the Number of Inspectors</span><br /><br />";
								include('css/src/footer.php');
								return false;
								
							}
							
							$newProd = mysql_query("INSERT INTO products VALUES ('','$userid','','Unassigned','$prodTypeLong','$construct','','','$expiresOn','1','$numUsers', '1')") or die('Failed to Insert data');
							/*$userQuery = mysql_query("SELECT * FROM customers WHERE name='$newUser' AND acnt_id='$userid'");
							
							//If user is found with both name in db AND is assoc with User's Account
							if (mysql_num_rows($userQuery)>0) { 
        						//echo "User will NOT be added to Customers<br /><br />";
    						}
							
							//If user is found with name in db but not assoc with User's Account
							if (mysql_num_rows($userQuery)==0) {
								//echo $newUser. "User ID".$userid;
        						//echo "User will be added to Customers<br /><br />";
								$newCustomer = mysql_query("INSERT INTO customers VALUES ('','$userid','$newUser','','','','','','','5f4dcc3b5aa765d61d8327deb882cf99','','isUser')");
    						}*/
							header( 'Location: admin_add_product_user.php?id='.$userid );
							
							echo "<br /><span class='success'>License#: <b>".
								$construct."</b>&nbsp;and assigned to <b>".
								$name."'s</b> account. Expires on:&nbsp;".
								$expiresOn."</span><br /><br />";
						}
					?>
                
            </div>
            	
			<?php } ?>
            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
