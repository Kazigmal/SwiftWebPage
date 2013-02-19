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
            <img src="images/news_banner.jpg" alt="news">
            <br />
        </div>
        <div class="span-24 white">
        	<div class="box">
            	<div class="span-23 l_blue">
                	<font size="+2" color="#000099" style="font-weight:bold">Great Leaps Forward</font>
                    <span class="date">&nbsp;~&nbsp;4/07/2012</span><br />
After many hours of discussion and debate, the development team has nailed down not only the look and feel of the software, but also how the major components will function. We are taking advantage of new technology that has only just recently become availale to the programming industry. Huge advances in formatting and image manipulation means a great deal of flexibility in Report Writting. Our report writer will have the look and feel of programs most customers are already familiar with, plus the added power of new tools and options exclusive to our product line.<br /><br />
				</div>
                
                <div class="span-23">
                	<font size="+2" color="#000099" style="font-weight:bold">Work has begun</font>
                    <span class="date">&nbsp;~&nbsp;3/22/2012</span><br /><br />
                	We have signed an amazing developer to start the monumentous task of writting our Reporting Software. Initially he will be laying out
                    the tasks and functions needed by the users and how to best incorporate them into the software. Although many hours are spent in development 
                    at this stage not many are spent actually programming. Our whiteboards a mass of notes and diagrams. At the heart of them all, is you, 
                    the customer. The question asked most at this phase... how will this feature benefit the user...<br /><br />
				</div>
                
				<div class="span-23 l_blue">
                	<font size="+2" color="#000099" style="font-weight:bold">A Titan is Born!</font>
                    <span class="date">&nbsp;~&nbsp;3/10/2012</span><br /><br />
                	Phasellus euismod porta ornare. Phasellus nec leo erat. Etiam posuere lorem et lorem malesuada porttitor. 
               		Phasellus in ligula nisl, ut consectetur enim. Quisque laoreet nulla vel magna porttitor vitae bibendum 
              		purus mollis. Maecenas vitae purus elit. Duis molestie interdum molestie.<br /><br />
				</div>
                <br />&nbsp;
            </div>
		</div>
<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>