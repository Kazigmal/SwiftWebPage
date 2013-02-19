<link href="css/screen.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->
<?php

/**
 * @author Tom Garland
 * @copyright 2012
 */

	session_start();
	
    require 'scripts/connect.php';
    
    $admin_id = $_SESSION['id'];
    $admin_name = $_SESSION['name'];
    $admin_level = $_SESSION['level'];
    $admin_init = $_SESSION['initials'];
    
    $construct = "SELECT * FROM admins ORDER BY id ASC";
	$run = mysql_query($construct);
?>
<div class="container">
	<?php include('css/src/admin_header.php'); ?>
	<?php include('admin_nav.php'); 
		if(!isset($_SESSION['level'])) {
			//header( 'Location: scripts/admin_login.php' );
			echo "<div align='center'>";
			echo "<h1>You must be a system admin to view this page</h1><br>";
			echo "<a href='scripts/admin_login.php'>Login</a>";
			echo "</div>";
			include('css/src/footer.php');
			return false;
		}
	?>
    <div align="center">
    <br />
    <br />
    <h2>Add Administrator</h2>
    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Name</b></td>
            <td><b>Initials</b></td>
            <td><b>Level</b></td>
    <?php   if($admin_level == 'superadmin') {
                echo "<td><b>Delete</b></td>";
            }
    ?>
        </tr>
        <?php
            while($row = mysql_fetch_array($run)) { 
                echo "<tr>";
                    echo "<td>";
                        echo $row['id'];
                    echo "</td>";
                    echo "<td>";
                        echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                        echo $row['initials'];
                    echo "</td>";
                    echo "<td>";
                        echo $row['level'];
                    echo "</td>";
                    if($admin_level == 'superadmin') {
				        echo "<td><div align='center'>";
                        echo '<a href="admin_delete_admin.php?id=' . $row['id'] . '" onclick="return confirm(\'Confirm Delete\');">Delete</a>';
                        echo "</div></td>";
				    }
                echo "</tr>";   
            }
        ?>
     </table>
    </div>
        
    <?php include('css/src/footer.php'); ?>
</div>