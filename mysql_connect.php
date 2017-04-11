<?php

$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "phpclass";

$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected);

$dbSuccess = true;
if ($dbConnected) {
  if(!dbSelected) {
    echo "DB connection FAILED<Br>";
    $dbSuccess = false;
  }
} else {
  echo "MySQL connection FAILED<br>";
  $dbSuccess = false;
}

if ($dbSuccess) {
  
}

 ?>
