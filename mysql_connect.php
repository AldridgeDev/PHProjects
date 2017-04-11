<?php

$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = mysql_connect($hostname, $username, $password);
$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected)

 ?>
