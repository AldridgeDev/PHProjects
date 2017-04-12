<?php

$hostname = "localhost";
$username = "root";
$password = "";

$databaseName = "phpclass";
$dbConnected  = mysql_connect($hostname, $username, $password);
$dbSelected   = mysql_select_db($databaseName, $dbConnected);

// $dbSuccess = true;
// if ($dbConnected) {
//   if(!$dbSelected) {
//     echo "DB connection FAILED<Br>";
//     $dbSuccess = false;
//   }
// } else {
//   echo "MySQL connection FAILED<br>";
//   $dbSuccess = false;
// }

// if ($dbSuccess) {
//
// }

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
