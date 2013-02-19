<?php

session_start ();
//$ok = session_regenerate_id ();
$sid = session_id ();

$_SESSION ['abc'] = "It Worked";

?>

<html>
<head>
	<title>Session test</title>
</head>

<body>
	<p>
		<b>Session created.</b> 
	</p>

	<p>
		Session id regenerated: <?php //print "$ok"; ?><br>
		Session variable "abc" set: <?php print $_SESSION ['abc']; ?> <br>
		Session id: <?php print "$sid"; ?>
	</p>

	<p>
		Follow the link to test the session variable storing: <br>
		<?php
			//print "<a href=\"../users/session_test_handler.php\">";
			print "<a href=\"../users/profile.php\">";
			print "Check session variable storing";
			print "</a>";
		?>
	</p>
</html>

</body>
