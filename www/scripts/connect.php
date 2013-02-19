<?php

/**
 * @author Tom Garland
 * @copyright 2011
 */

$DB_error1 = "Unable to connect to Server. Please try again later.";
$DB_error2 = "Problem connecting to Database. Please try again later.";

//Test Database
$connect = mysql_connect("localhost", "kazigmal", "p1ckl345") or die($DB_error1);
mysql_selectdb("swiftusers") or die($DB_error2);

//production Database
//$connect = mysql_connect("swiftreportingso.ipowermysql.com", "padraig", "p1ckl345") or die($DB_error1);
//mysql_selectdb("swiftusers") or die($DB_error2);