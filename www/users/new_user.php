<?php
	session_start();
 /**
 * @author Tom Garland
 * @copyright 2012
 */
	/*if(!isset($_SESSION['Q11H174y'])) {
		header( 'Location: login.php' );
	}*/
    
    //Set Test Condition
    $test = 0;
    
    //Set or clear Variables
	unset ($_SESSION['insertData']);
    $err = "";
	$now1 = date(z);
	$now2 = date(d);
	$now3 = date(n);
	$now4 = date(his);
    $err2 = $_GET['err'];
    $status = $_GET['user'];
    
    if($status == 'exists') {
        $err = $err.'<strong>That email is in use</strong><br> Please try again';
    }
    
    if($err2) {
        $err = $err.'Captcha Error!<br />';
    }
    
    if($_POST['submit']) {

        $pass1 = $_POST['inputPassword'];
        $pass2 = $_POST['inputConfirm'];
        $name = $_POST['inputName'];
        $security = $_POST['inputSecurity'];
        $business = $_POST['inputBusiness'];
        $street = $_POST['inputStreet'];
		$city = $_POST['inputCity'];
		$state = $_POST['inputState'];
		$zip = $_POST['inputZip'];
        $phone1 = $_POST['inputPhone1'];
        $phone2 = $_POST['inputPhone2'];
        $phone3 = $_POST['inputPhone3'];
        $email = $_POST['inputEmail'];
        $tag = $_POST['inputTag'];
        $web = $_POST['inputWeb'];
        $c1h = $_POST['inputCustom1Head'];
        $c1v = $_POST['inputCustom1Value'];
        $c2h = $_POST['inputCustom2Head'];
        $c2v = $_POST['inputCustom2Value'];
		$captcha = $_POST['inputCaptcha'];
		
       if($test == 0) {
        
            if($_SESSION['key'] != $captcha) {
                $err = $err.'Captcha Error!<br />';
            }
            
            if($pass1 != $pass2) {
               $err = $err.'Passwords do not match!<br />';
           }
           
           if(!$pass1) {
               $err = $err.'Enter Password!<br />';
           }
           
           if(!$pass2) {
               $err = $err.'Confirm Password!<br />';
           }
           
           if($pass1 == $pass2){
            $password = md5($pass1);
            //$err = $err.$password.'<br />';
           }
           
           if(!$name) {
            $err = $err.'Name not entered!<br />';
           }
           
           if(!$email) {
            $err = $err.'Email not entered!<br />';
           }
       }
       
        
       if(!$err) {
		   
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
   
		   $userKey = $now4.$random_chars.$now1.$random_chars.$now3.$now2;
		   
           $insertData  = array($userKey, $name, $password, $security, $business, $street, $city, $state, $zip, $phone1, $phone2, $phone3, $email, $tag, $web, $c1h, $c1v, $c2h, $c2v, $captcha);
           $_SESSION['insertData'] = $insertData;
           
           if($test = 0){
            header('Location: insert.php');
           }
           
           if($test = 1) {
            header('Location: insert.php');
           }
           
           if($test = 2) {
            echo $_POST['inputCaptcha'].'<br>';
            echo $captcha;
            return faulse;
           }
       }
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

    		<!-- Framework CSS -->

    	<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->


		<link rel="icon" 
            type="image/ico" 
            href="http://www.swiftreportingsoftware.com/favicon.ico">

      <link href="../css/screen.css" rel="stylesheet" type="text/css">
    		<!-- Import fancy-type plugin for the sample page. -->
    	<link rel="stylesheet" href="css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">
    	<!-- dd menu -->
        
<script type="text/javascript">
    <!--
    var timeout         = 500;
    var closetimer		= 0;
    var ddmenuitem      = 0;
    
    // open hidden layer
    function mopen(id) {	
    	// cancel close timer
    	mcancelclosetime();
    
    	// close old layer
    	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
    
    	// get new layer and show it
    	ddmenuitem = document.getElementById(id);
    	ddmenuitem.style.visibility = 'visible';
    }
    
    // close showed layer
    function mclose() {
    	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
    }
    
    // go close timer
    function mclosetime() {
    	closetimer = window.setTimeout(mclose, timeout);
    }
    
    // cancel close timer
    function mcancelclosetime() {
    	if(closetimer) {
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
            <form action="new_user.php" method="POST">
                <div class="span-18">
                
                <br />
                <h3>&nbsp;&nbsp;Create New Customer Profile</h3>
                    <table width="100%">
                        <tr>
                        	<td align="right" width="15%">
                            	* Name: 
                          	</td>
                          	<td class="shout">
                            	<input type="text" class="span-7 required" name="inputName" tabindex = "1" value="<?php echo $_POST['inputName']; ?>" />
                           	</td>
                          	<td align="right" width="15%">
                            	* Security Phrase: 
                          	</td>
                           	<td class="shout">
                            	<input type="text" class="span-5 required" name="inputSecurity" tabindex = "8" value="<?php echo $_POST['inputSecurity']; ?>" />
                          	</td>
                        </tr>
                       	<tr>
                         	<td align="right">
                           		Company:<br /><br />
                           		Tag Line:
                            </td>
                           	<td class="shout">
                            	<input type="text" class="span-7" name="inputBusiness" tabindex = "2" value="<?php echo $_POST['inputBusiness']; ?>" /><br />
                            	<input type="text" class="span-7" name="inputTag" tabindex = "3" value="<?php echo $_POST['inputTag']; ?>" />
                           	</td>
                           	<td align="right">
                             	* Password:<br /><br />
                              	* Confirm:
                           	</td>
                           	<td>
                            	<input type="password" class="span-5 required" name="inputPassword" tabindex = "9" value="<?php echo $_POST['inputPassword']; ?>" /><br />
                            	<input type="password" class="span-5 required" name="inputConfirm" tabindex = "10" value="<?php echo $_POST['inputConfirm']; ?>" />
                          	</td>
                       	</tr>
                       	<tr>
                         	<td align="right">
                             	Street: <br /><br /><br />
                                City St Zip:
                          	</td>
                          	<td>
                            	<table>
                                	<tr>
                                    	<td colspan="3">
                                    		<textarea class="shout span-7" rows=2 name="inputStreet" tabindex = "4"><?php echo $_POST['inputStreet']; ?></textarea>
                                    	</td>
                                    </tr>
                                    <tr>
                                    	<td>
                                        	<input type="text" class="span-3 last" name="inputCity" tabindex = "5" value="<?php echo $_POST['inputCity']; ?>" />
                                        </td>
                                        <td>
                                        	<input type="text" class="span-1 last" name="inputState" tabindex = "6" value="<?php echo $_POST['inputState']; ?>" />
                                        </td>
                                        <td>
                                        	<input type="text" class="span-2 last" name="inputZip" tabindex = "7" value="<?php echo $_POST['inputZip']; ?>" />
                                        </td>
                                    </tr>
                                </table>
                             	
                                
                                
                                
                                
                                
                          	</td>
                          	<td align="right">
                            	* Phone1: <br /><br />
                               	Phone2: <br /><br />
                              	(Fax:) 
                           	</td>
                           	<td class="shout">
                            	<input type="text" class="span-5 required" name="inputPhone1" tabindex = "10" value="<?php echo $_POST['inputPhone1']; ?>" /><br>
                             	<input type="text" class="span-5" name="inputPhone2" tabindex = "11" value="<?php echo $_POST['inputPhone2']; ?>" /><br>
                             	<input type="text" class="span-5" name="inputPhone3" tabindex = "12" value="<?php echo $_POST['inputPhone3']; ?>" />
                           	</td>
                       	</tr>
                       	<tr>
                        	<td align="right">
                            	* Email: 
                        	</td>
                         	<td colspan="3">
               	                <input type="text" class="span-15 required" name="inputEmail" tabindex = "13" value="<?php echo $_POST['inputEmail']; ?>" />&nbsp;
                            </td>
                        </tr>
                        <tr>
                       	  	<td align="right">
                          		Website:
                          	</td>
                       	  	<td colspan="3">
                                 <input type="text" class="span-15" name="inputWeb" tabindex = "14" value="<?php echo $_POST['inputWeb']; ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <br>
                                Custom 1<br><br>
           	      		        Custom 2
                            </td>
							<td>
								Heading: <span class="small quiet">Example: <em>Find us on Facebook</em></span><br>
								<input type="text" class="span-7" name="inputCustom1Head" tabindex = "15" value="<?php echo $_POST['inputCustom1Head']; ?>" />
								<br>
								<input type="text" class="span-7" name="inputCustom2Head" tabindex = "17" value="<?php echo $_POST['inputCustom2Head']; ?>" />
							</td>
							<td colspan="2">
								Value: <span class="small quiet">Example: <em>www.facebook.com/pages/SwiftInspections</em></span><br>
								<input type="text" class="span-8" name="inputCustom1Value" tabindex = "16" value="<?php echo $_POST['inputCustom1Value']; ?>" />
								<br>
								<input type="text" class="span-8" name="inputCustom2Value" tabindex = "18" value="<?php echo $_POST['inputCustom2Value']; ?>" />
							</td>
						</tr>
						<tr>
							<td align="right">&nbsp;</td>
							<td class="shout"><font size="-1" color="#CC0000">* = Required</font></td>
							<td>&nbsp;
								
							</td>
							<td>
								<input type="submit" name="submit" value="Submit Profile" /></td>
						</tr>

                    </table>
                    
                    
            	</div>
                <div class="span-4 last">
                	<br />
                	<h3>Notification</h3>
                    <div id="ErrorMsg">
                		<?php  
                            if($status=='added') {
                                echo '<span class="span-5 success">';
                                echo '<strong>Success!</strong><br />User was added. <a href="../index.php">Login</a>';
                                echo '</span>';
                            }
                            if($err) {
                                echo '<span class="span-5 error">';
                                //echo $_GET['err'];
                                echo $err;
                                echo '</span>';
                                $err = '';
                            }                        
                        
                        ?>
						<br />
                    </div>
					
                    <div id="Captcha">    
						<br />
					
						<span class="span-5 small info">
                        	Please enter code <strong>EXACTLY</strong> as shown in the space below
                            <br /><br />
                            
                            <center>
                                <!-- display the script as an image -->
                                <img src="captcha_script.php" />
                            
                                <!-- an input box to input the captcha text -->
                                <input type="text" name="inputCaptcha" tabindex="19" class="required" id="captcha_input" />
                            </center>
                        </span>
                    </div>
                </div>
			</form>
        </div>
        <div class="span-24">
        	<?php include ('../design/footer3.php'); ?>
        </div>
        
	</div>
	</body>
</html>
