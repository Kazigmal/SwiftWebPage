<link href="css/screen.css" rel="stylesheet" type="text/css">
<!--[if lt IE 8]><link href="../css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

<?php
	session_start();
	
	
	require 'scripts/connect.php';
	
	$products = mysql_query("SELECT * FROM products ORDER BY user_id ASC");
	$now	= date('Y-m-d');
    $userid = mysql_real_escape_string($_GET['id']);
	$error = $_GET['error'];

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
            		<form action="admin_products.php" method="POST">
                    <td width="50"><input class="span-2" type="submit" value="Search" /></td>
                	<td width="900"><input class="span-22" type="text" name="search" width="800" autofocus /></td>
                    </form>
            	</tr>
        	</table>
            <div align="center">
            	<a href="#">Expired</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="#">60 days out</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="#">30 days out</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                <a href="#">Less than 2 weeks</a>
            </div>
        </div>
    </div>

	<div class="span-24">
    	<!--<div class="box2">-->
    	<span class="large">Products</span><!--&nbsp;&nbsp;<a href='admin_add_product.php?id=<?php echo $userid; ?>'>Add</a>&nbsp;<a href='#'>Edit</a>-->
                    <table width="100%">
                    	<tr>
                        	<td><b>Name</b></td>
                            <td><b>Product</b></td>
                            <td><b>Unlock Code</b></td>
                            <td><b><div align="center">Installs</div></b></td>
                            <td><b><div align="center">Machines</div></b></td>
                            <td><b>Expire Date</b></td>
                            <td><b>Active</b></td>
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
										$construct .= "userName LIKE '%$search_each%'";
									} else {
										$construct .= " OR userName LIKE '%$search_each%'";
									}
								}
				
								// echo out $construct
								$construct = "SELECT * FROM products WHERE $construct";
								$run = mysql_query($construct);
								$found = mysql_num_rows($run);
				
								if ($found==0) {
									echo "No Records Found Containing... ". $search;	
								} else {
						
                                    while($row = mysql_fetch_array($run)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="admin_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['userName']; ?></a>
                                            </td>
                                            <td>
                                            	<a href="admin_edit_product.php?id=<?php echo $row['id']; ?>&user=<?php echo $row['user_id']; ?>">
                                            		<?php 
														if($row['active'] == 0) {
															echo "<font color='#999999'><em>".$row['productName']."</em></font>";
														} else {
															echo $row['productName']; 
														}
													?>
                                            	</a>
                                             <?php /* 
                                                    if($row['active'] == 0) {
                                                        echo "<font color='#999999'><em><a href='admin_edit_product.php?id=".$row['id']."&user=".$row['user_id'].">";
														//echo "<font color='#999999'><em>".$row['productName']."</em></font>";
														//<a href='admin_edit_product.php?id=".$row['id']."&user=".$row['user_id'].">
                                                    } else {
                                                        echo $row['productName']; 
                                                    } */
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($row['active'] == 0) {
                                                        echo "<font color='#999999'><em>".$row['unlockCode']."</em></font>";
                                                    } else {
                                                        echo $row['unlockCode']; 
                                                    } 
                                                ?>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <?php
                                                        if($row['active'] == 0) {
                                                            echo "<font color='#999999'><em>".$row['activations']."</em></font>";
                                                        } else {
                                                            echo $row['activations']; 
                                                        }
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <?php 
                                                        if($row['active'] == 0) {
                                                            echo "<font color='#999999'><em>".$row['machines']."</em></font>";
                                                        } else {
                                                            echo $row['machines']; 
                                                        }
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <?php //echo $row['expireDate']; ?>
                                                <?php 
                                                    $time = strtotime( $row['expireDate'] );
                                                    if($row['active'] == 0) { 
                                                        echo "<font color='#999999'><em>".date('M d, Y', $time)."</em></font>";
                                                    } else {
                                                        if($row['expireDate'] < $now) {
                                                            echo "<font color='#CC0000'>".date('M d, Y', $time)." Expired</font>";
                                                        } else {
                                                            echo date('M d, Y', $time);
                                                        }
                                                    }
                                                ?>

                                            </td>
                                            <td>
                                                <?php
                                                    if($row['active'] == 1) {
                                                        echo "<font color='#006600'>Active</font>";
                                                    } else {
                                                        echo "<font color='#999999'><em>Disabled</em></font>";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                        <?php 
                                    }
                                }
                            } else {
                                while($row = mysql_fetch_array($products)) {
                                        ?>
                                        <tr>
                                            <td>
                                                <a href="admin_view.php?id=<?php echo $row['user_id']; ?>"><?php echo $row['userName']; ?></a>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($row['active'] == 0) {
                                                        echo "<font color='#999999'><em>".$row['productName']."</em></font>";
                                                    } else {
                                                        echo $row['productName']; 
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    if($row['active'] == 0) {
                                                        echo "<font color='#999999'><em>".$row['unlockCode']."</em></font>";
                                                    } else {
                                                        echo $row['unlockCode']; 
                                                    } 
                                                ?>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <?php
                                                        if($row['active'] == 0) {
                                                            echo "<font color='#999999'><em>".$row['activations']."</em></font>";
                                                        } else {
                                                            echo $row['activations']; 
                                                        }
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <div align="center">
                                                    <?php 
                                                        if($row['active'] == 0) {
                                                            echo "<font color='#999999'><em>".$row['machines']."</em></font>";
                                                        } else {
                                                            echo $row['machines']; 
                                                        }
                                                    ?>
                                                </div>
                                            </td>
                                            <td>
                                                <?php //echo $row['expireDate']; ?>
                                                <?php 
                                                    $time = strtotime( $row['expireDate'] );
                                                    if($row['active'] == 0) { 
                                                        echo "<font color='#999999'><em>".date('M d, Y', $time)."</em></font>";
                                                    } else {
                                                        if($row['expireDate'] < $now) {
                                                            echo "<font color='#CC0000'>".date('M d, Y', $time)." Expired</font>";
                                                        } else {
                                                            echo date('M d, Y', $time);
                                                        }
                                                    }
                                                ?>

                                            </td>
                                            <td>
                                                <?php
                                                    if($row['active'] == 1) {
                                                        echo "<font color='#006600'>Active</font>";
                                                    } else {
                                                        echo "<font color='#999999'><em>Disabled</em></font>";
                                                    }
                                                ?>
                                            </td>
                                        </tr>
                        <?php 
                                    }
                            }
                        ?>
                    </table>
    </div>

	<?php include('css/src/footer.php'); ?>
</div>