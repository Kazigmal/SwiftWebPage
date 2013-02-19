<?php 

/**
 * @author Tom Garland
 * @copyright 2012
 */

	session_start ();
	
    include('scripts/connect.php');
	
	$msg = "";
	
	/* Store login variables
	$post_initials = $_POST['inputLogin'];
	$post_password = $_POST['inputPwd'];

	//Strip SQL Injection
	$post_initials = mysql_real_escape_string($post_initials);
	$post_password = mysql_real_escape_string($post_password);

	if($post_initials&&$post_password) {
    
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
		$_SESSION['test'] = "test";
		$_SESSION ['abc'] = "It Worked";
		
		Test Block
		echo '<h2>Index Page</h2>';
		echo 'POST DATA<br>';
		echo $post_initials.'<br>';
		echo $post_password.'<br><br>';
		echo 'DATABASE RETURN<br>';
		echo 'rowcount: '.$rowcount.'<br>';
		echo 'ID: '.$array['id'].'<br>';
		echo 'NAME: '.$array['name'].'<br>';
		echo 'EMAIL: '.$array['email'].'<br>';
		echo 'TYPE: '.$array['type'].'<br><br>';
		echo 'SESSION DATA<br>';
		echo 'ID: '.$_SESSION['id'].'<br>';
		echo 'NAME: '.$_SESSION['name'].'<br>';
		echo 'EMAIL: '.$_SESSION['email'].'<br>';
		echo 'abe: '.$_SESSION ['abc'].'<br>';
		echo 'TYPE; '.$_SESSION['type'].'<br>';
		
			print "<a href=\"users/profile.php\">";
			print "Check session variable storing";
			print "</a>";
		return false;
		
		header("Location: $send");
	}*/
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
	<link href="css/screen.css" rel="stylesheet" type="text/css">
    	<!--[if lt IE 8]><link rel="stylesheet" href="blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->

	<link rel="icon" 
		type="image/ico" 
		href="favicon.ico">
      
    <!-- Import fancy-type plugin for the sample page. -->
    <link rel="stylesheet" href="css/plugins/fancy-type/screen.css" type="text/css" media="screen, projection">

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

    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/pascal/pascal.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <link rel="icon" 
      type="image/png" 
      href="http://www.swiftreportingsoftware.com/favicon.png">
    

</head>

<body><a name = "top"> </a>
	<br />
	<div class="container">
		<div class="span-24">
        	<table align="center">
            <tr>
            <td>
            <center><?php include ('design/nav_bar.html'); ?></center>
            </td>
            </tr>
            </table>
        </div>
		<?php include ('design/header.php'); ?>
        <img src="images/line.jpg" width="950" height="12" alt="header"><br />
<!------------------------------------------------------------------------------------------------------------------>

		<div class="span-24 white">
			<div class="span-16 last">
                <div class="slider-wrapper theme-default">
            		<div id="slider" class="nivoSlider">
                		<img src="images/banner1.jpg" alt="" />
                		<a href="http://www.motioncomputing.com/products/tablet_pc_CL900.asp">
                            <img src="images/banner2.jpg" alt="" title="Device shown is the CL900 from Motion Computing" />
                        </a>
						<img src="images/banner3.jpg" alt="" />
                		<img src="images/banner4.jpg" alt="" />
            		</div>
            			<div id="htmlcaption" class="nivo-html-caption">
                			<strong>Swift Reporting Software</strong> <a href="testimonials.php">Testimonials</a>.
            			</div>
   			
<!------------------------------------------------------------------------------------------------------------------>
					<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    				<script type="text/javascript" src="jquery.nivo.slider.js"></script>
                    <script type="text/javascript">
						$(window).load(function() {
        					$('#slider').nivoSlider();
    					});
					</script>
                    <br />
<!------------------------------------------------------------------------------------------------------------------>
			
            <div class="span-16">
            	<h2>&nbsp;&nbsp;Get the Report Writer + your choice of libraries</h2>
            	<center>
                	<img src="images/libraries.jpg" border="0" usemap="#Map" />
                    <map name="Map">
                      <area shape="poly" coords="275,15,237,1,199,14,179,36,174,66,180,96,207,65,249,61,256,33" href="#" alt="Termite">
                      <area shape="poly" coords="433,13,397,0,361,13,340,38,334,63,354,78,384,65,411,63,416,40,433,14" href="4point.php" alt="4Point">
                      <area shape="poly" coords="356,15,337,4,315,1,294,6,279,14,267,25,258,42,256,55,253,65,276,74,298,64,313,61,327,62,332,63,339,37,346,25" href="hvac.php" alt="HVAC">
                      <area shape="poly" coords="515,17,502,8,485,3,472,2,457,4,440,12,432,21,424,32,416,46,413,63,426,67,436,75,454,65,473,62,486,64,495,65,495,51,500,35,508,26" href="wind.php" alt="Wind">
                      <area shape="poly" coords="613,92,619,76,619,56,617,45,610,29,598,18,586,8,567,4,546,3,530,9,520,17,511,26,503,38,499,48,497,66,507,71,517,78,529,69,544,63,558,61,573,63,588,68,603,79" href="residential.php" alt="Residential">
                      <area shape="poly" coords="275,75,263,69,248,66,229,62,213,68,199,75,188,88,178,102,175,117,174,130,177,140,182,153,189,165,201,175,213,183,226,186,244,187,260,183,275,173,265,165,258,156,252,142,249,131,252,115,254,101,264,85" href="ada.php" alt="ADA">
                      <area shape="poly" coords="354,80,343,71,331,65,319,64,297,66,283,73,272,80,263,91,258,101,254,112,252,129,254,140,259,153,266,163,275,174,288,182,300,185,314,188,329,186,342,181,355,173,347,162,339,151,336,136,334,119,335,108,344,90" href="pool_spa.php" alt="Pool &amp; Spa">
                      <area shape="poly" coords="435,76,427,70,415,68,407,65,390,67,369,72,355,81,345,94,341,103,338,114,337,126,337,137,341,151,348,161,356,171,368,177,380,184,394,187,406,188,421,185,435,175,426,167,419,155,413,141,411,127,413,111,418,98,426,83" href="Environmental.php" alt="Environmental">
                      <area shape="poly" coords="515,78,508,73,497,67,484,65,471,64,454,68,445,72,435,78,429,85,421,94,418,102,415,112,413,124,415,140,421,151,424,161,432,169,442,177,457,183,473,188,485,188,499,185,516,173,509,165,500,151,496,136,494,125,495,112,497,102,505,87" href="commercial.php" alt="Commercial">
                      <area shape="poly" coords="621,123,618,107,613,95,606,85,599,77,584,70,573,65,555,63,540,66,526,73,517,80,509,89,504,97,500,105,497,117,497,129,499,140,502,150,510,161,520,173,532,179,549,186,566,188,580,186,596,175,610,160,618,143" href="chimney.php" alt="Chimney">
                      <area shape="poly" coords="125,160,127,29,11,28,10,163,17,172" href="report_writer.php">
                    </map>
