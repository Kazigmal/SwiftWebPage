<?php

session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d H:i:s');
$userid = $_GET['id'];

$sticky = $_POST['inputSticky'];
$content = $_POST['inputContext'];

if($_POST['submit']) {
		
	/* Test Blodk 
	echo 'Customer ID = '.$userid.'<br />';
	echo 'Admin ID = '.$admin_id.'<br />';
	echo 'Content = '.$content.'<br />';
	echo 'Date = '.$now.'<br />';
	echo 'Admin Initials = '.$admin_init.'<br />';
	die();
	*/
	
	$newNote = mysql_query("INSERT INTO notes (id, customer_id, admin_id, content, date_add, date_mod, admin_init, sticky) VALUES('','$userid','$admin_id','$content','$now','$now','$admin_init', '$sticky')") or die(mysql_error()); 
																																	
	header( 'Location: admin_view.php?id='.$userid );
}

?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body>

	  <div class="container">
      		<?php include('css/src/admin_header.php'); ?>
            <?php include('admin_nav.php'); ?>
            
            <div class="span-24 last">
            <span class="large">Add note to User</span><br>
			
            </div>
            
            <script type="text/javascript" src="scripts/nicEdit.js"></script>
			<script type="text/javascript">
				bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
			</script>
            
            <form action="admin_add_note.php?id=<?php echo $userid; ?>" method="POST">
            	
            	<textarea class="span-24" name="inputContext" rows="10"></textarea>
                <div align="right">
                	<input type="checkbox" name="inputSticky" value="1" />&nbsp;Sticky Note&nbsp;&nbsp;&nbsp;
                	<input type="submit" name="submit" value="Add Note" />
                </div>
            </form>
          		
            <?php include('css/src/footer.php'); ?>
      </div>
</body>
</html>
