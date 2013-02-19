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
   	    <img src="images/ada.jpg" width="950" height="100" alt="chimney header"><br>
            <div class="box">
                <h2 class="alt">Swift ADA Library</h2>
                <p><img class="floatRight" src="images/ada_logo.jpg" width="180" height="176" alt="ada logo">Swift ADA 
                is an anagram for Americans with Disabilities Act and the  report-writer designed to enable residential 
                and commercial building inspectors  to increase their revenue by offering ADA compliance inspections. 
                However, it  was equally intended to facilitate ADA compliance for business owners, and  particularly small 
                business owners. For this reason, it’s based on the <br /><a href="http://www.access-board.gov/adaag/html/adaag.htm" target="_blank">
                Americans with Disabilities Act Accessibility Guidelines</a> published by the 
                <a href="https://www.federalregister.gov/agencies/architectural-and-transportation-barriers-compliance-board" target="_blank">
                Architectural and Transportation Barriers Compliance Board</a>, as well as the 
                <a href="http://www.sbaonline.sba.gov/ada/textonly/" target="_blank">Small Business Association (SBA)</a> 
                version of it. Like many federal acts, the ADA is complicated  and has been subject to legal scrutiny and 
                interpretation, for which reason  we’ve simplified it. What this means is that we’ve taken what could be a 
                complicated inspection process and divided it into a series of logical  sequences and relevant components, 
                together with industry-standard narratives  that can be selected and photo-documented with a few clicks to 
                produce  attractive and truly professional reports that both educate and inform business  owners. However, 
                we recognize that inspectors are individuals and have their  own ways of doing things and a unique way of 
                expressing themselves, and for  this reason our programs are customizable and our narratives are intended 
                to be  edited, added to, or deleted until they become unique to the user.<br /><br />
                
                Swift report-writing  software is based on more than a decade of inspection and software development  experience, 
                and predicated on the classical principle of simplicity. Quite  literally, we wanted a selection process that was 
                plain, and simple, and it was  no accident that we chose 1-2-3, as you will see.  Of course, we realize that people 
                don’t always  see things in the same way and for this reason every program should be given a  fair trial and 
                compared to others, and then the decision to buy or not to buy  should be easy. After this, it’s only a matter of 
                becoming familiar with the  program, customizing it, taking advantage of everything that it has to offer, and being 
                assured that friendly tech-support is just a phone call away, which  it really is for our family of users. </p>
			</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>