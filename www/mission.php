<?php 
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en"><head>
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

</head>

<body><a name = "top"> </a>
	<br>
	<div class="container">
		<div class="span-24">
        	<table align="center">
            <tr>
            <td>
            <?php include ('design/nav_bar.html'); ?>
            </td>
            </tr>
            </table>
        </div>
		<?php include ('design/header.php'); ?>
        <img src="images/line.jpg" width="950" height="12" alt="header"><br />
<!------------------------------------------------------------------------------------------------------------------>

		<div class="span-24 white">
           	<div class="span-24 last">
            	<div class="box">
                	<img src="images/world.jpg" class="floatLeft" height="150"><font size="+2">Our Mission</font>
            			<p>Our mission and our vision is to design products that sell themselves, because of
                        their excellence, and to continue to provide products and services that are simply
                        the best, and which serve the small business owners who fuel the national economy,
                        drive the free-enterprise system, and serve the common good.</p>
                </div>
            </div>
            <div class="span-12">
            	<div class="box">
                	<font size="+2">Our Values</font>
            			<p class="right"><img src="images/values.jpg" width="150" class="floatRight">
                        Integrity is the steel in the foundation or our corporation, and our values are
                        grounded in the free-enterprise system that fuels the national economy and keeps
                        the spirit of American capitalism alive. We’re aware that things in the real world are
                        not always as they seem, that many products don’t perform as advertised, and that
                        consumers are often the victims of fraud. For this reason, we pledge to always tell
                        the truth and to treat everyone with kindness, courtesy and respect.</p>
            	</div>
            </div>
            <div class="span-12 last">
            	<div class="box">
					<font size="+2">Our Promise</font>
            			<p><img src="images/goals.jpg" width="150" class="floatRight">
                        We promise our clients that we will continue to provide the most advanced software
                        in the industry. Spurred by the pursuit of perfection, we’ll avail ourselves of every
                        technological advancement and improvement, and will provide responsible and
                        friendly service and tech-support to our family of users.</p>
            	</div>
            </div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>