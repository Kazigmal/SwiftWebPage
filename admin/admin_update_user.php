<?php

session_start();

require 'scripts/connect.php';

$sessionId 	= $_SESSION['id'];
$sessionType 	= $_SESSION['type'];
$sessionName 	= $_SESSION['name'];

/******* Submit posted data to the Database *****/
//if(isset($_POST['submit'])) {
	
	$id				= $_POST[inputId];
	$name			= $_POST[inputName];
	$address		= $_POST[inputAddress];
	$email			= $_POST[inputEmail];
	$phone1			= $_POST[inputPhone1];
	$phone2			= $_POST[inputPhone2];
	$phone3			= $_POST[inputPhone3];
	$business		= $_POST[inputBusiness];
	$security		= $_POST[inputSecurity]; 
	
	$update = "UPDATE customers SET 
			name 		= '$name', 
			address 	= '$address', 
			email 		= '$email', 
			phone1 		= '$phone1', 
			phone2		= '$phone2', 
			phone3		= '$phone3', 
			business	= '$business', 
			security	= '$security', 
		WHERE id = '$id'";
		
	/**** this works ***/
	mysql_query("UPDATE customers SET 
				security = '$security', 
				name = '$name',
				address = '$address',
				email = '$email', 
				phone1 = '$phone1', 
				phone2 = '$phone2', 
				phone3 = '$phone3',
				business = '$business' 
				WHERE id = '$id'") or die(mysql_error());	
	
	/**** Not Working ****/
	//mysql_query($update) or die(mysql_error());
//}


/**** Test Block ****
echo "This was the data submitted to the Database...<br>
<br>
";
echo $_POST[inputId]."<br>";
echo $_POST[inputName]."<br>";
echo $_POST[inputAddress]."<br>";
echo $_POST[inputEmail]."<br>";
echo $_POST[inputPhone1]."<br>";
echo $_POST[inputPhone2]."<br>";
echo $_POST[inputPhone3]."<br>";
echo $_POST[inputBusiness]."<br>";
echo $_POST[inputSecurity]."<br>";
*/
?>
<br>
<br>

<a href="profile.php?=<?php echo $_POST[inputId]; ?>">Return</a>