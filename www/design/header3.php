<?php

/**
 * @author Tom Garland
 * @copyright 2012
 */



	if($_SESSION['name']) { ?>
		<table width="950" background="http://www.swiftreportingsoftware.com/images/header.png">
        	<tr>
            	<td width="550" height="134">
                
                </td>
                <td align="right" valign="center">
                    <h3>Welcome <?php echo $_SESSION['name'] ?>!</h3>
                    <span class="small">Not <?php echo $_SESSION['fname'] ?>? <a href="scripts/logout.php">Logout</a></span>
                </td>
            </tr>
        </table>
<?php  } else { ?>
		<table width="950" background="http://www.swiftreportingsoftware.com/images/header.png">
        	<tr>
            	<td width="550" height="134">
                
                </td>
                <td align="right" valign="center">
                    <form action="profile.php" method="POST">
                    	Email: <input type="text" name="inputLogin" /><br />
                        Password: <input type="password" name="inputPwd" /><br />
                        <input type="submit" name="submit" value="Submit" />&nbsp;&nbsp;&nbsp;<a href="new_user.php">Register</a>
                    </form>
                </td>
            </tr>
        </table>
<?php  } ?>