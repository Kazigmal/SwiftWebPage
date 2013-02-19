<link href="css/screen.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

<?php
	session_start();
	
	
	require 'scripts/connect.php';
	
	//$users = mysql_query("SELECT * FROM customers ORDER BY name ASC");
	//$usersLimit = mysql_query("SELECT * FROM customers ORDER BY name ASC LIMIT 100");
	$products = mysql_query("SELECT * FROM products WHERE account_id = '$id'");
	
	// find out how many rows are in the table 
	$sql = "SELECT COUNT(*) FROM customers";
	$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
	$r = mysql_fetch_row($result);
	$numrows = $r[0];
	
	// number of rows to show per page
	$rowsperpage = 20;
	// find out total pages
	$totalpages = ceil($numrows / $rowsperpage);
	
	//echo $totalpages; //Test if page count is working
	
	// get the current page or set a default
	if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   		// cast var as int
   		$currentpage = (int) $_GET['currentpage'];
	} else {
   		// default page num
   		$currentpage = 1;
	} // end if

	// if current page is greater than total pages...
	if ($currentpage > $totalpages) {
   		// set current page to last page
   		$currentpage = $totalpages;
	} // end if
	// if current page is less than first page...
	if ($currentpage < 1) {
   		// set current page to first page
   		$currentpage = 1;
	} // end if
	
	// the offset of the list, based on current page 
	$offset = ($currentpage - 1) * $rowsperpage;
	
	// get the info from the db 
	$sql = "SELECT id, name, email, phone1, phone2, phone3, type FROM customers ORDER BY id DESC LIMIT $offset, $rowsperpage";
	$result = mysql_query($sql) or trigger_error("SQL", E_USER_ERROR);
	
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
    
    <div class="span-24">
    	<div align="center">
    		<table border="1" width="100%">
        		<tr>
            		<form action="admin_main.php" method="POST">
                    <td width="50"><input class="span-2" type="submit" value="Search" /></td>
                	<td width="900"><input class="span-22" type="text" name="search" width="800" autofocus /></td>
                    </form>
            	</tr>
        	</table>
        </div>
    </div>

	<div class="span-24">
    	<!--<div class="box2">-->
    	<table width="100%">
        	<tr>
            	<td><b>ID</b></td>
                <td><b>Name</b></td>
                <td><b>Email</b></td>
                <td><b>Phone 1</b></td>
                <td><b>Phone 2</b></td>
                <td><b>Phone 3</b></td>
                <td><b>Type</b></td>
            </tr>
    	<?php
			
			if($_POST['search']) {
				
				$search = mysql_real_escape_string($_POST['search']);
				
				// Explode Search Term
				$search_exploded = explode(" ",$search);
			
				foreach($search_exploded as $search_each) {
				
					// construct query
					$x++;
					if ($x==1) {
						$construct .= "name LIKE '%$search_each%'";
					} else {
						$construct .= " OR email LIKE '%$search_each%'";
					}
				}
				
				// echo out $construct
				$construct = "SELECT * FROM customers WHERE $construct";
				$run = mysql_query($construct);
				$found = mysql_num_rows($run);
				
				if ($found==0) {
					echo "No Records Found Containing... ". $search;	
				} else {
				/*$users = mysql_query("SELECT * FROM customers WHERE name='Jim Anderson'");
				echo $search;*/
				
					while($row = mysql_fetch_array($run)) {
					//$id = $row['id'];
				
						echo "<tr>";
							echo "<td>";
								echo $row['id'];
							echo "</td>";
							echo "<td>";
								if($row['type'] == 'isAdmin') {
									echo "<b><a href='admin_view.php?id=". $row['id'] ."'>" . $row['name'] . "</a></b>";
								} else {
									echo "<a href='admin_view.php?id=". $row['id'] ."'>" . $row['name'] . "</a>";
								}
							echo "</td>";
                    		echo "<td>";
								echo $row['email'];
							echo "</td>";
							echo "<td>";
								echo $row['phone1'];
							echo "</td>";
							echo "<td>";
								echo $row['phone2'];
							echo "</td>";
							echo "<td>";
								echo $row['phone3'];
							echo "</td>";
							echo "<td>";
								echo $row['type'];
							echo "</td>";
						echo "</tr>";
					}
				}
				
			} else {
				
				// while there are rows to be fetched...
				while ($list = mysql_fetch_assoc($result)) {
   					// echo data
   					//echo $list['id'] . " : " . $list['number'] . "<br />";
					echo "<tr>";
						echo "<td>";
							echo $list['id'];
						echo "</td>";
						echo "<td>";
							if($list['type'] == 'isAdmin') {
								echo "<b><a href='admin_view.php?id=". $list['id'] ."'>" . $list['name'] . "</a></b>";
							} else {
								echo "<a href='admin_view.php?id=". $list['id'] ."'>" . $list['name'] . "</a>";
							}
						echo "</td>";
                    	echo "<td>";
							echo $list['email'];
						echo "</td>";
						echo "<td>";
							echo $list['phone1'];
						echo "</td>";
						echo "<td>";
							echo $list['phone2'];
						echo "</td>";
						echo "<td>";
							echo $list['phone3'];
						echo "</td>";
						echo "<td>";
							echo $list['type'];
						echo "</td>";
					echo "</tr>";
				} // end while
				/*while($row = mysql_fetch_array($usersLimit)) { //Old way with no pagination.
					//$id = $row['id'];
				
					echo "<tr>";
						echo "<td>";
							echo $row['id'];
						echo "</td>";
						echo "<td>";
							if($row['type'] == 'isAdmin') {
								echo "<b><a href='admin_view.php?id=". $row['id'] ."'>" . $row['name'] . "</a></b>";
							} else {
								echo "<a href='admin_view.php?id=". $row['id'] ."'>" . $row['name'] . "</a>";
							}
						echo "</td>";
                    	echo "<td>";
							echo $row['email'];
						echo "</td>";
						echo "<td>";
							echo $row['phone1'];
						echo "</td>";
						echo "<td>";
							echo $row['phone2'];
						echo "</td>";
						echo "<td>";
							echo $row['phone3'];
						echo "</td>";
						echo "<td>";
							echo $row['type'];
						echo "</td>";
					echo "</tr>";
				}*/
			}
			
			
		?>
        </table>
        <div align="center">
        <?php 
		
