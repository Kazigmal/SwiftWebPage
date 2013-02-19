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
            <img src="images/affiliations.jpg" alt="news">
            <br />
        </div>
        <div class="span-24 white">
        	<div class="box">
            	Integer sollicitudin justo ultricies quam rutrum egestas. Aenean euismod neque a massa fringilla ultrices. Phasellus sed ante at mauris tincidunt consectetur sit amet ut quam. Nullam est ante, consequat sed laoreet non, egestas adipiscing elit. Maecenas posuere, ligula eget dictum lacinia, dolor urna fringilla est, sed elementum dolor nulla et tortor. Pellentesque tortor tellus, blandit eu laoreet nec, suscipit non felis. Etiam non nisl nisi. Integer fringilla, ligula id sodales rutrum, odio odio semper lectus, at congue ipsum leo sed turpis. Pellentesque magna mauris, rutrum dignissim dapibus id, aliquet nec tellus. Integer magna enim, rutrum at placerat et, convallis quis mauris. In congue leo eu neque iaculis ultrices. Donec suscipit eleifend porttitor.<br /><br />

Phasellus euismod porta ornare. Phasellus nec leo erat. Etiam posuere lorem et lorem malesuada porttitor. Phasellus in ligula nisl, ut consectetur enim. Quisque laoreet nulla vel magna porttitor vitae bibendum purus mollis. Maecenas vitae purus elit. Duis molestie interdum molestie.
            </div>        
        </div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>