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
  <img src="images/commercial.jpg" width="950" height="170" alt="chimney header"><br>
            <div class="box">
        <br /><img class="floatLeft" src="images/office_tall.jpg" height="780" alt="tall building">
                <h2 class="alt">Swift Commercial Library</h2>
                <p><img class="floatRight" src="images/office_interior.jpg" height="150" alt="interior">If you’re not doing commercial inspections you’re  missing out on a business opportunity, besides which there are so many reasons  why you should be doing them. They offer you the chance to expand your  business, enhance your reputation, increase your profit, and probably decrease  your stress-load. First of all, commercial clients are easier to work for than  residential ones. Residential clients have emotional attachments to their  properties and can become hysterical over insignificant deficiencies; just ask  yourself how many petty and irritating complaints you’ve had since you first  went into the inspection business. Well, commercial clients are nothing like  residential ones. Generally speaking, they’re only interested in the bottom  line--in knowing the cost of essential repairs, upgrades, and maintenance. It’s  true that commercial inspections are not as plentiful as residential ones, but  they’re more plentiful than you might suspect.<br>
                  <br>
                  <img class="floatRight" src="images/office_restroom.jpg" height="120">Commercial inspections are performed as a  condition of sale, just like residential ones, but they’re also requested when  a building is leased, as a necessity for annual maintenance, reserve studies,  or as a prerequisite for an insurance policy. And even though they may not be  as plentiful as residential ones, they command higher fees, and commercial  inspectors are treated with greater respect than their residential counterparts.  In spite of this, you still might feel a little reluctant to inspect a  commercial property, which is understandable.<br /><br />
                <br>
                <img class="floatRight" src="images/office_lunch.jpg" height="150" alt="restroom">It would be natural to feel nervous about  your first commercial inspection, but you were probably equally nervous about  your first residential one, and you probably already have the expertise,  experience, and necessary tools to do the job and, believe it or not commercial  inspection can be a lot simpler. True, commercial buildings tend to be larger  and their systems more complicated, and that’s why you hire subcontractors and  form a team. Most commercial inspectors act as general contractors, and  subcontract to specialists. After all, you may never feel confident about  evaluating elevators, but after a few inspections with an electrician you just  might feel confident enough to evaluate three-phase electrical systems by  yourself, and thus reduce your costs and increase your profit.<br>
                <br>
                <img class="floatRight" src="images/office.jpg" height="150">Marketing to commercial real estate agents is  a lot like marketing to residential ones, but commercial agents are fewer in  number and higher on the social scale. So, instead of mailing out a  throw-away-flyer bragging about low or competitive prices, you might want to  request an interview in a sophisticated letter that extols the professional  quality of your services. And you may even want to volunteer as a speaker for  commercial realtors, on such subjects as environmental hygiene, and not only to  agents but to groups of doctors, lawyers, investors, and homeowner  associations. Remember, there are a lot of people that are afflicted by  allergies and adversely affected by indoor air quality and, as we’ve learned  from being residential inspectors, people really do appreciate learning. </p>
</div>	
    	</div>

<!------------------------------------------------------------------------------------------------------------------>
	<?php include ('design/footer.php'); ?>
    </div>
</body>
</html>