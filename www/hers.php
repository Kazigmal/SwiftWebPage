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
      <img src="images/hers.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
            	
                <h2 class="alt">Swift H.E.R.S. Library</h2>
                
                <img class="floatRight" src="images/hers-1.jpg" width="320" alt="HERS">
               	Swift HERS is an anagram for the Home Energy Rating System and the report-writer designed to enable building inspectors to increase their revenue by offering HERS inspections to builders and homeowners. The software allows the user to perform an analysis of the design and the energy efficiency of a home or building, and to provide a scale of performance based on the HERS rating. Like many state and federal programs, the guidelines are somewhat complicated, for which reason we’ve taken what could be a complicated procedure and simplified it by dividing it into a series of logical steps involving various components, together with industry-standard narratives that can be selected and photo-documented with a few clicks to produce professional reports. However, we recognize that inspections vary and that inspectors are individuals and have their own ways of doing things and a unique way of expressing themselves, and for this reason our software is customizable and our narratives are intended to be edited, added to, or deleted until they become unique to the user.<br><br><br>

				<img class="floatLeft" src="images/hers-2.jpg" width="300" alt="HERS">
Swift report-writing software is based on more than a decade of inspection and software development experience, and predicated on the classical principle of simplicity. Quite literally, we wanted a selection process that was self-evident, and it was no accident that we chose the paradigm 1-2-3, as you will see. The HERS inspection and evaluation can be as simple as one conducted on a single family dwelling without the use of sophisticated instruments, or one conducted on a commercial building involving the use of a blower-door and infra-red instruments. Regardless, moving from the general to the specific, the program enables the user to document the climate and weather, the temperature and humidity, and to add more specifics details, such as the type and foundation of a home or building, its solar orientation, its glazing, its insulation, and its fuel type, to mention the most salient. Each detail, whether general or specific, includes a list of industry-standard narratives from which individual narratives can be pre-selected or activated with a single click, which documents the process and concludes with a summary of results and the HERS rating. Of course, we realize that people don’t always see things in the same way and for this reason every program should be given a fair trial and compared to others, and then the decision to buy or not to buy should be easy. After this, it’s only a matter of becoming familiar with the program, customizing it, taking advantage of everything that it has to offer, and being assured that friendly tech-support is just a phone call away for our family of users. 

			</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>