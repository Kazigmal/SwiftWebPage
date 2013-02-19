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
      <img src="images/residential.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
                <h2 class="alt">Swift Residential Library</h2>
                <img class="floatLeft" src="images/townhouse.jpg" height="150" alt="ada logo">Report writing has evolved from simple check-sheets, to hand-written NCR forms, and ultimately to sophisticated computer generated reports that can be emailed or accessed by multiple parties from anywhere in the world. However, few inspectors have encyclopedic memories or are gifted with instant recall, which the computer provides. Simply put, a computer is a mechanism of storage and retrieval that leads inspectors through the inspection process, and allows them to select from thousands of industry-standard narratives that combine to produce truly professional reports.
<br>
                  <br>
                  <img class="floatRight" src="images/modern_home.jpg" height="275" alt="modern home"><br /><br /><br />The Swift Residential Library is the largest and most comprehensive of any available. It contains more than twelve-thousand industry-standard narratives, and took almost four years to research, edit, and enter into a database. The narratives are short and concise and approximate common speech, but they can be edited, added to or deleted with ease, so that with time and use they become unique to the user. The program leads the user through the inspection process, beginning with the major systems, such as roofs and foundations, plumbing and electricity, and includes general observations that are common to each, and which can be pre-selected to appear in every report. These narratives not only educate clients but define the limits of an inspection and protect inspectors in the process. They’re followed by narratives that are specific to a given condition or component, such as a specific roof type or electrical system. They also educate, inform, and protect, and are followed by a series of even more specific narratives that endorse without liability or indicate a need for service, but even these and the service they indicate can be changed to suit the user. We attempted to include a narrative for every predictable or commonplace occurrence and hope that we succeeded, but if one is missing it can be added in a matter of moments, spell-checked, and saved.<br>
                  <br>
                <img class="floatLeft" src="images/santa_fe.jpg" height="200" alt="santa fe">The library includes much more than the different narrative types we’ve described. It includes Forms and Contracts, a Description of Service, a Scope of Work, and a series of specific disclaimers--indeed everything necessary to create sophisticated and professional reports that are unique to the user. However, any discussion of reports wouldn’t be complete without mentioning the most significant thing to revolutionize the inspection industry since the computer, and that’s the digital camera and photo-documentation. One picture is said to be worth a thousand words, for which reason we’ve included an application for adding and annotating pictures. We’ve already stated that the library took over three years to create, but the experience the program demanded from the team of specialists took decades. In fact, we believe that the report-writer is so simple that it doesn’t need any explanation, and that the library is so comprehensive that it can be used by training schools, on-line or in the classroom, for which reason we’ve even written our own illustrated training guide: A Preliminary Guide to Residential Building Inspections.<br /><br />
                
                We all know that things are not always as they seem and that exaggerated claims are often made in an effort to sell products, but we truly believe that once you try the Swift Residential Report-Writer you’ll want to own it and join our family of users.
</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>