<hr />
              </center>
            </div>
            
            <div class="span-16">
            	<h2>&nbsp;&nbsp;Featured Libraries</h2>
            </div>
            
            <div class="span-8">
                <p><a href='#'><img src="images/SwiftBox.jpg" class="floatLeft" width="108" height="150" /></a>
                <h3>Swift Chimney</h3>
                Swift Chimney was designed for specialists performing inspections or repairs under NFPA 211, 
                or any other nationally recognized authority..<br>
<span class="small"><a href="chimney.php">Read More...</a></span> <hr />
			</div>
			
            <div class="span-8 last">
                <p><a href='residential.php'><img src="images/SwiftBox2.jpg" class="floatLeft" width="108" height="150" /></a>
                <h3>Swift Residential</h3>
                Is a customized library specifically designed for Residential Inspections. Everything you need to perform
                a comprehensive inspection in one place. <span class="small"><a href="residential.php">Read More...</a></span> 
                <hr />
            </div>
            
                  
				<!--<div class="span-5">
                    <div class="box">
                    	<a href="#"><img src="images/environ_label.jpg" width="200" height="36" alt="Environmental Library"></a><br />
                        The largest and most comprehensive library in the industry, which took three years to compile and is based on a decade of research. 
                        <span class="small"><a href="environmental.php">Read More...</a></span>
                    </div>
                </div>
				
                <div class="span-5">
					<div class="box">
                    	<a href="#"><img src="images/pool_label.jpg" width="200" height="36" alt="Pool & Spa Library"></a><br /> 
                       	Designed for pool specialists, this library covers all of the common components and equipment. <span class="small"><a href="pool_spa.php">Read More...</a></span>
                    </div>
                </div>
				
                <div class="span-6 last">
					<div class="box">
                    	<a href="#"><img src="images/custom_label.jpg" width="200" height="36" alt="Custom Library"></a><br /> 
                        Our staff can build one-of-kind programs for use in any endeavor in which inspections are made and data is gathered
						and distributed. <span class="small"><a href="custom.php">Read More...</a></span>
                    </div>
                </div>-->
				
			</div>
        </div>
<!------------------------------------------------------------------------------------------------------------------>		
		<div class="span-8">
        	<div class="box">
            	<table border="0" bordercolor="#ccc" class="grey">
                	<tr>
                    	<td>
              				<input size="26" type="text" />
                        </td>
                        <td>
                        	<input type="submit" value="Search" class="button" />
                        </td>
                    </tr>
                </table>

           	  <h2 class="alt">Why Choose Swift?</h2>
                <p> <strong>Swift Reporting Software makes work easy.</strong> <br>
                No other report-writer combines state-of-the-art software with thousands of industry-standard narratives 
                that can be selected, edited, or added, to personalize reports. Selection is as natural as 1-2-3, as you’ll 
                see at a glance. It’s so fast that you won’t have time to blink, simply point and click, and add pictures. 
                All that’s left to do is to preview the report before it’s emailed or posted on the Internet for delivery.</p>
                
                <h2 class="alt">What  sets us apart.</h2>
                <ul>
           	    <li>Speed, Service, Satisfaction</li>
                    <li>Technically superior software</li>
                    <li>Extensive professional libraries</li>
                    <li>Live tech-support from 9am to 9pm</li>
                </ul>
                <p><strong>Simple as 1-2-3</strong>. <br>
				The Swift report-writer is based on the latest technology. It has the features and tools of Word, which makes it the easiest and
                most customizable program available. In addition, everything happens on a single screen without clumsy overlapping windows.
                Simply select from an array of industry-standard narratives with a simple click or edit to suit your needs, add and annotate as many
                pictures as you like, and you’ll find that you’ve created a truly professional report that you can preview, print, post, or email in a secure PDF.</p>
                <img src="images/contact.jpg" width="275" />
            </div>
        </div>
    </div>
    

<!------------------------------------------------------------------------------------------------------------------>
		<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>