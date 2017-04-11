<?php

$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "prototype";
$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected);

if ($dbConnected) {
  echo "Success<br>";
  if ($dbSelected) {
    echo "Database Connected<br>";
  } else {
    echo "Database connection failed<br>";
  }
} else {
  echo "MySQL connection FAILED<br>";
}

?>
