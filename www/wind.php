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
      <img src="images/wind.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
            	
                <h2 class="alt">Swift Wind Mitigation</h2>
                
                <img class="floatRight" src="images/wind-2.jpg" width="320" alt="HVAC System">
                Storms cause millions of dollars in property damage each year, and produce high winds and torrential 
                rains that can be life threatening. They’re difficult to predict, but they typically occur between 
                June and November and usually with sufficient warning to facilitate evacuations and save lives. 
                Insurance companies obviously have a vested interest in the properties they insure, and offer 
                significant discounts to homeowners whose properties present the least risk. For this reason, many 
                homeowners welcome a wind-mitigation inspection to enhance their safety and protect their investment, 
                and many insurance companies actually require them before issuing policies. Fortunately, wind 
                mitigation inspections also give inspectors a means of expanding their services, increasing their 
                revenue, and enhancing their reputations. <br><br>

				Wind mitigation is a specialized inspection, and one that inspectors are actually qualified to perform 
                whether they know it or not. However, a wind mitigation inspection does require a systematic approach as 
                well as an awareness of climate zones and a familiarity with structural and safety standards. The Swift 
                Wind Mitigation report-writer fulfills all of these essential requirements, and includes a map produced 
                by the Federal Emergency Agency (FEMA) of graded areas in the United Sates that are most vulnerable to 
                wind damage. <br><br>
                
				<img class="floatLeft" src="images/wind-1.jpg" width="250" alt="HVAC System">
				The organizational principal of the report-writer is simple, and moves from the general to the specific. 
                For instance, it begins with general features, such as moisture control, building walls, windows, doors, 
                and roofs, and moves to the specifics of particular types. The narrative selection functions in the same 
                way. Those that are general appear first, and can be preselected to print automatically. They help to 
                educate clients about their properties and their safety, but they’re not absolutely essential. Others 
                that are specific and clearly essential appear when a component is selected. They’re selected with single 
                click and can be edited or deleted and replaced until the program becomes unique to the user. Pictures 
                can also be added and annotated with equal ease. When the inspection is complete, the report can be 
                reviewed, and emailed or posted on the Internet in a secure PFD format. And, best of all, the program can 
                be customized to reflect the professional image of a business or the unique personality of the user.<br><br>

				The tech-support is exemplary and something we’re equally proud of. You can call us anytime on the west coast 
                (PST) between the hours of 9am to 9pm, and we’ll either answer or call you back promptly. All calls that come 
                in after business hours will be returned on the following day. In summary, we regard each user as a member of 
                our family of users, and treat them with kindness, courtesy, and respect.

			</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>