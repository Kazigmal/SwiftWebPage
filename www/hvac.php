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
      <img src="images/hvac.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
            	<img class="floatRight" src="images/hvac-2.jpg" alt="HVAC System">
                <h2 class="alt">Swift HVAC Library</h2>
                
                The HVAC Report-Writer is designed for specialists. However, although many HVAC components are uniform, 
                their age and type, as well as the codes governing their use, are complicated. With this in mind, our 
                report-writer includes a comprehensive library of industry-standard narratives that serve as a reference 
                guide for the user but which can be added to indefinitely. The library was designed for the specialist/user 
                but the report-writer was designed with the consumer in mind, and incudes literally thousands of clear and 
                concise narratives that can be selected to educate and inform, and which contribute to the creation of a 
                sophisticated narrative report that includes pictures and a service invoice. <br /><br />
                
				The program mimics the inspection process, and begins with a list of standard types that can be chosen with 
                a single click. A descriptive narrative of the type can be selected to print to educate a consumer. However, 
                the selection of the type also generates all of its components together with a list of industry-standard 
                narratives to indicate a need for service, which can be selected to print with a single click, or deleted, 
                edited, and/or replaced to suit the user. In addition, colored pictures can be added and annotated just as 
                easily.<br /><br />

				The selection process really is simple. In fact, it’s as simple as 1-2-3 as you will see. Of course, we 
                realize that people don’t necessarily see things in the same way and for this reason every program should 
                be given a fair trial and compared to others, and then the decision to buy or not to buy should be easy. 
                After this, it’s simply a matter of becoming familiar with its use, taking advantage of everything that it 
                has to offer, customizing it, and being assured that friendly technical support is just a phone call away 
                for our family of users. 
			</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>