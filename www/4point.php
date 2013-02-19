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

<body>
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
      <img src="images/4point.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
                <h2 class="alt">Swift 4 Point Library</h2>
                <img class="floatRight" src="images/house.jpg" alt="3d House">
                Four-Point inspections are becoming more and more frequent. The best thing about four-point inspections 
                is that there’s <em><strong>little or no risk of a lawsuit</strong></em>, which cannot be said about residential and commercial 
                inspections, They’re not as difficult or as time consuming, and they enable inspectors to expand their 
                business and increase their revenue. Like building codes, four-point inspections came into existence 
                because insurance companies were eager to protect their investments, but they also serve homeowners by 
                enabling them to qualify for insurance discounts. They’re called four-point inspections, because they’re 
                typically confined to an evaluation of four main systems: plumbing, electrical, HVAC, and roofs. However, 
                insurance companies also want to be informed about other things, such as a foundation type in a seismic zone, 
                as well as potential threats to health and safety, for which reason we’ve named our report-writing program 
                Four-Point Plus, because it facilitates a more inclusive evaluation and one that informs and educates. This 
                makes our report longer than a standard four-point one, and certainly longer than a check-sheet report, but 
                the length can be kept to a minimum by simply ignoring components and narratives that are not essential to 
                the report, and editing a report is quick and easy. <br /><br />
                
                Swift Four-Point-Plus is built on the classical principle and design of the Swift Report-Writer. It’s easy 
                to use and requires no training whatsoever. It evolved after more than two decades of inspection experience 
                and a decade of report-writing experience. Its industry-specific narratives are clear and concise, but can be 
                edited or deleted and added to indefinitely to suit the user. At Swift Software, we’re proud to confirm that 
                our report-writers don’t dictate they facilitate. It’s our mission to serve inspectors and the industry by 
                developing tools that serve commerce, communication, and the free-enterprise system that made America great. 
                Anyway, download it and see for yourself, because you’re going to like it as well as the service and technical 
                support that we provide for our family of users.
                
			</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>