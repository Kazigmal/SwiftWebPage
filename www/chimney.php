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
       	  <img src="images/chimney.jpg" width="950" height="120" alt="chimney header"><br>
            <div class="box">
                <h2 class="alt">Swift Chimney Library</h2>
                <p><img src="images/nfpa.jpg" class="floatRight" height="200">Chimney types and their  components are 
                somewhat universal but the codes and regulations governing their  construction and use are not, and 
                together can be complicated. The systematic  construction of the report-writer and its library of industry-standard  
                narratives took several years to complete. It’s based on The National Fire  Protection Association, 
                NFPA 21, but the ultimate authority isin the hands of  the end-user. For this reason, and with few exceptions, 
                it’s designed be  customized by the user.</p>
                <p><br>
                <img src="images/sm_chimney.jpg" class="floatLeft" height="100">
                Swift Chimney was conceived with the consumer in mind, as well as the user, for which reason it begins 
                with a  list of common locations, such as living room, dining room, family room, or den,  which of course 
                every consumer understands. The location is chosen with a single click, which generates the various 
                chimney types. When the type is selected it appears with all of its components, together with a list of 
                industry-standard narratives that are also selected with a single click, and can be edited, deleted, or 
                replaced, to suit the user. A descriptive narrative of the chimney type prints automatically, and of 
                course it too can be edited, deleted, or replaced. Colored pictures can be added and annotated just as 
                easily.</p>
                <p><br>
                The selection process is really simple, as simple as 1-2-3 as you’ll see. Of course, we realize that people 
                don’t always see things in the same way and for this reason  every program should be given a fair trial and 
                compared to others, and then the  decision to buy or not to buy should be easy. After this, it’s simply a matter 
                of becoming familiar with the program, customizing it, taking advantage of everything that it has to offer, 
                and being assured that friendly technical support is just a phone call away, which it is for our family of users. </p>
          </div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>