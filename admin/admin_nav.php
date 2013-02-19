<div class="span-24 last">
	<div align="center">
		<a href="admin_main.php">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_add_user.php">Add New User</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_products.php">Products</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_products_60.php">60 Days</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_products_30.php">30 Days</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_products_14.php">2 Weeks</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="admin_products_expired.php">Expired</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <?php 
			if($_SESSION['level'] == "superadmin") {
				echo "<a href='#'>Report 1</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
				echo "<a href='#'>List Admins</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
				echo "<a href='#'>Add Admin</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
			}
		?>
        <a href="scripts/admin_logout.php">Logout</a>
    </div>
</div>