<?php

$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "test";
$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected);

if ($dbConnected) {
  echo "You have sucessfully connected to the $databaseName database<br>";
  if ($dbSelected) {
    echo "Database Connection successful<br>";
  } else {
    echo "Database connection failure<br>";
  }
} else {
  echo "MySQL connection FAILED<br>";
}

?>
