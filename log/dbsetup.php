<?php

$db_user = "localhost:8888";
$db_database = "nota";
$dbname = "root";
$passwd ="root";

// Connect to Database
$db_connection = mysql_connect($db_database, $db_user, $passwd);
mysql_select_db($dbname, $db_connection);
?>