/******  build the pagination links ******/
		// range of num links to show
		$range = 10;
		
		// if not on page 1, don't show back links
		if ($currentpage > 1) {
   			// show << link to go back to page 1
   			echo " <b><a href='{$_SERVER['PHP_SELF']}?currentpage=1'>Start</a> ";
			echo "&nbsp;";
   			// get previous page num
   			$prevpage = $currentpage - 1;
   			// show < link to go back to 1 page
   			echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>Previous</a></b> ";
			echo "&nbsp;";
		} // end if 
		
		// loop to show links to range of pages around current page
		for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   			// if it's a valid page number...
   			if (($x > 0) && ($x <= $totalpages)) {
      			// if we're on current page...
      			if ($x == $currentpage) {
         			// 'highlight' it but don't make a link
         			echo " [<b>$x</b>] ";
      			// if not current page...
      			} else {
         			// make it a link
         			echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
      			} // end else
   			} // end if 
		} // end for
		
		// if not on last page, show forward and last page links        
		if ($currentpage != $totalpages) {
   			// get next page
   			$nextpage = $currentpage + 1;
    		// echo forward link for next page 
   			echo "&nbsp;";
			echo " <b><a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>Next</a> ";
   			// echo forward link for lastpage
  			echo "&nbsp;";
			echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>Last</a></b> ";
		} // end if
/****** end build pagination links ******/
		
		?>
        </div>
    </div>

	<?php include('css/src/footer.php'); ?>
</div>