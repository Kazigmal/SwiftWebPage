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

		<div class="span-24 l_blue">	
			<table bgcolor="#FFFFFF" width="100%" height="464" border="1" cellpadding="0" cellspacing="0"  >
				<tr>
					<td valign="top" rowspan="2">
						<img src="images/SRW-1.jpg" alt="" border="0" usemap="#Map2"></td>
					<td valign="top">
					  <img src="images/SRW-2.jpg" alt=""></td>
				</tr>
				<tr>
					<td valign="top" style="padding:5px"><strong>The Swift report-writer</strong> is the finest in the  industry. It’s built on the latest advances in computer technology and based on  25 years of industry experience, and allows you to create sophisticated reports  with lightning speed.<br>
						<br>
						<ul STYLE="list-style-image: url(images/bullet.jpg)">
                            <li><strong>Ease of Use.</strong> With Swift's 1-2-3 approach, you are only a point and click away from producing beautiful, professional reports.</li>
                            <li><strong>Versatility.</strong> Swift Report Writer is a multi-platform "Swiss Army Knife" that adapts to your unique inspection style. </li>
                            <li><strong>Photo-tastic!</strong> Never limit yourself. Add, edit, crop, annotate as many photos or illustrations as you like.</li>
                            <li><strong>Lightning Quick.</strong> Spend your time inspecting, not writing. Select an approved industry-standard narrative  with a simple “click” and you’re done.</li>
                            <li><strong>Customized Look </strong>The software is designed to be customized with  ease and to enable the user to create unique reports<strong>.</strong></li>
                    	</ul>
                    </td>
				</tr>
			</table>
    	</div>
        <div class="span-24 white">
        <div class="span-19">
        	<div class="box">
        	<table>
                	<td height="134"><p align="LEFT"> The Swift Report-Writer is based on 20 years of technical and field experience. It’s pleasant to look at, easy to use, astonishingly fast, and produces truly professional reports. It includes a wide selection of libraries for residential, commercial, and environmental building inspectors, as well as libraries for industry specialists and such federal programs as ADA and HERS. The libraries are the most comprehensive in the industry. They’re based on 20 years of academic and field experience, and took more than 3 years to compile. They were professionally edited to be concise and to approximate plain speech. However, because speech is personal, all of the narratives can be edited, added to, or deleted so that the reports that are produced are unique. <br>
                	  <br>
                	  <strong>As you use </strong>the software you’ll be able to appreciate how  much thought went into its creation. Before the first line of code was written  we had the express purpose of providing you with an indispensable tool with  which to bolster your image and increase your revenue. A classically simple  1-2-3 paradigm guides you through the inspection and evaluation process and  provides you with thousands of industry-standard narratives that can be  selected with a simple click and illustrated with annotated pictures to create  a truly professional report that can be email or posted on the Internet for  retrieval in a secure PDF file</p></td>
              </tr>
            </table>
            </div>
        </div>
        <div class="span-5 last">
       	  <img src="images/spacer.gif" width="168" height="20">
        	<img src="images/inspector.jpg" width="168" height="126" alt="inspector">
        </div>
        </div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>

<map name="Map">
  <area shape="rect" coords="149,399,534,458" href="#" alt="Demo Download">
</map>

<map name="Map2">
  <area shape="poly" coords="116,580" href="#">
  <area shape="poly" coords="117,583,161,527,377,516,540,546,550,579,378,569,149,595" href="#">
</map>
</body>
</html>