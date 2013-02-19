<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */

$DB_error = "Problem connecting to Database. Please try again later.";

//Test Database
$connect = mysql_connect("localhost", "kazigmal", "p1ckl345") or die($DB_error);
mysql_selectdb("swiftusers") or die($DB_error);

//production Database
//$connect = mysql_connect("swiftreportingso.ipowermysql.com", "padraig", "p1ckl345") or die($DB_error);
//mysql_selectdb("swiftusers") or die($DB_error);

?>