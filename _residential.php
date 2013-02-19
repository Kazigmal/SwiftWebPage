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
        	<div class="span-19">
				<div class="box">
                	<h2>Swift Residential Library</h2>
                	<img src="images/SRWBox2.png" class="floatLeft" height="290" alt="residential library"> 
                    <h2 class="alt">Nothing Beats Experience</h2>
                    <p>Twenty years of inspection experience, and over 11,000 industry-specific narratives, combine to create the ultimate tool every Home Inspector
                    needs. You literally have an entire library at your fingertips.</p>
                    <ul STYLE="list-style-image: url(images/bullet.jpg)">
               	    	<li><strong>Extensive.</strong> With Swift's 1-2-3 approach, you are only a point and click away from writing beautiful, yet very professional reports.</li>
                        <li><strong>Customized.</strong> Swift Report Writer is a multi-platform "Swiss Army Knife" that adapts to your unique inspection style. </li>
                        <li><strong>Adaptable.</strong> Never limit yourself. Add, edit, crop, annotate as many photos or illustrations as you like.</li>
                        <li><strong>Powerful.</strong> Expressly worded to provide one more layer of protection against litigation.</li>
                    </ul></p>
				</div>
            </div>
            <div class="span-5 last">
            	<div class="box l_blue">
                	<h3>Libraries</h3>
                    	<ul>
                        	<li><strong>Residential</strong></li>
                            <li><a href="#">Chimney</a></li>
                            <li><a href="#">Commercial</a></li>
                            <li><a href="#">Environmential</a></li>
                            <li><a href="#">Pool / Spa</a></li>
                            <li><a href="#">Library Conversion</a></li>
                            <li><a href="#">Custom Libraries</a></li>
                        </ul>
                </div>
                <a href="#"><img src="images/sample.jpg"></a><br>
				<a href="#"><img src="images/demo.jpg"></a>
            </div>
            <div class="span-24 white">
            	<div class="box">
            		<h3></h3>
                    
                    	Avoid Litigation
                        
                        
                    	
                    </p>
                </div>
            </div>		
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>