<?php
	session_start();
/**
 * @author Tom Garland
 * @copyright 2012
 */

include ('../scripts/connect.php');
/**/
$captcha1 = $_SESSION['key'];
$captcha2 = $_SESSION['insertData'][19];

$now = date('Y-m-d H:i:s');

if($captcha1 != $captcha2) {
    //header( 'Location: new_user.php?err=nomatch' );
    echo $captcha1;
    echo '<br>';
    echo $captcha2;
return false;
}

$userKey = mysql_real_escape_string($_SESSION['insertData'][0]);
$name =  mysql_real_escape_string($_SESSION['insertData'][1]);
$security =  mysql_real_escape_string($_SESSION['insertData'][3]);
$business = mysql_real_escape_string($_SESSION['insertData'][4]);
$password = mysql_real_escape_string($_SESSION['insertData'][2]);
$street = mysql_real_escape_string($_SESSION['insertData'][5]);
$city = mysql_real_escape_string($_SESSION['insertData'][6]);
$state = mysql_real_escape_string($_SESSION['insertData'][7]);
$zip = mysql_real_escape_string($_SESSION['insertData'][8]);
$phone1 =  mysql_real_escape_string($_SESSION['insertData'][9]);
$phone2 = mysql_real_escape_string($_SESSION['insertData'][10]);
$phone3 = mysql_real_escape_string($_SESSION['insertData'][11]);
$email =  mysql_real_escape_string($_SESSION['insertData'][12]);
$tag = mysql_real_escape_string($_SESSION['insertData'][13]);
$web = mysql_real_escape_string($_SESSION['insertData'][14]);
$c1h = mysql_real_escape_string($_SESSION['insertData'][15]);
$c1v = mysql_real_escape_string($_SESSION['insertData'][16]);
$c2h = mysql_real_escape_string($_SESSION['insertData'][17]);
$c2v = mysql_real_escape_string($_SESSION['insertData'][18]);

/* TEST BLOCK 

echo "userKey ".$userKey."<br />";
echo "name ".$name."<br />";
echo "security ".$security."<br />";
echo "business ".$business."<br />";
echo "password ".$password."<br />";
echo "street ".$street."<br />";
echo "city ".$city."<br />";
echo "state ".$state."<br />";
echo "zip ".$zip."<br />";
echo "phone1 ".$phone1."<br />";
echo "phone2 ".$phone2."<br />";
echo "phone3 ".$phone3."<br />";
echo "email ".$email."<br />";
echo "tag ".$tag."<br />";
echo "web ".$web."<br />";
echo "c1h ".$c1h."<br />";
echo "c1v ".$c1v."<br />";
echo "c2h ".$c2h."<br />";
echo "c2v ".$c2v."<br />";
die();*/
    
    
    $result = mysql_query("SELECT * FROM customers WHERE email = '$email'");
    $num_rows = mysql_num_rows($result);
    
    if ($num_rows > 0) {
      header( 'Location: new_user.php?user=exists' );
    }
    else {
      mysql_query("INSERT INTO customers (id, acnt_id, name, street, city, state, zip, email, phone1, phone2, phone3, business, password, security, type, userKey, website, tagLine, custom1Head, custom1Value, custom2Head, custom2Value) 
VALUES ('', '', '$name', '$street', '$city', '$state', '$zip', '$email', '$phone1', '$phone2', '$phone3', '$business', '$password', '$security', 'isAdmin', '$userKey', '$web', '$tag', '$c1h', '$c1v', '$c2h', '$c2v')") or die("Could not add User...");
      
        // find user again
        $x = mysql_query("SELECT * FROM customers WHERE email = '$email' LIMIT 1");
		$account = mysql_fetch_array($x);
		
		//get id and assign to Account ID
		$acnt_id = $account['id'];
		
		//Update user with Account ID
		$updateUser = mysql_query("UPDATE customers SET acnt_id = '$acnt_id' WHERE email = '$email'") or die('Added User, but failed to Update Product');
      
        //Add Note to Users account
        $admin_id = '4';
        $admin_init = 'SYS';
        $content = 'User added through software portal';
        $addNote = mysql_query("INSERT INTO notes (id, customer_id, admin_id, content, date_add, date_mod, admin_init, sticky) VALUES('','$acnt_id','$admin_id','$content','$now','$now','$admin_init', '1')") or die(mysql_error());
      
      header( 'Location: new_user.php?user=added' );  
    }



?>