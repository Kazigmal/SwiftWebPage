<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */


session_start();

require 'scripts/connect.php';

$admin_id = $_SESSION['id'];
$admin_name = $_SESSION['name'];
$admin_level = $_SESSION['level'];
$admin_init = $_SESSION['initials'];

$now	= date('Y-m-d H:i:s');
$noteid = mysql_real_escape_string($_GET['id']);
$error = $_GET['error'];
$userid = $_GET['user'];

/*if($error){
	 //Define error messages here
}*/

if(isset($_POST['submit'])) {
	$id	= $noteid;
	$content = $_POST['inputContext'];
	$sticky = $_POST['inputSticky'];
		
	$update = mysql_query("UPDATE notes SET 
				content = '$content',
				sticky = '$sticky',
				date_mod = '$now' 
				WHERE id = $id ") or die(mysql_error());
	//header( 'Location: admin_main.php');
	header( 'Location: admin_view.php?id='.$userid );
	
}


//Pass User info to variables :: id set by $_GET[id] statement above
$q = "select * FROM notes WHERE id = $noteid";
	$result = mysql_query($q);
	$note = mysql_fetch_array($result);
?>

<html>
	<head>
		<link href="css/screen.css" rel="stylesheet" type="text/css" />
        <!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
	</head>
	
    <body onLoad="MM_preloadImages('css/src/btn_home_2.jpg')">

	  <div class="container">
      		<?php include('css/src/admin_header.php'); ?>
            <?php include('admin_nav.php'); 
				if(!isset($_SESSION['id'])) {
					echo "<h1>You MUST be logged in as an administrator!</h1>";
					include('css/src/footer.php');
					return false;
				}
			?>
            
            <div class="span-24 last">
            	<?php 
					if($err_messg) {
						?>
							<div class='error'>
            					<?php echo $err_messg; ?>
                			</div>
						<?php 
					} else {
						echo "&nbsp;";
					}
				?>
            </div>
            <form action="admin_edit_note.php?id=<?php echo $noteid; ?>&user=<?php echo $userid; ?>" method="POST">
            <div class="span-24 last">
            <span class="large">Edit User Note</span>
            	<?php if($note['sticky']==1) { ?>
					&nbsp;&nbsp;&nbsp;<input type="hidden" name="inputSticky" value="0" /><input type="checkbox" checked="yes" name="inputSticky" value="1" />&nbsp;Sticky Note
                <?php } else { ?>
                	&nbsp;&nbsp;&nbsp;<input type="hidden" name="inputSticky" value="0" /><input type="checkbox" name="inputSticky" value="1" />&nbsp;Sticky Note
                <?php } ?>
            </div>
            
            <script type="text/javascript" src="scripts/nicEdit.js"></script>
			<script type="text/javascript">
				bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
			</script>
            
            
            	
            	<textarea class="span-24" name="inputContext" rows="10" /><?php echo $note['content'];  ?></textarea>
                <div align="right">
                	<input type="submit" name="submit" value="Edit Note" />
                </div>
            </form>
          		
            <?php include('css/src/footer.php'); ?>
        </div>
</body>
</html>
