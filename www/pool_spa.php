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
        	<img src="images/pool_spa.jpg" width="950" height="120" alt="pool_Spa"><br>
            <div class="box">
            	<h2 class="alt"><strong>Swift Pool & Spa Library</strong></h2>
            	"Swift Pool & Spa began with the creation of a residential report-writer designed more than ten years 
                ago for residential building inspectors. It included a section for pools and spas, their components and 
                equipment, as well as narratives to recommend specialized service.The software company was sold, but 
                after three years of research and development Swift Pool & Spa is ready for release.
                <br />
                <br />
                <img src="images/pool.jpg" class="floatRight" height="150" alt="pool_Spa">
                The report-writer is incredibly simple to use, but it’s not simplistic. In fact, it’s extremely sophisticated 
                and capable of producing professional reports with annotated pictures that can be emailed, posted on the Internet, 
                and stored in a data-base. The report not only provides a professional evaluation for clients of existing 
                pool/spa conditions but documents estimated repairs in a professional invoice that becomes part of a written 
                record for all parties. However, the virtues of any program are best demonstrated and not just stated, but this 
                program includes thousands of industry-standard components and narratives for every occurrence and defect that’s 
                commonly encountered, such as gates that don’t self-latch, plaster that’s stained, tiles that are mineral-scaled, pipes 
                that are leaking, motors that are worn, and lights that are not ground fault protected, to mention but a few. 
                And, of course, components and narratives can be edited or added indefinitely. Indeed, almost all aspects of 
                the program can be customized to satisfy the needs of the user.
            	<br />
                <br />
                <img src="images/spa.jpg" class="floatLeft" height="130" alt="pool_Spa">
				Codes and safety standards typically evolved under the auspices of insurance companies, such as the National 
                Electrical Code, but there’s no universal authority for the construction and use of pools and spas. Safety 
                however is paramount, and safety regulations in local jurisdictions are often more restrictive than those in 
                state building codes. Safety is a personal responsibility that not everyone is prepared to accept, even some 
                parents of small children, and for this reason the safety standards in this report-writer should be reviewed 
                and edited to conform to local standards. However, given the sanctity of life, we recommend that all of our 
                users advocate the most stringent of all safety standards.
				<br />
                <br />
				Technical support is usually the last thing that our clients think about, because our programs have undergone 
                rigorous testing and are relatively bug-free, but when a problem does arise they want help and deserve it. At 
                Swift Software, we believe in providing live service, in other words people talking to people and not people 
                talking to machines. We’re located on the west coast in the Pacific Standard Time (PST), and our staff will 
                answer the phone immediately or return calls promptly, between the hours of 9am to 9pm.
			</div>

   	  </div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>